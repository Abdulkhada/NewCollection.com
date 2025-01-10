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

<?php include 'conn1.php'; ?>

<?php
// PHP Validation
$errors = [];
$firstName = $lastName = $email = $password = $confirmPassword = $dob = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Gather form data
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $dob = $_POST['dob'];

    // Validation
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword) || empty($dob)) {
        $errors[] = "All fields are required.";
    }

    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // If no errors, success message
    if (empty($errors)) {
        echo "<p>Registration successful!</p>";
        
    }
   }
?>
 
 <h1 align="center"> USER REGISTRATION</h1></tr>
<table align="center" border="0" cellspacing="5">
    
    <tr>
        <h1>
        <td><label for="firstName">First Name</label></td>
        <td><input type="text" id="firstName" name="firstName" value="<?php echo htmlspecialchars($firstName); ?>"> </tr>

        <td><label for="lastName">Last Name:</label>
        <td><input type="text" id="lastName" name="lastName" value="<?php echo htmlspecialchars($lastName); ?>"></tr>

        <td><label for="email">Email:</label>
        <td><input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>"></tr>

        <td><label for="password">Password:</label>
        <td><input type="password" id="password" name="password"></tr>

        <td><label for="confirmPassword">Confirm Password:</label>
        <td><input type="password" id="confirmPassword" name="confirmPassword"></tr>

        <td><label for="dob">Date of Birth:
        <td><input type="date" id="dob" name="dob" value="<?php echo htmlspecialchars($dob); ?>"></tr>
</tr></h1>
     
        </table>
        <h2 align="center"><button type="submit" align="center">Register</button></h2>
        

    <?php
    // Display errors
    if (!empty($errors)) {
        echo '<ul>';
        foreach ($errors as $error) {
            echo "<li style='color: red;'>$error</li>";
        }
        echo '</ul>';
    }
    ?>

</form>
</body>
</html>































































































































































 </form>
 </body>
 </html>
