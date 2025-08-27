<?php
$servername = "localhost";
$username = "root"; // por defecto en XAMPP es root
$password = ""; // por defecto no tiene contraseña
$database = "estudiantesdb";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
echo "Estado de conexión: ";
if ($conn->connect_error) {
    die("Erronea: " . $conn->connect_error);
} else {
    echo "Exitosa <br>";
}
?>
