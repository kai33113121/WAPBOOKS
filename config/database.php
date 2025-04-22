<?php

// conexion local
$host = 'localhost';
$db   = 'loginapp';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';


// conexion remota
// $host = 'sql312.byethost9.com';
// $db   = 'b9_38534586_loginAPP';
// $user = 'b9_38534586';
// $pass = 'Eileen123456789*';
// $charset = 'utf8mb4';



$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass, $options);
} catch (\PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

        
