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
    <title>Dashboard</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }
        
        nav {
            background-color: #f4f4f4;
            padding: 10px;
        }
        
        .container {
            margin: 20px;
        }
        
        h1, h2 {
            margin: 0;
        }
        
        /* Estilos específicos del dashboard */
        .nav-bar {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        
        .nav-bar li {
            display: inline-block;
            margin-right: 10px;
        }
        
        .nav-bar li a {
            text-decoration: none;
            color: #333;
            padding: 5px 10px;
            border-radius: 3px;
        }
        
        .nav-bar li a.active {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenido, <?php echo $username; ?></h1>
    </header>

    <nav>
        <ul class="nav-bar">
            <li><a href="dashboard.php" class="active">Dashboard</a></li>
            <li><a href="profile.php">Perfil</a></li>
            <li><a href="comprovar-datos.php">comrovar datos</a></li>
            <li><a href="logout.php">Cerrar sesión</a></li>
        </ul>
    </nav>

    <div class="container">
        <h2>Contenido del dashboard</h2>
        <!-- Aquí puedes agregar el contenido específico del dashboard -->
    </div>
</body>
</html>
