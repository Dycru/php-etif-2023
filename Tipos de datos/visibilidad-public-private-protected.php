<?php
// Definición de la superclase Animal
class Animal {
  protected $name; // Propiedad protegida que contendrá el nombre del animal

  // Constructor de la clase Animal, define la instanciación del objeto
  public function __construct($name) {
    $this->name = $name;
  }

  // Método para obtener el nombre del animal
  public function getName() {
    return $this->name;
  }

  // Método que todos los animales tienen en común
  public function eat() {
    echo $this->name . " está comiendo...\n";
  }
}

// Definición de la subclase Gato, que hereda de la clase Animal
class Gato extends Animal {
  // Método específico de la clase Gato
  public function maullar() {
    echo $this->name . " está maullando...\n";
  }
}

// Definición de la subclase Perro, que hereda de la clase Animal
class Perro extends Animal {
  // Método específico de la clase Perro
  public function ladrar() {
    echo $this->name . " está ladrando...\n";
  }
}

// Definición de la subclase Vaca, que hereda de la clase Animal
class Vaca extends Animal {
  // Método específico de la clase Vaca
  public function mugir() {
    echo $this->name . " está mugiendo...\n";
  }
}

// Creación de objetos a partir de las subclases
$gato = new Gato("Michi");
$perro = new Perro("Firulais");
$vaca = new Vaca("Lola");

// Uso de los métodos heredados de la superclase
echo $gato->getName() . "\n";
$gato->eat();

echo $perro->getName() . "\n";
$perro->eat();

echo $vaca->getName() . "\n";
$vaca->eat();

// Uso de los métodos específicos de las subclases
$gato->maullar();
$perro->ladrar();
$vaca->mugir();

//Ejercicio: Crea de la misma estructura, la superclase Vehiculo, y las subclases Coche, Avion y Barco. Vehiculo tendrá al menos 1 atributo y 2 metodos específicos. Después cada sbuclase Coche, Avion y Barco tendrán al menos 1 atributo y 1 método específico

?>