<?php
/**
 * Title: Homepage Hero
 * Slug: alaska/homepage-hero
 * Categories: alaska-homepage
 * Description: Hero section with background image and booking widget.
 */
?>
<!-- wp:cover {"dimRatio":20,"overlayColor":"primary","minHeight":640,"minHeightUnit":"px","contentPosition":"center left","isDark":true,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|120"}}}} -->
<div class="wp-block-cover alignfull is-dark" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--120);min-height:640px">
	<span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-20 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.1","letterSpacing":"-0.025em"}},"textColor":"on-primary","fontSize":"display-lg"} -->
				<h1 class="wp-block-heading has-on-primary-color has-text-color has-display-lg-font-size" style="line-height:1.1;letter-spacing:-0.025em">Fly to your next adventure</h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"on-primary","fontSize":"body-lg"} -->
				<p class="has-on-primary-color has-text-color has-body-lg-font-size" style="line-height:1.6">Experience premium service and comfort across our expanding network of over 120 destinations.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:alaska/booking-widget {"actionUrl":"#","defaultFrom":"Seattle (SEA)","defaultTo":"San Francisco (SFO)"} /-->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
