<?php
/**
 * Flight Filters Block — Server-side render.
 *
 * @package Alaska
 */

$wrapper_attrs = get_block_wrapper_attributes( array(
	'class'               => 'alaska-flight-filters',
	'data-wp-interactive'  => 'alaska/flight-filters',
	'data-wp-context'     => wp_json_encode( array( 'expanded' => array( 'stops' => true ) ) ),
) );

$filters = array(
	array( 'key' => 'stops',     'label' => 'Stops',          'icon' => 'filter_list', 'filled' => true ),
	array( 'key' => 'airline',   'label' => 'Airline',        'icon' => 'flight',      'filled' => false ),
	array( 'key' => 'departure', 'label' => 'Departure Time', 'icon' => 'schedule',    'filled' => false ),
	array( 'key' => 'arrival',   'label' => 'Arrival Time',   'icon' => 'history',     'filled' => false ),
	array( 'key' => 'price',     'label' => 'Price Range',    'icon' => 'sell',        'filled' => false ),
);
?>
<div <?php echo $wrapper_attrs; ?>>
	<div class="alaska-flight-filters__header">
		<h3 class="alaska-flight-filters__title">Filters</h3>
		<p class="alaska-flight-filters__subtitle">Narrow your search</p>
	</div>

	<div class="alaska-flight-filters__list">
		<?php foreach ( $filters as $filter ) : ?>
			<button
				class="alaska-flight-filters__item<?php echo $filter['filled'] ? ' alaska-flight-filters__item--active' : ''; ?>"
				data-wp-on--click="actions.toggleFilter"
				data-filter="<?php echo esc_attr( $filter['key'] ); ?>"
			>
				<span class="material-symbols-outlined"<?php echo $filter['filled'] ? ' style="font-variation-settings: \'FILL\' 1;"' : ''; ?>>
					<?php echo esc_html( $filter['icon'] ); ?>
				</span>
				<span><?php echo esc_html( $filter['label'] ); ?></span>
			</button>
		<?php endforeach; ?>
	</div>

	<div class="alaska-flight-filters__cabin">
		<h4 class="alaska-flight-filters__cabin-title">Cabin Class</h4>
		<label class="alaska-flight-filters__checkbox">
			<input type="checkbox" checked name="cabin[]" value="main" />
			<span>Main</span>
		</label>
		<label class="alaska-flight-filters__checkbox">
			<input type="checkbox" name="cabin[]" value="premium" />
			<span>Premium Class</span>
		</label>
		<label class="alaska-flight-filters__checkbox">
			<input type="checkbox" name="cabin[]" value="first" />
			<span>First Class</span>
		</label>
	</div>
</div>
