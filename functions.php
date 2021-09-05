<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );

/**
 * Define Constants
 */
define( 'CHILD_THEME_TARIFDETEKTIV_VERSION', '1.0.0' );

// Define Environment
define( 'WP_ENV', getenv( 'WP_ENV' ) ? getenv( 'WP_ENV' ) : 'development' );

// Check Environment
// if ( WP_ENV === 'development' || WP_ENV === 'staging' ) {
//     $GLOBALS['$asset_root'] = 'build';
//     $GLOBALS['$styles']     = "style.css";
//     $GLOBALS['$js']         = "main.js";
// } else {
//     $GLOBALS['$asset_root'] = "dist";
//     $GLOBALS['$styles']     = "style.min.css";
//     $GLOBALS['$js']         = "main.min.js";
// }

/**
 * Enqueue stylesemjgfdsfdsa	dfwq
 */
function child_enqueue_styles() {
	wp_enqueue_style( 'child/styles', get_stylesheet_directory_uri() . '/' . '/public/assets/css/' . 'style.css' );
}