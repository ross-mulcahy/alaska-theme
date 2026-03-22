import { useBlockProps } from '@wordpress/block-editor';
import { Placeholder } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

export default function Edit() {
	return (
		<div { ...useBlockProps() }>
			<Placeholder icon="airplane" label={ __( 'Flight Results', 'alaska' ) } instructions={ __( 'Flight cards with cabin pricing. Renders on the frontend.', 'alaska' ) } />
		</div>
	);
}
