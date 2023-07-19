<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_consola');

if ($conexion->connect_errno){
	die('Lo siento, hubo un problema con el servidor');
} else {
	$sql = "UPDATE usuarios SET id = 2 WHERE id = 5";
	$conexion->query($sql);
	if($conexion->affected_rows >= 1){
		echo 'Filas actualizadas: ' . $conexion->affected_rows;
	}
}
