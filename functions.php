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
	register_block_pattern_category( 'alaska-starters', array( 'label' => __( 'Alaska Starter Pages', 'alaska' ) ) );
	register_block_pattern_category( 'alaska-support', array( 'label' => __( 'Alaska Support & Utility', 'alaska' ) ) );
	register_block_pattern_category( 'alaska-destination', array( 'label' => __( 'Alaska Destinations', 'alaska' ) ) );
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

	register_post_meta( 'destination', 'destination_airport_code', array(
		'type'         => 'string',
		'single'       => true,
		'default'      => '',
		'show_in_rest' => true,
	) );

	register_post_meta( 'destination', 'destination_best_for', array(
		'type'         => 'string',
		'single'       => true,
		'default'      => '',
		'show_in_rest' => true,
	) );

	register_post_meta( 'destination', 'destination_flight_time', array(
		'type'         => 'string',
		'single'       => true,
		'default'      => '',
		'show_in_rest' => true,
	) );

	register_post_meta( 'destination', 'destination_best_season', array(
		'type'         => 'string',
		'single'       => true,
		'default'      => '',
		'show_in_rest' => true,
	) );

	register_post_meta( 'destination', 'destination_hero_kicker', array(
		'type'         => 'string',
		'single'       => true,
		'default'      => '',
		'show_in_rest' => true,
	) );
}
add_action( 'init', 'alaska_register_destination_cpt' );

/**
 * Register demo media fallback meta.
 */
function alaska_register_demo_media_meta() {
	register_post_meta(
		'post',
		'alaska_demo_image_url',
		array(
			'type'         => 'string',
			'single'       => true,
			'default'      => '',
			'show_in_rest' => true,
		)
	);

	register_post_meta(
		'destination',
		'alaska_demo_image_url',
		array(
			'type'         => 'string',
			'single'       => true,
			'default'      => '',
			'show_in_rest' => true,
		)
	);
}
add_action( 'init', 'alaska_register_demo_media_meta' );

/**
 * Get the preferred newsroom URL.
 *
 * @return string
 */
function alaska_get_newsroom_url() {
	$newsroom_page = get_page_by_path( 'newsroom' );

	if ( $newsroom_page instanceof WP_Post ) {
		return get_permalink( $newsroom_page );
	}

	$legacy_page = get_page_by_path( 'news' );

	if ( $legacy_page instanceof WP_Post ) {
		return get_permalink( $legacy_page );
	}

	return home_url( '/newsroom/' );
}

/**
 * Get the destination archive URL.
 *
 * @return string
 */
function alaska_get_destinations_url() {
	return get_post_type_archive_link( 'destination' ) ?: home_url( '/destinations/' );
}

/**
 * Build a branded fallback image data URI.
 *
 * @param string $label Image label.
 * @return string
 */
function alaska_get_demo_placeholder_data_uri( $label = '' ) {
	$text = trim( wp_strip_all_tags( $label ) );
	$text = $text ? $text : __( 'Alaska Demo', 'alaska' );
	$text = function_exists( 'mb_substr' ) ? mb_substr( $text, 0, 36 ) : substr( $text, 0, 36 );

	$svg = sprintf(
		'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1600 1000" role="img" aria-label="%1$s"><defs><linearGradient id="a" x1="0" x2="1" y1="0" y2="1"><stop offset="0%%" stop-color="#002b48"/><stop offset="100%%" stop-color="#136299"/></linearGradient></defs><rect width="1600" height="1000" fill="url(#a)"/><circle cx="1280" cy="220" r="240" fill="rgba(255,255,255,0.08)"/><circle cx="280" cy="800" r="320" fill="rgba(255,255,255,0.06)"/><text x="120" y="770" fill="#ffffff" font-family="Inter, Arial, sans-serif" font-size="42" font-weight="700" letter-spacing="8">%2$s</text><text x="120" y="860" fill="#ffffff" font-family="Manrope, Arial, sans-serif" font-size="112" font-weight="800">%1$s</text></svg>',
		esc_html( $text ),
		esc_html__( 'ALASKA', 'alaska' )
	);

	return 'data:image/svg+xml;charset=UTF-8,' . rawurlencode( $svg );
}

/**
 * Resolve a post image URL using featured media, demo meta, or a branded fallback.
 *
 * @param int    $post_id Post ID.
 * @param string $size Image size.
 * @param string $label Fallback label.
 * @return string
 */
function alaska_get_demo_image_url( $post_id, $size = 'large', $label = '' ) {
	$image_url = get_the_post_thumbnail_url( $post_id, $size );

	if ( $image_url ) {
		return $image_url;
	}

	$meta_url = get_post_meta( $post_id, 'alaska_demo_image_url', true );

	if ( $meta_url ) {
		return $meta_url;
	}

	$label = $label ? $label : get_the_title( $post_id );

	return alaska_get_demo_placeholder_data_uri( $label );
}

/**
 * Redirect legacy newsroom page requests to the canonical newsroom landing page.
 */
function alaska_redirect_legacy_news_page() {
	if ( ! is_page( 'news' ) ) {
		return;
	}

	$newsroom_page = get_page_by_path( 'newsroom' );

	if ( ! $newsroom_page instanceof WP_Post ) {
		return;
	}

	wp_safe_redirect( get_permalink( $newsroom_page ), 301 );
	exit;
}
add_action( 'template_redirect', 'alaska_redirect_legacy_news_page' );

/**
 * Register destination detail meta box.
 */
function alaska_register_destination_meta_box() {
	add_meta_box(
		'alaska-destination-details',
		__( 'Destination Details', 'alaska' ),
		'alaska_render_destination_meta_box',
		'destination',
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes_destination', 'alaska_register_destination_meta_box' );

/**
 * Render destination detail meta box.
 *
 * @param WP_Post $post Current post object.
 */
function alaska_render_destination_meta_box( $post ) {
	wp_nonce_field( 'alaska_save_destination_details', 'alaska_destination_details_nonce' );

	$fields = array(
		'destination_route'        => __( 'Route Label', 'alaska' ),
		'destination_price'        => __( 'Starting Fare', 'alaska' ),
		'destination_airport_code' => __( 'Airport Code', 'alaska' ),
		'destination_best_for'     => __( 'Best For', 'alaska' ),
		'destination_flight_time'  => __( 'Flight Time', 'alaska' ),
		'destination_best_season'  => __( 'Best Season', 'alaska' ),
		'destination_hero_kicker'  => __( 'Hero Kicker', 'alaska' ),
		'alaska_demo_image_url'    => __( 'Demo Image URL', 'alaska' ),
	);

	echo '<div class="alaska-destination-meta-box">';

	foreach ( $fields as $meta_key => $label ) {
		$value = get_post_meta( $post->ID, $meta_key, true );
		printf(
			'<p><label for="%1$s" style="display:block;font-weight:600;margin-bottom:0.35rem;">%2$s</label><input id="%1$s" name="%1$s" type="text" value="%3$s" style="width:100%%;" /></p>',
			esc_attr( $meta_key ),
			esc_html( $label ),
			esc_attr( $value )
		);
	}

	echo '</div>';
}

/**
 * Save destination detail meta.
 *
 * @param int $post_id Post ID.
 */
function alaska_save_destination_meta_box( $post_id ) {
	if ( ! isset( $_POST['alaska_destination_details_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['alaska_destination_details_nonce'] ) ), 'alaska_save_destination_details' ) ) {
		return;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	$fields = array(
		'destination_route',
		'destination_price',
		'destination_airport_code',
		'destination_best_for',
		'destination_flight_time',
		'destination_best_season',
		'destination_hero_kicker',
		'alaska_demo_image_url',
	);

	foreach ( $fields as $field ) {
		if ( ! isset( $_POST[ $field ] ) ) {
			continue;
		}

		$value = sanitize_text_field( wp_unslash( $_POST[ $field ] ) );
		update_post_meta( $post_id, $field, $value );
	}
}
add_action( 'save_post_destination', 'alaska_save_destination_meta_box' );

/**
 * Register dashboard guidance widget.
 */
function alaska_register_demo_dashboard_widget() {
	wp_add_dashboard_widget(
		'alaska-demo-guide',
		__( 'Alaska Demo Guide', 'alaska' ),
		'alaska_render_demo_dashboard_widget'
	);
}
add_action( 'wp_dashboard_setup', 'alaska_register_demo_dashboard_widget' );

/**
 * Render dashboard guidance widget.
 */
function alaska_render_demo_dashboard_widget() {
	$front_page_id = (int) get_option( 'page_on_front' );
	$front_url     = $front_page_id ? get_permalink( $front_page_id ) : home_url( '/' );
	$newsroom_url  = alaska_get_newsroom_url();
	$flights_page  = get_page_by_path( 'flights' );
	$contact_page  = get_page_by_path( 'contact' );
	$front_edit    = $front_page_id ? get_edit_post_link( $front_page_id ) : '';
	$flights_edit  = $flights_page instanceof WP_Post ? get_edit_post_link( $flights_page->ID ) : '';
	$contact_edit  = $contact_page instanceof WP_Post ? get_edit_post_link( $contact_page->ID ) : '';
	?>
	<p><?php esc_html_e( 'Use these editor-owned surfaces to keep the demo fresh without touching theme templates.', 'alaska' ); ?></p>
	<ul style="list-style:disc;padding-left:1.2rem;">
		<li><?php if ( $front_edit ) : ?><a href="<?php echo esc_url( $front_edit ); ?>"><?php esc_html_e( 'Homepage content', 'alaska' ); ?></a><?php else : ?><?php esc_html_e( 'Homepage content', 'alaska' ); ?><?php endif; ?> <?php echo esc_html( $front_url ); ?></li>
		<li><a href="<?php echo esc_url( admin_url( 'edit.php?post_type=destination' ) ); ?>"><?php esc_html_e( 'Destinations library', 'alaska' ); ?></a> <?php echo esc_html( alaska_get_destinations_url() ); ?></li>
		<li><a href="<?php echo esc_url( admin_url( 'edit-tags.php?taxonomy=destination_category&post_type=destination' ) ); ?>"><?php esc_html_e( 'Destination categories', 'alaska' ); ?></a></li>
		<li><?php if ( $flights_edit ) : ?><a href="<?php echo esc_url( $flights_edit ); ?>"><?php esc_html_e( 'Flights experience shell', 'alaska' ); ?></a><?php else : ?><?php esc_html_e( 'Flights experience shell', 'alaska' ); ?><?php endif; ?></li>
		<li><a href="<?php echo esc_url( $newsroom_url ); ?>"><?php esc_html_e( 'Newsroom landing', 'alaska' ); ?></a> <?php echo esc_html( $newsroom_url ); ?></li>
		<li><?php if ( $contact_edit ) : ?><a href="<?php echo esc_url( $contact_edit ); ?>"><?php esc_html_e( 'Contact page', 'alaska' ); ?></a><?php else : ?><?php esc_html_e( 'Contact page', 'alaska' ); ?><?php endif; ?></li>
	</ul>
	<p><code>wp alaska-airlines-demo status</code> <?php esc_html_e( 'reports the active demo setup and missing media counts.', 'alaska' ); ?></p>
	<?php
}

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
