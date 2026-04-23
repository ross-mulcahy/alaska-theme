<?php
/**
 * Title: Starter Page - Finance Homepage
 * Slug: alaska/starter-homepage-finance
 * Categories: alaska-page-starters
 * Description: Full homepage starter built for page content, not template code.
 * Keywords: starter, homepage, finance, marketing
 * Post Types: page
 * Viewport Width: 1440
 */

$contact_url = esc_url( home_url( '/contact/' ) );
?>
<!-- wp:cover {"url":"https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=1600&q=80","dimRatio":35,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":620,"minHeightUnit":"px","isDark":true,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
<div class="wp-block-cover alignfull is-dark" style="padding-top:var(--wp--preset--spacing--100);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--30);min-height:620px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-35 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=1600&q=80" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"720px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem","fontWeight":"800","textTransform":"uppercase","letterSpacing":"0.2em"}},"textColor":"secondary-fixed-dim"} -->
<p class="has-secondary-fixed-dim-color has-text-color" style="font-size:0.8125rem;font-weight:800;text-transform:uppercase;letter-spacing:0.2em">Finance Homepage Starter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"0.95","letterSpacing":"-0.03em"}},"textColor":"on-primary","fontSize":"display-lg"} -->
<h1 class="wp-block-heading has-on-primary-color has-text-color has-display-lg-font-size" style="line-height:0.95;letter-spacing:-0.03em">Build a modern financial-services homepage right in page content.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"on-primary","fontSize":"body-lg","style":{"typography":{"lineHeight":"1.7"}}} -->
<p class="has-on-primary-color has-text-color has-body-lg-font-size" style="line-height:1.7">This starter is intentionally editable. Replace the sections, rates, proof points, and disclosures here without touching the front-page template.</p>
<!-- /wp:paragraph -->
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<?php include __DIR__ . '/finance-product-grid.php'; ?>

<?php include __DIR__ . '/finance-trust-metrics.php'; ?>

<?php include __DIR__ . '/finance-rates-comparison.php'; ?>

<?php include __DIR__ . '/finance-news-query.php'; ?>

<?php include __DIR__ . '/finance-cta-band.php'; ?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|90","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--30)"><?php include __DIR__ . '/finance-legal-disclosure.php'; ?>

<!-- wp:paragraph {"fontSize":"body-sm","textColor":"outline"} -->
<p class="has-outline-color has-text-color has-body-sm-font-size">Optional follow-up: add a contact page and point primary homepage CTAs to <a href="<?php echo $contact_url; ?>">your preferred contact destination</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
