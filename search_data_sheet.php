<?php
	$text = $_POST["id"];

	
	$host = "localhost";
	$user = "root";
	$password = "1234";
	$db = "mycompany";

	// Connection
	$conn = new mysqli($host, $user, $password, $db);
	$conn->query("SET NAMES UTF8");

	$space = chr(32);

	$query="SELECT * FROM datasheets". $space;
	$query .= "WHERE customer_id = " . $text;

	$result = $conn->query($query);
	
	$conn->close();
	if ($result->num_rows > 0) {
		echo "ค้นพบทั้งหมด   " .  $result->num_rows . "    รายการ" . "<br /><br />";
		$bullet = 1;
		echo "<table class='table table-hover' border='0' cellpadding='4' >";
		echo "<tr>";
		echo "<th>kVA</th><th>Engine Make</th><th>Model</th><th>s/n</th><th>Alt Make</th><th>Model</th><th>s/n</th><th>VDC</th>";
		echo "</tr>";
		while($row = $result->fetch_assoc()) {
			echo "<td class='name'>" . $bullet. chr(46). chr(32) . $row['kva'] . "</td>";
            echo "<td>" . $row['engine_make']. "</td>";
            echo "<td>" . $row['engine_model'] . "</td>";
            echo "<td>" . $row['engine_sn'] . "</td>";
            echo "<td>" . $row['alternator_make']. "</td>";
            echo "<td>" . $row['alternator_model'] . "</td>";
            echo "<td>" . $row['alternator_sn'] . "</td>";
            echo "<td>" . $row['system_voltage'] . "</td>";
			echo "</tr>";
			$bullet += 1;
		}
	}else{
		echo "ไม่พบรายการใดๆ จากข้อความที่ค้นหา";
	}
?>