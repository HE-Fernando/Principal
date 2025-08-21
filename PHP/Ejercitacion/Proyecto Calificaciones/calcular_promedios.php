<html>
    <?php   
    include 'b_datos.php';
    // FUNCION PARA CALCULAR EL PROMEDIO DE LAS NOTAS DE CADA ESTUDIANTE Y ASIGNARLO AL CAMPO 'promedio'
    function calcularPromedios(&$estudiantes) {
        foreach ($estudiantes as $id => $estudiante) {
            $notas = $estudiante['notas'];
            $aux = 0;
            for ($i = 0; $i < count($notas); $i++) {
                $aux = $aux + $notas[$i];
            }
            $promedio = $aux / count($notas);
            $estudiantes[$id]['promedio'] = $promedio;
        }
    }
    calcularPromedios($estudiantes);
    echo "<h1>¡Promedios calculados!</h1>";
    //FUNCION PARA GUARDAR CAMBIOS
    $codigo = "<?php\n\$estudiantes = " . var_export($estudiantes, true) . ";\n?>";
    file_put_contents('b_datos.php', $codigo);

    ?>
    <head>
        <title> 
            Calcular Promedios
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="z_estilo.css">
    </head>
    <ul>
        <li><a href="a_inicio.php">Volver al inicio</a></li>        
        <li><a href="explorar_estudiantes.php">Explorar estudiantes</a></li>
        </ul>
</html>