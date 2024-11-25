<?php
session_start();

if ($_SESSION['role'] != 'vendedor') {
    // Si no es vendedor, redirige al login
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Vendedor</title>
</head>
<body>
    <h1>Bienvenido al Dashboard de Vendedor</h1>
    <p>Solo los vendedores pueden ver esta página.</p>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
