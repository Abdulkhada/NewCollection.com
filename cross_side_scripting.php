<?php
// Example of escaping output to prevent XSS
function escapeHtml($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

// Example usage
$user_input = $_POST['user_input'];
echo "User input: " . escapeHtml($user_input);
?>
