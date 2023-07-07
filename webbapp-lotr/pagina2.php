<?php 
session_start();

if ($_SESSION) {
	$nombre = $_SESSION['nombre'];
	echo "<h1>Hola $nombre</h1>";
} else {
	echo '<h1>No has iniciado sesión</h1>';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Página 2</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-image: url(1282832.jpg);
			margin: 0;
			padding: 0;
		}

		.container {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
			text-align: center;
		}

		h1 {
			color: #ffbb00;
		}

		p {
			color: white
		}

		a {
			display: inline-block;
			margin-top: 20px;
			

			color: #ffbb00; ;
			text-decoration: none;
			
		}

		a:hover {
			background-color: #45a049;
		}
		header {
    background-color: #333;
    color: #ffbb00;
    padding: 20px;
    text-align: center;
}

nav {
    background-color: #666;
    color: #fff;
    padding: 10px;
    text-align: center;
}

.nav-bar {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.nav-bar li {
    display: inline;
    margin-right: 10px;
}

.nav-bar li a {
    color: #ffbb00;
    text-decoration: none;
}

.nav-bar li a:hover {
    text-decoration: underline;
}

section {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    
}
	</style>
</head>
<body>
<header>
        <h1>El Señor de los Anillos</h1>
    </header>

    <nav>
        <ul class="nav-bar">
            <li><a href="index.php" class="active">Inicio</a></li>
            <li><a href="about.php">Acerca de nosotros</a></li>
            <li><a href="services.php">Servicios</a></li>
            <li><a href="contacto.php">Contacto</a></li>
			<li><a href="index3.php">sign in</a></li>
			<li><a href="cookies.php">Politica de cookies</a></li>
        </ul>
    </nav>
	<div class="container">
		<?php if ($_SESSION) : ?>
			<h1>Hola <?php echo $nombre; ?></h1>
		<?php else : ?>
			<h1>No has iniciado sesión</h1>
		<?php endif; ?>
		<a href="cerrar.php">Cerrar sesión</a>
	</div>
</body>
</html>
