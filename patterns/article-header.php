<?php
/**
 * Title: Article Header
 * Slug: alaska/article-header
 * Categories: alaska-article
 * Description: Article breadcrumb, title, date, and featured image.
 * Keywords: article, header, newsroom, featured image
 */

$news_url = alaska_get_newsroom_url();
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained","wideSize":"1536px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"0.5rem","margin":{"bottom":"var:preset|spacing|20"}}}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","textTransform":"uppercase","letterSpacing":"0.15em"}},"textColor":"outline"} -->
<p class="has-outline-color has-text-color" style="font-size:0.75rem;text-transform:uppercase;letter-spacing:0.15em"><a href="<?php echo esc_url( $news_url ); ?>">Newsroom</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","textTransform":"uppercase","letterSpacing":"0.15em"}},"textColor":"outline"} -->
<p class="has-outline-color has-text-color" style="font-size:0.75rem;text-transform:uppercase;letter-spacing:0.15em">›</p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","separator":", ","style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.15em"}},"textColor":"outline"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":1,"style":{"typography":{"lineHeight":"1.1","letterSpacing":"-0.025em"}},"fontSize":"display-md"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem","padding":{"left":"1rem"}},"border":{"left":{"color":"var:preset|color|primary-fixed","width":"2px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--primary-fixed);border-left-width:2px;padding-left:1rem"><!-- wp:post-date {"textColor":"on-surface","fontSize":"body-sm","style":{"typography":{"fontWeight":"600"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","wideSize":"1536px"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-featured-image {"aspectRatio":"21/9","style":{"border":{"radius":"0.75rem"}}} /--></div>
<!-- /wp:group -->
