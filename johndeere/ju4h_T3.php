<?php
    
    $engine = array("Fuel"=>14.5, "Coolant"=>20, "Model"=>"JU4H TIER 3 ENGINE");
    
    $parts = array(
        "Air Cleaner"=>array("C03396", "n/a", 1 ),
        "Belt, Alternator"=>array("C072111", "RE62418 (3516)", 1 ),
        "Fuel Filter (Primary)"=>array("C02775", "RE62418 (3516)", 1 ),
        "Fuel Filter (Secondary)"=>array("C02776", "RE62418 (3516)", 1 ),
        "Oil Filter"=>array("C04521", "RE62418 (3516)", 1 ),
        "Fuel Injector Nozzle"=>array("C02918", "RE62418 (3516)", 1 ),
        "Fuel Transfer Pump"=>array("C02958", "RE62418 (3516)", 1 ),
        "Gasekt Oil Pan"=>array("C04609", "RE62418 (3516)", 1 ),
        "Gasket Rocker Cover"=>array("C061655", "RE62418 (3516)", 1 ),
        "Gasket, Thermostat"=>array("C051281", "RE62418 (3516)", 1 ),
        "Oil Seal, Front"=>array("C04624", "RE62418 (3516)", 1 ),
        "Oil Seal, Rear"=>array("C04627", "RE62418 (3516)", 1 ),
        "Thermostat (bypass)"=>array("C071950", "RE62418 (3516)", 1 ),
        "Water Pump"=>array("C052067", "RE62418 (3516)", 1 ),
 
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