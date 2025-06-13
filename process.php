<?php
session_start();
$name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
//$message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));
$phone = $_POST['phone'] ?? '';
$userCaptcha = $_POST['captcha'] ?? '';
$sessionCaptcha = $_SESSION['captcha'] ?? '';

$errors = [];

    // Validación del correo electrónico
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "El correo electrónico no es válido.";
    }


if (!preg_match('/^(\d{3}-\d{3}-\d{4}|\d{10})$/', $phone)) {
    $errors[] = "El teléfono debe tener el formato 123-456-7890 o 1234567890.";
}

//Validación del captchita (ignora espacios y no distingue mayúsculas/minúsculas)
if (trim(strtolower($userCaptcha)) !== trim(strtolower($sessionCaptcha))) {
    $errors[] = "El código Captcha es incorrecto.";
}

//Mostrar resultado
if (empty($errors)) {
    echo "<p style='color:green;'>¡Formulario enviado correctamente!</p>";
} else {
    foreach ($errors as $error) {
        echo "<p style='color:red;'>$error</p>";
    }
}
?>