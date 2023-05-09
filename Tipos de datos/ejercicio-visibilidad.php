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

// Definición de la clase CentralNuclear
class CentralNuclear {
  // Atributos de la clase CentralNuclear
  private $nombre;
  private $ubicacion;

  // Métodos de la clase CentralNuclear
  public function __construct($nombre, $ubicacion) {
    $this->nombre = $nombre;
    $this->ubicacion = $ubicacion;
  }

  public function getNombre() {
    return $this->nombre;
  }

  public function getUbicacion() {
    return $this->ubicacion;
  }

  public function generarEnergia() {
    echo "La central nuclear está generando energía...";
  }
}

// Creación de objetos de las clases Coche, Avion, Barco y CentralNuclear
$coche = new Coche("Ford", 4);
$avion = new Avion("Boeing", 2);
$barco = new Barco("Yamaha", "Velero");
$centralNuclear = new CentralNuclear("Central Nuclear de Almaraz", "Cáceres");

// Acceso a métodos y atributos de los objetos creados
echo "El coche de marca " . $coche->getMarca() . " tiene " . $coche->getNumPuertas() . " puertas.";
echo "<br>";
echo "El avión de marca " . $avion->getMarca() . " tiene " . $avion->getNumMotores() . " motores.";
echo "<br>";
echo "El barco de marca " . $barco->getMarca() . " es un " . $barco->getTipo() . ".";
echo "<br>";
echo "La central nuclear " . $centralNuclear->getNombre() . " está ubicada en " . $centralNuclear->getUbicacion() . ".";
echo "<br>";

// Acceso a métodos específicos de cada objeto
$coche->cambiarAceite();
echo "<br>";
$avion->despegar();
echo "<br>";
$barco->anclar();
echo "<br>";
$centralNuclear->generarEnergia();

?>