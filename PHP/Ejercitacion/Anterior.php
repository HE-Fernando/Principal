<?php
extract($_REQUEST);

$color="white";
function obtenerEdad($nacimiento)
{
    $edad = date("Y") - $nacimiento;
    return $edad;
}
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
function obtenerDescuento($edad, $precio)
{
    if ($edad <= 20)
    {
        $precioFinal = ($precio - $precio*0.1);
        return $precioFinal;
    }
    if ($edad > 20 and $edad <= 50)
    {
        $precioFinal = $precio;
        return $precioFinal;
    }
    if ($edad > 50)
    {
        $precioFinal = ($precio - $precio*0.05);
        return $precioFinal;
    }
}
$edad = obtenerEdad($nacimiento);
$color = obtenerColor($edad);
?>
<html>
    <head>
        <meta charset="UTF-8">
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
            echo ("Su precio final es: " . obtenerDescuento($edad, $precio));
            echo "<br>";
        ?>
    </body>
</html>
