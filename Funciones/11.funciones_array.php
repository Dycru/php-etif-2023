<?php 

// $amigo = array('telefono' => 6545647, 'altura'=>175, 'ciudad'=>'Castelldefels');

// extract($amigo); //extrae las claves de un array asociativo como si fueran variables
// echo $telefono;
// echo $altura;
// echo $ciudad;

// $semana = array(
// 	'Lunes', 'Martes', 'Miercoles',
//  	'Jueves', 'Viernes', 'Sabado', 'Domingo'
// );

// $ultimo_dia = array_pop($semana); //Extraer el último valor del array en $semana y guardandolo en la variable $ultimo_dia
// foreach ($semana as $dia) {
// 	echo $dia . '<br />';
// }
// echo $ultimo_dia;

// $fruta = array("naranja", "plátano");
// array_push($fruta, "manzana", "arándano");
// print_r($fruta);

// echo join('<br />', $semana); //Une los valores de array con un salto de linea

// echo count($semana); //cuenta cuandos dias hay en el array $semana

// rsort($semana);
// echo join(', ', $semana);

// $semana_reverse = array_reverse($semana); //Orden inverso del array
// echo join(', ', $semana_reverse);


###EJERCICIO
// Genera una enumeración de $semana como un join() pero que el último valor coloque una conjunción "y" en vez de una coma ","

$semana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
$ultimo_dia = array_slice($semana, -1);
$otros_dias = array_slice($semana, 0, -1);
echo implode(', ', $otros_dias) . ' y ' . $ultimo_dia[0];

?>
