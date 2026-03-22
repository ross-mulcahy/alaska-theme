import { useBlockProps } from '@wordpress/block-editor';
import { Placeholder, Flex, FlexItem } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

export default function Edit() {
	const blockProps = useBlockProps( {
		style: {
			backgroundColor: '#fff',
			borderRadius: '0.75rem',
			boxShadow: '0 4px 24px -4px rgba(25,28,29,0.06)',
			overflow: 'hidden',
			maxWidth: '64rem',
			padding: 0,
		},
	} );

	return (
		<div { ...blockProps }>
			<div style={ { borderBottom: '1px solid #edeeef', display: 'flex', padding: 0 } }>
				<span style={ { padding: '1rem 1.5rem', fontSize: '0.875rem', fontWeight: 700, color: '#002b48', borderBottom: '2px solid #002b48' } }>✈ Flights</span>
				<span style={ { padding: '1rem 1.5rem', fontSize: '0.875rem', fontWeight: 600, color: '#42474e' } }>🏨 Hotels</span>
				<span style={ { padding: '1rem 1.5rem', fontSize: '0.875rem', fontWeight: 600, color: '#42474e' } }>🚗 Cars</span>
			</div>
			<Flex align="flex-end" gap={ 4 } style={ { padding: '1.5rem' } }>
				<FlexItem style={ { flex: 1 } }>
					<div style={ { fontSize: '0.6875rem', fontWeight: 700, color: '#72787f', textTransform: 'uppercase', letterSpacing: '0.1em', marginBottom: '0.5rem' } }>
						{ __( 'From', 'alaska' ) }
					</div>
					<div style={ { backgroundColor: '#e7e8e9', borderRadius: '0.25rem', padding: '0.875rem 1rem', color: '#42474e', fontSize: '0.875rem' } }>
						Seattle (SEA)
					</div>
				</FlexItem>
				<FlexItem style={ { flex: 1 } }>
					<div style={ { fontSize: '0.6875rem', fontWeight: 700, color: '#72787f', textTransform: 'uppercase', letterSpacing: '0.1em', marginBottom: '0.5rem' } }>
						{ __( 'To', 'alaska' ) }
					</div>
					<div style={ { backgroundColor: '#e7e8e9', borderRadius: '0.25rem', padding: '0.875rem 1rem', color: '#42474e', fontSize: '0.875rem' } }>
						San Francisco (SFO)
					</div>
				</FlexItem>
				<FlexItem style={ { flex: 1 } }>
					<div style={ { fontSize: '0.6875rem', fontWeight: 700, color: '#72787f', textTransform: 'uppercase', letterSpacing: '0.1em', marginBottom: '0.5rem' } }>
						{ __( 'Dates', 'alaska' ) }
					</div>
					<div style={ { backgroundColor: '#e7e8e9', borderRadius: '0.25rem', padding: '0.875rem 1rem', color: '#42474e', fontSize: '0.875rem' } }>
						Nov 12 - Nov 19
					</div>
				</FlexItem>
				<FlexItem>
					<div style={ { background: 'linear-gradient(135deg, #002b48, #00426a)', color: '#fff', padding: '0.875rem 2rem', borderRadius: '0.25rem', fontWeight: 700, fontSize: '0.875rem', whiteSpace: 'nowrap' } }>
						{ __( 'Find Flights', 'alaska' ) }
					</div>
				</FlexItem>
			</Flex>
		</div>
	);
}
