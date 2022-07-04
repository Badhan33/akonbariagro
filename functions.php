<?php
/**
 * Theme functions
 *
 * @package akonbariagro
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

define( 'AKONBARIAGRO_VERSION', '1.0.1' );

define( 'AKONBARIAGRO_BASE_URI', get_template_directory_uri() );
define( 'AKONBARIAGRO_ASSETS_URI', AKONBARIAGRO_BASE_URI . '/assets' );
define( 'AKONBARIAGRO_INC_DIR', AKONBARIAGRO_BASE_URI . '/inc/' );

$files = array(
	'setup.php',
	'widgets.php',
	'enqueue.php',
	'hooks.php'
);

foreach ( $files as $file ) {
	$filepath = locate_template( 'inc/' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}