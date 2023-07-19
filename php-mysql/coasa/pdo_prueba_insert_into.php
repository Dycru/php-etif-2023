<?php 

try {
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');

	//Prepared Statements
	$statement = $conexion->prepare('INSERT INTO usuarios VALUES (null, )');
	$statement->execute();


}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>