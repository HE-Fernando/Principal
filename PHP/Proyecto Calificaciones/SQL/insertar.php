<?php
//IDestudiante (AUTOINDICE)
//apellido
//nombre
//edad
//carrera
//promedio
    include 'conexion.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $apellido = $_POST["apellido"];
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $carrera = $_POST["carrera"];
        $promedio = $_POST["promedio"];
        $sql = "INSERT INTO estudiantes (apellido, nombre, edad, carrera, promedio)
                VALUES ('$apellido', '$nombre', '$edad', '$carrera', $promedio)";

        //EJECUCION
        if ($conn->query($sql) === TRUE) {
        $mensaje = "Estudiante agregado con éxito";
        } else {
        $mensaje = "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>

<html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Estudiante </title>
    <link rel="stylesheet" href="\Principal\PHP\Proyecto Calificaciones\z_estilo.css">
</head>
<body>
    <h2>
        Formulario de Registro de Estudiantes
    </h2>
    <?php 
        if(isset($mensaje)) {
            echo "<p class='centrado'> $mensaje </p>";
        }
    ?>
    <div style="margin-left: 10px;">
    <form action="" method="POST">
        <label for="apellido">Apellido:</label><br>
        <input type="text" name="apellido" required><br><br>
        
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label for="edad">Edad:</label><br>
        <input type="number" name="edad" required><br><br>

        <label for="carrera">Carrera:</label><br>
        <select name="carrera" required>
            <option value="">--Selecciona una carrera--</option>
            <option value="Analista de Sistemas">Analista de Sistemas</option>
            <option value="Recursos Humanos">Recursos Humanos</option>
            <option value="Administración de Empresas">Administración de Empresas</option>
            <option value="Régimen Aduanero">Régimen Aduanero</option>
            <option value="Turismo y Hotelería">Turismo y Hotelería</option>
        </select><br><br>

        <label for="promedio">Promedio:</label><br>
        <input type="number" step="0.01" name="promedio" required><br><br>

        <button type="submit">Guardar</button>
    </form>
    <p>
            <a href="\Principal\PHP\Proyecto Calificaciones\a_inicio.php">Volver al inicio</a>
    </p>
    </div>
</body>
</html>