import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import {
	PanelBody,
	RangeControl,
	ToggleControl,
	Placeholder,
	Spinner,
} from '@wordpress/components';
import ServerSideRender from '@wordpress/server-side-render';
import { __ } from '@wordpress/i18n';

export default function Edit( { attributes, setAttributes } ) {
	const blockProps = useBlockProps();
	const { postsPerPage, showFilters } = attributes;

	return (
		<>
			<InspectorControls>
				<PanelBody title={ __( 'Feed Settings', 'alaska' ) }>
					<RangeControl
						label={ __( 'Posts per page', 'alaska' ) }
						value={ postsPerPage }
						onChange={ ( value ) =>
							setAttributes( { postsPerPage: value } )
						}
						min={ 1 }
						max={ 12 }
					/>
					<ToggleControl
						label={ __( 'Show category filters', 'alaska' ) }
						checked={ showFilters }
						onChange={ ( value ) =>
							setAttributes( { showFilters: value } )
						}
					/>
				</PanelBody>
			</InspectorControls>
			<div { ...blockProps }>
				<div
					style={ { pointerEvents: 'none' } }
					onClickCapture={ ( e ) => e.preventDefault() }
				>
					<ServerSideRender
						block="alaska/news-feed"
						attributes={ attributes }
						LoadingResponsePlaceholder={ () => (
							<Placeholder icon="rss" label={ __( 'News Feed', 'alaska' ) }>
								<Spinner />
							</Placeholder>
						) }
						EmptyResponsePlaceholder={ () => (
							<Placeholder
								icon="rss"
								label={ __( 'News Feed', 'alaska' ) }
								instructions={ __( 'No posts found. Publish posts to see the preview.', 'alaska' ) }
							/>
						) }
					/>
				</div>
			</div>
		</>
	);
}
