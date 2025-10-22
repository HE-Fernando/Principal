<?php
    include "config.php";
    $result = $conn->query("SELECT * FROM productos");
    while ($row = $result->fetch_assoc()){
        echo $row["nombre"] . " - $" . $row["precio"] . "<br>";
    }
?>