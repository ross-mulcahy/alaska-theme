import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import {
	PanelBody,
	ToggleControl,
	SelectControl,
	Placeholder,
	Spinner,
} from '@wordpress/components';
import ServerSideRender from '@wordpress/server-side-render';
import { __ } from '@wordpress/i18n';
import { useSelect } from '@wordpress/data';
import { store as coreStore } from '@wordpress/core-data';

export default function Edit( { attributes, setAttributes } ) {
	const blockProps = useBlockProps();
	const { postId, useLatest } = attributes;

	const posts = useSelect( ( select ) => {
		return select( coreStore ).getEntityRecords( 'postType', 'post', {
			per_page: 20,
			status: 'publish',
			orderby: 'date',
			order: 'desc',
		} );
	}, [] );

	const postOptions = [
		{ value: 0, label: __( '— Select a post —', 'alaska' ) },
	];
	if ( posts ) {
		posts.forEach( ( post ) => {
			postOptions.push( {
				value: post.id,
				label: post.title.rendered || __( '(no title)', 'alaska' ),
			} );
		} );
	}

	return (
		<>
			<InspectorControls>
				<PanelBody title={ __( 'Article Selection', 'alaska' ) }>
					<ToggleControl
						label={ __( 'Use latest post', 'alaska' ) }
						checked={ useLatest }
						onChange={ ( value ) =>
							setAttributes( { useLatest: value } )
						}
					/>
					{ ! useLatest && (
						<SelectControl
							label={ __( 'Select a post', 'alaska' ) }
							value={ postId }
							options={ postOptions }
							onChange={ ( value ) =>
								setAttributes( { postId: parseInt( value, 10 ) } )
							}
						/>
					) }
				</PanelBody>
			</InspectorControls>
			<div { ...blockProps }>
				<div
					style={ { pointerEvents: 'none' } }
					onClickCapture={ ( e ) => e.preventDefault() }
				>
					<ServerSideRender
						block="alaska/featured-article"
						attributes={ attributes }
						LoadingResponsePlaceholder={ () => (
							<Placeholder icon="media-document" label={ __( 'Featured Article', 'alaska' ) }>
								<Spinner />
							</Placeholder>
						) }
						EmptyResponsePlaceholder={ () => (
							<Placeholder
								icon="media-document"
								label={ __( 'Featured Article', 'alaska' ) }
								instructions={ __( 'No posts found. Publish a post to see the preview.', 'alaska' ) }
							/>
						) }
					/>
				</div>
			</div>
		</>
	);
}
