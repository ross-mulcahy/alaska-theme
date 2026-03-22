import { useBlockProps } from '@wordpress/block-editor';
import { Placeholder } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

export default function Edit() {
	return (
		<div { ...useBlockProps() }>
			<Placeholder icon="calendar-alt" label={ __( 'Date Carousel', 'alaska' ) } instructions={ __( 'Horizontal date picker with prices. Renders on the frontend.', 'alaska' ) } />
		</div>
	);
}
