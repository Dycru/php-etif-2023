<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['username'])) {
    // El usuario ya ha iniciado sesión, redireccionar al perfil o dashboard
    header('Location: profile.php');
    exit();
}

// Función para comprobar las credenciales de usuario
function verificarCredenciales($username, $password)
{
    // Verificar si las credenciales son válidas (ejemplo ficticio)
    $usuariosRegistrados = array(
        'usuario1' => 'contraseña1',
        'usuario2' => 'contraseña2',
        'usuario3' => 'contraseña3'
    );

    // Comprobar si el usuario existe en el array de usuarios registrados
    if (array_key_exists($username, $usuariosRegistrados)) {
        // Verificar la contraseña
        if ($usuariosRegistrados[$username] === $password) {
            return true; // Credenciales válidas
        }
    }

    return false; // Credenciales inválidas
}

// Procesar el formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (verificarCredenciales($username, $password)) {
        // Iniciar sesión y redireccionar al perfil o dashboard
        $_SESSION['username'] = $username;
        header('Location: profile.php');
        exit();
    } else {
        // Credenciales incorrectas, mostrar mensaje de error
        $error = 'Usuario o contraseña incorrectos';
    }
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
        <h1>Iniciar sesión</h1>
    </header>

    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Usuario" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Contraseña" required>
            </div>
            <button type="submit">Iniciar sesión</button>
            <?php if (isset($error)): ?>
                <p><?php echo $error; ?></p>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
