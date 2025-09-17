<?php
include 'conexion.php';
    $sqlUsuarios = "CREATE TABLE IF NOT EXISTS usuarios(
            IDusuario INT AUTO_INCREMENT PRIMARY KEY,
            usuario VARCHAR(50) NOT NULL UNIQUE,
            password VARCHAR(50) NOT NULL
    )";

    if ($conn->query($sqlUsuarios) === TRUE) {
        echo "✅ Tabla 'estudiantes' creada con éxito";
        } else {
        echo "❌ Error al crear la tabla: " . $conn->error;
        }
?>
