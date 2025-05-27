
<?php
require_once '../config/database.php';

class intercambio {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function obtenerTodos() {
        $stmt = $this->pdo->query("SELECT * FROM intercambio ORDER BY id_intercambio DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM intercambio WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function crear($usuario_ofrece, $usuario_recibe, $libro_ofrece, $libro_recibe, $fecha_intercambio) {
        $stmt = $this->pdo->prepare("INSERT INTO intercambio (usuario_ofrece, usuario_recibe, libro_ofrece, libro_recibe, fecha_intercambio) VALUES (?, ?, ?, ?, ?, NOW())");
        return $stmt->execute([$usuario_ofrece, $usuario_recibe, $libro_ofrece, $libro_recibe, $fecha_intercambio]);
    }

    public function actualizar($usuario_ofrece, $usuario_recibe, $libro_ofrece, $libro_recibe, $fecha_intercambio) {
        $stmt = $this->pdo->prepare("UPDATE intercambio SET usuario_ofrece = ?, usuario_recibe = ?, libro_ofrece = ?, libro_recibe = ?, fecha_intercambio = ? WHERE id = ?");
        return $stmt->execute([$usuario_ofrece, $usuario_recibe, $libro_ofrece, $libro_recibe, $fecha_intercambio]);
    }

    public function eliminar($id) {
        $stmt = $this->pdo->prepare("DELETE FROM intercambio WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
