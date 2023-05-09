<?php 

# Los arrays multidimensionales nos permiten tener arrays dentro de otros arrays, como una MATRIZ.
$hola = "Hola";

$amigos = array(
	array('Marc', 35, true),
	array('Héctor', 33, 3.14),
	array('Daniel', 38, $hola) //incluso puede tener otra variable dentro
);

# En este ejemplo accedemos primero al array amigos y luego al primer elemento dentro de amigos, despues accedemos al primer valor del array.

# Puedes llegar a tener los niveles que quieras, en este caso MATRIZ de 3x3 (filas x columnas)
echo $amigos[0][0] . '<br />';
echo $amigos[1][0] . '<br />';
echo $amigos[2][0] . '<br />';
echo $amigos[0][1] . '<br />';
echo $amigos[1][1] . '<br />';
echo $amigos[2][1] . '<br />';
echo $amigos[0][2] . '<br />';
echo $amigos[1][2] . '<br />';
echo $amigos[2][2] . '<br />';

?>