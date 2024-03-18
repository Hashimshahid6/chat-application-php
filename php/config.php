<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "chatapp";

    $connection = mysqli_connect($hostname, $username, $password, $dbname);

    if(!connection)
    {
        echo "Database connection error".mysqli_connect_error();
    }
?>