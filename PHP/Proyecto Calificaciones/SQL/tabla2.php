<?php

    include 'conexion.php';

    $sqlNotas = "CREATE TABLE IF NOT EXISTS notas (
        id INT AUTO_INCREMENT PRIMARY KEY,
        estudianteID INT NOT NULL,
        materia VARCHAR(100) NOT NULL,
        nota DECIMAL(5,2) NOT NULL,
        fecha DATE NOT NULL,
        FOREIGN KEY (estudianteID) REFERENCES estudiantes(IDestudiante)
            ON DELETE CASCADE
            ON UPDATE CASCADE 
    )";

    if ($conn->query($sqlNotas) === TRUE) {
        echo "✅ Tabla 'notas' creada con éxito";
    } else {
        echo "❌ Error al crear la tabla: " . $conn->error;
    }
?>
