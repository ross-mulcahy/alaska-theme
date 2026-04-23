<?php
/**
 * Title: Starter Page - Finance Newsroom
 * Slug: alaska/starter-newsroom-finance
 * Categories: alaska-page-starters
 * Description: Newsroom starter page that keeps the main content in page content and posts.
 * Keywords: starter, newsroom, finance, insights, posts
 * Post Types: page
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"surface-container-lowest","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-container-lowest-background-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem","fontWeight":"800","textTransform":"uppercase","letterSpacing":"0.2em"}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color" style="font-size:0.8125rem;font-weight:800;text-transform:uppercase;letter-spacing:0.2em">Newsroom Starter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"display-lg"} -->
<h2 class="wp-block-heading has-display-lg-font-size">Insights, announcements, and thought leadership.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"body-lg"} -->
<p class="has-on-surface-variant-color has-text-color has-body-lg-font-size">Use this page as the marketing wrapper around your posts. Editors can update the intro copy here, while the story cards below stay current through the Query Loop.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php include __DIR__ . '/finance-news-query.php'; ?>

<?php include __DIR__ . '/finance-support-contact.php'; ?>
