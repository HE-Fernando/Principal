<?php
session_start();
include("SQL\conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM usuarios WHERE usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0){
        $row = $result->fetch_assoc();
        if ($password === $row["password"]){
            $_SESSION["usuario"] = $row["usuario"];
            $_SESSION["nivel"] = $row["nivel"];
            header("Location: a_inicio.php");
        }else{
            header("Location: login.php?error=contraseña");
            exit();
        }
    }else{
        header("Location: login.php?error=usuario");
        exit();
    }
}else{
    //EN CASO DE QUE ENTREN AL LOGIN.PHP SIN RELLENAR FORMULARIO
    header("Location: login.php");
    exit();
}

?>