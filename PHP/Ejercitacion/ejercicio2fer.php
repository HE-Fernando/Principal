<?php
extract($_REQUEST);

$color="green";

function obtenerColor($edad) 
{
    if ($edad > 10 and $edad < 20) 
    {
        return "lightgreen";
    }
    if ($edad > 20 and $edad < 40)
    {
        return "yellow";
    }
    if ($edad > 40 and $edad < 60)
    {
        return "red";
    }
}

$color = obtenerColor($edad);
?>

<html>
    <head>
        <title> Edad </title>
        <style>
            body{
                background-color: <?php echo $color; ?>;
                font-size: 1.5em;
            }
        </style>
    </head>
    <body>
        <?php
            echo("Tu nombre es: $nombre");
            echo "<br>";
            echo("Tu edad es: $edad");
            echo "<br>";
        ?>
    </body>
</html>