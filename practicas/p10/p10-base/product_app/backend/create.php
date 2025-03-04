<?php
include_once __DIR__.'/database.php';
header('Content-Type: application/json'); // Se indica que la respuesta será JSON

$producto = file_get_contents('php://input');

if (!empty($producto)) {
    $jsonOBJ = json_decode($producto, true); // Convertir JSON a array asociativo

    if (!$jsonOBJ) {
        echo json_encode(["estado" => "error", "mensaje" => "JSON inválido."]);
        exit;
    }

    // Validaciones de los datos
    if (!isset($jsonOBJ["nombre"], $jsonOBJ["marca"], $jsonOBJ["modelo"], $jsonOBJ["precio"], $jsonOBJ["unidades"])) {
        echo json_encode(["estado" => "error", "mensaje" => "Faltan campos obligatorios."]);
        exit;
    }

    // Se asignan variables
    $nombre = $jsonOBJ["nombre"];
    $marca = $jsonOBJ["marca"];
    $modelo = $jsonOBJ["modelo"];
    $precio = floatval($jsonOBJ["precio"]);
    $unidades = intval($jsonOBJ["unidades"]);
    $detalles = isset($jsonOBJ["detalles"]) ? $jsonOBJ["detalles"] : "";
    $imagen = isset($jsonOBJ["imagen"]) ? $jsonOBJ["imagen"] : "ruta/imagen_default.jpg";

    // Verificación de producto existente con estado eliminado = 0
    $query_check = $conexion->prepare("SELECT id FROM productos WHERE ((nombre = ? AND marca = ?) OR (marca = ? AND modelo = ?)) AND eliminado = 0");
    $query_check->bind_param("ssss", $nombre, $marca, $marca, $modelo);
    $query_check->execute();
    $query_check->store_result();

    if ($query_check->num_rows > 0) {
        echo json_encode(["estado" => "error", "mensaje" => "El producto ya existe."]);
        exit;
    }

    // Insertar el nuevo producto
    $query = $conexion->prepare("INSERT INTO productos (nombre, marca, modelo, precio, unidades, detalles, imagen, eliminado) VALUES (?, ?, ?, ?, ?, ?, ?, 0)");
    $query->bind_param("ssssiss", $nombre, $marca, $modelo, $precio, $unidades, $detalles, $imagen);

    if ($query->execute()) {
        echo json_encode(["estado" => "exito", "mensaje" => "Producto agregado con éxito."]);
    } else {
        echo json_encode(["estado" => "error", "mensaje" => "Error al insertar el producto."]);
    }

    $query->close();
    $conexion->close();
} else {
    echo json_encode(["estado" => "error", "mensaje" => "No se recibieron datos."]);
}
?>
