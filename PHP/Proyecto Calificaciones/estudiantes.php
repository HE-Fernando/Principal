<html>
    <?php 
        include 'C:\appserver\htdocs\Principal\PHP\Proyecto Calificaciones\SQL\conexion.php';
        session_start();
        if (!isset($_SESSION["usuario"])){
            header("Location: login.php");
        exit();
        }
    ?>

<head>
        <title> 
            Registro de Estudiantes
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="z_estilo.css">
    </head>
    <div class="user-tab">
        <?php echo htmlspecialchars($_SESSION["usuario"]); ?>
    </div>
    <h1>
        <strong>
            Estudiantes
        </strong>
    </h1>
    <h2>
        Estudiantes registrados en el sistema:
    </h2>
    <body>
        <div style="margin-left: 10px;">
        <p class="chico" 
        style="text-align: left;">
<?php
$sql = "SELECT IDestudiante, apellido, nombre, edad, carrera, promedio FROM estudiantes";
$results = $conn->query($sql);

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>ID</th>
        <th>Apellido</th>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Carrera</th>
        <th>Promedio</th>
      </tr>";

if ($results->num_rows > 0) {
    while ($row = $results->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["IDestudiante"] . "</td>";
        echo "<td>" . $row["apellido"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["edad"] . "</td>";
        echo "<td>" . $row["carrera"] . "</td>";
        echo "<td>" . $row["promedio"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>Sin resultados</td></tr>";
}

echo "</table>";
?>

        </p class="chico">
        <p>
            <a href="\Principal\PHP\Proyecto Calificaciones\SQL\insertar.php">Agregar estudiante</a>
        </p>
        <p>
            <a href="\Principal\PHP\Proyecto Calificaciones\SQL\eliminar.php">Eliminar estudiante</a>
        </p>
        <p>
            <a href="a_inicio.php">Volver al inicio</a>
        </p>
        </div>

    </body>
    
</html>