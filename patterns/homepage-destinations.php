<?php
/**
 * Title: Homepage Destinations
 * Slug: alaska/homepage-destinations
 * Categories: alaska-homepage
 * Description: "Where to next?" destination cards grid.
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100)">
	<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"fontSize":"display-md"} -->
			<h2 class="wp-block-heading has-display-md-font-size">Where to next?</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
			<p class="has-on-surface-variant-color has-text-color">Hand-picked destinations for your seasonal escape.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"textColor":"secondary","style":{"typography":{"fontWeight":"700"}},"fontSize":"body-sm"} -->
		<p class="has-secondary-color has-text-color has-body-sm-font-size" style="font-weight:700"><a href="#">Explore all destinations →</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"3rem"} -->
	<div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:alaska/destination-cards {"columns":3} /-->
</div>
<!-- /wp:group -->
