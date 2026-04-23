<?php
/**
 * Title: Finance News Query Section
 * Slug: alaska/finance-news-query
 * Categories: alaska-finance
 * Description: Query-driven newsroom or insights section for use on marketing pages.
 * Keywords: finance, query, news, insights, posts
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"surface-container-lowest","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-container-lowest-background-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"display-md"} -->
<h2 class="wp-block-heading has-display-md-font-size">Latest insights and updates</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color">This section stays current because it pulls from posts instead of hardcoded cards.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":4,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"backgroundColor":"background","style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|30","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--20)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":"0.75rem"}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.15em"}},"textColor":"secondary"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"headline-sm"} /-->

<!-- wp:post-excerpt {"excerptLength":18,"moreText":"Read more"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
