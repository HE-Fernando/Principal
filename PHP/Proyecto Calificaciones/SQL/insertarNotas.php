<?php
    include 'conexion.php';
    session_start();
    if (!isset($_SESSION["usuario"]) || $_SESSION["nivel"] != 1){
        header("Location: /Principal/PHP/Proyecto Calificaciones/login.php?error=permisos");
        exit();
    }

    $consultaEstudiantes = "SELECT IDestudiante, nombre, apellido FROM estudiantes ORDER BY apellido, nombre";
    $resultEstudiantes = $conn->query($consultaEstudiantes);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $estudianteID = $_POST["estudianteID"];
        $materia = $_POST["materia"];
        $nota = $_POST["nota"];
        $fecha = date("Y-m-d H:i:s");
        $sql = "INSERT INTO notas (estudianteID, materia, nota, fecha)
                VALUES ('$estudianteID', '$materia', '$nota', '$fecha')";

        //EJECUCION
        if ($conn->query($sql) === TRUE) {
        $mensaje = "Nota agregada con éxito";
        } else {
        $mensaje = "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>

<html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Nota </title>
    <link rel="stylesheet" href="\Principal\PHP\Proyecto Calificaciones\z_estilo.css">
</head>
<body>
    <div class="user-tab">
            <?php echo htmlspecialchars($_SESSION["usuario"]);?> <br>
            <a href='cierre.php'>Cerrar Sesion</a>
        </div>
    <h2>
        Formulario de Registro de Notas
    </h2>
    <?php 
        if(isset($mensaje)) {
            echo "<p class='centrado'> $mensaje </p>";
        }
    ?>
    <div style="margin-left: 10px;">
    <form action="" method="POST">
        <label for="estudianteID">Estudiante ID:</label><br>
        <select name="estudianteID" required>
            <option value="">--Selecciona un estudiante--</option>
            <?php
                if($resultEstudiantes->num_rows > 0){
                    while($est = $resultEstudiantes->fetch_assoc()){
                        echo "<option value='" . $est["IDestudiante"] . "'>" . $est["apellido"] . ", " . $est["nombre"] . "</option>";
                    }
                }
            ?>
        </select><br><br>
        
        <label for="materia">Materia:</label><br>
            <select name="materia" required>
                <option value="">--Selecciona una materia--</option>
                <option value="Materia 1">Materia 1</option>
                <option value="Materia 2">Materia 2</option>
                <option value="Materia 3">Materia 3</option>
                <option value="Materia 4">Materia 4</option>
                <option value="Materia 5">Materia 5</option>
            </select><br><br>

        <label for="nota">Nota:</label><br>
        <input type="number" name="nota" id="nota" step="0.01" min="0" max="10" required><br><br>

        <button type="submit">Guardar</button>
    </form>
    <p>
            <a href="\Principal\PHP\Proyecto Calificaciones\a_inicio.php">Volver al inicio</a><br>
            <a href="\Principal\PHP\Proyecto Calificaciones\notas.php">Volver al Administrador de Notas</a>
    </p>
    </div>
</body>
</html>