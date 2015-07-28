<?php
    $host_name  = "db548651986.db.1and1.com";
    $database   = "db548651986";
    $user_name  = "dbo548651986";
    $password   = "gasman70";

    $connect = mysqli_connect($host_name, $user_name, $password, $database);
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>