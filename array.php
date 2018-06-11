

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
                    <div class="page-header">
                        <address>
                            <strong>Elmec Marketing Co,.Ltd.</strong><br>
                            257/3-4 Pattanakarn rd., Suanluang, Suanluang<br>
                            Bangkok, Thailand 10250<br>
                            <abbr title="Phone">P:</abbr>(+662)3192679
                        </address>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <?php
                                $seasons = array("Autumm", "Winter", "Spring", "Summer");
                                foreach ($seasons as $value) {
                                        print $value . " ";   
                                }
                                
                                $full_name = array();
                                $full_name["David"] = "Gilmour";
                                $full_name["Nick"] = "Mason";
                                $full_name["Roger"] = "Waters";
                                $full_name["Richard"] = "Wright";
                                
                                echo "<br />";
                                print $full_name["David"]; // output is "Gilmour"
                                
                                foreach($full_name as $key_name => $key_value){
                                    print "Key = " . $key_name . ", Value = " . $key_value . "<br>";
                                }
                                
                                // Multidimensional array
                                $superheroes = array(
                                    "spider-man" => array(
                                        "name" => "Peter Parker",
                                        "email" => "peterparker@mail.com",
                                    ),
                                    
                                    "super-man" => array(
                                        "name" => "Clark Kent",
                                        "email" => "clarkkent@mail.com",
                                    ),
                                    
                                    "iron-man" => array(
                                        "name" => "Harry Potter",
                                        "email" => "harrypotter@mail.com",
                                    ) 
                                );
                                
                                // Printing all the keys and values one by one
                                $keys = array_keys($superheroes);
                                for($i=0; $i < count($superheroes); $i++){
                                    echo $keys[$i] . "{<br>";
                                    foreach($superheroes[$keys[$i]] as $key => $value) {
                                        echo $key . " : " . $value . "<br>";
                                    }
                                    echo "}<br>";
                                }
                            ?>
                        </div>
                        
                    </div>
                </div> <!--end of container class-->
            </body>
        </head>
    </html>