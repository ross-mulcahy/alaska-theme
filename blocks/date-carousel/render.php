<?php
/**
 * Date Carousel Block — Server-side render.
 *
 * @package Alaska
 */

$dates = $attributes['dates'] ?? array();
$wrapper_attrs = get_block_wrapper_attributes( array(
	'class'               => 'alaska-date-carousel',
	'data-wp-interactive'  => 'alaska/date-carousel',
) );
?>
<div <?php echo $wrapper_attrs; ?>>
	<div class="alaska-date-carousel__track alaska-scroll-hidden">
		<?php foreach ( $dates as $index => $date ) : ?>
			<button
				class="alaska-date-carousel__item<?php echo ! empty( $date['active'] ) ? ' alaska-date-carousel__item--active' : ''; ?>"
				data-wp-on--click="actions.selectDate"
				data-index="<?php echo (int) $index; ?>"
			>
				<span class="alaska-date-carousel__label">
					<?php echo esc_html( $date['label'] ); ?>
				</span>
				<span class="alaska-date-carousel__price">
					<?php echo esc_html( $date['price'] ); ?>
				</span>
			</button>
		<?php endforeach; ?>
	</div>
</div>
