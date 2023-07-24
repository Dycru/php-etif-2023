<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
    <link rel="stylesheet" type="text/css" href="estiloss.css">
</head>
<body>
    <h2>Registro de Usuarios</h2>
    <form action="guardar.php" method="POST">
        <label for="nombre">ID:</label>
        <input type="text" name="id" required><br>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" required><br>

        <label for="mensaje">Mensaje:</label>
        <input type="mensaje" name="mensaje" required><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>
