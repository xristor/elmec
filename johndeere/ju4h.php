<?php
    
    $engine = array("Fuel"=>14.5, "Coolant"=>20, "Model"=>"JU4H Low speed");
    
    $parts = array(
        "Filter, Lube Oil"=>array("C04440", "RE59754 (8802)", "1" ),
        "Filter, Fuel"=>array("C02359", "RE60021 (3516)", "1"),
        "Thermostat"=>array("C052057", "RE522076 (2201)", "1"),
        "Gasket, Thermo. Hsg."=>array("C051281", "R502814 (2102)", "1"),
        "Fuel Injector"=>array("C02360", "RE48786 (16ZZ)", "1"),
        "Air Cleaner Element"=>array("C03249", "n/a", "1"),
        "Starter Solenoid, 12V"=>array("C071222", "n/a", "1"),
        "Starter Solenoid, 24V"=>array("C071223", "n/a", "1"),
        "Alternator Belt"=>array("C07816", "n/a", "1"),
        "Run Solenoid, 12V"=>array("C07853", "n/a", "1"),
        "Run Solenoid, 24V"=>array("C07826", "n/a", "1"),
        "Stop Solenoid, 12V"=>array("C07816", "n/a", "1"),
        "Stop Solenoid, 24V"=>array("C07816", "n/a", "1"),
        "Fuel Transfer Pump"=>array("C07816", "RE68345 (3702)", "1"),
        "Oil Seal, Front"=>array("C07816", "RE59810 (4429)", "1"),
        "Oil Seal, Rear"=>array("C07816", "RE44574 (1440)", "1"),
        "Gasket, Rocker Cover"=>array("C07816", "R123542 (1101)", "1"),
        "Gasket, Oil Pan"=>array("C07816", "R521493 (19AE)", "1"),
        "Water Pump Kit"=>array("C07816", "RE505981 (4429)", "1"),
        "Gasket, Water Pump"=>array("C07816", "RE123417 (4429)", "1"),
        "Cap, Head Exchanger"=>array("C07816", "n/a", "1"),
        "Hose, Heat Exchange to Water Pump"=>array("C07816", "n/a", "1"),
        "Hose, Heat Exchange to Thermostat"=>array("C07816", "n/a", "1"),     
        
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
                    <?php include '../php_include_files/page_header.php';?>
                    
                    <ol class="breadcrumb">
                        <li><a href="../index.php">Home</a></li>
                        <li>Clarke</li>
                        <li class="active">JU4H Low speed</li>
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
                                <div class="panel-heading">RECOMMENDED SPARE PARTS FOR <?=$engine["Model"]?></div>
                                <div class="panel-body">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th rowspan="2" class="text-center">Part Name</th>
                                            <th colspan="2">Part Number</th>
                                            <th rowspan="2" class="text-center">Qty</th>
                                        </tr>
                                            <th>Clarke</th>
                                            <th>John Deere (Opt. code)</th>
                                        <tr>
                                            
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