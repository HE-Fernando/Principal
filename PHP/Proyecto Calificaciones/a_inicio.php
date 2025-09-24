<?php
//PRUEBA DE GIT GRAPH
session_start();
if (!isset($_SESSION["usuario"])){
    header("Location: login.php");
    exit();
}

include "SQL\conexion.php";

//CANTIDAD DE ESTUDIANTES
$sql = "SELECT IDestudiante, apellido, nombre, edad, carrera, promedio FROM estudiantes";
$results = $conn->query($sql);
$cantidadEstudiantes = $results->num_rows;
//CANTIDAD DE ESTUDIANTES

//TOP ESTUDIANTES
$topEstudiantes;
if($results->num_rows > 0){
    while($row = $results->fetch_assoc()){
        if($row["promedio"] >= 8){
            $topEstudiantes[] = $row;
        }
    }
    usort($topEstudiantes, function($a, $b){
        return $b["promedio"] <=> $a["promedio"];
    });
}
//TOP ESTUDIANTES

//DISTRIBUCION POR CARRERAS
$sql2 = "SELECT carrera FROM estudiantes";
$results2 = $conn->query($sql2);
$contadorCarreras = [];
if($results2->num_rows > 0){
    while($row = $results2->fetch_assoc()){
        $carrera = $row['carrera'];
        if(isset($contadorCarreras[$carrera])){
            $contadorCarreras[$carrera]++;
        }else{
            $contadorCarreras[$carrera] = 1;
        }
    }
}
//DISTRIBUCION POR CARRERAS

//ALERTAS DE RIESGO
$sql3 = "SELECT IDestudiante, apellido, nombre, edad, carrera, promedio FROM estudiantes";
$results3 = $conn->query($sql3);
$estudiantesRiesgo = [];
if($results3->num_rows > 0){
    while($row = $results3->fetch_assoc()){
        if($row["promedio"] < 6){
            $estudiantesRiesgo[] = $row;
        }
        usort($estudiantesRiesgo, function($a, $b){
            return $a["promedio"] <=> $b["promedio"];
        });
    }
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
        <div class="user-tab">
            <?php echo htmlspecialchars($_SESSION["usuario"]); ?>
        </div>
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
                <li><a href="estudiantes.php">Administrar Estudiantes</a></li>
                <li><a href="notas.php">Administrar Notas</a></li>
                <li><a href="cierre.php">Cerrar Sesiones Activas</a></li>
        </ul>
        <div class="dashboard">
            <div class="panel"> 
                <h3 class="centrado">Cantidad de estudiantes</h3>
                <p class="centrado">
                <?php     
                echo "$cantidadEstudiantes"
                ?>
                </p class="centrado">
                
            </div>
            <div class="panel">
                <h3 class="centrado">Top estudiantes</h3>
                <p class="chico">(estudiantes con promedio mayor a 8) </p class="chico">
                <p class="chico">
                <?php
                    foreach($topEstudiantes as $id => $estudiante){
                        $promedio = $estudiante["promedio"];
                        $maxPromedio = 6;
                        $intensidadRojo = 255 - round(($promedio / $maxPromedio) * 255);
                        $color = "rgb(255, $intensidadRojo, $intensidadRojo)";
                        echo "Apellido: " . $estudiante["apellido"] . "<br>";
                        echo "Nombre: " . $estudiante["nombre"] . "<br>";
                        echo "Edad: " . $estudiante["edad"] . "<br>";
                        echo "Carrera: " . $estudiante["carrera"] . "<br>";
                        echo "Promedio: <b>" . $estudiante["promedio"] . "</b><br>";
                        echo "ID: " . $estudiante["IDestudiante"] . "<br>";
                        echo "---------------------------------------<br>";
                    }     
                ?>
                </p class>
            </div>
            <div class="panel">
                <h3 class="centrado">Distribución de alumnos por carreras</h3>
                <p class="chico">
                <?php
                    foreach($contadorCarreras as $carrera => $cantidad){
                        echo "$carrera -- $cantidad<br>"; 
                    }
                ?>
                </p>
            </div>
            <div class="panel">
                <h3 class="centrado">Estudiantes en riesgo</h3>
                <p class="chico">(estudiantes con promedio menor a 6) </p>
                <p class="chico">
                <?php 
                    foreach($estudiantesRiesgo as $id => $estudiante){
                        echo "Apellido: " . $estudiante["apellido"] . "<br>";
                        echo "Nombre: " . $estudiante["nombre"] . "<br>";
                        echo "Edad: " . $estudiante["edad"] . "<br>";
                        echo "Carrera: " . $estudiante["carrera"] . "<br>";
                        echo "Promedio: <b>" . $estudiante["promedio"] . "</b><br>";
                        echo "ID: " . $estudiante["IDestudiante"] . "<br>";
                        echo "---------------------------------------<br>";
                    }  
                ?>
                </p>
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