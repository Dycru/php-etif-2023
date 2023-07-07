<?php 

// Ejercicio:
// El resultado de la consulta debe dar del segundo registro al 4º registro y mostrar como este texto :
// Resultado:
// pepito de la id 2 tiene el correo pepito@correo.com
// Cristina de la id 3 tiene el correo cristina@pr0j3ct.com
// Rafael de la id 4 tiene el correo rafael@correo.com

try {
	
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');

	// Consulta
	$resultados = $conexion->query("SELECT * FROM usuarios WHERE id BETWEEN 2 AND 4"); 

	foreach($resultados as $fila){
		echo $fila['nombre'] . " de la id: ". $fila['id']  . " tiene el correo: ". $fila['email'] . "<br />";
	}

} catch(PDOException $e){
	// Obtener errores
	echo "Error: " . $e->getMessage();
}
?>