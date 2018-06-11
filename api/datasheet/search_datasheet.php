<?php

//required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

// include database and object files
include_once '../config/database.php';
include_once '../objects/datasheet.php';

// instantiate database and customer object
$database = new Database();
$db = $database->getConnection();

// initialize objec
$datasheet = new Datasheet($db);

//$data = json_decode(file_get_contents("php://input"));
// get keywords
$datasheet->customer_id =isset($_GET["s"]) ? $_GET["s"] : "";


// query products
$stmt = $datasheet->search();
$num = $stmt->rowCount();


if($num > 0) {
    // customer array
    $datasheet_arr = array();
    $datasheet_arr['count'] = $num;
    $datasheet_arr["records"] = array();
    
    // retrieve our table contents
    // fetch() is faster than fetchall()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // extract row
        // this will make $row['name'] to
        // just $name only

        extract($row);
        $datasheet_item = array(
            "id"=>$id,
            "project_name"=>$project_name,
            "application"=>$application,
            "application_model"=>$application_model,
            "engine_make"=>$engine_make,
            "engine_model"=>$engine_model,
            "engine_serial_number"=>$engine_serial_number,
            "air_filter"=>$air_filter,
            "oil_filter"=>$oil_filter,
            "oil_filter_bypass"=>$oil_filter_bypass,
            "fuel_filter_primary"=>$fuel_filter_primary,
            "fuel_filter_secondary"=>$fuel_filter_secondary,
            "coolant_filter"=>$coolant_filter
        );

        array_push($datasheet_arr["records"], $datasheet_item);
    }
        echo json_encode($datasheet_arr);
    }else{
        $datasheet_arr['count'] = $num;
        echo json_encode($datasheet_arr);
        //echo json_encode(array("message"=>"No customer found."));
    }
?>