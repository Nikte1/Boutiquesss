<?php
// Contraseñas que quieres cifrar
$passwords = [
    'PUDINESDEFRESA',
    'PANQUES'
];

// Generar y mostrar el hash de cada contraseña
foreach ($passwords as $password) {
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    echo "Contraseña: $password | Hash generado: $hashed_password<br>";
}
?>
