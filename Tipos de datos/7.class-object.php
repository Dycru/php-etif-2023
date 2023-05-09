<?php

// Definimos la clase Profesor
class Profesor {
    // PROPIEDADES del objeto
    public $nombre;
    public $materia;

    // Atributos
    public $apellido = 'Esteve';
    public $altura = 1.75;

    // Modificadores de atributos "public/protected/private"
    // echo $nombre; // no funciona

    // Métodos
    public function hablar($mensaje) {
        echo $mensaje;
    }

    // Getters y Setters
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getMateria() {
        return $this->materia;
    }

    public function setMateria($materia) {
        $this->materia = $materia;
    }

    // Constructor
    public function __construct($nombre, $materia) {
        $this->nombre = $nombre;
        $this->materia = $materia;
    }
}

$profesor1 = new Profesor("Marc", "Desarrollo web"); // Creamos un objeto
echo 'El nombre del profesor es ' . $profesor1->nombre . ' ' . $profesor1->apellido . " con una altura de " . $profesor1->altura . 'm' . " que imparte la asignatura de " . $profesor1->materia . "<br>";
$profesor1->hablar("Un cordial saludo");

$profesor2 = new Profesor("Juan","MAtematicas"); // Creamos otro objeto
$profesor2->nombre = "Juan"; // Asignamos valores a las propiedades
$profesor2->materia = "Inglés";
echo "<br>";
echo 'El nombre del profesor es ' . $profesor2->nombre . " e imparte la asingatura " . $profesor2->materia;
$profesor2->hablar("<br>Buenas tardes");

// Creamos tres objetos de la clase Profesor
$profesor1 = new Profesor("MArc", "Dessarollo web");
$profesor2 = new Profesor("Juan", "Matematicas");
$profesor3 = new Profesor("Maria", " ");
// Imprimimos una frase con los profesores y las materias que imparten
echo "<br>";
echo "Los profesores son " . $profesor1->nombre . ", " . $profesor2->nombre . " y " . $profesor3->nombre . ". ";
echo "Imparten las materias de " . $profesor1->materia . ", " . $profesor2->materia . " y " . $profesor3->materia . " respectivamente.";
echo "El nombre del profesor es " . $profesor3->nombre . " y su materia es " . $maria->materia . ".";

?>
