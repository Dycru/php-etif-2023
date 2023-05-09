<?php

//HERENCIA
//Superclase "Foo"
class Foo {
    public function printItem($string) {
        echo 'Foo: ' . $string . PHP_EOL;
    }
    public function printPHP(){
        echo 'PHP is great.' . PHP_EOL;
    }
}
//Subclase "bar"
class Bar extends Foo {
    //Este m�todo printItem($string) tambi�n se hereda pero hay "sobreescritura"
    public function printItem($string) {
        echo 'Bar: ' . $string . PHP_EOL;
    }
    //El m�todo printPHP() se hereda
}

$foo = new Foo(); //Instanciaci�n de la clase para crear objetos
$bar = new Bar();

$foo->printItem('baz'); // Salida: 'Foo: baz' es m�todo de class Foo()
$foo->printPHP();       // Salida: 'PHP is great' es m�todo de class Foo()

$bar->printItem('baz'); // Salida: 'Bar: baz' es m�todo de class Bar()
$bar->printPHP();       // Salida: 'PHP is great' es m�todo heredado de la class Foo()

?>