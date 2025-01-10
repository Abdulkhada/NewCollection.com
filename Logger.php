<?php
class Logger {
    private $logFile;

    // Constructor initializes the log file
    public function __construct($logFile = 'app.log') {
        $this->logFile = $logFile;
    }

    // Method to write log messages to the file
    public function log($message, $level = 'INFO') {
        $date = date('Y-m-d H:i:s'); // Get current date and time
        $formattedMessage = "[$date] [$level] $message" . PHP_EOL;

        // Write the log message to the file
        file_put_contents($this->logFile, $formattedMessage, FILE_APPEND);
    }

    // Methods for different log levels (INFO, ERROR, DEBUG)
    public function info($message) {
        $this->log($message, 'INFO');
    }

    public function error($message) {
        $this->log($message, 'ERROR');
    }

    public function debug($message) {
        $this->log($message, 'DEBUG');
    }
}
?>
