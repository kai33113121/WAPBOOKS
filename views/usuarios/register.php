<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="../../public/css/styles.css">
</head>
<body>
    <div class="form-container">
        <h2>Registro de Usuario</h2>
        <form id="registroForm" method="POST" action="../../controllers/AuthController.php">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="text" name="nombres" placeholder="Nombres" required>
            <input type="text" name="apellidos" placeholder="Apellidos" required>
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <select name="rol" required>
                <option value="">Selecciona un rol</option>
                <option value="1">Administrativo</option>
                <option value="2">Operario</option>
            </select>
            <button type="submit" name="registrar">Registrarse</button>
        </form>
        <p><a href="login.php">¿Ya tienes cuenta?</a></p>
    </div>


    <script src="../public/js/register.js"></script>

</body>
</html>
