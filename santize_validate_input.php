<?php
// Function to sanitize and validate username (only alphanumeric and underscores)
function sanitizeUsername($username) {
    // Strip tags and remove unwanted characters
    return preg_replace("/[^a-zA-Z0-9_]/", "", $username); // Remove any non-alphanumeric or underscore characters
}

function validateUsername($username) {
    // Ensure the username only contains alphanumeric characters and underscores
    return preg_match("/^[a-zA-Z0-9_]+$/", $username);
}

// Function to sanitize email
function sanitizeEmail($email) {
    return filter_var($email, FILTER_SANITIZE_EMAIL); // Removes unwanted characters from email
}

// Function to validate email format
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL); // Validates email format
}

// Example usage
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Assuming the form data is sent via POST request
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Sanitize the username and email
    $sanitizedUsername = sanitizeUsername($username);
    $sanitizedEmail = sanitizeEmail($email);

    // Validate username
    if (validateUsername($sanitizedUsername)) {
        echo "Username is valid.";
    } else {
        echo "Invalid username.";
    }

    // Validate email
    if (validateEmail($sanitizedEmail)) {
        echo "Email is valid.";
    } else {
        echo "Invalid email.";
    }
}
?>

