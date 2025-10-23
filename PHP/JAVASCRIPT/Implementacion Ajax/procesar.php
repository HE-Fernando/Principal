<?php
header("Content-Type: application/json");
include "config.php";

//Recibir accion del request (crear, actualizar, eliminar, obtener)
$accion = $_POST["accion"] ?? $_GET["accion"] ?? "";
switch($accion){
    case "crear": {
        crearProducto($conn);
        break;
    }
    case "actualizar": {
        actualizarProducto($conn);
        break;
    }
    case "eliminar": {
        eliminarProducto($conn);
        break;
    }
    case "obtener": {
        obtenerProducto($conn);
        break;
    }
    case "listar": {
        listarProductos($conn);
        break;
    }
    default: {
        echo json_encode(["error" => 'Acción no válida.']);
        break;
    }
}
mysqli_close($conn);
//FUNCIONES
function crearProducto($conn){
    $id = intval($_POST["id"] ?? 0);
    $nombre = mysqli_real_escape_string($conn, $_POST["nombre"] ?? "");
    $categoria = mysqli_real_escape_string($conn, $_POST["categoria"] ?? "");
    $precio = mysqli_real_escape_string($conn, $_POST["precio"] ?? "");
    $stock = mysqli_real_escape_string($conn, $_POST["stock"] ?? "");

    //Validar si no están vacios
    if (empty($nombre) || empty($categoria) || $precio === "" || $stock === ""){
        echo json_encode(["error" => "Todos los campos son obligatorios"]);
        return;
    }

    $query = "INSERT INTO productos (nombre, categoria, precio, stock)
    VALUES ('$nombre', '$categoria', $precio, $stock)";

    //Ejecucion
    if (mysqli_query($conn, $query)){
        echo json_encode([
            "exito" => true,
            "id" => mysqli_insert_id($conn) 
        ]);
    } else {
        echo json_encode(["error" => "Error al crear producto: " . mysqli_error($conn)]);
    }
}
function actualizarProducto($conn){
    $id = intval($_POST["id"] ?? 0);
    $nombre = mysqli_real_escape_string($conn, $_POST["nombre"] ?? "");
    $categoria = mysqli_real_escape_string($conn, $_POST["categoria"] ?? "");
    $precio = mysqli_real_escape_string($conn, $_POST["precio"] ?? "");
    $stock = mysqli_real_escape_string($conn, $_POST["stock"] ?? "");

    //Validar si no estan vacios
    if ($id <= 0 || empty($nombre) || empty($categoria) || $precio === "" || $stock === ""){
        echo json_encode(["error" => "Datos inválidos"]);
        return;
    }
    
    $query = "UPDATE productos
    SET nombre = '$nombre', categoria = '$categoria', precio = $precio, stock = $stock
    WHERE id = $id";

    if(mysqli_query($conn, $query)){
        echo json_encode(["success" => "Producto actualizado correctamente"]);
    } else {
        echo json_encode(["error" => "Error al actualizar producto: " . mysqli_error($conn)]);
    }
}
function eliminarProducto($conn){
    $id = intval($_POST["id"] ?? 0);

    if ($id <= 0){
        echo json_encode(["error" => "ID inválido"]);
        return;
    }

    $query = "DELETE FROM productos WHERE id = $id";

    if (mysqli_query($conn, $query)){
        echo json_encode(["success" => "Producto eliminado correctamente"]);
    } else {
        echo json_encode(["error" => "Error al eliminar producto: " . mysqli_error($conn)]);
    }
}
function obtenerProducto($conn){
    $id = intval($_GET["id"] ?? 0);
    
    if ($id <= 0){
        echo json_encode(["error" => "ID inválido"]);
        return;
    }

    $query = "SELECT * FROM productos WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0){
        $producto = mysqli_fetch_assoc($result);
        echo json_encode($producto);
    } else {
        echo json_encode(["error" => "Producto no encontrado"]);
    }
}
function listarProductos($conn){
    $query = "SELECT * FROM productos ORDER BY nombre ASC";
    $result = mysqli_query($conn, $query);

    $productos = [];

    while ($row = mysqli_fetch_assoc($result)){
        $productos[] = $row;
    }

    echo json_encode([
        "exito" => true,
        "productos" => $productos
    ]);
}
?>