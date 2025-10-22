<?php
    $host = "localhost";
    $usuario = "root";
    $pass = "";
    $base = "productos_db";

    $conn = new mysqli($host, $usuario, $pass, $base);

    if ($conn->connect_error){
        die("Conexión fallida: " . $conn->connect_error);
    }

    $conn->set_charset("utf8");
?>