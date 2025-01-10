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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Insert the new product into the database
    $sql = "INSERT INTO products (name, description, price) VALUES (:name, :description, :price)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'description' => $description, 'price' => $price]);

    // Redirect to the product list
    header("Location: Product_display.php");
    exit;
}
?>


    <h1>Add New Product</h1>

    <form action="create.php" method="POST">
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="description">Product Description:</label>
        <textarea id="description" name="description" required></textarea>

        <label for="price">Product Price ($):</label>
        <input type="number" id="price" name="price" required step="0.01">

        <button type="submit">Add Product</button>
    </form>

    <a href="Product_display.php">Back to Product List</a>

</body>
</html>
