<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrarse</title>
	<link rel="stylesheet" type="text/css" href="index3.css">
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
        <li><a href="index4.html">Contador</a></li>
        
    </ul>
</nav>
<div class="container">
    <h2>Registrarse</h2>
    <form action="login.php" method="POST">
        <div class="form-group">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Registrarse</button>
    </form>
    <p>¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a></p>
</div>
</body>
</html>

<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    // Redireccionar al dashboard u otra página privada
    header('Location: dashboard.php');
    exit();
}

// Procesar el formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar las credenciales (ejemplo ficticio)
    $correctUsername = 'usuario';
    $correctPassword = 'contraseña';

    if ($username === $correctUsername && $password === $correctPassword) {
        // Iniciar sesión y redireccionar al dashboard
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
        exit();
    } else {
        // Credenciales incorrectas, mostrar mensaje de error
        $error = 'Usuario o contraseña incorrectos';
    }
}
?>
