<?php
    $svname = "localhost";
    $username="root";
    $pass="";
    $dbname="th3";

    $connect = mysqli_connect($svname, $username, $pass, $dbname);

    if (!$connect){
        die("Connection failed!");
    }
    
?>