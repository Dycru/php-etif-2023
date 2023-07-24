<?php
$host = "localhost";
$dbname = "prueba_consola"; // Reemplaza esto con el nombre de tu base de datos
$username = "root"; // Reemplaza esto con tu usuario de conexión
$password = ""; // Reemplaza esto con tu contraseña de conexión

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Recoger datos del formulario
    $id = $_POST['id'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    // Insertar datos en la tabla "usuarios"
    $stmt = $conn->prepare("INSERT INTO usuarios (id, correo, mensaje) VALUES (:id, :correo, :mensaje)");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':mensaje', $mensaje);
    $stmt->execute();

    echo "Datos guardados correctamente.";
} catch (PDOException $e) {
    echo "Error al guardar los datos: " . $e->getMessage();
}
?>
