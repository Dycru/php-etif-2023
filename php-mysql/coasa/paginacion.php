<?php
// Datos de conexión a la base de datos
$host = "127.0.0.1"; // Nombre o dirección IP del host de la base de datos
$usuario = "articulos"; // Nombre de usuario de la base de datos
$base_de_datos = "curso_paginacion"; // Nombre de la base de datos

// Conexión a la base de datos
$conexion = new mysqli($host, $usuario ,$base_de_datos);

// Verificar si hay errores de conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}



echo "Los artículos se han insertado en la base de datos correctamente.";
?>
