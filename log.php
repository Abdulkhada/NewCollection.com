<?php
// Include the Logger class
include 'Logger.php';

// Instantiate the logger
$logger = new Logger();

// Log messages with different levels
$logger->info('This is an info message.');
$logger->error('This is an error message.');
$logger->debug('This is a debug message.');
?>
