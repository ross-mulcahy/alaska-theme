<?php
/**
 * Title: CTA — Experiences
 * Slug: alaska/cta-experiences
 * Categories: alaska-homepage
 * Description: Local experiences and activities call-to-action card.
 */

$destinations_url = alaska_get_destinations_url();
?>
<!-- wp:group {"backgroundColor":"surface-container-lowest","style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group has-surface-container-lowest-background-color has-background" style="border-radius:1rem;min-height:100%;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem"}}} -->
<p style="font-size:2.5rem">🎿</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"headline-sm"} -->
<h3 class="wp-block-heading has-headline-sm-font-size">Experiences</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"body-sm"} -->
<p class="has-on-surface-variant-color has-text-color has-body-sm-font-size">Discover curated local tours, dining experiences, and adventures at every destination. Book before you land.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-tonal","style":{"typography":{"fontSize":"0.875rem"}},"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-tonal"><a class="wp-block-button__link has-custom-font-size wp-element-button" style="font-size:0.875rem" href="<?php echo esc_url( $destinations_url ); ?>">Explore Activities →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
