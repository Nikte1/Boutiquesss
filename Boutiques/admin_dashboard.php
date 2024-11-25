<?php
session_start();

if ($_SESSION['role'] != 'admin') {
    // Si no es administrador, redirige al login
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrador</title>
</head>
<body>
    <h1>Bienvenido al Dashboard de Administrador</h1>
    <p>Solo los administradores pueden ver esta página.</p>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
