<?php 

function calcular_area_triangulo($base, $altura){
	$resultado = ($base * $altura) / 2;
	return $resultado;
}

$area_triangulo = calcular_area_triangulo(10, 10);

echo 'El triangulo tiene un area de ' . $area_triangulo . ' metros cuadrados';

//EJERCICIO: CREAR UNA FUNCI�N PARA CALCULAR EL AREA DE UN HEX�GONO DE FORMULA = (PER�METRO * APOTEMA)/2 Y EL PER�METRO ES IGUAL A UN LADO *6

?>