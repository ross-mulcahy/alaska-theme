<?php
/**
 * Featured Article Block — Server-side render.
 *
 * @package Alaska
 */

$post_id    = $attributes['postId'] ?? 0;
$use_latest = $attributes['useLatest'] ?? true;

if ( $use_latest || ! $post_id ) {
	$latest = get_posts( array(
		'posts_per_page' => 1,
		'post_status'    => 'publish',
	) );
	$featured_post = ! empty( $latest ) ? $latest[0] : null;
} else {
	$featured_post = get_post( $post_id );
}

if ( ! $featured_post ) {
	return;
}

$image_url  = get_the_post_thumbnail_url( $featured_post->ID, 'large' );
$image_url  = $image_url ? $image_url : get_post_meta( $featured_post->ID, 'alaska_demo_image_url', true );
$categories = get_the_category( $featured_post->ID );
$cat_name   = ! empty( $categories ) ? $categories[0]->name : 'Latest News';
$date       = get_the_date( '', $featured_post );
$excerpt    = wp_trim_words( $featured_post->post_excerpt ?: wp_strip_all_tags( $featured_post->post_content ), 30 );
$permalink  = get_permalink( $featured_post->ID );

$wrapper_attrs = get_block_wrapper_attributes( array(
	'class' => 'alaska-featured-article',
) );
?>
<div <?php echo $wrapper_attrs; ?>>
	<a href="<?php echo esc_url( $permalink ); ?>" class="alaska-featured-article__link alaska-hover-zoom">
		<div class="alaska-featured-article__image-wrap alaska-aspect-21-9">
			<?php if ( $image_url ) : ?>
				<img
					src="<?php echo esc_url( $image_url ); ?>"
					alt="<?php echo esc_attr( $featured_post->post_title ); ?>"
					class="alaska-featured-article__image"
					loading="lazy"
				/>
			<?php else : ?>
				<div class="alaska-featured-article__placeholder"></div>
			<?php endif; ?>
			<div class="alaska-featured-article__overlay"></div>
			<div class="alaska-featured-article__content">
				<span class="alaska-featured-article__badge"><?php echo esc_html( $cat_name ); ?></span>
				<h2 class="alaska-featured-article__title">
					<?php echo esc_html( $featured_post->post_title ); ?>
				</h2>
			</div>
		</div>
	</a>
	<div class="alaska-featured-article__meta">
		<span class="alaska-featured-article__date"><?php echo esc_html( $date ); ?></span>
		<span class="alaska-featured-article__read-time">
			<span class="material-symbols-outlined" style="font-size: 14px;">schedule</span>
			<?php echo (int) ceil( str_word_count( wp_strip_all_tags( $featured_post->post_content ) ) / 250 ); ?> min read
		</span>
	</div>
	<p class="alaska-featured-article__excerpt"><?php echo esc_html( $excerpt ); ?></p>
</div>
