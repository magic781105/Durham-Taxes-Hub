<?php
/**
 * Durham Tax Hub functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Durham Tax Hub
 */

/**
 * Theme Setup
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Enqueue scripts and styles.
 */
function durhamtaxhub_scripts() {
	wp_enqueue_style( 'durhamtaxhub-style', get_stylesheet_uri() );
	wp_enqueue_style( 'foundation-css', get_template_directory_uri(). '/assets/css/vendor/foundation.css',array(), '6.5.1' );
	wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/css/vendor/slick.css',array(),'1.8.1' );
	wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/assets/css/vendor/slick-theme.css',array(),'1.8.1' );
	wp_enqueue_style('app-css', get_template_directory_uri() . '/assets/css/app.css',array(),null );
	
	wp_enqueue_script('foundation-js',get_template_directory_uri() . '/assets/js/vendor/foundation.js',array('jquery'),true);
	wp_enqueue_script('what-input-js',get_template_directory_uri() . '/assets/js/vendor/what-input.js',array('foundation-js'),true);
	wp_enqueue_script('slick-js',get_template_directory_uri() . '/assets/js/vendor/slick.js',array('jquery'),true);
	wp_enqueue_script('app-js',get_template_directory_uri() . '/assets/js/app.js',array('jquery'),true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'durhamtaxhub_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Registering custom post types.
 */
require get_template_directory() . '/inc/post-types.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
