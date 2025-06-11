<?php
session_start();

// Generar código aleatorio de 6 dígitos
$code = strval(rand(100000, 999999));
$_SESSION['captcha'] = $code;

// Crear imagen
$width = 120;
$height = 40;
$image = imagecreatetruecolor($width, $height);

// Colores
$bgColor = imagecolorallocate($image, 255, 255, 255);
$textColor = imagecolorallocate($image, 0, 0, 0);
$lineColor = imagecolorallocate($image, 200, 200, 200);

// Fondo blanco
imagefilledrectangle($image, 0, 0, $width, $height, $bgColor);

// Líneas de ruido
for ($i = 0; $i < 5; $i++) {
    imageline($image, 0, rand(0, $height), $width, rand(0, $height), $lineColor);
}

imagestring($image, 5, 30, 12, $code, $textColor);

header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);
?>