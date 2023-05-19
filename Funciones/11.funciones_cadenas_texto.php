<?php 

$texto = "Adeu Andreu";
$textoMalicioso = "<script>
alert('¡Cuenta comprometida! Sus credenciales han sido enviadas a un servidor externo.');
</script>";

// echo $texto;
// echo $textoMalicioso; //Cuidado!!!Ejecuta script!

// echo htmlspecialchars($textoMalicioso); //Todos los caracteres especiales < > & '' "" se convierten en entidades HTML (revisar código fuente) para no ser ejecutados, como por ejemplo que el usuario pueda inyectar código <b>Hola</b> o peor aun, código Javascript que se pueda ejecutar
#EJEMPLO: la entidad de HTML de < es igual a &lt;
// echo "Texto antes";
$nombre=" Marc   ";

// echo $nombre;

// echo trim($nombre); //Quita los espacios al principio y al final
// echo "Texto después";
// echo $nombre;
$nombre=trim($nombre); //Para modificar la variable
// echo strlen($texto); //Cuenta los caracteres totales del string
// echo substr($texto, 5, 6); //Recorta la cadena de texto en este caso del primer string hasta el quinto. Podriamos almacenarlo en otra variable
#Primer parámetro la posición inicial de recorte
#Segundo parámentro la longitud que recorta (opcional, hasta el final)
// echo substr($texto, -3); //Desde el final
// echo strtoupper($texto); //Convierte a mayúsculas
// echo strtolower($texto); //Convierte a minúsculas
// echo strpos($texto, 'n', 7); //Posición del string
// echo strrev($texto);  //Invierte el texto "reverse"
$nuevoTexto = str_replace("Andreu", "siau", $texto); //Sustituye textos
echo $nuevoTexto;

###EJERCICIOS
#1. Escribe un programa que devuelva si un string es palíndromo (se escribe igual hacia delante y hacia detrás). Ejemplo: "sometemos" o "aibofobia".

#2. Escribe un programa que dado dos strings compruebe si los dos primeros caracteres y los dos últimos son iguales.

?>