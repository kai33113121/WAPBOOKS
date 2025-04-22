<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: ../views/usuarios/login.php');
    exit;
}
// if ($_SESSION[''])
header('Location: ../views/usuarios/login.php');
