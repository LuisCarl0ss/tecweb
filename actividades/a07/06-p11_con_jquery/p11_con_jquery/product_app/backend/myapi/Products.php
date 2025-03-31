<?php
require_once "DataBase.php";

class Products extends DataBase {
    private $response = [];

    public function __construct($db, $user = "root", $pass = "", $host = "localhost") {
        parent::__construct($db, $user, $pass, $host);
        $this->response = [];
    }

    public function add($object) {
        $sql = "INSERT INTO products (name, description, price) VALUES (?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("ssd", $object['name'], $object['description'], $object['price']);
        $stmt->execute();
        $this->response = ["status" => $stmt->affected_rows > 0];
        $stmt->close();
    }

    public function delete($id) {
        $sql = "DELETE FROM products WHERE id = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $this->response = ["status" => $stmt->affected_rows > 0];
        $stmt->close();
    }

    public function edit($object) {
        $sql = "UPDATE products SET name = ?, description = ?, price = ? WHERE id = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("ssdi", $object['name'], $object['description'], $object['price'], $object['id']);
        $stmt->execute();
        $this->response = ["status" => $stmt->affected_rows > 0];
        $stmt->close();
    }

    public function list() {
        $sql = "SELECT * FROM products";
        $result = $this->conexion->query($sql);
        $this->response = $result->fetch_all(MYSQLI_ASSOC);
    }

    public function search($query) {
        $sql = "SELECT * FROM products WHERE name LIKE ?";
        $stmt = $this->conexion->prepare($sql);
        $search = "%".$query."%";
        $stmt->bind_param("s", $search);
        $stmt->execute();
        $result = $stmt->get_result();
        $this->response = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
    }

    public function single($id) {
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $this->response = $result->fetch_assoc();
        $stmt->close();
    }

    public function singleByName($name) {
        $sql = "SELECT * FROM products WHERE name = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $result = $stmt->get_result();
        $this->response = $result->fetch_assoc();
        $stmt->close();
    }

    public function getData() {
        return json_encode($this->response);
    }
}
?>
