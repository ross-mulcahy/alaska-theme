import { useBlockProps } from '@wordpress/block-editor';
import { Placeholder } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

export default function Edit() {
	return (
		<div { ...useBlockProps() }>
			<Placeholder icon="search" label={ __( 'Site Search', 'alaska' ) } instructions={ __( 'Search bar with autocomplete. Renders on the frontend.', 'alaska' ) } />
		</div>
	);
}
