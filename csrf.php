<?php
// Generate a CSRF token and store it in the session
session_start();

if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Generate a random token
}

// Include the token in your form
echo '<form method="POST" action="submit.php">
        <input type="hidden" name="csrf_token" value="' . $_SESSION['csrf_token'] . '">
        <input type="text" name="username">
        <input type="submit" value="Submit">
      </form>';

// Validate the CSRF token when the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
        // Process the form
        echo "Form submission is valid.";
    } else {
        echo "Invalid CSRF token.";
    }
}
?>
