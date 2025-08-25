<?php
include "b_datos.php";
//CANTIDAD DE ESTUDIANTES
$numeroEstudiantes = count($estudiantes);
//CANTIDAD DE ESTUDIANTES
//TOP ESTUDIANTES
$topEstudiantes = [];
$umbralPromedio = 8; // Definir el umbral de promedio para considerar "top estudiantes"
foreach ($estudiantes as $id => $estudiante) {
    if ($estudiante["promedio"] >= $umbralPromedio) {
        $topEstudiantes[] = [
            "nombre" => $estudiante["nombre"],
            "promedio" => $estudiante["promedio"]
        ];
    }
}
//TOP ESTUDIANTES
//DISTRIBUCION POR CARRERAS
$carreras = [];
foreach ($estudiantes as $estudiante) {
    $nombreCarrera = $estudiante["carrera"];
    if (isset($carreras[$nombreCarrera])) {
        $carreras[$nombreCarrera]++;
    }else {
        $carreras[$nombreCarrera] = 1;
    }
}
//DISTRIBUCION POR CARRERAS
//ALERTAS DE RIESGO
$estudiantesRiesgo = [];
$umbralRiesgo = 6; // Definir el umbral de promedio para considerar "riesgo"
foreach ($estudiantes as $id => $estudiante) {
    if ($estudiante["promedio"] < $umbralRiesgo) {
        $estudiantesRiesgo [] = [
            "nombre" => $estudiante["nombre"],
            "promedio" => $estudiante["promedio"]
        ];
    };
}
//ALERTAS DE RIESGO



?>
<html>

    <head>
        <title> 
            Sistema de Calificaciones v1.0
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="z_estilo.css">
    </head>
    <body>
        <h1>
            <strong>
                Sistema de Calificaciones
            </strong>
        </h1>
        <h2>
            Bienvenido al sistema de calificaciones
        </h2>
        <p>
            Este sistema te permite gestionar las calificaciones de los estudiantes de manera eficiente.
        </p>
        <p>
            Puedes acceder a las siguientes funcionalidades:
        </p>
        <ul>
                <li><a href="explorar_estudiantes.php">Explorar estudiantes</a></li>
                <li><a href="calcular_promedios.php">Calcular promedios</a></li>
                <li><a href="mejor_promedio.php">Mejor promedio</a></li>
        </ul>
        <div class="dashboard">
            <div class="panel"> 
                <h3 class="centrado">Cantidad de estudiantes</h3>
                <p class="centrado"><?php echo $numeroEstudiantes; ?></p class="centrado">
                
            </div>
            <div class="panel">
                <h3 class="centrado">Top estudiantes</h3>
                <p class="chico">(estudiantes con promedio mayor a 8) </p class="chico">
                <?php
                    usort($topEstudiantes, function($a, $b) {
                        return $b["promedio"] <=> $a["promedio"];
                    });
                    foreach ($topEstudiantes as $id => $estudiante) {
                        echo "<p class='chicov2'>" . $estudiante["nombre"] . " - Promedio: " . $estudiante["promedio"];
                    }                
                ?>
            </div>
            <div class="panel">
                <h3 class="centrado">Distribución por carreras</h3>
                <?php 
                    foreach ($carreras as $id => $cantidad) {
                        echo "<p class='chicov2'>" . $id . ": " . $cantidad . " estudiantes</p>";
                    }
                ?>
            </div>
            <div class="panel">
                <h3 class="centrado">Estudiantes en riesgo</h3>
                <p class="chico">(estudiantes con promedio menor a 6) </p class="chico">
                <?php 
                    foreach ($estudiantesRiesgo as $id => $estudiante) {
                        echo "<p class='chicov2'>" . $estudiante["nombre"] . " - Promedio: " . $estudiante["promedio"];
                    }
                ?>



            </div>
        </div>
    </body>
        
</html>

<?php
//IMPLEMENTAR: Estadisticas generales del sistema (cantidad de alumnos, promedio general, etc.).
//IMPLEMENTAR: Top estudiantes con mejores promedios.
//IMPLEMENTAR: Distribucion por carreras.
//IMPLEMENTAR: Alertas de estudiantes en riesgo (promedio bajo).
?>