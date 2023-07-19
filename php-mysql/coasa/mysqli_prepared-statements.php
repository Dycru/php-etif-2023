<?php
$conexion = new mysqli('localhost', 'root', '', 'prueba_consola');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$statement = $conexion->prepare("INSERT INTO usuarios(nombre, email) VALUES(?, ?)");

	// Remplazamos los placeholder ? con los valores que queremos usar.
	// Una s por placeholder que tengamos.
	// s = string
	// i = integer
	// d = double
	$statement->bind_param('ss', $nombre, $email);

	// Comprobamos que hayamos pasado un nombre y un email por URL
	if(isset($_GET['nombre']) && isset($_GET['email'])){
		$nombre = $_GET['nombre'];
		$email = $_GET['email'];
	} else {
		echo 'No se proporcionaron el nombre y el email.';
		exit; // Salir del script para evitar ejecución adicional
	}

	// Ejecutamos la sentencia.
	if($statement->execute()){
		if($statement->affected_rows >= 1){
			echo 'Filas agregadas: ' . $statement->affected_rows;
		} else {
			echo 'No se agregó ninguna fila.';
		}
	} else {
		echo 'Error al ejecutar la sentencia.';
	}
}
?>
