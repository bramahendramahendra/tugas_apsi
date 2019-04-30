<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pb_apsi_enrollment";

    $db = new mysqli($servername, $username, $password, $dbname);
    if(!$db){
        exit();
    } 
    
?>