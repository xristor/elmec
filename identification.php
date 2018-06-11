<?php
    $engine = array("Fuel"=>14.5, "Coolant"=>20, "Model"=>"Clarke Identification");
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
                    <?php include 'page_header.php';?>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><?=$engine["Model"]?></li>
                    </ol>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="panel panel-primary">
                                <div class="panel-heading">CLARKE IDENTIFICATION / NAMEPLATE</div>
                                <div class="panel-body">
                                   <p>
                                        <u>The Clarke eight digit model numbers reflects the base engine type, number of cylinders, cooling system, approval listing
                                        and power rating code.</u>
                                        <ul>Example: <strong>JU6H-UF50</strong>
                                                <li><strong>J</strong> = John Deere base engine prepared by CLARKE</li>
                                                <li><strong>U</strong> = base engine series (4.5liter 4 cylinder or 6.8 liter 6 cylinders)</li>
                                                <li><strong>6</strong> = Number of cylinder</li>
                                                <li><strong>H</strong> = Heat Exchangeer cooled (R = Radiator)</li>
                                                <li><strong>UF</strong> = Underwriters Laboratories Listed/ Factory Mutual Approved, NL = Non-Listed</li>
                                                <li><strong>50</strong> = A power rating code</li>
                                        </ul>
                                   </p>
                                   <p>
                                        <u>The Clarke 10 digit model numbers reflects the base engine type, number of cylinders, cooling system,
                                        approval listing, manufacturing location, emissionscode and a power rating code</u>
                                        <ul>Example: <strong>JU6H-UFAB54</strong>
                                                <li><strong>J</strong> = John Deere base engine propared by CLARKE</li>
                                                <li><strong>U</strong> = base engine series (4.5liter 4 cylinder or 6.8 liter 6 cylinders)</li>
                                                <li><strong>6</strong> = Number of cylinder</li>
                                                <li><strong>H</strong> = Heat Exchangeer cooled (R = Radiator)</li>
                                                <li><strong>UF</strong> = Underwriters Laboratories Listed/ Factory Mutual Approved, NL = Non-Listed</li>
                                                <li><strong>A</strong> = Manufacturing Location (A = Cincinnati,B = Coatbridge</li>
                                                <li><strong>B</strong> = EPA NSPS Complaint (A= NonEmissioned, C=EPA Tier 2 Certified, D=EPA Tier 3 Certified, E=EPA Interim Tier 4 Certifie</li>
                                                <li><strong>54</strong> = A power rating code</li>
                                        </ul>
                                   </p>
                                </div> <!-- end of panel body -->
                            </div>
                        </div>
                     <div class="col-lg-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">General Data</div>
                                <div class="panel-body">
                                    <p><strong>How To Identify Your Engine</strong></p>
                                    <ul>
                                        <li><a href="clarke_identification.php?model=J">Clarke-John Deere (JU, JD)</a></li>
                                        <li><a href="clarke_identification.php?model=DD">Clarke-Detroit (DDFP)</a.</li>
                                        <li><a href="clarke_identification.php?model=VM">Clarke-VM Motori (VMFP)</a></li>
                                        <li><a href="clarke_identification.php?model=PDFP">Clarke-Perkins (PDFP)</a></li>
                                        <li><a href="clarke_identification.php?model=IK">Clarke-Iveco (IK)</a></li>
                                    </ul>
                                    <hr/>
									<p>Clarke Model Numbering & Identification</p>
                                    <p>Clarke Engine Fluid Capacity</p>
                                    <p>John Deere Serial Number</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                </div> <!--end of container class-->
            </body>
        </head>
    </html>