<?php
// Include database connection
require_once 'config/database.php';

// JSON response
header('Content-Type: application/json');

// Allow POST only
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Validate ID
$bidId = isset($_POST['id']) ? (int)$_POST['id'] : 0;
if ($bidId <= 0) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid bid notice ID']);
    exit;
}

try {
    $pdo = getConnection();
    $pdo->beginTransaction();

    // Check existence
    $check = $pdo->prepare('SELECT id FROM bidnotices WHERE id = ?');
    $check->execute([$bidId]);
    if (!$check->fetch()) {
        $pdo->rollBack();
        http_response_code(404);
        echo json_encode(['success' => false, 'message' => 'Bid notice not found']);
        exit;
    }

    // Fetch file paths for deletion
    $filesStmt = $pdo->prepare('SELECT image_path FROM bidnotice_images WHERE bidnotice_id = ?');
    $filesStmt->execute([$bidId]);
    $paths = $filesStmt->fetchAll();

    // Delete DB rows for files
    $delFiles = $pdo->prepare('DELETE FROM bidnotice_images WHERE bidnotice_id = ?');
    $delFiles->execute([$bidId]);

    // Delete the bid notice
    $delBid = $pdo->prepare('DELETE FROM bidnotices WHERE id = ?');
    $delBid->execute([$bidId]);

    $pdo->commit();

    // Delete files from disk (best-effort, after commit)
    if ($paths) {
        foreach ($paths as $p) {
            $rel = $p['image_path'] ?? '';
            if ($rel === '') { continue; }
            $tryPaths = [
                __DIR__ . '/../' . ltrim($rel, '/'),
                __DIR__ . '/' . ltrim($rel, '/'),
            ];
            foreach ($tryPaths as $tp) {
                if (is_file($tp)) { @unlink($tp); break; }
            }
        }
    }

    echo json_encode(['success' => true, 'message' => 'Bid notice deleted successfully', 'deleted_id' => $bidId]);
} catch (Throwable $e) {
    if (isset($pdo) && $pdo->inTransaction()) { $pdo->rollBack(); }
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Server error: ' . $e->getMessage()]);
}
