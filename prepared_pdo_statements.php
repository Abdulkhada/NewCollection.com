<?php
// Example of a secure query using PDO
$dsn = 'mysql:host=localhost;dbname=mydb';
$username = 'root';
$password = '';

// Connect to the database
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Use prepared statements to protect against SQL Injection
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
