<?php 

function suma($numero, $numero2){
	return $numero + $numero2;
}

// include 'vista.php'; //Warning, cuando el archivo "incluido" no es importante
require 'vista.php'; //Falta error, cuando el archivo es indispensable, sino el resto de la página no deberia visualizarse

// include_once 'vista.php' //Solo una vez
// require_once 'vista.php' //Solo una vez

/*
include y require hacen lo mismo, 
pero con include el resto de la página se ejecuta, 
con require es obligatorio que se realice bien para que el resto del código de la página se ejecute
*/
echo '<b>Hola</b>'

?>