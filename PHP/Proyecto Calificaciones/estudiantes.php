<html>
    <?php 
        include 'C:\appserver\htdocs\Principal\PHP\Proyecto Calificaciones\SQL\conexion.php';
    ?>

<head>
        <title> 
            Registro de Estudiantes
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="z_estilo.css">
    </head>
    <h1>
        <strong>
            Estudiantes
        </strong>
    </h1>
    <h2>
        Estudiantes registrados en el sistema:
    </h2>
    <body>
        <p class="chico" 
        style="text-align: left;">
        <?php
        
            $sql = "SELECT IDestudiante, apellido, nombre, edad, carrera, promedio FROM estudiantes";
            $results = $conn->query($sql);
            if ($results->num_rows > 0) {
                while ($row = $results->fetch_assoc()) {
                    echo "ID: " . $row["IDestudiante"] . "<br>";
                    echo "Apellido: " . $row["apellido"] . "<br>";
                    echo "Nombre: " . $row["nombre"] . "<br>";
                    echo "Edad: " . $row["edad"] . "<br>";
                    echo "Carrera: " . $row["carrera"] . "<br>";
                    echo "Promedio: " . $row["promedio"] . "<br>";
                    echo "--------------------------------------- <br>";
                }
            } else {
                echo "Sin resultados";
            }
        
        ?>
        </p class="chico">
        <p>
            <a href="\Principal\PHP\Proyecto Calificaciones\SQL\insertar.php">Agregar estudiante</a>
        </p>
        <p>
            <a href="a_inicio.php">Volver al inicio</a>
        </p>

    </body>
    
</html>