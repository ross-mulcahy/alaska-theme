import { useBlockProps } from '@wordpress/block-editor';
import { Placeholder } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

export default function Edit() {
	return (
		<div { ...useBlockProps() }>
			<Placeholder icon="filter" label={ __( 'Flight Filters', 'alaska' ) } instructions={ __( 'Sidebar filter controls. Renders on the frontend.', 'alaska' ) } />
		</div>
	);
}
