<?php
// Include database connection
require_once 'config/database.php';

// Set content type to JSON for AJAX responses
header('Content-Type: application/json');

// Initialize response array
$response = [
    'success' => false,
    'message' => '',
    'error' => ''
];

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $response['error'] = 'Invalid request method. Only POST requests are allowed.';
    echo json_encode($response);
    exit;
}

// Get video ID from POST data
$video_id = $_POST['id'] ?? null;

if (!$video_id) {
    $response['error'] = 'Video ID is required.';
    echo json_encode($response);
    exit;
}

// Validate video ID (must be numeric)
if (!is_numeric($video_id)) {
    $response['error'] = 'Invalid video ID format.';
    echo json_encode($response);
    exit;
}

try {
    $pdo = getConnection();
    
    // First, check if the video exists
    $checkStmt = $pdo->prepare("SELECT id, name FROM video WHERE id = ?");
    $checkStmt->execute([$video_id]);
    $video = $checkStmt->fetch();
    
    if (!$video) {
        $response['error'] = 'Video not found.';
        echo json_encode($response);
        exit;
    }
    
    // Delete the video
    $deleteStmt = $pdo->prepare("DELETE FROM video WHERE id = ?");
    $result = $deleteStmt->execute([$video_id]);
    
    if ($result) {
        $response['success'] = true;
        $response['message'] = "Video '{$video['name']}' has been deleted successfully.";
    } else {
        $response['error'] = 'Failed to delete video. Please try again.';
    }
    
} catch(PDOException $e) {
    $response['error'] = "Database error: " . $e->getMessage();
} catch(Exception $e) {
    $response['error'] = "Unexpected error: " . $e->getMessage();
}

// Return JSON response
echo json_encode($response);
exit;
?>
