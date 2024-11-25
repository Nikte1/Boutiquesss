<?php 
session_start();

// Clave secreta de Google reCAPTCHA
$recaptcha_secret = '6LdKbYUqAAAAACqYA1GwhQl8esvLRTwh9RUTgoPf';

// Verificar reCAPTCHA
if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    $response = $_POST['g-recaptcha-response'];
    $remote_ip = $_SERVER['REMOTE_ADDR'];

    $response_data = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$response&remoteip=$remote_ip");
    $response_json = json_decode($response_data);

    if (!$response_json->success) {
        echo "Verificación CAPTCHA fallida. <a href='login.html'>Intentar de nuevo</a>";
        exit;
    }
} else {
    echo "No se ha completado el reCAPTCHA. <a href='login.html'>Intentar de nuevo</a>";
    exit;
}

// Obtener credenciales del formulario
$username = trim($_POST['username']); 
$password = trim($_POST['password']); 

// Usuarios con contraseñas cifradas
$users = [
    'nikte' => '$2y$10$Td3Ikuefs2PfUFdldeOR0.PowyTneO42EgbpgXaGaeeMaUBgVWK7m', // Cambia por el hash real de PUDINESDEFRESA
    'josueito' => '$2y$10$aDf7r5xUrlLscbzRBZk0RO7RXjcJo3e2RSwQKJBc6g8VUrDqKHWOu' // Cambia por el hash real de PANQUES
];

// Verificar usuario y contraseña
if (array_key_exists($username, $users) && password_verify($password, $users[$username])) {
    $_SESSION['user_id'] = ($username == 'nikte') ? 1 : 2; 
    $_SESSION['role'] = ($username == 'nikte') ? 'admin' : 'vendedor';
    
    $redirect_url = ($_SESSION['role'] == 'admin') ? 'index11.php' : 'ind.php';
    header("Location: $redirect_url");
    exit;
}

echo "Usuario o contraseña incorrectos. <a href='login.html'>Intentar de nuevo</a>";
?>
