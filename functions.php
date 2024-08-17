<?php 
// My Functionnality
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


// Elementor Support
function my_custom_theme_setup() {
    // Add theme support for Elementor
    add_theme_support('elementor');
}
add_action('after_setup_theme', 'my_custom_theme_setup');
?>