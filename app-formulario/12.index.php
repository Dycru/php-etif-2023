<?php

$errores = '';
$enviado = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	if (!empty($nombre)) {
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
	} else {
		$errores .= 'Por favor, escribe un nombre. <br />';
	}

	if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

		if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
			$errores .= 'Por favor, escribe un correo válido. <br />';
		}
	} else {
		$errores .= 'Por favor, escribe un correo. <br />';
	}

	if (!empty($mensaje)) {
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripslashes($mensaje);
	} else {
		$errores .= 'Por favor, escribe el mensaje. <br />';
	}

	if (!$errores) {
		$enviar_a = 'tunombre@lahoguera.com';
		$asunto = 'Correo enviado desde la Comarca';
		$mensaje_preparado = "De: $nombre \n";
		$mensaje_preparado .= "Correo: $correo \n";
		$mensaje_preparado .= "Mensaje: " . $mensaje;

		//mail($enviar_a, $asunto, $mensaje_preparado);
		$enviado = 'true';
	}
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto desde la Comarca</title>
	<link rel="stylesheet" href="12.estilos.css">
</head>
<body>
    <h1>Contacto desde la Comarca</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" placeholder="Nombre" name="nombre" id="nombre" required>
        <br>
        <label for="correo">Correo electrónico:</label>
        <input type="email" placeholder="Correo electrónico" name="correo" id="correo" required>
        <br>
        <label for="mensaje">Mensaje:</label>
        <textarea name="mensaje" id="mensaje" placeholder="Escribe tu mensaje aquí" required></textarea>
        <br>
        <input type="submit" value="Enviar" name="submit">
    </form>

    <?php if ($errores): ?>
        <div class="error"><?php echo $errores; ?></div>
    <?php elseif ($enviado): ?>
        <div class="enviado">Mensaje enviado correctamente</div>
    <?php endif; ?>
</body>
</html>
