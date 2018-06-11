<?php

//required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

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
$keywords=isset($_GET["s"]) ? $_GET["s"] : "";
$keywords = $data->keywords;

// query products
$stmt = $datasheet->search($keywords);
$num = $stmt->rowCount();

// check if more than 0 record found
if($num>0){
   // products array
   $factory_arr=array();
   $factory_arr["length"] = $num;
   $factory_arr["results"]=array();

   // retrieve our table contents
   // fetch() is faster than fetchAll()
   // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
   if($num > 0) {
    // customer array
    $datasheet_arr = array();
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
            "engine_make"=>$engine_make,
            "engine_serial_number"=>$engine_serial_number,
            "project_name"=>$project_name
        );

        array_push($datasheet_arr["records"], $datasheet_item);
    }
        echo json_encode($datasheet_arr);
    }else{
        echo json_encode(array("message"=>"No customer found."));
    }
}
?>