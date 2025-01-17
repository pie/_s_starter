<?php 
namespace PIE\_S\Setup\Enqueues;

/**
 * Logic and functionality related to enqueuing javascript for the theme
 *
 * @hooked wp_enqueue_scripts
 * @return void
 */
function scripts() {

	wp_enqueue_script( '_s-navigation', get_template_directory_uri() . '/dist/js/navigation.js', array(), \PIE\_S\VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

/**
 * Logic and functionality related to enqueuing stylesheets for the theme
 *
 * @hooked wp_enqueue_scripts
 * @return void
 */
function styles() {
	wp_enqueue_style( '_s-style', get_stylesheet_directory_uri() . '/dist/css/theme.css', array(), \PIE\_S\VERSION );
	wp_enqueue_style( '_s-style', get_stylesheet_directory_uri() . '/dist/css/woocommerce.css', array(), \PIE\_S\VERSION );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\scripts' );
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\styles' );