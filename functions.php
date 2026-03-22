<?php
/**
 * Alaska Airlines Theme Functions
 *
 * @package Alaska
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue fonts and styles.
 */
function alaska_enqueue_assets() {
	// Google Fonts: Manrope + Inter.
	wp_enqueue_style(
		'alaska-google-fonts',
		'https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap',
		array(),
		null
	);

	// Material Symbols Outlined icons.
	wp_enqueue_style(
		'alaska-material-symbols',
		'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap',
		array(),
		null
	);

	// Custom CSS for effects theme.json cannot handle.
	wp_enqueue_style(
		'alaska-custom',
		get_template_directory_uri() . '/assets/css/custom.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'alaska_enqueue_assets' );

/**
 * Enqueue editor assets.
 */
function alaska_enqueue_editor_assets() {
	wp_enqueue_style(
		'alaska-google-fonts',
		'https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'alaska-material-symbols',
		'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'alaska-custom-editor',
		get_template_directory_uri() . '/assets/css/custom.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'enqueue_block_editor_assets', 'alaska_enqueue_editor_assets' );

/**
 * Register block pattern categories.
 */
function alaska_register_pattern_categories() {
	register_block_pattern_category( 'alaska-homepage', array( 'label' => __( 'Alaska Homepage', 'alaska' ) ) );
	register_block_pattern_category( 'alaska-premium', array( 'label' => __( 'Alaska Premium', 'alaska' ) ) );
	register_block_pattern_category( 'alaska-newsroom', array( 'label' => __( 'Alaska Newsroom', 'alaska' ) ) );
	register_block_pattern_category( 'alaska-article', array( 'label' => __( 'Alaska Article', 'alaska' ) ) );
	register_block_pattern_category( 'alaska-flight', array( 'label' => __( 'Alaska Flight Results', 'alaska' ) ) );
}
add_action( 'init', 'alaska_register_pattern_categories' );

/**
 * Register custom block styles.
 */
function alaska_register_block_styles() {
	// Button styles.
	register_block_style( 'core/button', array(
		'name'  => 'cta-gradient',
		'label' => __( 'CTA Gradient', 'alaska' ),
	) );
	register_block_style( 'core/button', array(
		'name'  => 'tonal',
		'label' => __( 'Tonal', 'alaska' ),
	) );

	// Group styles.
	register_block_style( 'core/group', array(
		'name'  => 'glass-nav',
		'label' => __( 'Glass Nav', 'alaska' ),
	) );
	register_block_style( 'core/group', array(
		'name'  => 'surface-card',
		'label' => __( 'Surface Card', 'alaska' ),
	) );
	register_block_style( 'core/group', array(
		'name'  => 'ambient-shadow',
		'label' => __( 'Ambient Shadow', 'alaska' ),
	) );
}
add_action( 'init', 'alaska_register_block_styles' );

/**
 * Register custom blocks.
 */
function alaska_register_blocks() {
	$blocks = array(
		'booking-widget',
		'destination-cards',
		'flight-results',
		'flight-filters',
		'date-carousel',
		'news-feed',
		'featured-article',
		'contact-card',
		'site-search',
	);

	foreach ( $blocks as $block ) {
		$block_dir = get_template_directory() . '/blocks/' . $block;
		if ( file_exists( $block_dir . '/block.json' ) ) {
			register_block_type( $block_dir );
		}
	}
}
add_action( 'init', 'alaska_register_blocks' );
