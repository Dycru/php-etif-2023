<!DOCTYPE html>
<html lang="ca">
<head>
    <title>Formulari de Contacte</title>
</head>
<body>
    <form action="vista.php" method="POST">
        <input type="text" name="nom" placeholder="Nom">
        <input type="email" name="corrreu" placeholder="Correu">
        <input type="submit" name="submit" value="Enviar correu">
    </form>
</body>
</html>

<?php
$nom = $corrreu = "";
$nomError = $corrreuError = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Filtrar y validar el campo "Nom"
    if (empty($_POST['nom'])) {
        $nomError = "El campo Nom es obligatorio";
    } else {
        $nom = sanitizeInput($_POST['nom']);
        // Puedes realizar otras validaciones adicionales para el campo "Nom"
    }

    // Filtrar y validar el campo "Correu"
    if (empty($_POST['corrreu'])) {
        $corrreuError = "El campo Correu es obligatorio";
    } else {
        $corrreu = sanitizeInput($_POST['corrreu']);
        if (!filter_var($corrreu, FILTER_VALIDATE_EMAIL)) {
            $corrreuError = "El correo electrónico ingresado no es válido";
        }
    }

    // Si no hay errores, puedes realizar otras acciones con los datos
    if (empty($nomError) && empty($corrreuError)) {
        // Realiza cualquier acción adicional que desees con los datos
        // ...

        // Muestra un mensaje de éxito
        echo "¡Todos los campos son correctos!";
    }
}

// Función para realizar el saneamiento de los datos de entrada
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
