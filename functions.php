<?php
/**
 * Theme setup for 23 Theme.
 *
 * @package TwentyThree
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register supported WordPress features and translations.
 *
 * @return void
 */
function twentythree_setup() {
	load_theme_textdomain( 'twentythree', get_template_directory() . '/languages' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'twentythree_setup' );

/**
 * Load the small theme stylesheet on the front end.
 *
 * @return void
 */
function twentythree_enqueue_styles() {
	$theme = wp_get_theme();

	wp_enqueue_style(
		'twentythree-style',
		get_stylesheet_uri(),
		array(),
		$theme->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'twentythree_enqueue_styles' );

/**
 * Group the theme's section patterns in the inserter.
 *
 * @return void
 */
function twentythree_register_pattern_categories() {
	register_block_pattern_category(
		'twentythree-sections',
		array(
			'label' => __( '23 Theme sections', 'twentythree' ),
		)
	);
}
add_action( 'init', 'twentythree_register_pattern_categories' );
