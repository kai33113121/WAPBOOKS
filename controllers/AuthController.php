<?php
require_once __DIR__ . '/../models/Usuario.php';
require_once __DIR__ . '/../config/database.php';
session_start();

$usuario = new Usuario($pdo);

// Registro
if (isset($_POST['registrar'])) {
    $data = [
        'usuario' => $_POST['usuario'],
        'nombres' => $_POST['nombres'],
        'apellidos' => $_POST['apellidos'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'rol' => $_POST['rol'],
    ];
    $usuario->registrar($data);
    header('Location: ../views/usuarios/login.php');

    exit;
}

// Login
if (isset($_POST['login'])) {
    $user = $usuario->login($_POST['email'], $_POST['password']);
    if ($user) {
        $_SESSION['usuario'] = $user;
        header('Location: ../views/dashboard.php');
    } else {
        echo "Credenciales incorrectas.";
    }
}
