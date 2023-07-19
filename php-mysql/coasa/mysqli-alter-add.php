<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_consola');

if ($conexion->connect_errno) {
	die('Lo siento, hubo un problema con el servidor');
} else {
	// Añadir campo "EDAD" a la tabla de usuarios si no existe
	$sql = "ALTER TABLE usuarios ADD COLUMN IF NOT EXISTS edad INT";
	$conexion->query($sql);

	// Actualizar registros con campo "EDAD" vacío y asignar valor NULL
	$sql = "UPDATE usuarios SET edad = NULL WHERE edad = ''";
	$conexion->query($sql);
}

$conexion->close();
?>
