<?php
// Hash a password using bcrypt
$password = 'user_password';
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

// Verify the password on login
if (password_verify($password, $hashedPassword)) {
    echo "Password is valid.";
} else {
    echo "Invalid password.";
}
?>
