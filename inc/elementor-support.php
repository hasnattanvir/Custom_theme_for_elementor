<?php
// Load Elementor compatibility file.
require get_template_directory() . '/inc/elementor-support.php';

// Elementor Support Functions
function my_custom_elementor_init() {
    // Enqueue Elementor styles and scripts
    if ( did_action( 'elementor/loaded' ) ) {
        wp_enqueue_style('my-elementor-style', get_template_directory_uri() . '/assets/css/elementor.css');
    }
}

add_action('wp_enqueue_scripts', 'my_custom_elementor_init');

function my_custom_register_elementor_locations( $elementor_theme_manager ) {
    $elementor_theme_manager->register_all_core_location();
}
add_action('elementor/theme/register_locations', 'my_custom_register_elementor_locations');
