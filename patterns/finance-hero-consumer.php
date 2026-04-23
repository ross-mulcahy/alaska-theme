<?php
/**
 * Title: Finance Hero - Consumer Banking
 * Slug: alaska/finance-hero-consumer
 * Categories: alaska-finance
 * Description: Hero section for a retail banking landing page.
 * Keywords: finance, banking, hero, savings, checking
 * Viewport Width: 1440
 */

$cta_url       = esc_url( home_url( '/contact/' ) );
$secondary_url = esc_url( home_url( '/support/' ) );
?>
<!-- wp:cover {"url":"https://images.unsplash.com/photo-1556740749-887f6717d7e4?auto=format&fit=crop&w=1600&q=80","dimRatio":45,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":640,"minHeightUnit":"px","isDark":true,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
<div class="wp-block-cover alignfull is-dark" style="padding-top:var(--wp--preset--spacing--100);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--30);min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-45 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="https://images.unsplash.com/photo-1556740749-887f6717d7e4?auto=format&fit=crop&w=1600&q=80" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"700px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem","fontWeight":"800","textTransform":"uppercase","letterSpacing":"0.2em"}},"textColor":"secondary-fixed-dim"} -->
<p class="has-secondary-fixed-dim-color has-text-color" style="font-size:0.8125rem;font-weight:800;text-transform:uppercase;letter-spacing:0.2em">Retail Banking Demo</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"0.95","letterSpacing":"-0.03em"}},"textColor":"on-primary","fontSize":"display-lg"} -->
<h1 class="wp-block-heading has-on-primary-color has-text-color has-display-lg-font-size" style="line-height:0.95;letter-spacing:-0.03em">Everyday banking that feels calm, clear, and trustworthy.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"on-primary","fontSize":"body-lg","style":{"typography":{"lineHeight":"1.7"}}} -->
<p class="has-on-primary-color has-text-color has-body-lg-font-size" style="line-height:1.7">Use this section for checking, savings, and money movement offers. Replace the copy with your approved positioning and pair it with rates, disclosures, and support patterns below.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-cta-gradient"} -->
<div class="wp-block-button is-style-cta-gradient"><a class="wp-block-button__link wp-element-button" href="<?php echo $cta_url; ?>">Talk to a banker</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-tonal"} -->
<div class="wp-block-button is-style-tonal"><a class="wp-block-button__link wp-element-button" href="<?php echo $secondary_url; ?>">Visit support</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
