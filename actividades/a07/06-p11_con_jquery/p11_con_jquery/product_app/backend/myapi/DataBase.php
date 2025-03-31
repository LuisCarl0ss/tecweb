<?php
abstract class DataBase {
    protected $conexion;

    public function __construct($db, $user, $pass, $host = "localhost") {
        $this->conexion = new mysqli($host, $user, $pass, $db);
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }
}
?>
