<?php
// Datos de ejemplo recibidos desde un formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Aplicar filtros a los datos recibidos
$nombreFiltrado = filtroDatos($nombre);
$correoFiltrado = filtroDatos($correo);
$mensajeFiltrado = filtroDatos($mensaje);

// Función para aplicar los filtros a los datos
function filtroDatos($dato) {
    // Eliminar espacios en blanco al inicio y al final
    $dato = trim($dato);

    // Eliminar barras invertidas
    $dato = stripslashes($dato);

    // Convertir caracteres especiales a entidades HTML
    $dato = htmlspecialchars($dato);

    return $dato;
}
?>
