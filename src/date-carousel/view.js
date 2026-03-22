import { store, getContext } from '@wordpress/interactivity';

store( 'alaska/date-carousel', {
	actions: {
		selectDate( event ) {
			const ctx = getContext();
			const dateItem = event.target.closest(
				'.alaska-date-carousel__item'
			);

			if ( ! dateItem ) {
				return;
			}

			// Remove active from all items.
			const carousel = dateItem.closest( '.alaska-date-carousel' );
			carousel
				.querySelectorAll( '.alaska-date-carousel__item' )
				.forEach( ( item ) => {
					item.classList.remove(
						'alaska-date-carousel__item--active'
					);
				} );

			// Add active to clicked item.
			dateItem.classList.add( 'alaska-date-carousel__item--active' );

			// Update URL params so flight-results can read the selected date.
			const selectedDate = dateItem.dataset.date;
			if ( selectedDate ) {
				const url = new URL( window.location );
				url.searchParams.set( 'date', selectedDate );
				window.history.replaceState( {}, '', url );

				window.dispatchEvent(
					new CustomEvent( 'alaska-date-changed' )
				);
			}
		},
	},
} );
