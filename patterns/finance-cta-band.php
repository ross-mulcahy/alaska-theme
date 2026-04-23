<?php
/**
 * Title: Finance CTA Band
 * Slug: alaska/finance-cta-band
 * Categories: alaska-finance
 * Description: Wide conversion band for an application or consultation CTA.
 * Keywords: CTA, finance, conversion, contact
 * Viewport Width: 1440
 */

$cta_url = esc_url( home_url( '/contact/' ) );
?>
<!-- wp:group {"align":"full","backgroundColor":"tertiary-container","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group alignfull has-tertiary-container-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.8125rem","fontWeight":"800","textTransform":"uppercase","letterSpacing":"0.2em"}},"textColor":"tertiary"} -->
<p class="has-text-align-center has-tertiary-color has-text-color" style="font-size:0.8125rem;font-weight:800;text-transform:uppercase;letter-spacing:0.2em">Ready When You Are</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","fontSize":"display-md"} -->
<h2 class="wp-block-heading has-text-align-center has-display-md-font-size">Turn this band into your main conversion moment.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"on-surface-variant","fontSize":"body-lg"} -->
<p class="has-text-align-center has-on-surface-variant-color has-text-color has-body-lg-font-size">Great for application starts, branch appointments, rate consultations, or wealth conversations. Swap the CTA and copy for the audience on the page.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-cta-gradient"} -->
<div class="wp-block-button is-style-cta-gradient"><a class="wp-block-button__link wp-element-button" href="<?php echo $cta_url; ?>">Start the conversation</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
