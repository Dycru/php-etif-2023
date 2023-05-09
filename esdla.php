

<?php

// Definir algunos personajes como matrices asociativas
$gandalf = array(
    "nombre" => "Gandalf",
    "raza" => "maiar",
    "poder" => "magia"
    
);

$frodo = array(
    "nombre" => "Frodo",
    "raza" => "hobbit",
    "poder" => "anillo"
);

// Función para imprimir los detalles de un personaje
function imprimirPersonaje($personaje) {
    echo "<h2>{$personaje['nombre']}</h2>";
    echo "<p>Raza: {$personaje['raza']}</p>";
    echo "<p>Poder: {$personaje['poder']}</p>";
}

// Evento para lanzar una magia
function lanzarMagia($personaje) {
    echo "<p>{$personaje['nombre']} lanza un hechizo poderoso!</p>";
}

// Evento para usar el anillo
function usarAnillo($personaje) {
    echo "<p>{$personaje['nombre']} usa el anillo para volverse invisible!</p>";
}

// Imprimir detalles de algunos personajes
imprimirPersonaje($gandalf);
imprimirPersonaje($frodo);

// Lanzar un hechizo con Gandalf
lanzarMagia($gandalf);

// Usar el anillo con Frodo
usarAnillo($frodo);

?>
