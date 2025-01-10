<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $allowedTypes = ['image/jpeg', 'image/png'];

    // Validate file type
    if (!in_array($file['type'], $allowedTypes)) {
        echo "Invalid file type.";
        exit;
    }

    // Validate file size (e.g., 2MB max)
    if ($file['size'] > 2 * 1024 * 1024) {
        echo "File is too large.";
        exit;
    }

    // Move the uploaded file to a secure directory
    $uploadDir = 'uploads/';
    move_uploaded_file($file['tmp_name'], $uploadDir . basename($file['name']));
    echo "File uploaded successfully.";
}
?>
