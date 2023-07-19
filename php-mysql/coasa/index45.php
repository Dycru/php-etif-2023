<?php

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    if (!empty($nombre)) {
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor escribe un nombre <br />';
    }

    if (!empty($correo)) {
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Por favor escribe un correo válido <br />';
        }
    } else {
        $errores .= 'Por favor escribe un correo <br />';
    }

    if (!empty($mensaje)) {
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
    } else {
        $errores .= 'Por favor escribe el mensaje <br />';
    }

    if (!$errores) {
        // Configurar la conexión a la base de datos (ejemplo con PDO)
        $servidor = '127.0.0.1';
        $base_de_datos = 'prueva consola';
        $nombre = 'nombre';
        $Correo = 'Correo';

        try {
            $conexion = new PDO("mysql:host=http://localhost/phpmyadmin/;dbname=$base_de_datos;prueba_consola", $usuario, $correo);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Preparar la consulta utilizando un prepared statement
            $consulta = $conexion->prepare("INSERT INTO mensajes (nombre, correo, mensaje) VALUES (?, ?, ?)");
            $consulta->execute([$nombre, $correo, $mensaje]);

            // Cerrar la conexión
            $conexion = null;

            $enviado = 'true';
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    }
}

require 'index.view.php';

?>
