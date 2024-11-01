<?php
/**
 * Plugin Name:     shishi-odoshi
 * Plugin URI:      https://github.com/craigiswayne/care-bear
 * Description:     A few helpers for the debug mode
 * Author:          Craig Wayne
 * Author URI:      https://github.com/craigiswayne/
 * Text Domain:     shishi-odoshi
 * Domain Path:     /languages
 * Version:         0.0.3
 *
 * @package         Shishi_Odoshi
 */

/**
 * Ninja bomb
 */
if( !defined( 'ABSPATH' ) ){
	exit;
}


/**
 * This plugin is intended to run on debug mode ONLY
 */
if( !defined('WP_DEBUG') || !WP_DEBUG ){
	return;
}

define( 'SHISHI_ODOSHI_SLUG', plugin_basename( __DIR__ ) );

require_once( __DIR__.'/includes/filters.php' );
require_once( __DIR__.'/includes/actions.php' );
