<?php 

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril', 
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

echo count($meses);//función que cuenta valores de array
echo "<br>";
$ultimo_mes = count($meses) - 1;  //guardas el último valor
echo $meses[$ultimo_mes]; //muestras la última posición del array
echo "<br>";

#Recordatorio de funciones
echo implode($meses);
echo "<br>";
echo gettype($meses);
echo "<br>";
var_dump($meses);

?>