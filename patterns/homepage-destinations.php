<?php
/**
 * Title: Homepage Destinations
 * Slug: alaska/homepage-destinations
 * Categories: alaska-homepage
 * Description: "Where to next?" destination cards grid.
 * Keywords: destinations, cards, grid, travel
 */

$destinations_url = esc_url( get_post_type_archive_link( 'destination' ) ?: home_url( '/destinations/' ) );
?>
<!-- wp:group {"align":"full","backgroundColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--100);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"display-md"} -->
<h2 class="wp-block-heading has-display-md-font-size">Where to next?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color">Hand-picked destinations for your seasonal escape.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"secondary","fontSize":"body-sm"} -->
<p class="has-secondary-color has-text-color has-body-sm-font-size" style="font-weight:700"><a href="<?php echo $destinations_url; ?>">Explore all destinations →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:alaska/destination-cards {"columns":3} /--></div>
<!-- /wp:group -->
