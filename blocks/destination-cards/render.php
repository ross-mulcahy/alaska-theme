<?php
/**
 * Destination Cards Block — Server-side render.
 *
 * @package Alaska
 */

$columns      = $attributes['columns'] ?? 3;
$destinations = $attributes['destinations'] ?? array();
$wrapper_attrs = get_block_wrapper_attributes( array(
	'class' => 'alaska-destination-cards',
) );
?>
<div <?php echo $wrapper_attrs; ?>>
	<div class="alaska-destination-cards__grid" style="--columns: <?php echo (int) $columns; ?>">
		<?php foreach ( $destinations as $dest ) : ?>
			<a href="<?php echo esc_url( $dest['link'] ?? '#' ); ?>" class="alaska-destination-cards__card alaska-hover-zoom">
				<div class="alaska-destination-cards__image-wrap alaska-aspect-4-5">
					<?php if ( ! empty( $dest['image'] ) ) : ?>
						<img
							src="<?php echo esc_url( $dest['image'] ); ?>"
							alt="<?php echo esc_attr( $dest['name'] ); ?>"
							class="alaska-destination-cards__image"
							loading="lazy"
						/>
					<?php else : ?>
						<div class="alaska-destination-cards__placeholder"></div>
					<?php endif; ?>
					<div class="alaska-destination-cards__overlay alaska-gradient-bottom"></div>
					<div class="alaska-destination-cards__text">
						<span class="alaska-eyebrow" style="opacity: 0.8; color: #fff;">
							<?php echo esc_html( $dest['category'] ?? '' ); ?>
						</span>
						<h3 class="alaska-destination-cards__name">
							<?php echo esc_html( $dest['name'] ); ?>
						</h3>
					</div>
				</div>
				<div class="alaska-destination-cards__meta">
					<span class="alaska-destination-cards__route">
						<?php echo esc_html( $dest['route'] ?? '' ); ?>
					</span>
					<span class="alaska-destination-cards__price">
						<?php echo esc_html( $dest['price'] ?? '' ); ?>
					</span>
				</div>
			</a>
		<?php endforeach; ?>
	</div>
</div>
