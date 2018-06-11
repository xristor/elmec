<?php
	$text = $_GET['q'];

	
	$host = "localhost";
	$user = "root";
	$password = "1234";
	$db = "mycompany";

    $space = chr(32);

	// Connection
	$conn = new mysqli($host, $user, $password, $db);
	$conn->query("SET NAMES UTF8");

	//$query = "SELECT name, phone, email FROM contacts WHERE phone = $text OR name LIKE %$text%";
    // and display Customer name from customer table with INNER JOIN 

	$query="SELECT contactID, contacts.name,contacts.phone,contacts.email, customers.customer_name as cname" . $space;
	$query .= "FROM contacts" . $space;
    $query .= "INNER JOIN customers ON contacts.customerID = customers.customer_id" . $space;
	$query .= "WHERE contacts.phone = " . chr(34). $text. chr(34). " OR contacts.name LIKE " .chr(34).chr(37) .$text . chr(37). chr(34);

	
    //$result = $conn->query($query); // cancel this statement
    
	//query sql statement and check has any record found.
    
    $num_rows = 0;

	if($result = $conn->query($query)){
        $num_rows = $result->num_rows;
    }

    if ( $num_rows > 0) {    
		echo "ค้นพบทั้งหมด   " .  $num_rows . "    รายการ  จาก ( " . $text. " )" . "<br /><br />";
		$bullet = 1;
		echo "<table class='table table-hover' border='0' cellpadding='4' >";
		echo "<tr>";
		echo "<th>ชื่อ</th><th>โทรศัพท์</th><th>อีเมล์</th><th>ชื่อลูกค้า</th>";
		echo "</tr>";
		while($row = $result->fetch_assoc()) {
			echo "<tr id=". $row['contactID']. ">";
			echo "<td>" . $bullet. chr(46). chr(32) . $row['name'] . "</td>";
			echo "<td>" . $row['phone']. "</td>";
			echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['cname'] . "</td>";
            //echo "<td><input type='button' value='Edit' id='click-to-edit'/></td>";
			echo "</tr>";
			
			$bullet += 1;
		}
		echo "</table>";
	}else{
		echo "NO";
	}
        
    $conn->close();
?>