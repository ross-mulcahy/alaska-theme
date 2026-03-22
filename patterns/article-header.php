<?php
/**
 * Title: Article Header
 * Slug: alaska/article-header
 * Categories: alaska-article
 * Description: Article breadcrumb, category badge, title, date, and featured image.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained","wideSize":"1536px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30)">
	<!-- wp:html -->
	<nav style="display:flex;align-items:center;gap:0.5rem;margin-bottom:2rem;font-size:0.75rem;text-transform:uppercase;letter-spacing:0.15em;color:var(--wp--preset--color--outline);">
		<span>Newsroom</span>
		<span class="material-symbols-outlined" style="font-size:14px;">chevron_right</span>
		<span style="color:var(--wp--preset--color--primary);font-weight:600;">Press Releases</span>
	</nav>
	<!-- /wp:html -->

	<!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"56rem"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:post-title {"level":1,"style":{"typography":{"lineHeight":"1.1","letterSpacing":"-0.025em"}},"fontSize":"display-md"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"},"border":{"left":{"color":"var:preset|color|primary-fixed","width":"2px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--primary-fixed);border-left-width:2px;padding-left:1rem;">
			<!-- wp:post-date {"textColor":"on-surface","fontSize":"body-sm","style":{"typography":{"fontWeight":"600"}}} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","wideSize":"1536px"}} -->
<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:post-featured-image {"aspectRatio":"21/9","style":{"border":{"radius":"0.75rem"}}} /-->
</div>
<!-- /wp:group -->
