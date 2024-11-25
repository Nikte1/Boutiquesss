<?php
// Definir la contraseña en texto claro
$password = "123";  // Contraseña en texto claro que deseas encriptar

// Generar el hash de la contraseña
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Mostrar el hash generado
echo "El hash de la contraseña es: " . $hashedPassword;
?>
