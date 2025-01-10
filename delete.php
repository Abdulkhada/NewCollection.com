<?php
include 'config.php';

// Check if the ID is provided
if (!isset($_GET['id'])) {
    die("Product ID is required.");
}

$id = $_GET['id'];

// Delete the product from the database
$sql = "DELETE FROM products WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

// Redirect to the product list
header("Location: Product_display.php");
exit;
?>
