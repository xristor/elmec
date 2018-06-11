<?php
	$text = $_GET['q'];

	
	$host = "localhost";
	$user = "root";
	$password = "1234";
	$db = "elmec";

    $space = chr(32);

	// Connection
	$conn = new mysqli($host, $user, $password, $db);
	$conn->query("SET NAMES UTF8");

	//$query = "SELECT name, phone, email FROM contacts WHERE phone = $text OR name LIKE %$text%";
    // and display Customer name from customer table with INNER JOIN 

	$query="SELECT clarke_model, air_filter, oil_filter, fuel_filter_primary, fuel_filter_secondary, oil_capacity, coolant_capacity" . $space;
	$query .= "FROM clarke_filters" . $space;
	$query .= "WHERE clarke_model LIKE " .chr(34).chr(37) .$text . chr(37). chr(34);

	
    //$result = $conn->query($query); // cancel this statement
    
	//query sql statement and check has any record found.
    
    $num_rows = 0;

	if($result = $conn->query($query)){
        $num_rows = $result->num_rows;
    }
	
	
	
	
    if ( $num_rows > 0) {    
		echo "About  " .  $num_rows . "    result ( " . $text. " )" . "<br /><br />";
		echo "<table class='table table-bordered table-hover table-condensed' >";
		echo "<tr>";
		echo "<th rowspan='2'>Model</th><th class='text-center' rowspan='2'>Air Filter</th>";
		echo "<th class='text-center' rowspan='2'>Oil Filter</th><th class='text-center' colspan='2'>Fuel Filter</th>";
		echo "<th class='text-center'>Oil</th><th class='text-center'>Coolant</th>";
		echo "</tr>";
		echo "<tr>";
		echo "<th class='text-center'>Primary</th><th class='text-center'>Seconday</th>";
        echo "<th class='text-center'>Capacity (L)</th><th class='text-center'> Capacity (L)</th>";
		echo "</tr>";
		
		while($row = $result->fetch_assoc()) {
			echo "<td>" . $row['clarke_model'] . "</td>";
			echo "<td>" . $row['air_filter'] . "</td>";
			echo "<td>" . $row['oil_filter']. "</td>";
			echo "<td>" . $row['fuel_filter_primary'] . "</td>";
			echo "<td>" . $row['fuel_filter_secondary'] . "</td>";
			echo "<td>" . $row['oil_capacity'] . "</td>";
			echo "<td>" . $row['coolant_capacity'] . "</td>";
            //echo "<td><input type='button' value='Edit' id='click-to-edit'/></td>";
			echo "</tr>";
		}
		echo "</table>";
	}else{
		echo "NO";
	}
        
    $conn->close();
?>