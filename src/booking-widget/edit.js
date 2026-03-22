import { useBlockProps } from '@wordpress/block-editor';
import { Placeholder } from '@wordpress/components';
import ServerSideRender from '@wordpress/server-side-render';

export default function Edit( { attributes } ) {
	const blockProps = useBlockProps();

	return (
		<div { ...blockProps }>
			<ServerSideRender
				block="alaska/booking-widget"
				attributes={ attributes }
				EmptyResponsePlaceholder={ () => (
					<Placeholder
						icon="airplane"
						label="Booking Widget"
						instructions="Tabbed flight/hotel/car search form. Preview available on the frontend."
					/>
				) }
			/>
		</div>
	);
}
