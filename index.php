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
                        <li>Home</li>
                    </ol>
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- panel menu -->
                            <?php include 'php_include_files/clarke_filter_search_panel.php';?>
                            <?php include 'php_include_files/general_data_panel.php';?>
                        </div> <!-- end of col-lg-8 -->
                        <div class="col-lg-8">
                        <!-- panel menu -->
                            <?php include 'php_include_files/john_deere_spare_part_panel.php';?>
                            <?php include 'php_include_files/clarke_spec_and_spare_panel.php';?>
                        </div>
                    </div> <!-- end of row class -->
                </div> <!--end of container class-->
            </body>
        </head>
    </html>
