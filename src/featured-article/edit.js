import { useBlockProps } from '@wordpress/block-editor';
import { Placeholder } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

export default function Edit() {
	return (
		<div { ...useBlockProps() }>
			<Placeholder icon="media-document" label={ __( 'Featured Article', 'alaska' ) } instructions={ __( 'Displays the latest article with hero image. Renders on the frontend.', 'alaska' ) } />
		</div>
	);
}
