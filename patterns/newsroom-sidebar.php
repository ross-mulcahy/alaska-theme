<?php
/**
 * Title: Newsroom Sidebar
 * Slug: alaska/newsroom-sidebar
 * Categories: alaska-newsroom, alaska-support
 * Description: Sidebar with media inquiries and internal newsroom links.
 * Keywords: newsroom, support, contact, links
 */

$news_url         = alaska_get_newsroom_url();
$premium_url      = home_url( '/premium/' );
$destinations_url = alaska_get_destinations_url();
$flights_url      = home_url( '/flights/' );
$feed_url         = home_url( '/feed/' );
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"2.5rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:alaska/contact-card {"title":"Media Inquiries","email":"newsroom@alaskaair.com","phone":"+1 (206) 304-0008","note":"Available 24/7 for credentialed media members only.","variant":"dark"} /-->

<!-- wp:group {"backgroundColor":"surface-container-low","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"0.75rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-surface-container-low-background-color has-background" style="border-radius:0.75rem;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"fontSize":"body-lg"} -->
<h3 class="wp-block-heading has-body-lg-font-size">Explore the Demo</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color"><a href="<?php echo esc_url( $news_url ); ?>">Latest newsroom stories →</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color"><a href="<?php echo esc_url( $premium_url ); ?>">Premium travel experience →</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color"><a href="<?php echo esc_url( $destinations_url ); ?>">Destination guides →</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color"><a href="<?php echo esc_url( $flights_url ); ?>">Search flights →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.15em"}},"textColor":"outline"} -->
<p class="has-outline-color has-text-color" style="font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:0.15em">Stay Connected</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#002b48","iconBackgroundColor":"surface-container-high","iconBackgroundColorValue":"#e7e8e9","style":{"spacing":{"blockGap":{"left":"1rem"}}},"className":"is-style-default"} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"mailto:newsroom@alaskaair.com","service":"mail"} /-->
<!-- wp:social-link {"url":"<?php echo esc_url( $feed_url ); ?>","service":"feed"} /-->
<!-- wp:social-link {"url":"<?php echo esc_url( $news_url ); ?>","service":"x"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
