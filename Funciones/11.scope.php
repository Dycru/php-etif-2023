<?php

$numero = 7; //Variable global = acceso desde cualquier parte del código excepto dentro de funciones

// function mostrarNumero(){
// 	echo $numero
// }
// mostrarNumero(); // Dará un error, ya que no encuentra $numero dentro de la función

# Para usarla dentro de la función pasar como parámentro
// function mostrarNumero($numero){
// 	echo $numero
// }
// mostrarNumero($numero);

# Lo mismo si definimos en la función y queremos utilizarla fuera
// function mostrarNumero(){
// 	$numero = 10;
// }
// mostrarNumero();
//echo $numero; //No se puede acceder porque la variable esta dentro de la función, necesitaremos el "return"

// function mostrarNumero(){
// 	$numero = 10;
// 	// return $numero;
// }

// echo mostrarNumero();

#RESUMEN:
//1. Por parámetro para entrar la variable en la función
//2. Con el return para sacar la variable de la función




function mostrar_numero() {
  // código para mostrar el número
  $numero = 123;
  echo $numero;
}

function mostrar_numero2() {
  // código para mostrar el número 2
  $numero = 2;
  echo $numero;
}

mostrar_numero(); // Llama a la función para mostrar el número
mostrar_numero2(); // Llama a la función para mostrar el número 2
?>
