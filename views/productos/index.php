
<?php
    require_once '../views/dashboard.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Listado de Productos</title>
    <link rel="stylesheet" href="../public/css/styles.css">
</head>
<body>
    <h1>Productos</h1>
    <a href="../controllers/ProductoController.php?accion=crear">Nuevo Producto</a>
    <div class="producto_container">
        <table>
            <thead>
                <tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Cantidad</th><th>Acciones</th></tr>
            </thead>
            <tbody>
            <?php foreach ($productos as $p): ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><?= $p['nombre'] ?></td>
                    <td>$<?= $p['precio'] ?></td>
                    <td><?= $p['cantidad'] ?></td>
                    <td>
                        <a href="../controllers/ProductoController.php?accion=editar&id=<?= $p['id'] ?>">Editar</a> |
                        <a href="../controllers/ProductoController.php?accion=eliminar&id=<?= $p['id'] ?>" onclick="return confirm('¿Eliminar este producto?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
