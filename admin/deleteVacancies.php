<?php
// Include database connection
require_once 'config/database.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

$vacancyId = isset($_POST['id']) ? (int)$_POST['id'] : 0;
if ($vacancyId <= 0) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid vacancy ID']);
    exit;
}

try {
    $pdo = getConnection();
    $pdo->beginTransaction();

    // Check existence
    $check = $pdo->prepare('SELECT id FROM vacancies WHERE id = ?');
    $check->execute([$vacancyId]);
    if (!$check->fetch()) {
        $pdo->rollBack();
        http_response_code(404);
        echo json_encode(['success' => false, 'message' => 'Vacancy not found']);
        exit;
    }

    // Get advert paths
    $pathsStmt = $pdo->prepare('SELECT advert_path FROM vacancy_adverts WHERE vacancy_id = ?');
    $pathsStmt->execute([$vacancyId]);
    $paths = $pathsStmt->fetchAll();

    // Delete adverts (DB)
    $delAds = $pdo->prepare('DELETE FROM vacancy_adverts WHERE vacancy_id = ?');
    $delAds->execute([$vacancyId]);

    // Delete vacancy (DB)
    $delVac = $pdo->prepare('DELETE FROM vacancies WHERE id = ?');
    $delVac->execute([$vacancyId]);

    $pdo->commit();

    // Best-effort delete files from disk after commit
    if (!empty($paths)) {
        foreach ($paths as $p) {
            $rel = $p['advert_path'] ?? '';
            if (!$rel) continue;
            $try = [
                __DIR__ . '/../' . ltrim($rel, '/'),
                __DIR__ . '/' . ltrim($rel, '/'),
            ];
            foreach ($try as $fs) { if (is_file($fs)) { @unlink($fs); break; } }
        }
    }

    echo json_encode(['success' => true, 'message' => 'Vacancy deleted successfully', 'deleted_id' => $vacancyId]);
} catch (Throwable $e) {
    if (isset($pdo) && $pdo->inTransaction()) {
        try { $pdo->rollBack(); } catch (Throwable $ignored) {}
    }
    error_log('deleteVacancies error: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Server error while deleting.']);
}
