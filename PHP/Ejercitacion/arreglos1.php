<?php 
//Crear arreglo
$listaCompras =["pan","leche","huevos","arroz","pollo"];

// Mostrar productos numerados foreach
echo "Lista de Compras: <br><br>";
$i = 1;
foreach ($listaCompras as $elemento)
{
    echo $i . "._" . $elemento . "<br>";
    $i = $i + 1;
}
echo "<br> <br>";

//Agregar productos
$listaCompras[5]="queso";
$listaCompras[6]="tomate";

//Mostrar productos for
for ($i=0; $i<count($listaCompras);$i++)
{
    echo ($i + 1) . "._" . $listaCompras[$i] . "<br>";
}
echo "<br> <br>";

//Verificiar si esta "leche"
if (in_array("leche", $listaCompras))
{
    echo "El producto leche se encuentra en la lista.";
}
?>