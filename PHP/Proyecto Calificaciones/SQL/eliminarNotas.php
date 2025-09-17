<?php
include "conexion.php";

$consultaEstudiantes = "SELECT IDestudiante, nombre, apellido FROM estudiantes ORDER BY apellido, nombre";
$resultEstudiantes = $conn->query($consultaEstudiantes);

$notasEstudiante = [];
$mensaje = "";
//SE SELECCIONA UN ESTUDIANTE PERO AUN NO SE ENVIA LA NOTA
if(isset($_POST["estudianteID"]) && !isset($_POST["notaID"])){
    $estudianteID = $_POST["estudianteID"];

    $sqlNotas = "SELECT id, materia, nota, fecha FROM notas
                WHERE estudianteID = $estudianteID
                ORDER BY materia ASC";
    $resNotas = $conn->query($sqlNotas);

    if($resNotas->num_rows > 0){
        $notasEstudiante = $resNotas->fetch_all(MYSQLI_ASSOC);
    }
}
//SI SE ENVIA LA NOTA A ELIMINAR
if(isset($_POST["notaID"])){
    $notaID = $_POST["notaID"];

    $sqlDelete = "DELETE FROM notas WHERE id = $notaID";

    if($conn->query($sqlDelete) === TRUE){
        $mensaje = "Nota eliminada con éxito.";
    }else{
        $mensaje = "Error al eliminar la nota: " . $conn->error;
    }
}
?>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Eliminar Nota</title>
    <link rel="stylesheet" href="z_estilo.css">
</head>
<div style="margin-left: 10px;">
    <body>
        <h2>Eliminar Nota</h2>

        <?php if($mensaje){
            echo "<p class='centrado'>$mensaje</p>";
        }
        ?>
        <form action="" metod="POST">
            <label for="estudianteID">Seleccione un estudiante:</label><br>
            <select name="estudianteID" onchange="this.form.submit()">
                <option value="">--Seleccione un estudiante--</option>
                <?php
                    if($resultEstudiantes->num_rows > 0){
                        while($est = $resultEstudiantes->fetch_assoc()){
                            $selected = (isset($estudianteID) && $estudianteID == $est["IDestudiante"]) ? "selected" : "";

                            echo "<option value='" . $est["IDestudiante"] . "'$selected>"
                                . $est["apellido"] . ", " . $est["nombre"] . "</option>";
                        }
                    }
                ?>
            </select>
        </form>
        <?php if(count($notasEstudiante) > 0): ?>
        <form action="" method="POST">
            <input type="hidden" name="estudianteID" value="<?php echo $estudianteID; ?>">

            <label for="notaID">Seleccione la nota a eliminar:</label><br>
            <select name="notaID" required>
                <?php foreach($notasEstudiante as $nota): ?>
                    <option value="<?php echo $nota["id"];?>">
                        <?php echo $nota["materia"] . " - Nota: " . $nota["nota"] . " - Fecha: " . $nota["fecha"]; ?>
                    </option>
                <?php endforeach; ?>
            </select><br><br>

            <button type="submit">Eliminar Nota</button>
        </form>
        <?php elseif(isset($estudianteID)): ?>
            <p>Este estudiante no tiene notas</p>
        <?php endif; ?>
    </body>
</div>
</html>