<?php
    $host     = 'localhost';
    $username = 'root';
    $password = '1234';
    $dbname   = 'calendardb';

    $conn = new mysqli($host, $username, $password, $dbname);
    
    if(!$conn){
        die("Sin conexión a la base de datos.". $conn->error);
    }
?>