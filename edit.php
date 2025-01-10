<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Welcome Page</title>
  
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="style.css">
     
</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <div class="links">
      <a class="active" href="index.html">HOME</a>
      <a href="data_types.php">DATA TYPES</a>
      <a href="calculator.php">CALCULATOR</a>
      <a href="factorial_numbers.php">FACTORIAL NUMBERS</a>
      <a href="model.php">MODELS</a>
      <a href="Product_display.php">INVENTORY</a>
    </div>
    <a class="login" href="registration_form.php">Sign up/Login</a>
  </div>
  
  <?php
include 'config.php';

// Check if the ID is provided
if (!isset($_GET['id'])) {
    die("Product ID is required.");
}

$id = $_GET['id'];

// Fetch the product data from the database
$sql = "SELECT * FROM products WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$product) {
    die("Product not found.");
}

// Handle form submission to update product data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Update the product in the database
    $sql = "UPDATE products SET name = :name, description = :description, price = :price WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'description' => $description, 'price' => $price, 'id' => $id]);

    // Redirect to the product list
    header("Location: Product_display.php");
    exit;
}
?>

</head>
<body>

    <h1>Edit Product</h1>

    <form action="edit.php?id=<?php echo $id; ?>" method="POST">
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" required>

        <label for="description">Product Description:</label>
        <textarea id="description" name="description" required><?php echo htmlspecialchars($product['description']); ?></textarea>

        <label for="price">Product Price ($):</label>
        <input type="number" id="price" name="price" value="<?php echo $product['price']; ?>" required step="0.01">

        <button type="submit">Update Product</button>
    </form>

    <a href="Product_display.php">Back to Product List</a>

</body>
</html>
