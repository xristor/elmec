<?php
   
   $colors = array("red", "green", "blue", "yellow"); 
   
?>


<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Bootstrap 101 Template</title>
            
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
                                <div class="panel-heading">JU4H-UF10, UF12, UF20, UF22</div>
                                <div class="panel-body">
                                    <table class="table table-condensed">
                                        <tr>
                                            <td>Engine coolant capacity</td>
                                            <td>n/a</td>
                                        </tr>
                                        <tr>
                                            <td>Engine oil capacity with filter</td>
                                            <td>n/a</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">RECOMMENDED SPARE PARTS FOR JU4H (EPA NSPS Tier 1 Emissions Compliant)</div>
                                <div class="panel-body">
                                    <table class="table-striped table-condensed">
                                        <tr>
                                            <?php
                                               foreach ($colors as $value){
                                                echo "<td>$value</td>";
                                               }
                                            ?>
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