<?php
/**
 * News Feed Block — Server-side render.
 *
 * @package Alaska
 */

$posts_per_page = $attributes['postsPerPage'] ?? 3;
$show_filters   = $attributes['showFilters'] ?? false;

$query_args = array(
	'post_type'      => 'post',
	'posts_per_page' => $posts_per_page,
	'post_status'    => 'publish',
);

$news_query = new WP_Query( $query_args );
$categories = get_categories( array( 'hide_empty' => true ) );

$wrapper_attrs = get_block_wrapper_attributes( array(
	'class'               => 'alaska-news-feed',
	'data-wp-interactive'  => 'alaska/news-feed',
	'data-wp-context'     => wp_json_encode( array(
		'activeCategory' => 'all',
		'page'           => 1,
		'loading'        => false,
	) ),
) );
?>
<div <?php echo $wrapper_attrs; ?>>
	<?php if ( $show_filters && ! empty( $categories ) ) : ?>
		<div class="alaska-news-feed__filters">
			<button
				class="alaska-news-feed__chip alaska-news-feed__chip--active"
				data-wp-on--click="actions.filterCategory"
				data-category="all"
			>All News</button>
			<?php foreach ( $categories as $cat ) : ?>
				<button
					class="alaska-news-feed__chip"
					data-wp-on--click="actions.filterCategory"
					data-category="<?php echo esc_attr( $cat->slug ); ?>"
				><?php echo esc_html( $cat->name ); ?></button>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>

	<div class="alaska-news-feed__heading">
		<h3>Recent Updates</h3>
	</div>

	<div class="alaska-news-feed__list">
		<?php if ( $news_query->have_posts() ) : ?>
			<?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
				<article class="alaska-news-feed__item alaska-hover-zoom">
					<div class="alaska-news-feed__thumb">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'medium', array( 'loading' => 'lazy' ) ); ?>
						<?php else : ?>
							<div class="alaska-news-feed__placeholder"></div>
						<?php endif; ?>
					</div>
					<div class="alaska-news-feed__content">
						<?php
						$post_categories = get_the_category();
						if ( ! empty( $post_categories ) ) :
						?>
							<span class="alaska-eyebrow" style="color: var(--wp--preset--color--secondary);">
								<?php echo esc_html( $post_categories[0]->name ); ?>
							</span>
						<?php endif; ?>
						<h4 class="alaska-news-feed__title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h4>
						<p class="alaska-news-feed__excerpt"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
						<span class="alaska-news-feed__date"><?php echo get_the_date(); ?></span>
					</div>
				</article>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p>No articles found.</p>
		<?php endif; ?>
	</div>

	<?php if ( $news_query->max_num_pages > 1 ) : ?>
		<button
			class="alaska-news-feed__load-more"
			data-wp-on--click="actions.loadMore"
		>
			Load More Stories
			<span class="material-symbols-outlined">expand_more</span>
		</button>
	<?php endif; ?>
</div>
