<?php 

    include 'conexion.php';
    $sqlEstudiantes = "CREATE TABLE IF NOT EXISTS estudiantes(
            IDestudiante INT AUTO_INCREMENT PRIMARY KEY,
            apellido VARCHAR(50) NOT NULL,
            nombre VARCHAR(50) NOT NULL,
            edad INT NOT NULL,
            carrera VARCHAR(100) NOT NULL,
            promedio DECIMAL(5,2) NOT NULL
    )";

    if ($conn->query($sqlEstudiantes) === TRUE) {
        echo "✅ Tabla 'estudiantes' creada con éxito";
        } else {
        echo "❌ Error al crear la tabla: " . $conn->error;
        }

?>
