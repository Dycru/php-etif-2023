<?php

// Definición de la clase Vehiculo
class Vehiculo {
  // Atributos de la clase Vehiculo
  protected $marca;

  // Métodos de la clase Vehiculo
  public function __construct($marca) {
    $this->marca = $marca;
  }

  public function getMarca() {
    return $this->marca;
  }

  public function acelerar() {
    echo "El vehículo está acelerando...";
  }
}

// Definición de la clase Coche, que extiende de la clase Vehiculo
class Coche extends Vehiculo {
  // Atributos de la clase Coche
  private $numPuertas;

  // Métodos de la clase Coche
  public function __construct($marca, $numPuertas) {
    parent::__construct($marca);
    $this->numPuertas = $numPuertas;
  }

  public function getNumPuertas() {
    return $this->numPuertas;
  }

  public function cambiarAceite() {
    echo "Se ha cambiado el aceite del coche.";
  }
}

// Definición de la clase Avion, que extiende de la clase Vehiculo
class Avion extends Vehiculo {
  // Atributos de la clase Avion
  private $numMotores;

  // Métodos de la clase Avion
  public function __construct($marca, $numMotores) {
    parent::__construct($marca);
    $this->numMotores = $numMotores;
  }

  public function getNumMotores() {
    return $this->numMotores;
  }

  public function despegar() {
    echo "El avión está despegando...";
  }
}

// Definición de la clase Barco, que extiende de la clase Vehiculo
class Barco extends Vehiculo {
  // Atributos de la clase Barco
  private $tipo;

  // Métodos de la clase Barco
  public function __construct($marca, $tipo) {
    parent::__construct($marca);
    $this->tipo = $tipo;
  }

  public function getTipo() {
    return $this->tipo;
  }

  public function anclar() {
    echo "El barco está anclando...";
  }
}

// Creación de objetos de las clases Coche, Avion y Barco
$coche = new Coche("Ford", 4);
$avion = new Avion("Boeing", 2);
$barco = new Barco("Yamaha", "Velero");

// Acceso a métodos y atributos de los objetos
echo $coche->getMarca(); // Imprime "Ford"
echo $avion->getNumMotores(); // Imprime 2
echo $barco->getTipo(); // Imprime "Velero"
$coche->acelerar(); // Imprime "El vehículo está acelerando..."
$avion->despegar(); // Imprime "El avión está despegando..."
$barco->anclar(); // Imprime "El barco está anclando..."
$coche->cambiarAceite(); // Imprime "Se ha cambiado el aceite del coche."
