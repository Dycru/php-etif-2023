<?php 

//Conexión
try {
	$conexion = new PDO('mysql:host=localhost;dbname=curso_contador', 'root', '');
} catch (PDOException $e) {
	echo 'ERROR: '. $e->getMessage();
	die();
}

//Consulta valor contador
$visitas = $conexion->prepare("
	SELECT contador FROM visitas WHERE id=1;
");

// Ejecutamos la consulta
$visitas->execute();
$visitas = $visitas->fetch();

//Consulta actualización contador
$sumar = $conexion->prepare("
	UPDATE visitas SET contador=contador+1 WHERE id=1;
");
$sumar->execute();


function contar_usuarios(){
	$archivo = 'contador.txt';

	if ( file_exists($archivo) ) {
		$cuenta = file_get_contents($archivo) + 1;
		file_put_contents($archivo, $cuenta);

		return $cuenta;
	} else {
		file_put_contents($archivo, 1);
		return 1;
	}
}



require 'index-view.php';

?>