<?php
/**
 * Title: Featured Destinations Grid
 * Slug: alaska/destination-featured-grid
 * Categories: alaska-destination, alaska-support
 * Description: Reusable destination query section for landing pages and campaign content.
 * Keywords: destinations, travel, campaign, featured
 */

$destinations_url = alaska_get_destinations_url();
?>
<!-- wp:group {"align":"full","backgroundColor":"surface-container-low","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|100","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-container-low-background-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.15em"}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color" style="font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:0.15em">Campaign Module</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"display-sm"} -->
<h2 class="wp-block-heading has-display-sm-font-size">Featured destinations for the next push</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"body-lg"} -->
<p class="has-on-surface-variant-color has-text-color has-body-lg-font-size">Drop this section into the homepage, premium page, or a campaign landing page to merchandise the destination library without custom template work.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"secondary","fontSize":"body-sm"} -->
<p class="has-secondary-color has-text-color has-body-sm-font-size" style="font-weight:700"><a href="<?php echo esc_url( $destinations_url ); ?>">Browse the full network →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:alaska/destination-cards {"columns":3,"postsToShow":6,"orderBy":"title","order":"asc"} /--></div>
<!-- /wp:group -->
