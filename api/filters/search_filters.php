<?php

//required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

// include database and object files
include_once '../config/database.php';
include_once '../objects/filters.php';

// instantiate database and customer object
$database = new Database();
$db = $database->getConnection();

// initialize objec
$filter = new Filter($db);

//$data = json_decode(file_get_contents("php://input"));
// get keywords
$filter->clarke_model =isset($_GET["s"]) ? $_GET["s"] : "";


// query products
$stmt = $filter->search();
$num = $stmt->rowCount();


if($num > 0) {
    // customer array
    $filters_arr = array();
    $filters_arr['count'] = $num;
    $filters_arr["records"] = array();
    
    // retrieve our table contents
    // fetch() is faster than fetchall()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // extract row
        // this will make $row['name'] to
        // just $name only

        extract($row);
        $filters_item = array(
            "id"=>$id,
            "clarke_model"=>$clarke_model,
            "air_filter"=>$air_filter,
            "oil_filter"=>$oil_filter,
            "fuel_filter_primary"=>$fuel_filter_primary,
            "fuel_filter_secondary"=>$fuel_filter_secondary,
            "alternator_12_vdc"=>$alternator_12_vdc,
            "alternator_24_vdc"=>$alternator_24_vdc,
            "alternator_belt"=>$alternator_belt,
            "fuel_injection_pump"=>$fuel_injection_pump,
            "heat_exchanger_usa_built"=>$heat_exchanger_usa_built,
            "heat_exchanger_uk_built"=>$heat_exchanger_uk_built,
            "starter_motor_12_vdc"=>$starter_motor_12_vdc,
            "starter_motor_24_vdc"=>$starter_motor_24_vdc,
            "oil_pressure_switch"=>$oil_pressure_switch,
            "speed_switch"=>$speed_switch,
            "coolant_temperature_switch"=>$coolant_temperature_switch,
            "turbocharger"=>$turbocharger,
            "thermostat"=>$thermostat,
            "nozzle_injector"=>$nozzle_injector,
            "oil_capacity"=>$oil_capacity,
            "coolant_capacity"=>$coolant_capacity

        );

        array_push($filters_arr["records"], $filters_item);
    }
        echo json_encode($filters_arr);
    }else{
        $filters_arr['count'] = $num;
        echo json_encode($filters_arr);
        //echo json_encode(array("message"=>"No customer found."));
    }
?>