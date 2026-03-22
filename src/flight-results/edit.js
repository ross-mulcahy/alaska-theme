import { useBlockProps } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';

const flights = [
	{ airline: 'Alaska Airlines', departure: '10:00 AM', arrival: '3:30 PM', origin: 'SEA', destination: 'NRT', duration: '11h 30m', stops: 'Nonstop', main: '$970', premium: '$1,450', first: '$3,500', popular: false },
	{ airline: 'Alaska Airlines', departure: '12:30 PM', arrival: '5:55 PM', origin: 'SEA', destination: 'NRT', duration: '11h 25m', stops: 'Nonstop', main: '$1,010', premium: '$1,550', first: '$3,800', popular: true },
	{ airline: 'Alaska Airlines', departure: '6:45 AM', arrival: '10:25 AM', origin: 'SEA', destination: 'NRT', duration: '11h 40m', stops: 'Nonstop', main: '$895', premium: '$1,350', first: '$3,200', popular: false },
];

const s = {
	heading: { fontFamily: "'Manrope',sans-serif", fontSize: '1.125rem', fontWeight: 700, color: '#191c1d', margin: '0 0 1.5rem' },
	card: ( popular ) => ( {
		backgroundColor: '#ffffff', borderRadius: '0.75rem', overflow: 'hidden', marginBottom: '1.5rem',
		boxShadow: '0 1px 3px 0 rgba(0,0,0,0.05)', border: '1px solid rgba(194,199,207,0.1)',
		outline: popular ? '2px solid #002b48' : 'none', position: 'relative',
	} ),
	badge: { position: 'absolute', top: 0, left: 0, backgroundColor: '#002b48', color: '#fff', fontSize: '0.625rem', padding: '0.25rem 0.75rem', fontWeight: 700, textTransform: 'uppercase', letterSpacing: '0.1em', borderBottomRightRadius: '0.5rem' },
	inner: { display: 'flex', flexDirection: 'row' },
	info: { flex: 1, padding: '1.5rem', display: 'flex', alignItems: 'center', gap: '2rem' },
	airlineWrap: { display: 'flex', alignItems: 'center', gap: '0.75rem', width: '10rem' },
	airlineIcon: { width: '2.5rem', height: '2.5rem', borderRadius: '50%', backgroundColor: 'rgba(0,66,106,0.1)', display: 'flex', alignItems: 'center', justifyContent: 'center', color: '#002b48', fontSize: '1rem' },
	airlineName: { fontSize: '0.875rem', fontWeight: 700, color: '#191c1d' },
	route: { display: 'flex', alignItems: 'center', gap: '1.5rem', flex: 1 },
	time: { fontFamily: "'Manrope',sans-serif", fontSize: '1.25rem', fontWeight: 700, color: '#191c1d', margin: 0 },
	airport: { fontSize: '0.875rem', color: '#72787f', fontWeight: 500, margin: 0 },
	routeLine: { flex: 1, display: 'flex', flexDirection: 'column', alignItems: 'center' },
	duration: { fontSize: '0.75rem', fontWeight: 600, color: '#72787f', marginBottom: '0.25rem' },
	line: { width: '100%', height: 2, backgroundColor: '#c2c7cf', position: 'relative' },
	stops: { fontSize: '0.75rem', fontWeight: 700, color: '#003027', marginTop: '0.25rem' },
	pricing: { display: 'flex', borderLeft: '1px solid rgba(194,199,207,0.2)', backgroundColor: 'rgba(243,244,245,0.3)' },
	priceCol: ( isFirst ) => ( {
		flex: 1, padding: '1.25rem', display: 'flex', flexDirection: 'column', alignItems: 'center', gap: '0.5rem',
		borderLeft: '1px solid rgba(194,199,207,0.2)', minWidth: '8rem',
		backgroundColor: isFirst ? 'rgba(206,229,255,0.2)' : 'transparent',
	} ),
	cabinLabel: { fontSize: '0.75rem', fontWeight: 700, textTransform: 'uppercase', color: '#72787f' },
	price: { fontFamily: "'Manrope',sans-serif", fontSize: '1.25rem', fontWeight: 700, color: '#191c1d', margin: 0 },
	selectBtn: ( primary ) => ( {
		width: '100%', padding: '0.5rem', borderRadius: '0.5rem', fontSize: '0.75rem', fontWeight: 700, cursor: 'default', textAlign: 'center',
		backgroundColor: primary ? '#002b48' : 'transparent',
		color: primary ? '#fff' : '#002b48',
		border: primary ? '1px solid #002b48' : '1px solid #002b48',
	} ),
};

function FlightCard( { flight } ) {
	return (
		<div style={ s.card( flight.popular ) }>
			{ flight.popular && <div style={ s.badge }>Most Popular</div> }
			<div style={ s.inner }>
				<div style={ s.info }>
					<div style={ s.airlineWrap }>
						<div style={ s.airlineIcon }>✈</div>
						<span style={ s.airlineName }>{ flight.airline }</span>
					</div>
					<div style={ s.route }>
						<div>
							<p style={ s.time }>{ flight.departure }</p>
							<p style={ s.airport }>{ flight.origin }</p>
						</div>
						<div style={ s.routeLine }>
							<span style={ s.duration }>{ flight.duration }</span>
							<div style={ s.line } />
							<span style={ s.stops }>{ flight.stops }</span>
						</div>
						<div style={ { textAlign: 'right' } }>
							<p style={ s.time }>{ flight.arrival }</p>
							<p style={ s.airport }>{ flight.destination }</p>
						</div>
					</div>
				</div>
				<div style={ s.pricing }>
					<div style={ s.priceCol( false ) }>
						<span style={ s.cabinLabel }>Main</span>
						<p style={ s.price }>{ flight.main }</p>
						<div style={ s.selectBtn( false ) }>Select</div>
					</div>
					<div style={ s.priceCol( false ) }>
						<span style={ s.cabinLabel }>Premium</span>
						<p style={ s.price }>{ flight.premium }</p>
						<div style={ s.selectBtn( false ) }>Select</div>
					</div>
					<div style={ s.priceCol( true ) }>
						<span style={ s.cabinLabel }>First Class</span>
						<p style={ s.price }>{ flight.first }</p>
						<div style={ s.selectBtn( true ) }>Select</div>
					</div>
				</div>
			</div>
		</div>
	);
}

export default function Edit() {
	const blockProps = useBlockProps();

	return (
		<div { ...blockProps }>
			<h3 style={ s.heading }>{ __( 'Departing flights', 'alaska' ) }</h3>
			{ flights.map( ( flight, i ) => (
				<FlightCard key={ i } flight={ flight } />
			) ) }
		</div>
	);
}
