<?php
/*
 * Plugin Name: Footnotes Propelled
 * Version: 0.9
 * Plugin URI: http://webpropelled.com/footnotes-propelled
 * Description: Easily add footnotes to your content which are inline meaning your visitor can click to view them without leaving the flow of your content.
 * Author: Geoff Moss
 * Author URI: http://webpropelled.com
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: footnotes-propelled
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Geoff Moss
 * @since 0.9
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-footnotes-propelled.php' );
require_once( 'includes/class-footnotes-propelled-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-footnotes-propelled-admin-api.php' );
require_once( 'includes/lib/class-footnotes-propelled-post-type.php' );
require_once( 'includes/lib/class-footnotes-propelled-taxonomy.php' );

/**
 * Returns the main instance of Footnotes_Propelled to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Footnotes_Propelled
 */
function Footnotes_Propelled () {
	$instance = Footnotes_Propelled::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Footnotes_Propelled_Settings::instance( $instance );
	}

	return $instance;
}

Footnotes_Propelled();