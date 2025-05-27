<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}

$usuario = $_SESSION['usuario'];
echo "Bienvenido, {$usuario['nombres']} {$usuario['apellidos']}<br>";
echo "Rol: " . ($usuario['rol'] == 1 ? 'Administrativo' : 'Operario') . "<br>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/styles.css">
    <script src="assets/js/validaciones.js"></script>
    <title>Login</title>
</head>
<body>
    
    <nav id="menu">
        <ul>
            <li><a href='#'>Inicio</a></li>
            <li><a href='../controllers/ProductoController.php'>Productos</a></li>
            <li><a href="#">Libros</a></li>
            <li><a href="#">Gestinar Libros</a></li>
            <li><a href="#">Compras</a></li>
            <li><a href="#">Ventas</a></li>
            <li><a href="../controllers/IntercambioController.php">Intercambios</a></li>
            <li><a href="#">Reportes</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Usuarios</a></li>
            <li><a href="../index.php?logout=1">Cerrar Sesión</a></li>
        </ul>

    </nav>
</body>
</html>

