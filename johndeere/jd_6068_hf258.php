<?php
    
        $server = "localhost";
        $username = "root";
        $password = "1234";
        $database = "elmec";
        
        $mysqli = new mysqli($server, $username, $password, $database);
        
        if($mysqli->connect_error){
            die("$mysqli->connect_error: $mysqli->connect_error");
        }
    
    	
    
    
		$query = "SELECT option_code, part_number, part_name, qty, serial_number, remarks FROM jd_6068_hf258";
		$result = mysqli_query($mysqli, $query);
	    
    	$engine = array("Oil"=>32.0, "Coolant"=>27.0, "Model"=>"6068HF258");
		$consumption = array("25"=>10.7, "50"=>20.5, "75"=>31.3, "100"=>40.8);
    
?>


<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title><?=$engine["Model"]?></title>
            
            <!-- Bootstrap -->
            <link href="../css/bootstrap.min.css" rel="stylesheet">
            
            
            <body>
                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                <!-- Include all compliled plugs (below), or include individual files as needed -->
                <script src="../js/bootstrap.min.js"></script>
                
                <!-- content -->
                <div class="container"> 
                    <div class="page-header">
                        <address>
                            <strong>Elmec Marketing Co,.Ltd.</strong><br>
                            257/3-4 Pattanakarn rd., Suanluang, Suanluang<br>
                            Bangkok, Thailand 10250<br>
                            <abbr title="Phone">P:</abbr>(+662)3192679
                        </address>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="../index.php">Home</a></li>
                        <li>John Deere</li>
                        <li class="active"><?=$engine["Model"]?></li>
                    </ol>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading"><?=$engine["Model"]?></div>
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>Engine coolant capacity</td>
                                            <td><?=$engine["Oil"];?></td>
                                        </tr>
                                        <tr>
                                            <td>Engine oil capacity with filter</td>
                                            <td><?=$engine["Coolant"];?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
				<div class="col-md-4">
						<div class="panel panel-default">
								<div class="panel-heading">Fuel consumption (L.) 1500 rpm. (Prime)</div>
								<div class="panel-body">
										<table class="table">
										<tr>
												<th>25%</th>
												<th>50%</th>
												<th>75%</th>
												<th>100%</th>
										</tr>
												<td><?=$consumption["25"];?></td>
												<td><?=$consumption["50"];?></td>
												<td><?=$consumption["75"];?></td>
												<td><?=$consumption["100"];?></td>
								</table>
						</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">Misc.</div>
					<div class="panel-body">
						
					</div>
				</div>
			</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">RECOMMENDED SPARE PARTS FOR <?=$engine["Model"]?></div>
                                <div class="panel-body">
                                    <table class="table table-bordered table-condensed">
                                        
                                        <tr>
											<th>Option Code</th>
                                            <th>Part Number</th>
                                            <th>Part Name</th>
                                            <th>Serial Number</th>
                                            <th>Qty</th>
											<th>Remarks</th>
                                        </tr>
                                            <?php
                                                while($row = mysqli_fetch_assoc($result)){
                                                        echo "<tr>";
                                                        
														echo "<td>";
                                                        echo $row['option_code'];
                                                        echo "</td>";
														
                                                        echo "<td>";
                                                        echo $row['part_number'];
                                                        echo "</td>";
                                                        
                                                        // loop through array member.
                                                        echo "<td>";
                                                        echo $row['part_name'];
                                                        echo "</td>";
                                                        
                                                        echo "<td>";
                                                        echo $row['serial_number'];
                                                        echo "</td>";
                                                        
                                                        echo "<td>";
                                                        echo $row['qty'];
                                                        echo "</td>";
                                                        
														echo "<td>";
                                                        echo $row['remarks'];
                                                        echo "</td>";
                                                        echo "</tr>";
                                                }
                                               mysqli_free_result($result);
                                               mysqli_close($mysqli);
                                            ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--end of container class-->
            </body>
        </head>
    </html>
