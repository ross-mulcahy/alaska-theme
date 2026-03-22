import { store, getContext } from '@wordpress/interactivity';

store( 'alaska/news-feed', {
	actions: {
		filterCategory( event ) {
			const ctx = getContext();
			const category = event.target.dataset.category;

			ctx.activeCategory = category;

			// Toggle active chip classes.
			const chips = event.target
				.closest( '.alaska-news-feed__filters' )
				.querySelectorAll( '.alaska-news-feed__chip' );

			chips.forEach( ( chip ) => {
				chip.classList.remove( 'alaska-news-feed__chip--active' );
			} );

			event.target.classList.add( 'alaska-news-feed__chip--active' );
		},

		async loadMore() {
			const ctx = getContext();
			ctx.page++;

			try {
				const response = await fetch(
					`/wp-json/wp/v2/posts?page=${ ctx.page }&per_page=3`
				);
				const posts = await response.json();

				const list = document.querySelector(
					'.alaska-news-feed__list'
				);

				posts.forEach( ( post ) => {
					const article = document.createElement( 'article' );
					article.className = 'alaska-news-feed__item';
					article.innerHTML = `
						<div class="alaska-news-feed__thumb">
							${ post.featured_media_url ? `<img src="${ post.featured_media_url }" alt="" loading="lazy">` : '' }
						</div>
						<div class="alaska-news-feed__content">
							<span class="alaska-news-feed__date">${ new Date( post.date ).toLocaleDateString( 'en-US', { month: 'long', day: 'numeric', year: 'numeric' } ) }</span>
							<h3 class="alaska-news-feed__title">
								<a href="${ post.link }">${ post.title.rendered }</a>
							</h3>
							<p class="alaska-news-feed__excerpt">${ post.excerpt.rendered.replace( /<[^>]+>/g, '' ) }</p>
						</div>
					`;
					list.appendChild( article );
				} );

				// Hide "Load More" button if fewer than 3 results returned.
				if ( posts.length < 3 ) {
					const btn = document.querySelector(
						'.alaska-news-feed__load-more'
					);
					if ( btn ) {
						btn.style.display = 'none';
					}
				}
			} catch ( error ) {
				// eslint-disable-next-line no-console
				console.error( 'Failed to load more posts:', error );
			}
		},
	},
} );
