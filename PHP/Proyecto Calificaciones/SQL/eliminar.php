<?php 

    include 'conexion.php';
    $mensaje = "";
    $estudiante = null;

    if(isset($_POST["buscar"])){
        $id = $_POST["IDestudiante"];
        $sql = "SELECT * FROM estudiantes WHERE IDestudiante = $id";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            $estudiante = $result->fetch_assoc();
        }else{
            $mensaje = "No se encontró ningún estudiante con ese ID.";
        }
    }

    if(isset($_POST["eliminar"])){
        $id = $_POST["IDestudiante"];
        $sql = "DELETE FROM estudiantes WHERE IDestudiante = $id";
        if($conn->query($sql) == TRUE){
            $mensaje = "Estudiante eliminado correctamente";
        }else{
            $mensaje = "Error al eliminar: " . $conn->error;
        }
    }
?>

<html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Estudiante </title>
    <link rel="stylesheet" href="\Principal\PHP\Proyecto Calificaciones\z_estilo.css">
</head>
<body>
    <h2>
        Eliminar Estudiante
    </h2>
    <p class="centrado">
    <?php
        if($mensaje != ""){
            echo $mensaje;
        }
    ?>
    </p>
    <div style="margin-left: 10px;">
    <form method="POST" action="">
        <label for="IDestudiante">ID del estudiante:</label><br>
        <input type="number" name="IDestudiante" required><br><br>
        <input type="submit" name="buscar" values="Buscar">
    </form>

    <?php if($estudiante): ?>
        <h3>Datos del estudiante:</h3>
        <p>ID: <?php echo $estudiante["IDestudiante"]; ?> </p>
        <p>Apellido: <?php echo $estudiante["apellido"]; ?> </p>
        <p>Nombre: <?php echo $estudiante["nombre"]; ?> </p>
        <p>Edad: <?php echo $estudiante["edad"]; ?> </p>
        <p>Carrera: <?php echo $estudiante["carrera"]; ?> </p>
        <p>Promedio: <?php echo $estudiante["promedio"]; ?> </p>

        <form method="POST" action="">
            <input type="hidden" name="IDestudiante" value="<?php echo $estudiante["IDestudiante"]; ?>">
            <input type="submit" name="eliminar" value="Eliminar">
            <input type="submit" name="cancelar" value="Cancelar">
        </form>
        <?php endif; ?>
        <p>
            <a href="\Principal\PHP\Proyecto Calificaciones\a_inicio.php">Volver al inicio</a>
        </p>
    </div>
</html>