<?php
/**
 * Title: Flight Results Hero
 * Slug: alaska/flight-results-hero
 * Categories: alaska-flight
 * Description: Search summary bar with route and edit button. Reads URL params from booking widget.
 * Keywords: flights, search, summary, hero
 */

// Read search params from URL (set by booking widget form).
$from  = ! empty( $_GET['from'] ) ? sanitize_text_field( wp_unslash( $_GET['from'] ) ) : 'Seattle (SEA)';
$to    = ! empty( $_GET['to'] ) ? sanitize_text_field( wp_unslash( $_GET['to'] ) ) : 'Tokyo (NRT)';
$dates = ! empty( $_GET['dates'] ) ? sanitize_text_field( wp_unslash( $_GET['dates'] ) ) : 'Sep 1 - Sep 15';
?>
<!-- wp:group {"backgroundColor":"surface-container-low","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|30"}},"border":{"radius":"0.75rem","left":{"color":"var:preset|color|primary","width":"4px"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group has-surface-container-low-background-color has-background" style="border-radius:0.75rem;border-left-color:var(--wp--preset--color--primary);border-left-width:4px;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"letterSpacing":"-0.025em"}},"fontSize":"headline-sm"} -->
<h2 class="wp-block-heading has-headline-sm-font-size" style="letter-spacing:-0.025em"><?php echo esc_html( $from ); ?> to <?php echo esc_html( $to ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}},"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color" style="font-size:0.875rem"><?php echo esc_html( $dates ); ?> · 1 Traveler</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"fontSize":"0.875rem"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" style="font-size:0.875rem" href="<?php echo esc_url( home_url( '/' ) ); ?>">Edit search</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
