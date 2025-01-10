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

  <table align="center" border="1">
            <tr>
            <td><h1>Reusable Functions</h1></td></tr>
                <td>Enter a number:</td>
                <td><input type="number" name="number" required></td>
            </tr>
            <tr>
                <td>Enter a string:</td>
                <td><input type="text" name="string" required></td>
            </tr>
            <tr>
                <td colspan="1"><input type="submit" value="Submit"></td>
            </tr>
        </table>
 
 <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = $_POST['number'];
        $string = $_POST['string'];

        function factorial($n) {
            if ($n < 0) {
                return "Error: Factorial of negative number is not defined";
            } elseif ($n == 0) {
                return 1;
            } else {
                return $n * factorial($n - 1);
            }
        }

        function reverseString($str) {
            return strrev($str);
        }

        function isPalindrome($str) {
            return $str == strrev($str);
        }

        function countOccurrences($str, $char) {
            return substr_count($str, $char);
        }

        $factorialResult = factorial($number);
        $reversedString = reverseString($string);
        $palindromeCheck = isPalindrome($string);
        $charCount = countOccurrences($string, 'a'); // You can replace 'a' with any character

        echo "<table>";
        echo "<tr><td>Factorial of $number:</td><td>$factorialResult</td></tr>";
        echo "<tr><td>Reversed string:</td><td>$reversedString</td></tr>";
        echo "<tr><td>Palindrome check:</td><td>" . ($palindromeCheck ? 'Yes' : 'No') . "</td></tr>";
        echo "<tr><td>Count of 'a' in the string:</td><td>$charCount</td></tr>";
        echo "</table>";
    }
    ?>
       </form>
</body>
</html>



