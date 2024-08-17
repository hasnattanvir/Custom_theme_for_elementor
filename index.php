<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme.
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @package My_Custom_Theme
 */

get_header(); // Include the header template part

$is_elementor_theme_exist = function_exists( 'elementor_theme_do_location' );

if ( is_singular() ) {
	if ( ! $is_elementor_theme_exist || ! elementor_theme_do_location( 'single' ) ) {
		get_template_part( 'template-parts/single' );
	}
} elseif ( is_archive() || is_home() ) {
	if ( ! $is_elementor_theme_exist || ! elementor_theme_do_location( 'archive' ) ) {
		get_template_part( 'template-parts/archive' );
	}
} elseif ( is_search() ) {
	if ( ! $is_elementor_theme_exist || ! elementor_theme_do_location( 'archive' ) ) {
		get_template_part( 'template-parts/search' );
	}
}

get_footer(); // Include the footer template part
