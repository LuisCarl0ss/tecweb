<?php
include_once __DIR__.'/database.php';

$data = array();

if (isset($_POST['search'])) {
    $search = $conexion->real_escape_string($_POST['search']);

    // Consulta con LIKE para buscar coincidencias en nombre, marca o detalles
    $query = "SELECT * FROM productos 
              WHERE nombre LIKE '%$search%' 
                 OR marca LIKE '%$search%' 
                 OR detalles LIKE '%$search%'";

    if ($result = $conexion->query($query)) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row; // Agregar cada fila al array de respuesta
        }
        $result->free();
    } else {
        die('Query Error: ' . mysqli_error($conexion));
    }

    $conexion->close();
}

// Se devuelve un JSON en formato array
echo json_encode($data, JSON_PRETTY_PRINT);
?>
