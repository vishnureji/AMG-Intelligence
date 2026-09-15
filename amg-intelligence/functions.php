<?php
/**
 * AMG Intelligence Theme functions and definitions
 *
 * @package AMG_Intelligence
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'AMG_INTELLIGENCE_VERSION', '1.0.0' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function amg_intelligence_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add support for core custom logo.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 60,
			'width'       => 200,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// Register Navigation Menus.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'amg-intelligence' ),
			'footer_intel' => esc_html__( 'Footer Intelligence Menu', 'amg-intelligence' ),
			'footer_company' => esc_html__( 'Footer Company Menu', 'amg-intelligence' ),
			'footer_legal' => esc_html__( 'Footer Legal Menu', 'amg-intelligence' ),
		)
	);
}
add_action( 'after_setup_theme', 'amg_intelligence_setup' );

/**
 * Enqueue scripts and styles.
 */
function amg_intelligence_scripts() {
	// Bootstrap 5.3.3 CSS
	wp_enqueue_style( 'bootstrap-5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3' );

	// Google Fonts (Inter)
	wp_enqueue_style( 'google-fonts-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), null );

	// Custom Theme CSS
	wp_enqueue_style( 'amg-custom-css', get_template_directory_uri() . '/assets/css/custom.css', array( 'bootstrap-5' ), AMG_INTELLIGENCE_VERSION );

	// Theme Main style.css
	wp_enqueue_style( 'amg-intelligence-style', get_stylesheet_uri(), array( 'amg-custom-css' ), AMG_INTELLIGENCE_VERSION );

	// Bootstrap 5.3.3 JS Bundle
	wp_enqueue_script( 'bootstrap-5-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true );

	// Lottie Web for Banner Animation
	wp_enqueue_script( 'lottie-web', 'https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js', array(), '5.12.2', true );

	// Custom Theme Main JS
	wp_enqueue_script( 'amg-main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'lottie-web' ), AMG_INTELLIGENCE_VERSION, true );

	// Pass template directory URI to JS for loading dynamic assets (e.g., Lottie JSON)
	wp_localize_script(
		'amg-main-js',
		'amgThemeData',
		array(
			'templateUri' => get_template_directory_uri(),
			'lottiePath'  => get_template_directory_uri() . '/assets/images/banner-lottie.json',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'amg_intelligence_scripts' );

/**
 * Add custom nav menu classes to match Bootstrap navigation.
 */
function amg_intelligence_nav_menu_link_attributes( $atts, $item, $args ) {
	if ( isset( $args->theme_location ) && 'primary' === $args->theme_location ) {
		$atts['class'] = ( ! empty( $atts['class'] ) ? $atts['class'] . ' ' : '' ) . 'nav-link';
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'amg_intelligence_nav_menu_link_attributes', 10, 3 );