<?php
/**
 * Enqueue scripts and styles.
 *
 * @package akonbariagro
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function akonbariagro_scripts() {
	// Google Fonts
	wp_enqueue_style( 'akonbariagro-fonts-poppins', '//fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' );
	wp_enqueue_style( 'akonbariagro-fonts-opensans', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' );

	// Bootstrap CSS File
	wp_enqueue_style( 'akonbariagro-bootstrap', AKONBARIAGRO_ASSETS_URI . '/css/bootstrap.css', array() );

	// Libraries CSS Files
	wp_enqueue_style( 'texlab-fontawesome', AKONBARIAGRO_ASSETS_URI . '/vendor/font-awesome/css/font-awesome.min.css', array() );
	wp_enqueue_style( 'akonbariagro-flexslider', AKONBARIAGRO_ASSETS_URI . '/css/flexslider.css', array() );

	// Main Stylesheet File
	wp_enqueue_style( 'akonbariagro-style', AKONBARIAGRO_ASSETS_URI . '/css/style.css', array( 'akonbariagro-bootstrap' ), AKONBARIAGRO_VERSION );
	wp_enqueue_style( 'akonbariagro-theme', get_stylesheet_uri(), array(), AKONBARIAGRO_VERSION );

	// JavaScript Libraries
	wp_enqueue_script( 'akonbariagro-bootstrap', AKONBARIAGRO_ASSETS_URI . '/js/bootstrap.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'akonbariagro-flexslider', AKONBARIAGRO_ASSETS_URI . '/js/jquery.flexslider.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'akonbariagro-move-top', AKONBARIAGRO_ASSETS_URI . '/js/move-top.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'akonbariagro-easing', AKONBARIAGRO_ASSETS_URI . '/js/easing.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'akonbariagro-jzbox', AKONBARIAGRO_ASSETS_URI . '/js/jzBox.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'akonbariagro-wmuSlider', AKONBARIAGRO_ASSETS_URI . '/js/jquery.wmuSlider.js', array( 'jquery' ), '1.0.0', true );

	// Template Main Javascript File
	wp_enqueue_script( 'akonbariagro-main', AKONBARIAGRO_ASSETS_URI . '/js/main.js', array( 'jquery' ), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'akonbariagro_scripts' );
