<?php
    $engine = array("Fuel"=>14.5, "Coolant"=>20, "Model"=>"Clarke - Oil Specification");
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
                                <div class="panel-heading">Engine Coolant</div>
                                <div class="panel-body">
                                        <article>
											
											<section>
												<table class="table">
													<tr>
														<th>ENGINE MODEL</th>
														<th>Coolant Capacity (LITERS)</th>
													</tr>
													<tr>
														<td>JU4H - natural aspirated, low speed (<2600rpm)</td>
														<td>14.5</td>
													</tr>
													<tr>
														<td>JU4H - natural aspirated, high speed (>2600rpm)</td>
														<td>14.5</td>
													</tr>
													<tr>
														<td>JU4H - turbocharged, low speed (<2600rpm)</td>
														<td>14.0</td>
													</tr>
													<tr>
														<td>JU4H - turbocharged, high speed (>2600rpm)</td>
														<td>14.0</td>
													</tr>
													<tr>
														<td>JU6H low speed (<2600rpm)</td>
														<td>18.5</td>
													</tr>
													<tr>
														<td>JU6H high speed (>2600rpm)</td>
														<td>19.0</td>
													</tr>
													<tr>
														<td>JDFP-06WA,JW6H-UF30, 38</td>
														<td>21.0</td>
													</tr>
													<tr>
														<td>JDFP-06WR,JW6H-UF40, 48, 50, 58, 60, H8</td>
														<td>22.0</td>
													</tr>
												</table>
											</section>
										</article>
                                </div> <!-- end of panel body -->
                            </div>
                        </div>
                     <div class="col-lg-4">
                     <?php include 'php_include_files/general_data_panel.php';?>
                        </div>
                    </div> <!-- end of row -->
                </div> <!--end of container class-->
            </body>
        </head>
    </html>