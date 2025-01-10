<?php
$host = "localhost";  // MySQL server
$dbname = "product_catalog";  // Database name
$username = "root";  // Database username (default for local server)
$password = "";  // Database password (default for local server)

// Create a PDO connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Enable exceptions
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}
?>
