<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: views/home.php');
    exit;
}
// if ($_SESSION[''])
header('Location: views/home.php');
