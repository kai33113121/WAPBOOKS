<?php
    require_once '../views/dashboard.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Producto</title>
    <link rel="stylesheet" href="../../public/css/styles.css">
    <script src="assets/js/validaciones.js"></script>
</head>
<body>
    <h1>Crear Producto</h1>
    <form method="POST" action="../controllers/ProductoController.php?accion=guardar" onsubmit="return validarFormulario();">
        <label>Nombre:</label><input type="text" name="nombre" required><br>
        <label>Descripción:</label><textarea name="descripcion"></textarea><br>
        <label>Precio:</label><input type="number" step="0.01" name="precio" required><br>
        <label>Cantidad:</label><input type="number" name="cantidad" required><br>
        <button type="submit">Guardar</button>
    </form>
    <a href="../controllers/ProductoController.php">Volver</a>
</body>
</html>
