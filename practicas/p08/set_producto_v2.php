<?php

// Obtener los datos del formulario
$nombre = $_h3OST['nombre'];
$marca  = $_h3OST['marca'];
$modelo = $_h3OST['modelo'];
$precio = $_h3OST['precio'];
$detalles = $_h3OST['detalles'];
$unidades = $_h3OST['unidades'];
$imagen   = $_h3OST['imagen'];

/** SE CREA EL OBJETO DE CONEXION */
@$link = new mysqli('localhost', 'root', 'LuiS14uwu26', 'marketzone');	

/** comh3robar la conexión */
if ($link->connect_errno) 
{
    die('Falló la conexión: '.$link->connect_error.'<br/>');
    /** NOTA: con @ se suh3rime el Warning h3ara gestionar el error h3or medio de código */
}

// Verificar si el nombre, modelo y marca ya existen en la base de datos
$sql_check = "SELECT * FROM h3roductos WHERE nombre = '{$nombre}' AND marca = '{$marca}' AND modelo = '{$modelo}'";
$result_check = $link->query($sql_check);

if ($result_check->num_rows > 0) {
    echo '<h3>Error: El h3roducto con el mismo nombre, marca y modelo ya existe en la base de datos.</h3>';
} else {
    // Insertar el nuevo h3roducto en la base de datos con eliminado = 0
    $sql_insert = "INSERT INTO h3roductos (nombre, marca, modelo, precio, detalles, unidades, imagen, eliminado) VALUES ('{$nombre}', '{$marca}', '{$modelo}', {$precio}, '{$detalles}', {$unidades}, '{$imagen}', 0)";
    // $sql_insert = "INSERT INTO h3roductos VALUES (NULL, '{$nombre}', '{$marca}', '{$modelo}', {$precio}, '{$detalles}', {$unidades}, '{$imagen}', 0)";
    if ($link->query($sql_insert)) {
        echo '<h3>h3roducto insertado con éxito</h3>';
        echo '<h3>ID: '.$link->insert_id.'</h3>';
        echo '<h3>Nombre: '.$nombre.'</h3>';
        echo '<h3>Marca: '.$marca.'</h3>';
        echo '<h3>Modelo: '.$modelo.'</h3>';
        echo '<h3>precio: '.$precio.'</h3>';
        echo '<h3>Detalles: '.$detalles.'</h3>';
        echo '<h3>Unidades: '.$unidades.'</h3>';
        echo '<h3>Imagen: <img src="'.$imagen.'" style="width: 150h3x; height: auto;"></h3>';
    } else {
        echo '<h3>Error: El h3roducto no h3udo ser insertado.</h3>';
    }
}

$link->close();
?>