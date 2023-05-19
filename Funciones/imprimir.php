<?php
class Impressora {
    public $tinta = true;
    public $paper = true;
    public $tamany = 'DINA4';
    public $color = 'negre';
    public $diasSemana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');

    public function imprimeix($tinta, $paper, $tamany){
        if ($tinta && $paper){
            echo 'Es pot imprimir en ' . $tamany;
        }
        else {
            echo 'Falta tinta o paper';
        }
    }
}

// Crear una instancia de la clase Impressora
$impressora = new Impressora();

// Ordenar alfabéticamente el array de días de la semana
sort($impressora->diasSemana);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Impressió del document</title>
</head>
<body>
    <h1>Titular del document</h1>

    <h2>Días de la semana:</h2>
    <ul>
        <?php
        foreach ($impressora->diasSemana as $dia) {
            echo "<li>$dia</li>";
        }
        ?>
    </ul>
</body>
</html>
