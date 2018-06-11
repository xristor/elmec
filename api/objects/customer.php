<?php

    class Customer {
        // database connection and table name
        private $conn;
        private $table_name = "customers";

        // object properties
        public $id;
        public $customer_name;


        public function __construct($db) {
            $this->conn = $db;
        }


        // read customers
        function read() {
            // select all query
            $query = "SELECT id, customer_name FROM " . $this->table_name;

            // prepare query statement
            $stmt = $this->conn->prepare($query);

            //execute query
            $stmt->execute();

            return $stmt;
        }
    }
?>