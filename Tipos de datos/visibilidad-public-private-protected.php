<?php
// Definici�n de la superclase Animal
class Animal {
  protected $name; // Propiedad protegida que contendr� el nombre del animal

  // Constructor de la clase Animal, define la instanciaci�n del objeto
  public function __construct($name) {
    $this->name = $name;
  }

  // M�todo para obtener el nombre del animal
  public function getName() {
    return $this->name;
  }

  // M�todo que todos los animales tienen en com�n
  public function eat() {
    echo $this->name . " est� comiendo...\n";
  }
}

// Definici�n de la subclase Gato, que hereda de la clase Animal
class Gato extends Animal {
  // M�todo espec�fico de la clase Gato
  public function maullar() {
    echo $this->name . " est� maullando...\n";
  }
}

// Definici�n de la subclase Perro, que hereda de la clase Animal
class Perro extends Animal {
  // M�todo espec�fico de la clase Perro
  public function ladrar() {
    echo $this->name . " est� ladrando...\n";
  }
}

// Definici�n de la subclase Vaca, que hereda de la clase Animal
class Vaca extends Animal {
  // M�todo espec�fico de la clase Vaca
  public function mugir() {
    echo $this->name . " est� mugiendo...\n";
  }
}

// Creaci�n de objetos a partir de las subclases
$gato = new Gato("Michi");
$perro = new Perro("Firulais");
$vaca = new Vaca("Lola");

// Uso de los m�todos heredados de la superclase
echo $gato->getName() . "\n";
$gato->eat();

echo $perro->getName() . "\n";
$perro->eat();

echo $vaca->getName() . "\n";
$vaca->eat();

// Uso de los m�todos espec�ficos de las subclases
$gato->maullar();
$perro->ladrar();
$vaca->mugir();

//Ejercicio: Crea de la misma estructura, la superclase Vehiculo, y las subclases Coche, Avion y Barco. Vehiculo tendr� al menos 1 atributo y 2 metodos espec�ficos. Despu�s cada sbuclase Coche, Avion y Barco tendr�n al menos 1 atributo y 1 m�todo espec�fico

?>