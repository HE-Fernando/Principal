<?php
include "b_datos.php";
//MOSTRAR NUMERO DE ESTUDIANTES
$numeroEstudiantes = count($estudiantes);
$topEstudiantes = [];
$auxPromedio = 8;
foreach ($estudiantes as $id => $estudiante) {
    if ($estudiante["promedio"] >= $auxPromedio) {
        $topEstudiantes["nombre"] = $estudiante["nombre"];
        $topEstudiantes["apellido"] = $estudiante["apellido"];
        $topEstudiantes["promedio"] = $estudiante["promedio"];
    }
}


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
            </div>
            <div class="panel"> Distribucion por Carreras </div>
            <div class="panel"> Alertas de Riesgo </div>
        </div>
    </body>
        
</html>

<?php
//IMPLEMENTAR: Estadisticas generales del sistema (cantidad de alumnos, promedio general, etc.).
//IMPLEMENTAR: Top estudiantes con mejores promedios.
//IMPLEMENTAR: Distribucion por carreras.
//IMPLEMENTAR: Alertas de estudiantes en riesgo (promedio bajo).
?>