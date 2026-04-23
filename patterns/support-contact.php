<?php
/**
 * Title: Support Contact Band
 * Slug: alaska/support-contact
 * Categories: alaska-support
 * Description: Support and planning section with action links for travelers and editors.
 * Keywords: support, contact, help, travel planning
 */

$flights_url = home_url( '/flights/' );
$news_url    = home_url( '/news/' );
?>
<!-- wp:group {"align":"full","backgroundColor":"surface-container-low","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-container-low-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50","top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.15em"}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color" style="font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:0.15em">Travel Support</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"display-md"} -->
<h2 class="wp-block-heading has-display-md-font-size">Need a hand planning the next trip?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"body-lg"} -->
<p class="has-on-surface-variant-color has-text-color has-body-lg-font-size">Use this section for customer-care prompts, seasonal advisories, or campaign support copy without touching the page template.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-cta-gradient"} -->
<div class="wp-block-button is-style-cta-gradient"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $flights_url ); ?>">Search Flights</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-tonal"} -->
<div class="wp-block-button is-style-tonal"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $news_url ); ?>">Visit the Newsroom</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:group {"backgroundColor":"surface-container-lowest","style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-surface-container-lowest-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"fontSize":"headline-sm"} -->
<h3 class="wp-block-heading has-headline-sm-font-size">Editor Notes</h3>
<!-- /wp:heading -->

<!-- wp:list {"textColor":"on-surface-variant","fontSize":"body-sm"} -->
<ul class="wp-block-list has-on-surface-variant-color has-text-color has-body-sm-font-size"><!-- wp:list-item -->
<li>Swap this copy for alerts, travel waivers, or contact details.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Buttons can point to any page, campaign, or support hub.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Use this block band on the homepage, premium pages, or destination landers.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
