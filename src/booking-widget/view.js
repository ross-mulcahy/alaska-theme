import { store, getContext } from '@wordpress/interactivity';

store( 'alaska/booking-widget', {
	actions: {
		setTab( event ) {
			const tab = event.target.closest( '[data-tab]' )?.dataset?.tab;
			if ( tab ) {
				const ctx = getContext();
				ctx.activeTab = tab;
			}
		},
	},
} );
