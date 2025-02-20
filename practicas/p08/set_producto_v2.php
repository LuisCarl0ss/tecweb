<?php

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$marca  = $_POST['marca'];
$modelo = $_POST['modelo'];
$precio = $_POST['precio'];
$detalles = $_POST['detalles'];
$unidades = $_POST['unidades'];
$imagen   = $_POST['imagen'];

/** SE CREA EL OBJETO DE CONEXION */
@$link = new mysqli('localhost', 'root', 'LuiS14uwu26', 'marketzone');	

/** comprobar la conexión */
if ($link->connect_errno) 
{
    die('Falló la conexión: '.$link->connect_error.'<br/>');
    /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
}

// Verificar si el nombre, modelo y marca ya existen en la base de datos
$sql_check = "SELECT * FROM productos WHERE nombre = '{$nombre}' AND marca = '{$marca}' AND modelo = '{$modelo}'";
$result_check = $link->query($sql_check);

if ($result_check->num_rows > 0) {
    echo '<h3>Error: El producto con el mismo nombre, marca y modelo ya existe en la base de datos.</h3>';
} else {
    // Insertar el nuevo producto en la base de datos con eliminado = 0
    $sql_insert = "INSERT INTO productos (nombre, marca, modelo, precio, detalles, unidades, imagen, eliminado) VALUES ('{$nombre}', '{$marca}', '{$modelo}', {$precio}, '{$detalles}', {$unidades}, '{$imagen}', 0)";
    // $sql_insert = "INSERT INTO productos VALUES (NULL, '{$nombre}', '{$marca}', '{$modelo}', {$precio}, '{$detalles}', {$unidades}, '{$imagen}', 0)";
    if ($link->query($sql_insert)) {
        echo '<h3>Producto insertado con éxito</h3>';
        echo '<p>ID: '.$link->insert_id.'</p>';
        echo '<p>Nombre: '.$nombre.'</p>';
        echo '<p>Marca: '.$marca.'</p>';
        echo '<p>Modelo: '.$modelo.'</p>';
        echo '<p>Precio: '.$precio.'</p>';
        echo '<p>Detalles: '.$detalles.'</p>';
        echo '<p>Unidades: '.$unidades.'</p>';
        echo '<p>Imagen: <img src="'.$imagen.'" style="width: 150px; height: auto;"></p>';
    } else {
        echo '<h3>Error: El producto no pudo ser insertado.</h3>';
    }
}

$link->close();
?>