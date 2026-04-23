<?php
/**
 * Title: CTA — Driver Service
 * Slug: alaska/cta-driver-service
 * Categories: alaska-homepage
 * Description: Gradient CTA banner for the private driver service.
 * Keywords: CTA, service, transportation, travel
 */

$driver_url = esc_url( home_url( '/driver-service/' ) );
?>
<!-- wp:group {"gradient":"cta-gradient","textColor":"on-primary","style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-on-primary-color has-cta-gradient-gradient-background has-text-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.15em"},"color":{"text":"rgba(255,255,255,0.7)"}}} -->
<p class="has-text-color" style="color:rgba(255,255,255,0.7);font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:0.15em">New Service</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"lineHeight":"1.15"}},"textColor":"on-primary","fontSize":"headline-lg"} -->
<h3 class="wp-block-heading has-on-primary-color has-text-color has-headline-lg-font-size" style="line-height:1.15">Private driver service, door to gate.</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.8)"},"typography":{"fontSize":"0.9375rem","lineHeight":"1.6"}}} -->
<p class="has-text-color" style="color:rgba(255,255,255,0.8);font-size:0.9375rem;line-height:1.6">Skip the parking lot. Our new chauffeur service picks you up at home and drops you at the terminal — available in Seattle, Portland, San Francisco, and Los Angeles.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"backgroundColor":"on-primary","textColor":"primary","style":{"typography":{"fontSize":"0.875rem"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-on-primary-background-color has-text-color has-background has-custom-font-size wp-element-button" style="font-size:0.875rem" href="<?php echo $driver_url; ?>">Learn More →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
