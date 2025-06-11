<!DOCTYPE html>
<html>
<head>
    <title>Validaciones con Fetch</title>
    <link rel="stylesheet" href="css/estilito.css">
</head>
<body>

<h2></h2>
<div class="container">
  <div class="cute-face">（｡♥‿♥｡）</div>
  <h2>Ejemplo de validaciones</h2>
   <form id="contactForm" action="process.php" method="post">
        Ingrese su nombre: <input type="text" name="name"><br><br>
        Ingrese su correo: <input type="text" name="email"><br>
        Ingrese su número telefónico (123-456-67890): <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br>
        <div class="captcha-box">
            <img src="captcha.php" alt="Captcha" class="captcha-img">
            <span style="font-size:1.5em;" class="cute-face">(ﾉ◕ヮ◕)ﾉ*:･ﾟ✧</span>
        </div>
        Ingrese los caracteres que muestra la imagen: <input type="text" name="captcha">
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>
<div id="response"></div>
<!-- Coloca esto justo antes de cerrar </body> -->
<script src="form-handler.js" defer></script>
</body>
</html>