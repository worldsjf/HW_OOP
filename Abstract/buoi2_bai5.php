<?php
abstract class Database {
    abstract public function connect();
    abstract public function query();
    abstract public function disconnect();
}

class MySQLDatabase extends Database {
    protected $host;
    protected $username;
    protected $pass;
    protected $db;
    protected $type;

    protected function __construct($host, $username, $pass, $db) {
        $this->host = $host;
        $this->username = $username;
        $this->pass = $pass;
        $this->db = $db;
        $this->type = "mysql";
    }

    public function connect() {
        try {
            $this->connection = new PDO("$this->type:host=$this->host;dbname=$this->db", $this->username, $this->pass);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function query() {
        $stmt = $this->connection->prepare("SELECT * FROM sinhvien WHERE id = :id");
        $data = array('id' => '1002');
        $result = $stmt->execute($data);
        
        if (!$result) {
            die("Select failed: " . $stmt->errorInfo()[2]);
        } else {
            echo "Select success";
        }
    }

    public function disconnect() {
        $this->connection = null;
    }
}

$temp = new MySQLDatabase("localhost", "test", "root", "");
$temp->connect();
$temp->query();
$temp->disconnect();
?>
