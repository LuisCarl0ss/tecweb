<?php
include_once __DIR__.'/database.php';

$data = array();

if (isset($_GET['id'])) {
    $id = $conexion->real_escape_string($_GET['id']);

    $query = "SELECT * 
            FROM productos 
            WHERE id = $id";

    if ($result = $conexion->query($query)) {
        if ($row = $result->fetch_assoc()) {
            $data = $row;
        }
        $result->free();
    } else {
        die('Query Error: ' . mysqli_error($conexion));
    }
}

echo json_encode($data, JSON_PRETTY_PRINT);
?>