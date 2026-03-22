<?php
/**
 * Title: Flight Results Hero
 * Slug: alaska/flight-results-hero
 * Categories: alaska-flight
 * Description: Search summary bar with route and edit button.
 */
?>
<!-- wp:group {"backgroundColor":"surface-container-low","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|30"}},"border":{"radius":"0.75rem","left":{"color":"var:preset|color|primary","width":"4px"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group has-surface-container-low-background-color has-background" style="border-radius:0.75rem;border-left-color:var(--wp--preset--color--primary);border-left-width:4px;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30)">
	<!-- wp:group {"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"level":2,"style":{"typography":{"letterSpacing":"-0.025em"}},"fontSize":"headline-sm"} -->
		<h2 class="wp-block-heading has-headline-sm-font-size" style="letter-spacing:-0.025em">Seattle (SEA) to Tokyo (NRT)</h2>
		<!-- /wp:heading -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"textColor":"on-surface-variant","layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"body-sm"} -->
		<div class="wp-block-group has-on-surface-variant-color has-text-color has-body-sm-font-size">
			<!-- wp:html -->
			<span style="display:flex;align-items:center;gap:0.25rem;">
				<span class="material-symbols-outlined" style="font-size:18px;">calendar_today</span>
				Sep 1 - Sep 15
			</span>
			<!-- /wp:html -->
			<!-- wp:html -->
			<span style="width:4px;height:4px;border-radius:50%;background-color:var(--wp--preset--color--outline-variant);"></span>
			<!-- /wp:html -->
			<!-- wp:html -->
			<span style="display:flex;align-items:center;gap:0.25rem;">
				<span class="material-symbols-outlined" style="font-size:18px;">person</span>
				1 Traveler
			</span>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button {"fontSize":"body-sm"} -->
		<div class="wp-block-button has-custom-font-size has-body-sm-font-size"><a class="wp-block-button__link wp-element-button" href="#">Edit search</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
