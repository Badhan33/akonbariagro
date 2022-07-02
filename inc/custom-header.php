<?php
/**
 * Custom header setup
 *
 * @package akonbariagro
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'akonbariagro_custom_header_setup' ) ) {
	function akonbariagro_custom_header_setup() {
		add_theme_support(
			'custom-header',
			apply_filters(
				'akonbariagro_custom_header_args',
				array(
					'default-image' => get_parent_theme_file_uri( '/img/header.jpg' ),
					'width'         => 2000,
					'height'        => 1200,
					'flex-height'   => true,
				)
			)
		);

		register_default_headers(
			array(
				'default-image' => array(
					'url'           => '%s/img/header.jpg',
					'thumbnail_url' => '%s/img/header.jpg',
					'description'   => __( 'Default Header Image', 'understrap' ),
				),
			)
		);
	}
}

add_action( 'after_setup_theme', 'akonbariagro_custom_header_setup' );
