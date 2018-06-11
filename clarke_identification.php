<?php
    
        $server = "localhost";
        $username = "root";
        $password = "1234";
        $database = "elmec";
        
		$model = $_GET['model']. "%";
		
        $mysqli = new mysqli($server, $username, $password, $database);
        
        if($mysqli->connect_error){
            die("$mysqli->connect_error: $mysqli->connect_error");
        }
		$query = "SELECT model, mfr_model, gen_ref FROM clarke_identify WHERE model LIKE '" . $model . "'";
		$result = mysqli_query($mysqli, $query);
		
    	$engine = array("Fuel"=>6.0, "Coolant"=>14.5, "Model"=>"3029 PowerTech");
    
?>


<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title><?=$engine["Model"]?></title>
            
            <!-- Bootstrap -->
            <link href="css/bootstrap.min.css" rel="stylesheet">
            
            
            <body>
                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                <!-- Include all compliled plugs (below), or include individual files as needed -->
                <script src="js/bootstrap.min.js"></script>
                
                <!-- content -->
                <div class="container"> 
                    <?php include 'php_include_files/page_header.php';?>
                    
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>John Deere</li>
                        <li class="active"><?=$engine["Model"]?></li>
                    </ol>
                   
                    <div class="row">
                        <div class="col-lg-12">
							<div class="panel panel-primary">
                                <div class="panel-heading">ID Your Engine</div>
                                <div class="panel-body">
                                    <table class="table"> 
                                        <tr>
                                            <th>CLARKE MODEL</th>
                                            <th>MFG. MODEL</th>
                                            <th>GEN. REF</th>
                                        </tr>
                                            <?php
                                                while($row = mysqli_fetch_assoc($result)){
                                                        echo "<tr>";
                                                        
                                                        echo "<td>";
                                                        echo $row['model'];
                                                        echo "</td>";
                                                        
                                                        // loop through array member.
                                                        echo "<td>";
                                                        echo $row['mfr_model'];
                                                        echo "</td>";
                                                        
                                                        echo "<td>";
                                                        echo $row['gen_ref'];
                                                        echo "</td>";
                                                        
                                                        echo "</tr>";
                                                }
                                               mysqli_free_result($result);
                                               mysqli_close($mysqli);
                                            ?>
                                    </table>
                                </div>
                            </div> <!-- end of panel-->	
                        </div>
                    </div>
                </div> <!--end of container class-->
            </body>
        </head>
    </html>
