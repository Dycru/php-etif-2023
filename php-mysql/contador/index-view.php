<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contador de Visitas</title>
	<link rel="stylesheet" href="estilos.css">
	<link href='https://fonts.googleapis.com/css?family=Oswald:700,400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<h1>Contador de Visitas</h1>
	<div class="visitantes">

		<p class="numero">
			<!-- <?php echo $num=contar_usuarios(); ?> -->
			<?php echo $visitas['contador']; ?>
		</p>
		
		<?php if($visitas['contador'] == 1): ?>
			<p class="texto">Visita</p>
		<?php else: ?>
			<p class="texto">Visitas</p>
		<?php endif; ?>
	</div>
</body>
</html>