<?php
/**
 * Title: Premium Upgrade
 * Slug: alaska/premium-upgrade
 * Categories: alaska-premium
 * Description: Split image/text upgrade CTA section.
 * Keywords: premium, upgrade, CTA, travel
 */

$upgrade_url = esc_url( home_url( '/premium/' ) );
?>
<!-- wp:group {"align":"full","backgroundColor":"surface-container-low","style":{"spacing":{"padding":{"top":"var:preset|spacing|120","bottom":"var:preset|spacing|120"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-container-low-background-color has-background" style="padding-top:var(--wp--preset--spacing--120);padding-bottom:var(--wp--preset--spacing--120)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.1"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"display-md"} -->
<h2 class="wp-block-heading has-display-md-font-size" style="line-height:1.1;margin-bottom:var(--wp--preset--spacing--30)">Settle in for a Premium experience</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"on-surface-variant","fontSize":"body-lg"} -->
<p class="has-on-surface-variant-color has-text-color has-body-lg-font-size" style="margin-bottom:var(--wp--preset--spacing--40)">Upgrade your next flight and experience the Alaska difference. It's the little things—like having enough space to work or just being able to unwind—that make all the difference.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"fontSize":"1.125rem"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" style="font-size:1.125rem" href="<?php echo $upgrade_url; ?>">Upgrade to Premium</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"0.75rem"}},"linkDestination":"none"} -->
<figure class="wp-block-image size-large has-custom-border"><img alt="Premium cabin interior" style="border-radius:0.75rem"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
