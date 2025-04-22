<?php
require_once __DIR__ . '/../config/database.php';

class Usuario {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function registrar($data) {
        $sql = "INSERT INTO usuarios (usuario, nombres, apellidos, email, password, rol)
                VALUES (:usuario, :nombres, :apellidos, :email, :password, :rol)";
        $stmt = $this->pdo->prepare($sql);
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $stmt->execute($data);
    }

    public function login($email, $password) {
        $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch();
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}
