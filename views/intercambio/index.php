
<?php
    require_once '../views/dashboard.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Listado de Productos</title>
    <link rel="stylesheet" href="../../public/css/styles.css">
</head>
<body>
    <div class="producto_container">
        <h2>Intercambios</h2>
        <a href="../controllers/IntercambioController.php?accion=crear">Nuevo intercambio</a>
        <table>
            <thead>
                <tr><th>Id_intercambio</th><th>usuario que ofrece</th><th>usuario que recibe</th><th>libro que ofrece</th><th>libro que recibe</th><th>fecha intercambio</th><th>acciones</th></tr>
            </thead>
            <tbody>
            <?php foreach ($intercambio as $i): ?>
                <tr>
                    <td><?= $i['id_intercambio'] ?></td>
                    <td><?= $i['usuario_ofrece'] ?></td>
                    <td><?= $i['usuario_recibe'] ?></td>
                    <td><?= $i['libro_ofrece'] ?></td>
                    <td><?= $i['libro_recibe'] ?></td>
                    <td><?= $i['fecha_intercambio'] ?></td>
                    <td><?= $i['acciones'] ?></td>
                    <td>
                        <a href="../controllers/IntercambioController.php?accion=editar&id_intercambio=<?= $i['id_intercambio'] ?>">Editar</a> |
                        <a href="../controllers/IntercambioController.php?accion=eliminar&id_intercambio=<?= $i['id_intercambio'] ?>" onclick="return confirm('¿Eliminar este producto?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
