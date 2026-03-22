import { useBlockProps } from '@wordpress/block-editor';
import { Placeholder } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

export default function Edit() {
	return (
		<div { ...useBlockProps() }>
			<Placeholder icon="email" label={ __( 'Contact Card', 'alaska' ) } instructions={ __( 'Media inquiries card with contact details. Renders on the frontend.', 'alaska' ) } />
		</div>
	);
}
