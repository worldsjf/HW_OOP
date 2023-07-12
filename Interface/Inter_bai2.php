<?php
interface Logger {
    public function logInfo($message);
    public function logWarning($message);
    public function logError($message);
}

class FileLogger implements Logger {
    protected $logFile;

    public function __construct($logFile) {
        $this->logFile = $logFile;
    }

    public function logInfo($message) {
        $this->writeLog("INFO", $message);
    }

    public function logWarning($message) {
        $this->writeLog("WARNING", $message);
    }

    public function logError($message) {
        $this->writeLog("ERROR", $message);
    }

    private function writeLog($level, $message) {
        $logEntry = "[$level] $message" . PHP_EOL;
        file_put_contents($this->logFile, $logEntry, FILE_APPEND);
    }
}

class DatabaseLogger implements Logger {
    private $dbConnection;

    public function __construct($dbConnection) {
        $this->dbConnection = $dbConnection;
    }

    public function logInfo($message) {
        $this->writeLog("INFO", $message);
    }

    public function logWarning($message) {
        $this->writeLog("WARNING", $message);
    }

    public function logError($message) {
        $this->writeLog("ERROR", $message);
    }

    private function writeLog($level, $message) {
        $query = "INSERT INTO log_table (level, message) VALUES ('$level', '$message')";
        $this->dbConnection->query($query);
    }
}


$fileLogger = new FileLogger("log.txt");
$fileLogger->logInfo("This is an information message.");
$fileLogger->logWarning("This is a warning message.");
$fileLogger->logError("This is an error message.");


$dbConnection = new PDO("mysql:host=localhost;dbname=inter", "root", "");
$databaseLogger = new DatabaseLogger($dbConnection);
$databaseLogger->logInfo("This is an information message.");
$databaseLogger->logWarning("This is a warning message.");
$databaseLogger->logError("This is an error message.");
