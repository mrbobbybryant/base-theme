<?php
namespace DevelopWP\Theme\Core;

/**
 * Set up theme defaults and register supported WordPress features.
 *
 * @since 0.1.0
 *
 * @uses add_action()
 *
 * @return void
 */
function setup() {
	$n = function( $function ) {
		return __NAMESPACE__ . "\\$function";
	};

	add_action( 'after_setup_theme',  $n( 'i18n' )        );
	add_action( 'wp_enqueue_scripts', $n( 'scripts' )     );
	add_action( 'wp_enqueue_scripts', $n( 'styles' )      );
	add_action( 'admin_enqueue_scripts', $n( 'admin_scripts' ) );
	add_action( 'wp_head',            $n( 'header_meta' ) );
}

/**
 * Makes WP Theme available for translation.
 *
 * Translations can be added to the /lang directory.
 * If you're building a theme based on WP Theme, use a find and replace
 * to change 'wptheme' to the name of your theme in all template files.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 *
 * @since 0.1.0
 *
 * @return void
 */
function i18n() {
	load_theme_textdomain( 'dwwp', DWWP_PATH . '/languages' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );
	do_action( 'dwwp_core_init' );
 }

/**
 * Enqueue scripts for front-end.
 *
 * @uses wp_enqueue_script() to load front end scripts.
 *
 * @since 0.1.0
 *
 * @return void
 */
function scripts() {
	/**
	 * Flag whether to enable loading uncompressed/debugging assets. Default false.
	 * 
	 * @param bool dwwp_script_debug
	 */
	$debug = apply_filters( 'dwwp_script_debug', false );
	$min = ( $debug || defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_script(
		'dwwp',
		DWWP_TEMPLATE_URL . "/dist/frontend.bundle.js",
		array(),
		DWWP_VERSION,
		true
	);

	wp_localize_script(
		'dwwp',
		'DwwpParams',
		apply_filters( 'Dwwp\app_js_params', array() )
	);
}

function admin_scripts() {
	wp_enqueue_script(
		'dwwp-admin',
		DWWP_TEMPLATE_URL . "/dist/admin.bundle.js",
		array(),
		DWWP_VERSION,
		true
	);

	wp_localize_script(
		'dwwp-admin',
		'DwwpParams',
		apply_filters( 'Dwwp\app_js_params', array() )
	);
}

/**
 * Enqueue styles for front-end.
 *
 * @uses wp_enqueue_style() to load front end styles.
 *
 * @since 0.1.0
 *
 * @return void
 */
function styles() {
	/**
	 * Flag whether to enable loading uncompressed/debugging assets. Default false.
	 *
	 * @param bool dwwp_style_debug
	 */
	$debug = apply_filters( 'dwwp_style_debug', false );
	$min = ( $debug || defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_style(
		'dwwp',
		DWWP_URL . "/dist/frontend.bundle.css",
		array(),
		DWWP_VERSION
	);
}

/**
 * Add humans.txt to the <head> element.
 *
 * @uses apply_filters()
 *
 * @since 0.1.0
 *
 * @return void
 */
function header_meta() {
	/**
	 * Filter the path used for the site's humans.txt attribution file
	 *
	 * @param string $humanstxt
	 */
	$humanstxt = apply_filters( 'dwwp_humans', DWWP_TEMPLATE_URL . '/humans.txt' );

	echo '<link type="text/plain" rel="author" href="' . esc_url( $humanstxt ) . '" />';
}

function add_js_params( $params ) {

	return $params;
}
add_filter( 'Dwwp\app_js_params', __NAMESPACE__ . '\add_js_params' );