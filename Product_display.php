<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Welcome Page</title>
  <link rel="stylesheet" href="style1.css">
  
      
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

<!-- Search Bar Section -->
<div class="search-bar">
  <input placeholder="Search" type="text"/>
  <i class="fas fa-search"></i>
</div>


<?php
include 'config.php';

// Fetch products from the database
$sql = "SELECT * FROM products";
$stmt = $pdo->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<body>

    <div class="container">
        <h1>Product Catalog</h1>

        <a href="create.php" class="add-product-btn">Add New Product</a>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($product['name']); ?></td>
                        <td><?php echo htmlspecialchars($product['description']); ?></td>
                        <td><?php echo "$" . number_format($product['price'], 2); ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $product['id']; ?>">Edit</a> | 
                            <a href="delete.php?id=<?php echo $product['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>
