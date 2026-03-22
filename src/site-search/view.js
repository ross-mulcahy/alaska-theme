import { store, getContext } from '@wordpress/interactivity';

let debounceTimer;

store( 'alaska/site-search', {
	actions: {
		onSearch( event ) {
			const ctx = getContext();
			const query = event.target.value.trim();

			clearTimeout( debounceTimer );

			if ( ! query ) {
				const dropdown = document.querySelector(
					'.alaska-site-search__dropdown'
				);
				if ( dropdown ) {
					dropdown.classList.remove(
						'alaska-site-search__dropdown--open'
					);
				}
				return;
			}

			debounceTimer = setTimeout( async () => {
				try {
					const response = await fetch(
						`/wp-json/wp/v2/search?search=${ encodeURIComponent(
							query
						) }&per_page=5`
					);
					const results = await response.json();

					const dropdown = document.querySelector(
						'.alaska-site-search__dropdown'
					);

					if ( ! dropdown ) {
						return;
					}

					if ( results.length > 0 ) {
						dropdown.innerHTML = results
							.map(
								( result ) => `
							<a class="alaska-site-search__result" href="${ result.url }">
								<span class="alaska-site-search__result-title">${ result.title }</span>
								<span class="alaska-site-search__result-type">${ result.subtype || result.type }</span>
							</a>
						`
							)
							.join( '' );
						dropdown.classList.add(
							'alaska-site-search__dropdown--open'
						);
					} else {
						dropdown.innerHTML =
							'<div class="alaska-site-search__no-results">No results found</div>';
						dropdown.classList.add(
							'alaska-site-search__dropdown--open'
						);
					}
				} catch ( error ) {
					// eslint-disable-next-line no-console
					console.error( 'Search failed:', error );
				}
			}, 300 );
		},

		onFocus() {
			const dropdown = document.querySelector(
				'.alaska-site-search__dropdown'
			);
			if ( dropdown && dropdown.innerHTML.trim() ) {
				dropdown.classList.add(
					'alaska-site-search__dropdown--open'
				);
			}
		},
	},

	callbacks: {
		init() {
			// Close dropdown on click outside.
			document.addEventListener( 'click', ( event ) => {
				const searchContainer = document.querySelector(
					'.alaska-site-search'
				);
				if ( searchContainer && ! searchContainer.contains( event.target ) ) {
					const dropdown = document.querySelector(
						'.alaska-site-search__dropdown'
					);
					if ( dropdown ) {
						dropdown.classList.remove(
							'alaska-site-search__dropdown--open'
						);
					}
				}
			} );
		},
	},
} );
