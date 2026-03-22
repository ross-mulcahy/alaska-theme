import { useBlockProps } from '@wordpress/block-editor';
import { Placeholder } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

export default function Edit() {
	return (
		<div { ...useBlockProps() }>
			<Placeholder icon="rss" label={ __( 'News Feed', 'alaska' ) } instructions={ __( 'Filterable article list with load more. Renders on the frontend.', 'alaska' ) } />
		</div>
	);
}
