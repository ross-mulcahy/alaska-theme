<?php
/**
 * Booking Widget Block — Server-side render.
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content.
 * @var WP_Block $block      Block instance.
 *
 * @package Alaska
 */

$action_url   = esc_url( $attributes['actionUrl'] ?? home_url( '/flights/' ) );
$default_from = esc_attr( $attributes['defaultFrom'] ?? 'Seattle (SEA)' );
$default_to   = esc_attr( $attributes['defaultTo'] ?? 'San Francisco (SFO)' );

// Pre-fill from URL params if returning from flight results.
$value_from  = ! empty( $_GET['from'] ) ? esc_attr( sanitize_text_field( wp_unslash( $_GET['from'] ) ) ) : '';
$value_to    = ! empty( $_GET['to'] ) ? esc_attr( sanitize_text_field( wp_unslash( $_GET['to'] ) ) ) : '';
$value_dates = ! empty( $_GET['dates'] ) ? esc_attr( sanitize_text_field( wp_unslash( $_GET['dates'] ) ) ) : '';
$wrapper_attrs = get_block_wrapper_attributes( array(
	'class'              => 'alaska-booking-widget',
	'data-wp-interactive' => 'alaska/booking-widget',
	'data-wp-context'    => wp_json_encode( array( 'activeTab' => 'flights' ) ),
) );
?>
<div <?php echo $wrapper_attrs; ?>>
	<div class="alaska-booking-widget__container">
		<!-- Tab Bar -->
		<div class="alaska-booking-widget__tabs">
			<button
				class="alaska-booking-widget__tab"
				data-wp-class--alaska-booking-widget__tab--active="context.activeTab === 'flights'"
				data-wp-on--click="actions.setTab"
				data-tab="flights"
			>
				<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">flight</span>
				Flights
			</button>
			<button
				class="alaska-booking-widget__tab"
				data-wp-class--alaska-booking-widget__tab--active="context.activeTab === 'hotels'"
				data-wp-on--click="actions.setTab"
				data-tab="hotels"
			>
				<span class="material-symbols-outlined">bed</span>
				Hotels
			</button>
			<button
				class="alaska-booking-widget__tab"
				data-wp-class--alaska-booking-widget__tab--active="context.activeTab === 'cars'"
				data-wp-on--click="actions.setTab"
				data-tab="cars"
			>
				<span class="material-symbols-outlined">electric_car</span>
				Cars
			</button>
		</div>

		<!-- Form -->
		<form class="alaska-booking-widget__form" action="<?php echo $action_url; ?>" method="get">
			<div class="alaska-booking-widget__field">
				<label class="alaska-booking-widget__label">From</label>
				<div class="alaska-booking-widget__input-wrap">
					<input type="text" name="from" class="alaska-booking-widget__input" placeholder="<?php echo $default_from; ?>" value="<?php echo $value_from; ?>" />
					<span class="material-symbols-outlined alaska-booking-widget__icon">location_on</span>
				</div>
			</div>
			<div class="alaska-booking-widget__field">
				<label class="alaska-booking-widget__label">To</label>
				<div class="alaska-booking-widget__input-wrap">
					<input type="text" name="to" class="alaska-booking-widget__input" placeholder="<?php echo $default_to; ?>" value="<?php echo $value_to; ?>" />
					<span class="material-symbols-outlined alaska-booking-widget__icon">flight_land</span>
				</div>
			</div>
			<div class="alaska-booking-widget__field">
				<label class="alaska-booking-widget__label">Dates</label>
				<div class="alaska-booking-widget__input-wrap">
					<input type="text" name="dates" class="alaska-booking-widget__input" placeholder="Nov 12 - Nov 19" value="<?php echo $value_dates; ?>" />
					<span class="material-symbols-outlined alaska-booking-widget__icon">calendar_today</span>
				</div>
			</div>
			<button type="submit" class="alaska-booking-widget__submit">
				Find Flights
			</button>
		</form>
	</div>
</div>
