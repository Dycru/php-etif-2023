<!DOCTYPE html>
<html>
<head>
    <title>Verificación de cadenas</title>
</head>
<style>
    body{
        text-align: center;
        background-color: mediumspringgreen;
    }
    h1{
        text-align: center;
    }
</style>
<body>
    <h1>Comprobador</h1>
    <form method="get" action="">
        <label for="cadena1">Cadena 1:</label>
        <input type="text" name="cadena1" id="cadena1" required><br><br>
        
        <label for="cadena2">Cadena 2:</label>
        <input type="text" name="cadena2" id="cadena2" required><br><br>
        
        <input type="submit" name="submit" value="Verificar">
    </form>
    
    <?php
    if (isset($_GET['submit'])) {
        $cadena1 = $_GET['cadena1'];
        $cadena2 = $_GET['cadena2'];
        
        if (verificarCadenas($cadena1, $cadena2)) {
            echo "Los dos primeros y los dos últimos caracteres son iguales en las dos cadenas.";
        } else {
            echo "Los dos primeros y los dos últimos caracteres no son iguales en las dos cadenas.";
        }
    }
    
    function verificarCadenas($cadena1, $cadena2) {
        // Verificar si las cadenas tienen al menos 2 caracteres
        if (strlen($cadena1) < 2 || strlen($cadena2) < 2) {
            return false;
        }
      
        // Obtener los dos primeros caracteres de cada cadena
        $primerosCaracteres1 = substr($cadena1, 0, 2);
        $primerosCaracteres2 = substr($cadena2, 0, 2);
      
        // Obtener los dos últimos caracteres de cada cadena
        $ultimosCaracteres1 = substr($cadena1, -2);
        $ultimosCaracteres2 = substr($cadena2, -2);
      
        // Verificar si los dos primeros y los dos últimos caracteres son iguales
        if ($primerosCaracteres1 === $primerosCaracteres2 && $ultimosCaracteres1 === $ultimosCaracteres2) {
            return true;
        } else {
            return false;
        }
    }
    ?>
</body>
</html>
