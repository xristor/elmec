<?php
    
        //$server = "localhost";
        //$username = "root";
        //$password = "1234";
        //$database = "elmec";
        
        //$mysqli = new mysqli($server, $username, $password, $database);
        
        //if($mysqli->connect_error){
       //     die("$mysqli->connect_error: $mysqli->connect_error");
        //}
    
    	
    
    
		//$query = "SELECT part_name, part_number, option_code, qty FROM jd6125";
		//$result = mysqli_query($mysqli, $query);
	    
    	$engine = array("Oil"=>40, "Coolant"=>47, "Model"=>"6135HF475 (450kVA)");
		$consumption = array("25%"=>26.9, "50%"=>52.11, "75%"=>77.53,"100%"=>92.94);
    
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
                            <div class="panel panel-primary">
                                <div class="panel-heading">Engine specification Data</div>
                                <div class="panel-body">
                                    <table class="table table-condensed ">
                                        <tr>
                                            <td>Radiator & Engine coolant capacity</td>
                                            <td><?=$engine["Coolant"];?></td>
                                        </tr>
                                        <tr>
                                            <td>Engine oil capacity with filter</td>
                                            <td><?=$engine["Oil"];?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
				<div class="col-md-4">
						<div class="panel panel-default">
								<div class="panel-heading">Fuel consumption (L.) 1500 rpm. (Prime)</div>
								<div class="panel-body">
								<table class="table table-condensed">
										<tr>                                           
                                             <?php
                                                $keys = array_keys($consumption);
                                                for($i=0; $i < count($consumption); $i++) {
                                                    echo "<th>";
                                                    echo "$keys[$i]";
                                                    echo "</th>";
                                                }
                                                echo "</tr>";
                                                echo "<tr>";
                                                
                                                for ($i=0; $i < count($consumption); $i++) {
                                                    echo "<td>";
                                                    $key = $keys[$i];
                                                    echo "$consumption[$key]";
                                                    echo "</td>";
                                                }
                                            ?>		                                                                              	
										</tr>
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
                                            <th>Part Name</th>
                                            <th>Part Number</th>
                                            <th>Opt.code</th>
                                            <th>Qty</th>
                                        </tr>                                       
                                                                                
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--end of container class-->
            </body>
        </head>
    </html>
