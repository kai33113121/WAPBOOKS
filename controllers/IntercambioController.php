<?php
require_once '../models/intercambio.php';

$intercambio = new intercambio($pdo);

$accion = $_GET['accion'] ?? 'listar';

switch ($accion) {
    case 'crear':
        include '../views/intercambio/crear.php';
        break;
    case 'guardar':
        $intercambio->crear($_POST['usuario_ofrece'], $_POST['usuario_recibe'], $_POST['libro_ofrece'], $_POST['libro_recibe'], $_POST['fecha_intercambio']);
        header("Location: ../controllers/IntercambioController.php");
        break;
    case 'editar':
        $inter = $intercambio->obtenerPorId($_GET['id_intercambio']);
        include '../views/intercambio/editar.php';
        break;
    case 'actualizar':
        $intercambio->actualizar($_POST['id_intercambio'], $_POST['usuario_ofrece'], $_POST['usuario_recibe'], $_POST['libro_ofrece'], $_POST['libro_recibe'], $_POST['fecha_intercambio']);
        header("Location: ../controllers/IntercambioController.php");
        break;
    case 'eliminar':
        $intercambio->eliminar($_GET['id_intercambio']);
        header("Location: ../controllers/IntercambioController.php");
        break;
    default:
        $intercambio = $intercambio->obtenerTodos();
        include '../views/intercambio/index.php';
        break;
}
