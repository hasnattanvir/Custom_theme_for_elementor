<?php
if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'header' ) ) :
    elementor_theme_do_location( 'header' );
    echo "Test Header";
else :
    // Default header content goes here

    echo "This is my Header";
endif;
?>
