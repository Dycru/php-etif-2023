<?php 

try {
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', '');
	echo "Conexion OK";
}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>