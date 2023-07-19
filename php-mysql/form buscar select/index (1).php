<?php
$errores = '';
$enviado = false;

// Si se ha enviado el formulario
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$campo = $_POST['campo'];
	$tabla = $_POST['tabla'];

	// Verificar si se ha seleccionado un campo y una tabla
	if (empty($campo) || empty($tabla)) {
		$errores .= 'Por favor selecciona un campo y una tabla';
	}

	// Si no hay errores, marcar como enviado
	if (empty($errores)) {
		$enviado = true;
	}
}

require 'index.view (1).php';

// Si el formulario ha sido enviado, realizar la búsqueda en la base de datos
if ($enviado) {
	try {
		// Conectar a la base de datos
		$conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');

		// Realizar la consulta SQL
		$statement = $conexion->prepare("SELECT * FROM $tabla WHERE $campo = :id");
		$statement->execute(array(':id' => $id));

		$resultados = $statement->fetchAll(PDO::FETCH_ASSOC);

		// Mostrar los resultados
		if ($resultados) {
			echo "<p style='text-align:center'>Los resultados son:</p>";
			echo "<table style='margin:auto;'>";
			echo "<tr><th>ID</th><th>Código Cliente</th><th>Código Artículo</th></tr>";

			foreach ($resultados as $row) {
				echo "<tr>";
				echo "<td>".$row['ID']."</td>";
				echo "<td>".$row['nombre']."</td>";
				echo "<td>".$row['email']."</td>";
				echo "</tr>";
			}

			echo "</table>";
		} else {
			echo "<p style='text-align:center'>No se encontraron resultados</p>";
		}
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
}
?>
