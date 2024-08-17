<?php
if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'footer' ) ) :
    elementor_theme_do_location( 'footer' );
    echo "Test Footer";

else :
    // Default footer content goes here
    echo "This is my Footer";

endif;
?>
