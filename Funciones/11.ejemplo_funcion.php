<?php 

function calcular_area_triangulo($base, $altura){
	$resultado = ($base * $altura) / 2;
	return $resultado;
}

$area_triangulo = calcular_area_triangulo(10, 10);

echo 'El triangulo tiene un area de ' . $area_triangulo . ' metros cuadrados';

//EJERCICIO: CREAR UNA FUNCIÓN PARA CALCULAR EL AREA DE UN HEXÁGONO DE FORMULA = (PERÍMETRO * APOTEMA)/2 Y EL PERÍMETRO ES IGUAL A UN LADO *6
function calcular_area_hexagono($lado, $apotema) {
	$perimetro = $lado * 6;
	$area = ($perimetro * $apotema) / 2;
	return $area;
  }
  $area = calcular_area_hexagono(5, 4.5); //calcula el area de un hexagono con un lado de 5 y un apotema de 4.5
  echo "El área del hexágono es: " . $area;
  