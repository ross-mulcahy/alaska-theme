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
 * Register Destinations custom post type.
 */
function alaska_register_destination_cpt() {
	register_post_type( 'destination', array(
		'labels'       => array(
			'name'               => __( 'Destinations', 'alaska' ),
			'singular_name'      => __( 'Destination', 'alaska' ),
			'add_new'            => __( 'Add Destination', 'alaska' ),
			'add_new_item'       => __( 'Add New Destination', 'alaska' ),
			'edit_item'          => __( 'Edit Destination', 'alaska' ),
			'new_item'           => __( 'New Destination', 'alaska' ),
			'view_item'          => __( 'View Destination', 'alaska' ),
			'search_items'       => __( 'Search Destinations', 'alaska' ),
			'not_found'          => __( 'No destinations found', 'alaska' ),
			'not_found_in_trash' => __( 'No destinations found in trash', 'alaska' ),
			'menu_name'          => __( 'Destinations', 'alaska' ),
		),
		'public'       => true,
		'has_archive'  => true,
		'show_in_rest' => true,
		'menu_icon'    => 'dashicons-location-alt',
		'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
		'template'     => array(
			array( 'alaska/destination-hero' ),
			array( 'core/group', array(
				'layout'          => array( 'type' => 'constrained' ),
				'backgroundColor' => 'background',
				'style'           => array( 'spacing' => array( 'padding' => array( 'top' => 'var:preset|spacing|100', 'bottom' => 'var:preset|spacing|100' ) ) ),
			), array(
				array( 'core/columns', array(), array(
					array( 'core/column', array( 'width' => '60%' ), array(
						array( 'core/heading', array( 'level' => 2, 'content' => 'About this destination', 'fontSize' => 'display-md' ) ),
						array( 'core/paragraph', array( 'content' => 'Add compelling details about this destination — what makes it special, the best time to visit, and what travelers can expect.', 'textColor' => 'on-surface-variant', 'fontSize' => 'body-lg' ) ),
					) ),
					array( 'core/column', array( 'width' => '40%' ), array(
						array( 'core/group', array(
							'backgroundColor' => 'surface-container-lowest',
							'style'           => array(
								'border'  => array( 'radius' => '0.75rem' ),
								'spacing' => array( 'padding' => array( 'top' => 'var:preset|spacing|40', 'bottom' => 'var:preset|spacing|40', 'left' => 'var:preset|spacing|40', 'right' => 'var:preset|spacing|40' ) ),
							),
						), array(
							array( 'core/heading', array( 'level' => 3, 'content' => 'Quick Facts', 'fontSize' => 'headline-sm' ) ),
							array( 'core/list', array(), array(
								array( 'core/list-item', array( 'content' => 'Best time to visit: Spring & Fall' ) ),
								array( 'core/list-item', array( 'content' => 'Average flight time: 2h 30m' ) ),
								array( 'core/list-item', array( 'content' => 'Currency: USD' ) ),
							) ),
						) ),
					) ),
				) ),
			) ),
			array( 'core/group', array(
				'align'           => 'full',
				'backgroundColor' => 'surface-container-low',
				'style'           => array( 'spacing' => array( 'padding' => array( 'top' => 'var:preset|spacing|80', 'bottom' => 'var:preset|spacing|80' ) ) ),
				'layout'          => array( 'type' => 'constrained' ),
			), array(
				array( 'core/heading', array( 'level' => 2, 'content' => 'Things to do', 'fontSize' => 'headline-lg' ) ),
				array( 'core/columns', array(), array(
					array( 'core/column', array(), array(
						array( 'core/image', array() ),
						array( 'core/heading', array( 'level' => 3, 'content' => 'Activity name', 'fontSize' => 'headline-sm' ) ),
						array( 'core/paragraph', array( 'content' => 'Describe a must-do activity at this destination.', 'textColor' => 'on-surface-variant' ) ),
					) ),
					array( 'core/column', array(), array(
						array( 'core/image', array() ),
						array( 'core/heading', array( 'level' => 3, 'content' => 'Activity name', 'fontSize' => 'headline-sm' ) ),
						array( 'core/paragraph', array( 'content' => 'Describe a must-do activity at this destination.', 'textColor' => 'on-surface-variant' ) ),
					) ),
					array( 'core/column', array(), array(
						array( 'core/image', array() ),
						array( 'core/heading', array( 'level' => 3, 'content' => 'Activity name', 'fontSize' => 'headline-sm' ) ),
						array( 'core/paragraph', array( 'content' => 'Describe a must-do activity at this destination.', 'textColor' => 'on-surface-variant' ) ),
					) ),
				) ),
			) ),
			array( 'core/group', array(
				'align'  => 'full',
				'layout' => array( 'type' => 'constrained' ),
				'style'  => array( 'spacing' => array( 'padding' => array( 'top' => 'var:preset|spacing|100', 'bottom' => 'var:preset|spacing|100' ) ) ),
			), array(
				array( 'core/group', array(
					'style'  => array(
						'spacing' => array( 'padding' => array( 'top' => 'var:preset|spacing|60', 'bottom' => 'var:preset|spacing|60', 'left' => 'var:preset|spacing|60', 'right' => 'var:preset|spacing|60' ) ),
						'border' => array( 'radius' => '1rem' ),
					),
					'gradient' => 'cta-gradient',
					'textColor' => 'on-primary',
					'layout' => array( 'type' => 'constrained', 'contentSize' => '640px' ),
				), array(
					array( 'core/heading', array( 'level' => 2, 'content' => 'Ready to explore?', 'textColor' => 'on-primary', 'fontSize' => 'display-md', 'textAlign' => 'center' ) ),
					array( 'core/paragraph', array( 'content' => 'Book your flight today and experience Alaska Airlines\' award-winning service.', 'textColor' => 'on-primary', 'fontSize' => 'body-lg', 'align' => 'center' ) ),
					array( 'core/buttons', array( 'layout' => array( 'type' => 'flex', 'justifyContent' => 'center' ) ), array(
						array( 'core/button', array( 'text' => 'Search Flights', 'backgroundColor' => 'on-primary', 'textColor' => 'primary' ) ),
					) ),
				) ),
			) ),
		),
		'rewrite'      => array( 'slug' => 'destinations' ),
	) );

	register_taxonomy( 'destination_category', 'destination', array(
		'labels'            => array(
			'name'          => __( 'Destination Categories', 'alaska' ),
			'singular_name' => __( 'Destination Category', 'alaska' ),
			'menu_name'     => __( 'Categories', 'alaska' ),
		),
		'hierarchical'      => true,
		'public'            => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'rewrite'           => array( 'slug' => 'destination-category' ),
	) );

	register_post_meta( 'destination', 'destination_route', array(
		'type'         => 'string',
		'single'       => true,
		'default'      => '',
		'show_in_rest' => true,
	) );

	register_post_meta( 'destination', 'destination_price', array(
		'type'         => 'string',
		'single'       => true,
		'default'      => '',
		'show_in_rest' => true,
	) );
}
add_action( 'init', 'alaska_register_destination_cpt' );

/**
 * Register custom blocks.
 */
function alaska_register_blocks() {
	$blocks = array(
		'booking-widget',
		'destination-cards',
		'destination-hero',
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
