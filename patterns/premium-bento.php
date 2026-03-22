<?php
/**
 * Title: Premium Bento Grid
 * Slug: alaska/premium-bento
 * Categories: alaska-premium
 * Description: The Premium Journey bento grid layout.
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"surface-container-lowest","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-container-lowest-background-color has-background" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100)">
	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:heading {"level":2,"fontSize":"headline-lg"} -->
		<h2 class="wp-block-heading has-headline-lg-font-size">The Premium Journey</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
		<p class="has-on-surface-variant-color has-text-color">Every mile is an opportunity to unwind.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:html -->
	<div class="alaska-bento-grid">
		<!-- Large card -->
		<div class="alaska-bento-large" style="background-color:var(--wp--preset--color--surface-container-low);border-radius:1rem;overflow:hidden;display:flex;flex-direction:column;">
			<div style="height:66%;overflow:hidden;" class="alaska-hover-zoom">
				<img src="" alt="Relaxation" style="width:100%;height:100%;object-fit:cover;" loading="lazy" />
			</div>
			<div style="padding:2rem;">
				<h3 style="font-family:'Manrope',sans-serif;font-size:1.5rem;font-weight:700;color:var(--wp--preset--color--primary);margin:0 0 0.5rem;">Sit back and relax</h3>
				<p style="color:var(--wp--preset--color--on-surface-variant);margin:0;font-size:0.875rem;">Ergonomically designed seats with power outlets in every row to keep you fully charged.</p>
			</div>
		</div>

		<!-- Wide card -->
		<div class="alaska-bento-wide" style="background-color:var(--wp--preset--color--surface-container);border-radius:1rem;padding:2rem;display:flex;align-items:center;gap:1.5rem;overflow:hidden;">
			<div style="width:66%;">
				<h3 style="font-family:'Manrope',sans-serif;font-size:1.25rem;font-weight:700;color:var(--wp--preset--color--primary);margin:0 0 0.5rem;">Enjoy your favorite drink</h3>
				<p style="color:var(--wp--preset--color--on-surface-variant);margin:0;font-size:0.875rem;">Curated selection of West Coast wines and craft beers on us.</p>
			</div>
			<div style="width:34%;height:100%;">
				<img src="" alt="Drinks" style="width:100%;height:100%;object-fit:cover;border-radius:0.5rem;" loading="lazy" />
			</div>
		</div>

		<!-- Small card: WiFi -->
		<div style="background-color:var(--wp--preset--color--surface-container-high);border-radius:1rem;padding:2rem;display:flex;flex-direction:column;justify-content:space-between;">
			<span class="material-symbols-outlined" style="font-size:2rem;color:var(--wp--preset--color--secondary);">wifi</span>
			<div>
				<h3 style="font-family:'Manrope',sans-serif;font-weight:700;color:var(--wp--preset--color--primary);margin:0 0 0.25rem;">Staying connected gets speedier</h3>
				<p style="color:var(--wp--preset--color--on-surface-variant);margin:0;font-size:0.75rem;">High-speed satellite Wi-Fi available on most flights.</p>
			</div>
		</div>

		<!-- Small card: Entertainment -->
		<div style="background-color:var(--wp--preset--color--primary);border-radius:1rem;padding:2rem;display:flex;flex-direction:column;justify-content:space-between;color:#fff;">
			<span class="material-symbols-outlined" style="font-size:2rem;">movie</span>
			<div>
				<h3 style="font-family:'Manrope',sans-serif;font-weight:700;margin:0 0 0.25rem;">1000+ movies &amp; TV episodes</h3>
				<p style="opacity:0.8;margin:0;font-size:0.75rem;">Free entertainment streamed directly to your device.</p>
			</div>
		</div>
	</div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->
