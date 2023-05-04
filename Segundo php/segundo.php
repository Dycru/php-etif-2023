<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <h1>Videojuegos</h1>
    <ul>
        <li>
            <a href="https://www.epicgames.com/fortnite/es-ES/home"><img src="fortnite.jpg" alt="Fortnite"></a>
            <p>Fortnite</p>
        </li>
        <li>
            <a href="https://playvalorant.com/es-es/"><img src="valorant.jpg" alt="Valorant"></a>
            <p>Valorant</p>
        </li>
        <li>
        <a href="https://www.rockstargames.com/es/games/info/gtav" target="_blank"><img src="gtav.jpg" alt="gtav"></a>
        <p>GTA V</p>
        </li>
        <li>
        <a href="https://www.minecraft.net/" target="_blank"><img src="miencraft.jpg" alt="Minecraft"></a>
        <p>Minecraft</p>

        </li>
    </ul>

    <?php
    // C�digo PHP
    $consola = "Pc";
    echo "<p>Mi consola favorita es la " . $consola . "</p>";
    ?>

    <script src="videojuegos.js"></script>
</body>

</html>