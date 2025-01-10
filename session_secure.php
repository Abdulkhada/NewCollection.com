<?php
session_start();

// Regenerate session ID on login to prevent session fixation
session_regenerate_id(true);

// Set secure session cookie parameters
ini_set('session.cookie_secure', 1); // Ensure cookies are only sent over HTTPS
ini_set('session.cookie_httponly', 1); // Prevent JavaScript access to session cookies
ini_set('session.use_only_cookies', 1); // Restrict session to cookies only

// Use a strong session ID
if (!isset($_SESSION['user_id'])) {
    echo "Please log in.";
}
?>
