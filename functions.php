<?php

/**
 * Develop With WP functions and definitions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * @package Develop With WP
 * @since 0.1.0
 */

// Useful global constants
define( 'DWWP_VERSION',      '0.1.0' );
define( 'DWWP_URL',          get_stylesheet_directory_uri() );
define( 'DWWP_TEMPLATE_URL', get_template_directory_uri() );
define( 'DWWP_PATH',         get_template_directory() . '/' );
define( 'DWWP_INC',          DWWP_PATH . 'includes/' );

require('vendor/autoload.php');

// Include compartmentalized functions
require_once DWWP_INC . 'core.php';

// View Files

// Include lib classes

// Run the setup functions
DevelopWP\Theme\Core\setup();

