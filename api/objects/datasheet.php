<?php
class Datasheet {
    // database connection and table name
    private $conn;
    private $table_name = "datasheets";

    // object properties
    public $id;
    public $customer_id;
    public $application;
    public $application_model;
    public $project_name;
    public $engine_make;
    public $engine_model;
    public $engine_serial_number;
    public $air_filter;
    public $oil_filter;
    public $oil_filter_bypass;
    public $fuel_filter_primary;
    public $fuel_filter_secondary;
    public $coolant_filter;


    public function __construct($db) {
        $this->conn = $db;
    }


    // read customers
    function search() {
        // select all query
        $query = "SELECT * FROM " . $this->table_name . " WHERE customer_id = ?";

    // prepare query statement
    $stmt = $this->conn->prepare( $query );
    
    // bind id of product to be updated
    $stmt->bindParam(1, $this->customer_id);

    // execute query
    $stmt->execute();

    return $stmt;
        }
}



?>