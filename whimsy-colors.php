<?php
/*
 * Plugin Name: Whimsy+Colors
 * Version: 1.0.1
 * Plugin URI: http://www.thefanciful.com/plugins/whimsy/colors
 * Description: A beautiful set of lightweight colors, part of the Whimsy Framework.
 * Author: The Fanciful
 * Author URI: http://www.thefanciful.com/
 * Requires at least: 4.0
 * Tested up to: 4.5
 *
 * Text Domain: whimsy-sc
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author The Fanciful
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-whimsy-colors.php' );
require_once( 'includes/class-whimsy-colors-meta-box.php' );

/**
 * Returns the main instance of Whimsy_Colors to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Whimsy_Colors
 */
function Whimsy_Colors () {
	$instance = Whimsy_Colors::instance( __FILE__, '1.0.1' );

	return $instance;
}

Whimsy_Colors();