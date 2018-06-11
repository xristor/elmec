<?php

class Database {
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "factory";
    private $username = "root";
    private $password = "1234";

    public $conn;


    // get the database connection
    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
            
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>