<?php
// Hide detailed errors from users
ini_set('display_errors', 0);
error_reporting(E_ALL);

// Log errors to a file
ini_set('log_errors', 1);
ini_set('error_log', 'error_log.txt');

// Example of throwing an error
try {
    throw new Exception("Something went wrong.");
} catch (Exception $e) {
    error_log($e->getMessage()); // Log the error
    echo "An error occurred. Please try again later."; // Generic message to the user
}
?>
