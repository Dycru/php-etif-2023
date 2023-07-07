<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['username'])) {
    // El usuario no ha iniciado sesión, redireccionar al formulario de inicio de sesión
    header('Location: login.php');
    exit();
}

// Obtener el nombre de usuario de la sesión
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
    <link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
    <header>
        <h1>Perfil de <?php echo $username; ?></h1>
    </header>

    <nav>
        <ul class="nav-bar">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="profile.php" class="active">Perfil</a></li>
            <li><a href="comprovar-datos.php">comrovar datos</a></li>
            <li><a href="logout.php">Cerrar sesión</a></li>
        </ul>
    </nav>

    <div class="container">
    <h2>Información de perfil</h2>
    <div class="profile-info">
        <input type="text" name="username" value="<?php echo $username; ?>">
        <input type="text" name="name" value="Joan">
        <input type="email" name="email" value="jocrufer28@gmail.com">
        <input type="text" name="registration_date" value="29 de Mayo de 2023">
    </div>
</div>

    </div>
</body>
</html>
