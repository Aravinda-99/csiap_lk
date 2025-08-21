<?php
// admin/deleteAudio.php
// Deletes an audio row by ID. Expects POST { id }

header('Content-Type: application/json');

require_once __DIR__ . '/config/database.php';

$response = [ 'success' => false, 'message' => 'Unknown error' ];

try {
	if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
		http_response_code(405);
		$response['message'] = 'Method not allowed';
		echo json_encode($response);
		exit;
	}

	$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
	if ($id <= 0) {
		http_response_code(400);
		$response['message'] = 'Invalid ID';
		echo json_encode($response);
		exit;
	}

	$pdo = getConnection();

	// Verify the record exists
	$check = $pdo->prepare('SELECT id FROM audio WHERE id = ?');
	$check->execute([$id]);
	if (!$check->fetch()) {
		http_response_code(404);
		$response['message'] = 'Audio not found';
		echo json_encode($response);
		exit;
	}

	$delete = $pdo->prepare('DELETE FROM audio WHERE id = ?');
	$delete->execute([$id]);

	$response = [ 'success' => true, 'message' => 'Audio deleted', 'id' => $id ];
	echo json_encode($response);
	exit;
} catch (Throwable $e) {
	http_response_code(500);
	$response['message'] = 'Server error: ' . $e->getMessage();
	echo json_encode($response);
	exit;
}
