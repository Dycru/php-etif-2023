<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Procesar los datos del formulario de registro

	$username = $_POST['username'];
	$password = $_POST['password'];

	// Guardar los datos en la sesión (ejemplo ficticio)
	$_SESSION['username'] = $username;

	// Redireccionar al dashboard o página de inicio del usuario
	header('Location: dashboard.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Iniciar sesión</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<header>
        <h1>El Señor de los Anillos</h1>
    </header>

    <nav>
        <ul class="nav-bar">
            <li><a href="index.php" class="active">Inicio</a></li>
            <li><a href="about.php">Acerca de nosotros</a></li>
            <li><a href="login.php">Log in</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="index3.php">sign in</a></li>
			<li><a href="cookies.php">Politica de cookies</a></li>
		
        </ul>
    </nav>
	<div class="container">
		<h2>Iniciar sesión</h2>
		<form action="login.php" method="POST">
			<div class="form-group">
				<label for="username">Usuario:</label>
				<input type="text" id="username" name="username" required>
			</div>
			<div class="form-group">
				<label for="password">Contraseña:</label>
				<input type="password" id="password" name="password" required>
			</div>
			<button type="submit">Iniciar sesión</button>
		</form>
		<p>¿No tienes una cuenta? <a href="index3.php">Registrarse</a></p>
	</div>
</body>
</html>
