function coin_master_widget_shortcode($atts) {
    // Aquí puedes agregar tu lógica personalizada para generar el contenido del widget
    $output = '<div class="coin-master-widget">Contenido del widget aquí</div>';

    return $output;
}
add_shortcode('coin_master_widget', 'coin_master_widget_shortcode');
