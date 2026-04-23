<?php
/**
 * Title: Newsroom Page Starter
 * Slug: alaska/page-newsroom-starter
 * Categories: alaska-starters, alaska-newsroom
 * Block Types: core/post-content
 * Description: Starter page composition for the editor-managed newsroom landing page.
 * Keywords: starter, newsroom, articles, editorial
 */
?>
<!-- wp:pattern {"slug":"alaska/newsroom-header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","wideSize":"1536px"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"3rem","top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:alaska/featured-article /-->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:alaska/news-feed {"postsPerPage":4,"showFilters":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:pattern {"slug":"alaska/newsroom-sidebar"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
