<!DOCTYPE html>
<html lang="ca">
<head>
    <title>Formulari de Contacte</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="nom" placeholder="Nom">
        <span class="error"><?php echo $nomError; ?></span>

        <input type="email" name="corrreu" placeholder="Correu">
        <span class="error"><?php echo $corrreuError; ?></span>

        <input type="submit" name="submit" value="Enviar correu">
    </form>
</body>
</html>

    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtén los datos enviados por el formulario
    $nom = $_POST['nom'];
    $corrreu = $_POST['corrreu'];

    // Realiza cualquier acción que desees con los datos recibidos
    // ...

    // Puedes mostrar un mensaje de éxito o redirigir al usuario a otra página
    echo "¡Datos recibidos correctamente!";
}
?>