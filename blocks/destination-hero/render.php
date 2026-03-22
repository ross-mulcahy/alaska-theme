<?php
/**
 * Destination Hero Block — Server-side render.
 *
 * Renders a full-width hero using the current destination's
 * featured image, title, category, route, and price.
 *
 * @package Alaska
 */

$post_id = $block->context['postId'] ?? get_the_ID();
if ( ! $post_id ) {
	return;
}

$title     = get_the_title( $post_id );
$image_url = get_the_post_thumbnail_url( $post_id, 'full' );
$route     = get_post_meta( $post_id, 'destination_route', true );
$price     = get_post_meta( $post_id, 'destination_price', true );
$terms     = get_the_terms( $post_id, 'destination_category' );
$category  = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : '';
$excerpt   = get_the_excerpt( $post_id );

$wrapper_attrs = get_block_wrapper_attributes( array(
	'class' => 'alaska-destination-hero alignfull',
) );

$bg_style = $image_url ? 'background-image: url(' . esc_url( $image_url ) . ');' : '';
?>
<div <?php echo $wrapper_attrs; ?>>
	<div class="alaska-destination-hero__bg" style="<?php echo $bg_style; ?>">
		<div class="alaska-destination-hero__overlay"></div>
		<div class="alaska-destination-hero__content">
			<?php if ( $category ) : ?>
				<span class="alaska-destination-hero__category">
					<?php echo esc_html( $category ); ?>
				</span>
			<?php endif; ?>
			<h1 class="alaska-destination-hero__title">
				<?php echo esc_html( $title ); ?>
			</h1>
			<?php if ( $excerpt ) : ?>
				<p class="alaska-destination-hero__excerpt">
					<?php echo esc_html( $excerpt ); ?>
				</p>
			<?php endif; ?>
			<div class="alaska-destination-hero__meta">
				<?php if ( $route ) : ?>
					<span class="alaska-destination-hero__route">
						<span class="material-symbols-outlined">flight_takeoff</span>
						<?php echo esc_html( $route ); ?>
					</span>
				<?php endif; ?>
				<?php if ( $price ) : ?>
					<span class="alaska-destination-hero__price">
						From <?php echo esc_html( $price ); ?>
					</span>
				<?php endif; ?>
			</div>
			<div class="alaska-destination-hero__cta">
				<a href="#" class="alaska-destination-hero__button">
					Search Flights
					<span class="material-symbols-outlined">arrow_forward</span>
				</a>
			</div>
		</div>
	</div>
</div>
