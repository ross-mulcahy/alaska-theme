<?php
/**
 * Title: Newsroom Sidebar
 * Slug: alaska/newsroom-sidebar
 * Categories: alaska-newsroom
 * Description: Sidebar with media inquiries, resources, and social links.
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"2.5rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group">
	<!-- wp:alaska/contact-card {"title":"Media Inquiries","email":"newsroom@alaskaair.com","phone":"+1 (206) 304-0008","note":"Available 24/7 for credentialed media members only.","variant":"dark"} /-->

	<!-- wp:group {"backgroundColor":"surface-container-low","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"0.75rem"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group has-surface-container-low-background-color has-background" style="border-radius:0.75rem;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40)">
		<!-- wp:heading {"level":3,"fontSize":"body-lg"} -->
		<h3 class="wp-block-heading has-body-lg-font-size">Resource Center</h3>
		<!-- /wp:heading -->

		<!-- wp:list {"style":{"spacing":{"blockGap":"1rem"}}} -->
		<ul>
			<li><a href="#">Media Kit &amp; Logos →</a></li>
			<li><a href="#">Executive Bios →</a></li>
			<li><a href="#">Fleet Fact Sheets →</a></li>
			<li><a href="#">Investor Relations →</a></li>
		</ul>
		<!-- /wp:list -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40)">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.15em"}},"textColor":"outline"} -->
		<p class="has-outline-color has-text-color" style="font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:0.15em">Stay Connected</p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<div style="display:flex;gap:1rem;">
			<a href="#" style="width:3rem;height:3rem;border-radius:50%;background-color:var(--wp--preset--color--surface-container-high);display:flex;align-items:center;justify-content:center;color:var(--wp--preset--color--primary);text-decoration:none;transition:all 0.2s ease;">
				<span class="material-symbols-outlined">share</span>
			</a>
			<a href="#" style="width:3rem;height:3rem;border-radius:50%;background-color:var(--wp--preset--color--surface-container-high);display:flex;align-items:center;justify-content:center;color:var(--wp--preset--color--primary);text-decoration:none;transition:all 0.2s ease;">
				<span class="material-symbols-outlined">rss_feed</span>
			</a>
			<a href="#" style="width:3rem;height:3rem;border-radius:50%;background-color:var(--wp--preset--color--surface-container-high);display:flex;align-items:center;justify-content:center;color:var(--wp--preset--color--primary);text-decoration:none;transition:all 0.2s ease;">
				<span class="material-symbols-outlined">mail</span>
			</a>
		</div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
