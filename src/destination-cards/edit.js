import { useBlockProps } from '@wordpress/block-editor';
import { Placeholder } from '@wordpress/components';
import ServerSideRender from '@wordpress/server-side-render';

export default function Edit( { attributes } ) {
	const blockProps = useBlockProps();

	return (
		<div { ...blockProps }>
			<ServerSideRender
				block="alaska/destination-cards"
				attributes={ attributes }
				EmptyResponsePlaceholder={ () => (
					<Placeholder
						icon="location-alt"
						label="Destination Cards"
						instructions="Destination grid with images and prices. Preview available on the frontend."
					/>
				) }
			/>
		</div>
	);
}
