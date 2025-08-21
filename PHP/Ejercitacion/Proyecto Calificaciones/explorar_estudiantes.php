<html>

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
        <?php 
            include 'b_datos.php';
            foreach ($estudiantes as $id => $estudiante) {
                echo "<h3>ID: $id</h3>";
                echo "<p>Nombre: " . $estudiante['nombre'] . "</p>";
                echo "<p>Edad: " . $estudiante['edad'] . "</p>";
                echo "<p>Carrera: " . $estudiante['carrera'] . "</p>";
                echo "<p>Notas: " . implode(", ", $estudiante['notas']) . "</p>";
                echo "<p>Promedio: " . $estudiante['promedio'] . "</p>";
                echo "<hr>";
            }
        ?>
        <p>
            <a href="a_inicio.php">Volver al inicio</a>

    </body>
    
</html>