<?php
    require_once '../views/dashboard.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
    <link rel="stylesheet" href="../../public/css/styles.css">
    <script src="assets/js/validaciones.js"></script>
</head>
<body>
    <div class="producto_container">

        <h2>Editar Producto</h2>
        <form method="POST" action="../controllers/ProductoController.php?accion=actualizar" onsubmit="return validarFormulario();">
            <input type="hidden" name="id" value="<?= $prod['id'] ?>">
            <label>Nombre:</label><input type="text" name="nombre" value="<?= $prod['nombre'] ?>" required><br>
            <label>Descripción:</label><textarea name="descripcion"><?= $prod['descripcion'] ?></textarea><br>
            <label>Precio:</label><input type="number" step="0.01" name="precio" value="<?= $prod['precio'] ?>" required><br>
            <label>Cantidad:</label><input type="number" name="cantidad" value="<?= $prod['cantidad'] ?>" required><br>
            <button type="submit">Actualizar</button>
        </form>
        <a href="../controllers/ProductoController.php">Volver</a>
    </div>
</body>
</html>
