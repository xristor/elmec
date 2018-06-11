<?php
class Filter {
    // database connection and table name
    private $conn;
    private $table_name = "clarke_spare_parts";

    // object properties
    public $id;
    public $clarke_model;
    public $air_filter;
    public $oil_filter;
    public $fuel_filter_primary;
    public $fuel_filter_secondary;
    public $alternator_12_vdc;
    public $alternator_24_vdc;
    public $alternator_belt;
    public $fuel_injection_pump;
    public $heat_exchanger_usa_built;
    public $heat_exchanger_uk_built;
    public $starter_motor_12_vdc;
    public $starter_motor_24_vdc;
    public $oil_pressure_switch;
    public $speed_switch;
    public $coolant_temperature_switch;
    public $turbocharger;
    public $thermostat;
    public $nozzle_injector;
    public $oil_capacity;
    public $coolant_capacity;



    public function __construct($db) {
        $this->conn = $db;
    }


    // read customers
    function search() {
        // select all query
        $query = "SELECT * FROM " . $this->table_name . " WHERE clarke_model LIKE  CONCAT(:model, '%')" ;

    // prepare query statement
    $stmt = $this->conn->prepare( $query );
    
    // bind id of product to be updated
    $stmt->bindParam(':model', $this->clarke_model);

    // execute query
    $stmt->execute();

    return $stmt;
        }
}



?>