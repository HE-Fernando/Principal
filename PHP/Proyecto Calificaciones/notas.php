<html>
    <?php 
        include "SQL\conexion.php";

        $sql = "SELECT notas.id,estudiantes.apellido, estudiantes.nombre, notas.materia, notas.nota, notas.fecha
        FROM notas
        INNER JOIN estudiantes ON notas.estudianteID = estudiantes.IDestudiante
        ORDER BY notas.fecha DESC";

        $result = $conn->query($sql);
    ?>

    <head>
        <title> 
            Registro de Notas
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="z_estilo.css">
    </head>
    <div style="margin-left: 10px;">
        <h2>Listado de Notas Registradas</h2>

        <table> 
            <tr>
                <th>ID</th>
                <th>Estudiante</th>
                <th>Materia</th>
                <th>Nota</th>
                <th>Fecha</th>
            </tr>
            <?php 
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["apellido"] . " " . $row["nombre"] . "</td>";
                        echo "<td>" . $row["materia"] . "</td>";
                        echo "<td>" . $row["nota"] . "</td>";
                        echo "<td>" . $row["fecha"] . "</td>";
                        echo "</tr>";
                    }
                }else{
                    echo "<tr><td colspan='5' >No hay datos registrados</td></tr>";
                }
            ?>
        </table>
        <p>
            <a href="\Principal\PHP\Proyecto Calificaciones\SQL\insertarNotas.php">Agregar Nota</a><br>
            <a href="\Principal\PHP\Proyecto Calificaciones\SQL\eliminarNotas.php">Eliminar Nota</a><br>
            <a href="a_inicio.php">Volver al inicio</a>
        </p>
    </div>
</html>