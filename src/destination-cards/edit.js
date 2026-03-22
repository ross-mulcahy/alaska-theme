import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import {
	PanelBody,
	RangeControl,
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
	const { columns, postsToShow, orderBy, order, destinationCategory } = attributes;

	const categories = useSelect( ( select ) => {
		return select( coreStore ).getEntityRecords(
			'taxonomy',
			'destination_category',
			{ per_page: -1 }
		);
	}, [] );

	const categoryOptions = [
		{ label: __( 'All Categories', 'alaska' ), value: 0 },
	];
	if ( categories ) {
		categories.forEach( ( cat ) => {
			categoryOptions.push( { label: cat.name, value: cat.id } );
		} );
	}

	return (
		<>
			<InspectorControls>
				<PanelBody title={ __( 'Layout', 'alaska' ) }>
					<RangeControl
						label={ __( 'Columns', 'alaska' ) }
						value={ columns }
						onChange={ ( value ) => setAttributes( { columns: value } ) }
						min={ 1 }
						max={ 6 }
					/>
				</PanelBody>
				<PanelBody title={ __( 'Query', 'alaska' ) }>
					<RangeControl
						label={ __( 'Number of destinations', 'alaska' ) }
						value={ postsToShow }
						onChange={ ( value ) => setAttributes( { postsToShow: value } ) }
						min={ 1 }
						max={ 12 }
					/>
					<SelectControl
						label={ __( 'Category', 'alaska' ) }
						value={ destinationCategory }
						options={ categoryOptions }
						onChange={ ( value ) => setAttributes( { destinationCategory: parseInt( value, 10 ) } ) }
					/>
					<SelectControl
						label={ __( 'Order by', 'alaska' ) }
						value={ orderBy }
						options={ [
							{ label: __( 'Date', 'alaska' ), value: 'date' },
							{ label: __( 'Title', 'alaska' ), value: 'title' },
							{ label: __( 'Menu order', 'alaska' ), value: 'menu_order' },
							{ label: __( 'Random', 'alaska' ), value: 'rand' },
						] }
						onChange={ ( value ) => setAttributes( { orderBy: value } ) }
					/>
					<SelectControl
						label={ __( 'Order', 'alaska' ) }
						value={ order }
						options={ [
							{ label: __( 'Descending', 'alaska' ), value: 'desc' },
							{ label: __( 'Ascending', 'alaska' ), value: 'asc' },
						] }
						onChange={ ( value ) => setAttributes( { order: value } ) }
					/>
				</PanelBody>
			</InspectorControls>
			<div { ...blockProps } style={ { ...blockProps.style, pointerEvents: 'all' } }>
				<div
					style={ { pointerEvents: 'none' } }
					onClickCapture={ ( e ) => e.preventDefault() }
				>
					<ServerSideRender
						block="alaska/destination-cards"
						attributes={ attributes }
						LoadingResponsePlaceholder={ () => (
							<Placeholder icon="location-alt" label={ __( 'Destination Cards', 'alaska' ) }>
								<Spinner />
							</Placeholder>
						) }
						EmptyResponsePlaceholder={ () => (
							<Placeholder
								icon="location-alt"
								label={ __( 'Destination Cards', 'alaska' ) }
								instructions={ __( 'No destinations found. Add destinations in the admin.', 'alaska' ) }
							/>
						) }
					/>
				</div>
			</div>
		</>
	);
}
