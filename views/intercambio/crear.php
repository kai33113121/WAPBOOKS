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
    <div class="producto_container">

        <h2>Crear Producto</h2>
        <form method="POST" action="../controllers/IntercambioController.php?accion=guardar" onsubmit="return validarFormulario();">
            <label>Usuario que ofrece:</label><input type="text" name="usuario_ofrece" required><br>
            <label>Usuario que recibe:</label><input type="text" name="usuario_recibe" required><br>
            <label>libro que ofrece:</label><input type="text" name="libro_ofrece" required><br>
            <label>libro que recibe:</label><input type="text" name="libro_recibe" required><br>
            <label>fecha intercambio</label><input type="date" name="fecha_intercambio" required><br>
            <button type="submit">Guardar</button>
        </form>
        <a href="../controllers/IntercambioController.php">Volver</a>
    </div>
</body>
</html>
