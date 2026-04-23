<?php
/**
 * Title: CTA — Car Rentals
 * Slug: alaska/cta-car-rentals
 * Categories: alaska-homepage
 * Description: Car rental call-to-action card.
 * Keywords: CTA, cars, rentals, travel
 */

$cars_url = esc_url( home_url( '/car-rentals/' ) );
?>
<!-- wp:group {"backgroundColor":"surface-container-lowest","style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group has-surface-container-lowest-background-color has-background" style="border-radius:1rem;min-height:100%;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem"}}} -->
<p style="font-size:2.5rem">🚗</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"headline-sm"} -->
<h3 class="wp-block-heading has-headline-sm-font-size">Car Rentals</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"body-sm"} -->
<p class="has-on-surface-variant-color has-text-color has-body-sm-font-size">Explore at your own pace. Book a rental car from top providers at competitive rates, available at all major airports.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-tonal","style":{"typography":{"fontSize":"0.875rem"}},"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-tonal"><a class="wp-block-button__link has-custom-font-size wp-element-button" style="font-size:0.875rem" href="<?php echo $cars_url; ?>">Browse Cars →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
