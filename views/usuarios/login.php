<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../../public/css/login.css">

</head>
<body>
    <div class="form-container">
        <h2>Inicio de Sesión</h2>
        <form id="loginForm" method="POST" action="../../controllers/AuthController.php">
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit" name="login">Ingresar</button>
        </form>
        <p><a href="register.php">¿No tienes cuenta?</a></p>
    </div>
    <script src="../public/js/login.js"></script>
</body>
</html>
