import { useBlockProps } from '@wordpress/block-editor';

const dates = [
	{ label: 'Aug 30', price: '$980', active: false },
	{ label: 'Aug 31', price: '$950', active: false },
	{ label: 'Sep 1', price: '$970', active: true },
	{ label: 'Sep 2', price: '$960', active: false },
	{ label: 'Sep 3', price: '$990', active: false },
	{ label: 'Sep 4', price: '$1,020', active: false },
	{ label: 'Sep 5', price: '$940', active: false },
];

const s = {
	wrap: {
		backgroundColor: '#ffffff', borderRadius: '0.75rem', overflow: 'hidden',
		border: '1px solid rgba(194,199,207,0.2)', boxShadow: '0 1px 3px 0 rgba(0,0,0,0.05)',
	},
	track: { display: 'flex' },
	item: ( active ) => ( {
		flex: 1, padding: '1rem', display: 'flex', flexDirection: 'column',
		alignItems: 'center', gap: '0.25rem', cursor: 'default',
		borderBottom: active ? '4px solid #002b48' : '2px solid transparent',
		backgroundColor: active ? '#cee5ff' : 'transparent',
		borderLeft: '1px solid rgba(194,199,207,0.2)',
		minWidth: '5rem',
	} ),
	label: ( active ) => ( {
		fontSize: '0.75rem', fontWeight: 700, textTransform: 'uppercase',
		color: active ? '#002b48' : '#72787f',
	} ),
	price: ( active ) => ( {
		fontSize: '0.875rem', fontWeight: active ? 700 : 600,
		color: active ? '#002b48' : '#191c1d',
	} ),
};

export default function Edit() {
	const blockProps = useBlockProps( { style: s.wrap } );

	return (
		<div { ...blockProps }>
			<div style={ s.track }>
				{ dates.map( ( d, i ) => (
					<div key={ i } style={ { ...s.item( d.active ), borderLeft: i === 0 ? 'none' : s.item( d.active ).borderLeft } }>
						<span style={ s.label( d.active ) }>{ d.label }</span>
						<span style={ s.price( d.active ) }>{ d.price }</span>
					</div>
				) ) }
			</div>
		</div>
	);
}
