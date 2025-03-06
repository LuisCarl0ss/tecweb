<?php
include_once __DIR__.'/database.php';

$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['id'])) {
    $id = $conexion->real_escape_string($data['id']);
    $nombre = $conexion->real_escape_string($data['nombre']);
    $precio = $conexion->real_escape_string($data['precio']);
    $unidades = $conexion->real_escape_string($data['unidades']);
    $modelo = $conexion->real_escape_string($data['modelo']);
    $marca = $conexion->real_escape_string($data['marca']);
    $detalles = $conexion->real_escape_string($data['detalles']);
    $imagen = $conexion->real_escape_string($data['imagen']);

    $query = "UPDATE productos SET nombre = '$nombre', precio = $precio, unidades = $unidades, modelo = '$modelo', marca = '$marca', detalles = '$detalles', imagen = '$imagen' WHERE id = $id";

    if ($conexion->query($query)) {
        echo json_encode(['status' => 'success', 'message' => 'Producto actualizado']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al actualizar el producto']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'ID del producto no proporcionado']);
}
?>