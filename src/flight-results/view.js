import { store, getContext } from '@wordpress/interactivity';

store( 'alaska/flight-results', {
	actions: {
		selectFlight( event ) {
			const ctx = getContext();
			const card = event.target.closest(
				'.alaska-flight-results__card'
			);

			if ( card ) {
				const flightId = card.dataset.flightId;
				const cabin = event.target
					.closest( '[data-cabin]' )
					?.dataset?.cabin;
				const price = event.target
					.closest( '[data-price]' )
					?.dataset?.price;

				// eslint-disable-next-line no-console
				console.log( 'Flight selected:', {
					flightId,
					cabin,
					price,
				} );
			}
		},
	},
} );
