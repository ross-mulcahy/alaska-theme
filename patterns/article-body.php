<?php
/**
 * Title: Article Body
 * Slug: alaska/article-body
 * Categories: alaska-article
 * Description: Two-column article content with sidebar.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","wideSize":"1536px"}} -->
<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"4rem"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"66.66%"} -->
		<div class="wp-block-column" style="flex-basis:66.66%">
			<!-- wp:post-content /-->

			<!-- wp:separator {"backgroundColor":"surface-container","style":{"spacing":{"margin":{"top":"3rem","bottom":"3rem"}}}} -->
			<hr class="wp-block-separator has-text-color has-surface-container-color has-alpha-channel-opacity has-surface-container-background-color has-background" style="margin-top:3rem;margin-bottom:3rem"/>
			<!-- /wp:separator -->

			<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.15em"}},"textColor":"outline"} -->
					<p class="has-outline-color has-text-color" style="font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:0.15em">Tags:</p>
					<!-- /wp:paragraph -->
					<!-- wp:post-terms {"term":"post_tag","style":{"typography":{"fontSize":"0.75rem"}},"backgroundColor":"surface-container-high"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">
			<!-- wp:alaska/contact-card {"title":"Media Inquiries","email":"newsroom@alaskaair.com","phone":"206-304-0008","note":"","variant":"light"} /-->

			<!-- wp:spacer {"height":"2rem"} -->
			<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:heading {"level":3,"fontSize":"headline-sm"} -->
			<h3 class="wp-block-heading has-headline-sm-font-size">Related News</h3>
			<!-- /wp:heading -->

			<!-- wp:latest-posts {"postsToShow":2,"displayPostContent":false,"displayPostDate":true,"postLayout":"list","featuredImageAlign":"left","featuredImageSizeSlug":"thumbnail","addLinkToFeaturedImage":true,"fontSize":"body-sm"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
