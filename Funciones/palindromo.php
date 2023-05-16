<!DOCTYPE html>
<html>
<head>
  <title>Buscar palíndromos</title>
</head>
<style>
    body{
        text-align: center;
        background-color: lime;
    }
</style>
<body>
  <h1>Buscar palíndromos</h1>
  
  <form method="GET" action="">
    <input type="text" name="cadena" placeholder="Ingrese una cadena">
    <input type="submit" value="Buscar">
  </form>
  
  <?php
  function esPalindromo($cadena) {
    // Eliminar espacios y convertir a minúsculas
    $cadena = strtolower(str_replace(' ', '', $cadena));
  
    // Invertir la cadena
    $cadenaInvertida = strrev($cadena);
  
    // Comparar la cadena original con la invertida
    if ($cadena === $cadenaInvertida) {
      return true;
    } else {
      return false;
    }
  }
  
  if (isset($_GET['cadena'])) {
    $cadena = $_GET['cadena'];
    if (esPalindromo($cadena)) {
      echo "<p>La cadena \"$cadena\" es un palíndromo.</p>";
    } else {
      echo "<p>La cadena \"$cadena\" no es un palíndromo.</p>";
    }
  }
  ?>
</body>
</html>
