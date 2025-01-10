<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stylish Calculator</title>
  
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
  <div class="search-bar" align="center">
    <input placeholder="Search" type="text"/>
    <i class="fas fa-search"></i>
  </div>

  <!-- Calculator -->
  <div class="calculator">
    <h1>STANDARD CALCULATOR</h1>
    <input type="text" name="display" id="display" value="" disabled>

    <div class="buttons">
      <input type="button" value="7" onclick="appendToDisplay(7)">
      <input type="button" value="8" onclick="appendToDisplay(8)">
      <input type="button" value="9" onclick="appendToDisplay(9)">
      <input type="button" value="/" class="operator" onclick="appendToDisplay('/')">

      <input type="button" value="4" onclick="appendToDisplay(4)">
      <input type="button" value="5" onclick="appendToDisplay(5)">
      <input type="button" value="6" onclick="appendToDisplay(6)">
      <input type="button" value="*" class="operator" onclick="appendToDisplay('*')">

      <input type="button" value="1" onclick="appendToDisplay(1)">
      <input type="button" value="2" onclick="appendToDisplay(2)">
      <input type="button" value="3" onclick="appendToDisplay(3)">
      <input type="button" value="-" class="operator" onclick="appendToDisplay('-')">

      <input type="button" value="0" onclick="appendToDisplay(0)">
      <input type="button" value="." onclick="appendToDisplay('.')">
      <input type="button" value="=" class="equals" onclick="calculate()">
      <input type="button" value="+" class="operator" onclick="appendToDisplay('+')">

      <input type="button" value="C" class="clear" onclick="clearDisplay()">
      <input type="button" value="√" class="square" onclick="sqrt()">
      <input type="button" value="^" class="power" onclick="pow()">
      
    </div>
  </div>

  <script>
    // Append value to the display
    function appendToDisplay(value) {
      document.getElementById('display').value += value;
    }

    // Clear the display
    function clearDisplay() {
      document.getElementById('display').value = '';
    }

    // Square root calculation
    function sqrt() {
      let currentValue = document.getElementById('display').value;
      if (currentValue !== '') {
        let result = Math.sqrt(parseFloat(currentValue));
        document.getElementById('display').value = result;
      }
    }

    // Power calculation: a^b
    function pow() {
      let currentValue = document.getElementById('display').value;
      if (currentValue.includes('^')) {
        let [base, exponent] = currentValue.split('^');
        if (base !== '' && exponent !== '') {
          let result = Math.pow(parseFloat(base), parseFloat(exponent));
          document.getElementById('display').value = result;
        }
      }
    }

    // Calculate expression
    function calculate() {
      let currentValue = document.getElementById('display').value;
      try {
        // Replace ^ with ** for power calculation
        currentValue = currentValue.replace(/\^/g, '**');
        document.getElementById('display').value = eval(currentValue);
      } catch (e) {
        document.getElementById('display').value = 'Error';
      }
    }
  </script>

</body>
</html>
