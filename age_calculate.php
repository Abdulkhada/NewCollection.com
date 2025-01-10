<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Age Calculator</h1>
        <form id="ageForm">
            <label for="birthdate">Enter Your Birthdate:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            <button type="button" onclick="calculateAge()">Calculate Age</button>
        </form>
        <div id="ageResult">
            <h2>Your Age: <span id="ageOutput"></span> years</h2>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user's birthdate from the form
    $birthdate = $_POST['birthdate'];
    
    // Convert the birthdate to a DateTime object
    $birthdate = new DateTime($birthdate);
    
    // Get the current date
    $currentDate = new DateTime();
    
    // Calculate the age
    $age = $currentDate->diff($birthdate)->y;
    
    echo "Your age is: $age years";
}
?>
