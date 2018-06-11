<?php
    
    $engine = array("Fuel"=>14.5, "Coolant"=>20, "Model"=>"DP6H");
   
    $parts = array(
        "Air Clener"=>array("C03749", "1" ),
        "Belt, Alternator"=>array("C071844", "1" ),
        "Fuel Filter (Primary)"=>array("C02736", "1"),
        "Oil Filter"=>array("C04571", "1"),
        "Fuel Injector Nozzle"=>array("C02753", "1"),
        "Gasket, Oil Pan"=>array("C04579", "1"),
        "Gasket, Rocker Cover"=>array("C01589", "3"),
        "Gasket, Water Pump inner"=>array("C051717", "1"),
        "Gasket, Water Pump outer"=>array("C051719", "1"),
        "Oil Seal, Front"=>array("C04580", "1"),
        "Oil Seal, Rear"=>array("C04581", "1"),
        "Thermostat"=>array("C051718", "1"),
        "Cap, Heat Exchanger"=>array("C051739", "1"),
        "Stop Solenoid"=>array("C071851", "1"),
        "Starter Solenoid"=>array("C071062", "1"),          
    );
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
                        <li>Doosan</li>
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
                                            <td><?=$engine["Fuel"];?></td>
                                        </tr>
                                        <tr>
                                            <td>Engine oil capacity with filter</td>
                                            <td><?=$engine["Coolant"];?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">RECOMMENDED SPARE PARTS FOR <?=$engine["Model"]?> (EPA NSPS Tier 1 Emissions Compliant)</div>
                                <div class="panel-body">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Part Name</th>
                                            <th>Part Number</th>
                                            <th>Qty</th>                                            
                                        </tr>
                                            <?php
                                                
                                                $keys = array_keys($parts); // array key
                                                for ($i = 0; $i < count($parts); $i++) {
                                                    echo "<tr>";
                                                    echo "<td>$keys[$i]</td>";
                                                    
                                                    // loop through array member.
                                                    foreach($parts[$keys[$i]] as $part_name => $part_number) {
                                                        echo "<td>";
                                                        echo "$part_number";
                                                        echo "</td>";
                                                    }
                                                    echo "</tr>";
                                                }
                                                
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