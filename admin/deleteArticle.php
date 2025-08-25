<?php
// Include database connection
require_once 'config/database.php';

// Set content type to JSON
header('Content-Type: application/json');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Get article ID from POST data
$articleId = isset($_POST['id']) ? (int)$_POST['id'] : 0;

// Validate article ID
if ($articleId <= 0) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid article ID']);
    exit;
}

try {
    $pdo = getConnection();
    
    // Check if article exists
    $checkStmt = $pdo->prepare('SELECT id, name, img_path FROM article WHERE id = ?');
    $checkStmt->execute([$articleId]);
    $article = $checkStmt->fetch();
    
    if (!$article) {
        http_response_code(404);
        echo json_encode(['success' => false, 'message' => 'Article not found']);
        exit;
    }
    
    // Get image path for potential file deletion
    $imagePath = $article['img_path'];
    
    // Delete the article from database
    $deleteStmt = $pdo->prepare('DELETE FROM article WHERE id = ?');
    $result = $deleteStmt->execute([$articleId]);
    
    if ($result) {
        // Optionally delete the image file if it exists
        if (!empty($imagePath)) {
            // Try to delete the image file
            $fullImagePath = '';
            
            // Check different possible path locations
            $possiblePaths = [
                '../' . $imagePath,
                '../../' . $imagePath,
                '../assets/' . $imagePath,
                '../uploads/' . $imagePath,
                '../img/' . $imagePath,
                '../images/' . $imagePath,
                '../article_images/' . $imagePath
            ];
            
            foreach ($possiblePaths as $path) {
                if (file_exists($path)) {
                    $fullImagePath = $path;
                    break;
                }
            }
            
            // Delete the file if found
            if (!empty($fullImagePath) && file_exists($fullImagePath)) {
                @unlink($fullImagePath);
            }
        }
        
        echo json_encode([
            'success' => true, 
            'message' => 'Article deleted successfully',
            'deleted_id' => $articleId
        ]);
    } else {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Failed to delete article']);
    }
    
} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
?>
