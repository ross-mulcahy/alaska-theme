import { useBlockProps } from '@wordpress/block-editor';
import { Placeholder } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

export default function Edit() {
	return (
		<div { ...useBlockProps() }>
			<Placeholder icon="cover-image" label={ __( 'Destination Hero', 'alaska' ) } instructions={ __( 'Full-width hero using the destination\'s featured image, title, and price. Renders on the frontend.', 'alaska' ) } />
		</div>
	);
}
