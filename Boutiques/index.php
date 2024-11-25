<?php
require 'sesion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Principal - Boutique</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            background: #f5f1e1;
            color: #5a4d3b;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin: 30px 0;
            font-size: 2.5em;
            color: #d89e6e;
            text-transform: uppercase;
        }

        nav {
            text-align: center;
            background: #fff5e1;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline-block;
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #5a4d3b;
            font-size: 1.2em;
            padding: 10px 20px;
            border: 2px solid #d89e6e;
            border-radius: 5px;
            transition: background 0.3s, color 0.3s;
        }

        nav ul li a:hover {
            background: #d89e6e;
            color: white;
            border-color: #d89e6e;
        }

        nav ul li a:active {
            background: #b47c52;
            border-color: #b47c52;
        }

        /* Contenedor principal */
        .container {
            display: flex;
            margin: 20px;
            justify-content: space-between;
        }

        /* Filtros (eliminado) */
        .filters {
            display: none; /* Ocultar filtros de colores y tallas */
        }

        /* Galería de imágenes (eliminado) */
        .image-section {
            display: none; /* Ocultar galería de imágenes */
        }

        .image-item {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Panel de Administración - Boutique</h2>
    <nav>
        <ul>
            <li><a href="crud_clientes.php">Clientes</a></li>
            <li><a href="crud_inventarios.php">Inventarios</a></li>
            <li><a href="crud_proveedores.php">Proveedores</a></li>
            <li><a href="crud_pedidos.php">Pedidos</a></li>
            <li><a href="crud_ventas.php">Ventas</a></li>
            <li><a href="logout.php">Cerrar Sesión</a></li>
        </ul>
    </nav>
    
    <div class="container">
        <!-- Filtros (eliminados) -->
        <aside class="filters">
            <!-- Filtros de colores y tallas eliminados -->
        </aside>

        <!-- Galería de imágenes (eliminada) -->
        <section class="image-section">
            <!-- Galería de imágenes eliminada -->
        </section>
        
    </div>
</body>
</html>
