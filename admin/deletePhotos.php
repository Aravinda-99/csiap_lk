<?php
require_once 'config/database.php';

header('Content-Type: application/json');

$response = ['success' => false, 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

    if ($id === false || $id <= 0) {
        $response['message'] = 'Invalid photo ID.';
    } else {
        try {
            $pdo = getConnection();
            
            // First get the image path to delete the file
            $stmt = $pdo->prepare("SELECT image_path FROM photos WHERE id = ?");
            $stmt->execute([$id]);
            $photo = $stmt->fetch();
            
            if ($photo) {
                // Delete the photo record
                $deleteStmt = $pdo->prepare("DELETE FROM photos WHERE id = ?");
                $deleteStmt->execute([$id]);

                if ($deleteStmt->rowCount() > 0) {
                    // Try to delete the image file if it exists
                    if ($photo['image_path'] && !preg_match('#^(?:https?://|/)#', $photo['image_path'])) {
                        $filePath = __DIR__ . '/../' . $photo['image_path'];
                        if (file_exists($filePath)) {
                            @unlink($filePath);
                        }
                    }
                    
                    $response['success'] = true;
                    $response['message'] = 'Photo deleted successfully.';
                } else {
                    $response['message'] = 'Photo not found or already deleted.';
                }
            } else {
                $response['message'] = 'Photo not found.';
            }
        } catch (PDOException $e) {
            $response['message'] = 'Database error: ' . $e->getMessage();
        }
    }
} else {
    $response['message'] = 'Invalid request method.';
}

echo json_encode($response);
?>
