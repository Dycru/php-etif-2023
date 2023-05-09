<?php

# Los arrays asosiativos nos permiten acceder a sus valores de una forma mas explícita.

$profesor = array(
    'nombre' => 'Marc', 
    'telefono' => 665533, 
    'edad' => 37, 
    'apellido' => 'Esteve Garcia', 
    'ciudad' => 'Castelldefels'
);

//EJERCICIO
//Con el array anterior $profesor escribe la siguiente frase:
// "El profesor se llama Marc Esteve Garcia, su edad es 37, su telefono es 665533 e imparte clases en Castelldefels"
//Ejemplo $profesor['apellido'] daría Esteve


# Igual que en los arrays indexados, en los asosiativos también podemos modificar sus valores simplemente accediendo a ellos.
$profesor['apellido'] = 'Esteve García';

echo 'El nombre del profesor es ' . $profesor['nombre'] . ' ' . $profesor['apellido'] . ', su edad es ' . $profesor['edad'] . ', su teléfono es el ' . $profesor['telefono'] . ' y imparte clases en ' . $profesor['ciudad'] . '. <br>';

$array = array(
    "1" => 3,
    "2" => "dsada",
    "1.5" => 1.5,
    "booleano" => true,
);
echo $array["1"] . '<br>';
echo $array["2"] . '<br>';
echo $array["1.5"] . '<br>';
echo $array["booleano"] . '<br>';
var_dump($array);
// Sintaxis corta
echo '<br><br>';
$otravaraiblearray = [
    "clave" => "valor1",
    "clave2" => "valor2"
];
var_dump($otravaraiblearray); 

echo "El profesor se llama ".$profesor['nombre'].", su edad es ".$profesor['edad']." años, su teléfono es ".$profesor['telefono']." y imparte clases en ".$profesor['clases']."Castelldefels";

?>