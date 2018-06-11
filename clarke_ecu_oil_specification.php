<?php
    $engine = array("Fuel"=>14.5, "Coolant"=>20, "Model"=>"Clarke Electronic Engine- Oil Specification");
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Elmec Marketing</title>
            
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
                        <li class="active"><?=$engine["Model"]?></li>
                    </ol>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="panel panel-info">
                                <div class="panel-heading">Oil Specification</div>
                                <div class="panel-body">
                                  
											<h4>This engine is factory-filled with John Deere Engine Break-in Oil.</h4>
											<h4>Important: Do not add makeup oil until the oil level is BELOW the add mark on the dispstick.</h4>
											<h4>Break-in period is 1 year from engine start-up.</h4>
											<hr/>
							
												<p>
													Low Speed engine models (Namplate RPM is less than or equal 2600 RPM) are shipped from Clarek
													with John Deere Break-in oil installed. Break-In oil (TY22041, 10W30) should be used to make up
													any oil consumed during the break-in period.
												</p>
												<hr/>
												<p>
													High speed engine models (Nameplate RPM is
													greater than 2600 RPM) are shipped with CI-4,
													15W40 oil. On these models any make up oil should
													meet the requirements of CF-4, CG-4, CH-4, or CI-4,
													Viscosity Grade 15W40.
												</p>
												<hr/>
												<p>
													<p class="bg-info">Oil spec to be use after break-in period, all engine models:</p>
													<p><strong>SAE Viscosity Grade: 15W-40</strong></p>
													<p><strong>API Classification: CF4</strong></p>
													
													
												</p>
										
								</div>
							</div>
												<div class="panel panel-info">
													<div class="panel-heading">Oil Capacities (Including Filter)</div>
													<div class="panel-body">
													<table class="table">
														<tr>
															<th>ENGINE MODEL</th>
															<th>OIL CAPACITY (LITERS)</th>
														</tr>
														<tr>
															<td>JU4H - All Models</td>
															<td>14.7</td>
														</tr>
														<tr>
															<td>JU6H - All Models <br/>
																(except JU6H-PTP model listed below)
															</td>
															<td>20.0</td>
														</tr>
														<tr>
															<td>
																except JU6H-PTP
																(JU6H-UFAD98, ADP0, ADQ0, ADR0, ADR8, ADS0, ADS8, ADT0, ADW8, ADX8)
															</td>
															<td>32.5</td>
														</tr>
														<tr>
															<td>JW6 - All Models</td>
															<td>28.5</td>
														</tr>
														<tr>
															<td>JX6H - All Models</td>
															<td>42.3</td>
														</tr>
													</table>
													</div>
												</div>
									
                        </div> <!-- col-lg-8 -->
                     <div class="col-lg-4">
					 <?php include 'php_include_files/general_data_panel.php';?>
                        </div>
                    </div> <!-- end of row -->
                </div> <!--end of container class-->
            </body>
        </head>
    </html>