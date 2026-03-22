import { store, getContext } from '@wordpress/interactivity';

store( 'alaska/flight-filters', {
	actions: {
		toggleFilter( event ) {
			const ctx = getContext();
			const filterItem = event.target.closest(
				'.alaska-flight-filters__item'
			);

			if ( filterItem ) {
				filterItem.classList.toggle(
					'alaska-flight-filters__item--active'
				);

				// Update URL params so flight-results can read them.
				const filterType = filterItem.dataset.filterType;
				const filterValue = filterItem.dataset.filterValue;

				if ( filterType && filterValue ) {
					const url = new URL( window.location );
					const current = url.searchParams.get( filterType );
					const values = current ? current.split( ',' ) : [];

					const index = values.indexOf( filterValue );
					if ( index > -1 ) {
						values.splice( index, 1 );
					} else {
						values.push( filterValue );
					}

					if ( values.length > 0 ) {
						url.searchParams.set( filterType, values.join( ',' ) );
					} else {
						url.searchParams.delete( filterType );
					}

					window.history.replaceState( {}, '', url );

					// Dispatch custom event so flight-results can react.
					window.dispatchEvent(
						new CustomEvent( 'alaska-filters-changed' )
					);
				}
			}
		},
	},
} );
