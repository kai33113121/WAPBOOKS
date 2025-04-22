
<?php
require_once '../models/Producto.php';

$producto = new Producto($pdo);

$accion = $_GET['accion'] ?? 'listar';

switch ($accion) {
    case 'crear':
        include '../views/productos/crear.php';
        break;
    case 'guardar':
        $producto->crear($_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['cantidad']);
        header("Location: ../controllers/ProductoController.php");
        break;
    case 'editar':
        $prod = $producto->obtenerPorId($_GET['id']);
        include '../views/productos/editar.php';
        break;
    case 'actualizar':
        $producto->actualizar($_POST['id'], $_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['cantidad']);
        header("Location: ../controllers/ProductoController.php");
        break;
    case 'eliminar':
        $producto->eliminar($_GET['id']);
        header("Location: ../controllers/ProductoController.php");
        break;
    default:
        $productos = $producto->obtenerTodos();
        include '../views/productos/index.php';
        break;
}
