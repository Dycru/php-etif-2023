<?php
$host = 'localhost';
$dbname = 'gestion_pedidos'; 
$username = 'root';
$password = '';
try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
} catch (PDOException $e) {
    echo "Error al conectar: " . $e->getMessage();
}

$statement = $conexion->prepare('SELECT * FROM clientes WHERE CÓDIGOCLIENTE = :cc');

$statement->execute(array(':cc' => 'CT07'));

$resultados = $statement->fetchAll();

foreach ($resultados as $resultado) {
    echo "CÓDIGOCLIENTE: " . $resultado['CÓDIGOCLIENTE'] . "<br>";
    echo "EMPRESA: " . $resultado['EMPRESA'] . "<br>";
    echo "DIRECCIÓN: " . $resultado['DIRECCIÓN'] . "<br>";
    echo "POBLACIÓN: " . $resultado['POBLACIÓN'] . "<br>";
    echo "TELÉFONO: " . $resultado['TELÉFONO'] . "<br>";
    echo "<br>";
}
?>
