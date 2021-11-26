<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "responsi";

    $connection = new mysqli($host, $username, $password, $database);

    if($connection->connect_error){
        die("Connect error: ". $connection->connect_error);
    }

?>