import { useBlockProps } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';

const filters = [
	{ label: 'Stops', icon: '⊟', active: true },
	{ label: 'Airline', icon: '✈', active: false },
	{ label: 'Departure Time', icon: '🕐', active: false },
	{ label: 'Arrival Time', icon: '🕓', active: false },
	{ label: 'Price Range', icon: '🏷', active: false },
];

const s = {
	wrap: { width: '16rem', flexShrink: 0 },
	title: { fontFamily: "'Manrope',sans-serif", fontSize: '1.125rem', fontWeight: 700, color: '#191c1d', margin: '0 0 0.25rem' },
	sub: { fontSize: '0.75rem', color: '#72787f', margin: '0 0 1.5rem' },
	item: ( active ) => ( {
		display: 'flex', alignItems: 'center', gap: '0.75rem', padding: '0.75rem 1rem',
		borderRadius: '0.5rem', fontSize: '0.875rem', cursor: 'default',
		backgroundColor: active ? '#e7e8e9' : 'transparent',
		color: active ? '#002b48' : '#42474e',
		fontWeight: active ? 600 : 400,
		border: 'none', width: '100%', textAlign: 'left',
	} ),
	divider: { height: 1, backgroundColor: 'rgba(194,199,207,0.3)', margin: '1.5rem 0' },
	cabinTitle: { fontSize: '0.75rem', fontWeight: 700, textTransform: 'uppercase', letterSpacing: '0.1em', color: '#191c1d', margin: '0 0 1rem' },
	checkbox: { display: 'flex', alignItems: 'center', gap: '0.75rem', fontSize: '0.875rem', color: '#42474e', marginBottom: '0.75rem' },
};

export default function Edit() {
	const blockProps = useBlockProps( { style: s.wrap } );

	return (
		<div { ...blockProps }>
			<h3 style={ s.title }>{ __( 'Filters', 'alaska' ) }</h3>
			<p style={ s.sub }>{ __( 'Narrow your search', 'alaska' ) }</p>

			<div style={ { display: 'flex', flexDirection: 'column', gap: '0.25rem' } }>
				{ filters.map( ( f ) => (
					<div key={ f.label } style={ s.item( f.active ) }>
						<span>{ f.icon }</span>
						<span>{ f.label }</span>
					</div>
				) ) }
			</div>

			<div style={ s.divider } />

			<h4 style={ s.cabinTitle }>{ __( 'Cabin Class', 'alaska' ) }</h4>
			<label style={ s.checkbox }><input type="checkbox" defaultChecked disabled /> Main</label>
			<label style={ s.checkbox }><input type="checkbox" disabled /> Premium Class</label>
			<label style={ s.checkbox }><input type="checkbox" disabled /> First Class</label>
		</div>
	);
}
