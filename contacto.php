<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="contacto.css">
</head>
<body>
    <section class="container">
        <h1>Contacto</h1>
        <form action="enviar.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required></textarea>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    
    // Aquí puedes realizar alguna acción con los datos recibidos, como enviar un correo electrónico o almacenarlos en una base de datos
    
    // Redirigir al formulario de contacto con un parámetro para mostrar un mensaje de éxito
    header("Location: index.php?enviado=true");
    exit();
}
?>
