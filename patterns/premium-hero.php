<?php
/**
 * Title: Premium Class Hero
 * Slug: alaska/premium-hero
 * Categories: alaska-premium
 * Description: Full-bleed hero for Premium Class page.
 * Keywords: hero, premium, travel, landing page
 */

$premium_url = esc_url( home_url( '/premium/' ) );
?>
<!-- wp:cover {"overlayColor":"primary","isUserOverlayColor":true,"dimRatio":60,"minHeight":700,"minHeightUnit":"px","isDark":true,"align":"full","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|120","bottom":"var:preset|spacing|120"}}}} -->
<div class="wp-block-cover alignfull is-dark" style="padding-top:var(--wp--preset--spacing--120);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--120);padding-left:var(--wp--preset--spacing--40);min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","contentSize":"42rem","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"color":{"background":"#82c1fd","text":"#004f7e"},"typography":{"fontSize":"0.75rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.15em"},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.75rem","right":"0.75rem"}},"border":{"radius":"4px"}}} -->
<p class="has-text-color has-background" style="border-radius:4px;color:#004f7e;background-color:#82c1fd;padding-top:0.25rem;padding-right:0.75rem;padding-bottom:0.25rem;padding-left:0.75rem;font-size:0.75rem;font-weight:700;letter-spacing:0.15em;text-transform:uppercase">Experience Elevated</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"0.95","letterSpacing":"-0.025em"}},"textColor":"on-primary","fontSize":"display-lg"} -->
<h1 class="wp-block-heading has-on-primary-color has-text-color has-display-lg-font-size" style="line-height:0.95;letter-spacing:-0.025em">Premium<br>Class.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"on-primary","fontSize":"headline-sm"} -->
<p class="has-on-primary-color has-text-color has-headline-sm-font-size" style="line-height:1.6">Treat yourself to more space and a little something extra. From more legroom to early boarding, every detail is designed for your comfort.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-cta-gradient","style":{"typography":{"fontSize":"1.125rem"}}} -->
<div class="wp-block-button is-style-cta-gradient"><a class="wp-block-button__link has-custom-font-size wp-element-button" style="font-size:1.125rem" href="<?php echo $premium_url; ?>">Explore Comfort →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
