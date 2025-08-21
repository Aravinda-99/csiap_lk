<?php
/**
 * Database Connection Configuration
 * CSIAP Project Database Connection
 */

// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'csiap');
define('DB_USER', 'root');  // Default XAMPP username
define('DB_PASS', '');      // Default XAMPP password (empty)
define('DB_PORT', '4306');  // Custom MySQL port

// Create connection
function getConnection() {
    try {
        $dsn = "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";charset=utf8mb4";
        $pdo = new PDO($dsn, DB_USER, DB_PASS);
        
        // Set PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Set default fetch mode to associative array
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        return $pdo;
    } catch(PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}

// Alternative mysqli connection (if you prefer mysqli)
function getMysqliConnection() {
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    
    // Set charset to utf8mb4
    $mysqli->set_charset("utf8mb4");
    
    return $mysqli;
}

// Test connection function
function testConnection() {
    try {
        $pdo = getConnection();
        echo "Database connection successful!";
        return true;
    } catch(Exception $e) {
        echo "Database connection failed: " . $e->getMessage();
        return false;
    }
}

// Close connection function for mysqli
function closeMysqliConnection($mysqli) {
    if ($mysqli) {
        $mysqli->close();
    }
}
?>
