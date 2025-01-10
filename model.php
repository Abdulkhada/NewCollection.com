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

class Car {
    public $brand;
    public $model;
    public $year;
    public $color;

    public function __construct($brand, $model, $year, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }

    public function getDetails() {
        return "Brand: $this->brand, Model: $this->model, Year: $this->year, Color: $this->color";
    }
}

// Create a car object
$myCar = new Car("Toyota", "Camry", 2023, "Silver");

// Access and print car details
echo $myCar->getDetails();
?>
</form>
 </body>
</html>