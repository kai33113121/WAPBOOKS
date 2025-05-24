
<?php
require_once '../config/database.php';

class Libro {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function obtenerTodos() {
        $stmt = $this->pdo->query("SELECT * FROM productos ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM productos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function crear($nombre, $descripcion, $precio, $cantidad) {
        $stmt = $this->pdo->prepare("INSERT INTO productos (nombre, descripcion, precio, cantidad, creado_en) VALUES (?, ?, ?, ?, NOW())");
        return $stmt->execute([$nombre, $descripcion, $precio, $cantidad]);
    }

    public function actualizar($id, $nombre, $descripcion, $precio, $cantidad) {
        $stmt = $this->pdo->prepare("UPDATE productos SET nombre = ?, descripcion = ?, precio = ?, cantidad = ? WHERE id = ?");
        return $stmt->execute([$nombre, $descripcion, $precio, $cantidad, $id]);
    }

    public function eliminar($id) {
        $stmt = $this->pdo->prepare("DELETE FROM productos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
