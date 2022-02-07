<?php

    $server= "localhost";
    $host= "root";
    $passowrd="";
    $database="invoicemanagement";
    $con = mysqli_connect($server,$host,$passowrd,$database);

    // Check connection
    if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
    } else {
        //echo "database connected";
    }

?>