<?php
/**
 * Title: Starter Page - Finance Product Landing
 * Slug: alaska/starter-product-page-finance
 * Categories: alaska-page-starters
 * Description: Product landing starter for checking, savings, lending, or wealth pages.
 * Keywords: starter, finance, product, landing page
 * Post Types: page
 * Viewport Width: 1440
 */
?>
<?php include __DIR__ . '/finance-hero-business.php'; ?>

<?php include __DIR__ . '/finance-product-grid.php'; ?>

<?php include __DIR__ . '/finance-faq.php'; ?>

<?php include __DIR__ . '/finance-support-contact.php'; ?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|90","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--30)"><?php include __DIR__ . '/finance-legal-disclosure.php'; ?></div>
<!-- /wp:group -->
