<?php
    function dbconnect() {    
        
        $server = "localhost";
        $username = "root";
        $password = "1234";
        $database = "elmec";
        
        $mysqli = new mysqli($server, $username, $password, $database);
        
        if($mysqli->connect_error){
            die("$mysqli->connect_error: $mysqli->connect_error");
        }
    } 
?>
    
    