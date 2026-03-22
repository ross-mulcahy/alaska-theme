<?php
/**
 * Flight Results Block — Server-side render.
 *
 * @package Alaska
 */

$flights = $attributes['flights'] ?? array();
$wrapper_attrs = get_block_wrapper_attributes( array(
	'class'               => 'alaska-flight-results',
	'data-wp-interactive'  => 'alaska/flight-results',
) );
?>
<div <?php echo $wrapper_attrs; ?>>
	<h3 class="alaska-flight-results__heading">Departing flights</h3>
	<div class="alaska-flight-results__list">
		<?php foreach ( $flights as $flight ) : ?>
			<div class="alaska-flight-results__card<?php echo ! empty( $flight['popular'] ) ? ' alaska-flight-results__card--popular' : ''; ?>">
				<?php if ( ! empty( $flight['popular'] ) ) : ?>
					<div class="alaska-flight-results__badge">Most Popular</div>
				<?php endif; ?>
				<div class="alaska-flight-results__card-inner">
					<!-- Flight Info -->
					<div class="alaska-flight-results__info">
						<div class="alaska-flight-results__airline">
							<div class="alaska-flight-results__airline-icon">
								<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">flight_takeoff</span>
							</div>
							<span><?php echo esc_html( $flight['airline'] ); ?></span>
						</div>
						<div class="alaska-flight-results__route">
							<div class="alaska-flight-results__time-block">
								<p class="alaska-flight-results__time"><?php echo esc_html( $flight['departure'] ); ?></p>
								<p class="alaska-flight-results__airport"><?php echo esc_html( $flight['origin'] ); ?></p>
							</div>
							<div class="alaska-flight-results__route-line-wrap">
								<span class="alaska-flight-results__duration"><?php echo esc_html( $flight['duration'] ); ?></span>
								<div class="alaska-route-line"></div>
								<span class="alaska-flight-results__stops"><?php echo esc_html( $flight['stops'] ); ?></span>
							</div>
							<div class="alaska-flight-results__time-block alaska-flight-results__time-block--right">
								<p class="alaska-flight-results__time"><?php echo esc_html( $flight['arrival'] ); ?></p>
								<p class="alaska-flight-results__airport"><?php echo esc_html( $flight['destination'] ); ?></p>
							</div>
						</div>
					</div>
					<!-- Pricing -->
					<div class="alaska-flight-results__pricing">
						<div class="alaska-flight-results__price-col">
							<span class="alaska-flight-results__cabin-label">Main</span>
							<p class="alaska-flight-results__price"><?php echo esc_html( $flight['mainPrice'] ); ?></p>
							<button class="alaska-flight-results__select">Select</button>
						</div>
						<div class="alaska-flight-results__price-col">
							<span class="alaska-flight-results__cabin-label">Premium</span>
							<p class="alaska-flight-results__price"><?php echo esc_html( $flight['premiumPrice'] ); ?></p>
							<button class="alaska-flight-results__select">Select</button>
						</div>
						<div class="alaska-flight-results__price-col alaska-flight-results__price-col--first">
							<span class="alaska-flight-results__cabin-label">First Class</span>
							<p class="alaska-flight-results__price"><?php echo esc_html( $flight['firstPrice'] ); ?></p>
							<button class="alaska-flight-results__select alaska-flight-results__select--primary">Select</button>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
