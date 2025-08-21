<?php
/**
 * Test Database Connection and Audio Data
 * This file tests the database connection and displays audio data
 */

// Include the database configuration
require_once 'database.php';

echo "<h1>Database Connection Test</h1>";
echo "<h2>Testing connection to database: " . DB_NAME . "</h2>";
echo "<p>Host: " . DB_HOST . ":" . DB_PORT . "</p>";
echo "<p>User: " . DB_USER . "</p>";

echo "<hr>";

// Test PDO connection
echo "<h3>Testing PDO Connection:</h3>";
try {
    $pdo = getConnection();
    echo "<p style='color: green;'>✓ PDO Connection successful!</p>";
    
    // Test a simple query
    $stmt = $pdo->query("SELECT VERSION() as version");
    $result = $stmt->fetch();
    echo "<p>MySQL Version: " . $result['version'] . "</p>";
    
} catch(Exception $e) {
    echo "<p style='color: red;'>✗ PDO Connection failed: " . $e->getMessage() . "</p>";
    exit;
}

echo "<hr>";

// Test audio table data
echo "<h3>Testing Audio Table Data:</h3>";
try {
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM audio");
    $count = $stmt->fetch();
    echo "<p>Total audio files in database: <strong>" . $count['total'] . "</strong></p>";
    
    if ($count['total'] > 0) {
        echo "<h4>Sample Audio Files:</h4>";
        $stmt = $pdo->query("SELECT * FROM audio ORDER BY created_at DESC LIMIT 5");
        $audioFiles = $stmt->fetchAll();
        
        echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
        echo "<tr style='background-color: #f0f0f0;'>";
        echo "<th>ID</th><th>Name</th><th>Audio Link</th><th>Created At</th>";
        echo "</tr>";
        
        foreach ($audioFiles as $audio) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($audio['id']) . "</td>";
            echo "<td>" . htmlspecialchars($audio['name']) . "</td>";
            echo "<td>" . htmlspecialchars($audio['audio_link']) . "</td>";
            echo "<td>" . htmlspecialchars($audio['created_at']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p style='color: orange;'>No audio files found in the database.</p>";
    }
    
} catch(Exception $e) {
    echo "<p style='color: red;'>✗ Error fetching audio data: " . $e->getMessage() . "</p>";
}

echo "<hr>";
echo "<p><strong>Note:</strong> If connections fail, please check:</p>";
echo "<ul>";
echo "<li>MySQL service is running on port 4306</li>";
echo "<li>Database 'csiap' exists</li>";
echo "<li>Username and password are correct</li>";
echo "<li>Table 'audio' exists with proper structure</li>";
echo "</ul>";

echo "<p><a href='../allAudio.php'>← Back to Audio Management</a></p>";
?>
