<?php
/**
 * Destination Cards Block — Server-side render.
 *
 * Queries the 'destination' CPT and renders a responsive card grid.
 *
 * @package Alaska
 */

$columns              = $attributes['columns'] ?? 3;
$posts_to_show        = $attributes['postsToShow'] ?? 3;
$order_by             = $attributes['orderBy'] ?? 'date';
$order                = $attributes['order'] ?? 'desc';
$destination_category = $attributes['destinationCategory'] ?? 0;

$query_args = array(
	'post_type'      => 'destination',
	'posts_per_page' => (int) $posts_to_show,
	'post_status'    => 'publish',
	'orderby'        => sanitize_key( $order_by ),
	'order'          => strtoupper( $order ) === 'ASC' ? 'ASC' : 'DESC',
);

if ( ! empty( $destination_category ) ) {
	$query_args['tax_query'] = array(
		array(
			'taxonomy' => 'destination_category',
			'field'    => 'term_id',
			'terms'    => (int) $destination_category,
		),
	);
}

$destinations_query = new WP_Query( $query_args );

$wrapper_attrs = get_block_wrapper_attributes( array(
	'class' => 'alaska-destination-cards',
	'style' => '--columns: ' . (int) $columns,
) );
?>
<div <?php echo $wrapper_attrs; ?>>
	<?php if ( $destinations_query->have_posts() ) : ?>
		<?php while ( $destinations_query->have_posts() ) : $destinations_query->the_post(); ?>
			<?php
			$route         = get_post_meta( get_the_ID(), 'destination_route', true );
			$price         = get_post_meta( get_the_ID(), 'destination_price', true );
			$terms         = get_the_terms( get_the_ID(), 'destination_category' );
			$category_name = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : '';
			?>
			<a href="<?php the_permalink(); ?>" class="alaska-destination-cards__card">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large', array(
						'class'   => 'alaska-destination-cards__image',
						'loading' => 'lazy',
					) ); ?>
				<?php else : ?>
					<div class="alaska-destination-cards__placeholder"></div>
				<?php endif; ?>
				<div class="alaska-destination-cards__text">
					<?php if ( $category_name ) : ?>
						<span class="alaska-eyebrow">
							<?php echo esc_html( $category_name ); ?>
						</span>
					<?php endif; ?>
					<h3 class="alaska-destination-cards__name">
						<?php the_title(); ?>
					</h3>
				</div>
				<div class="alaska-destination-cards__meta">
					<?php if ( $route ) : ?>
						<span class="alaska-destination-cards__route">
							<?php echo esc_html( $route ); ?>
						</span>
					<?php endif; ?>
					<?php if ( $price ) : ?>
						<span class="alaska-destination-cards__price">
							<?php echo esc_html( $price ); ?>
						</span>
					<?php endif; ?>
				</div>
			</a>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php else : ?>
		<p style="color: var(--wp--preset--color--on-surface-variant); text-align: center; padding: 2rem;">
			<?php esc_html_e( 'No destinations found. Add destinations in the WordPress admin.', 'alaska' ); ?>
		</p>
	<?php endif; ?>
</div>
