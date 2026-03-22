import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import {
	PanelBody,
	TextControl,
	TextareaControl,
	SelectControl,
} from '@wordpress/components';
import { __ } from '@wordpress/i18n';

export default function Edit( { attributes, setAttributes } ) {
	const blockProps = useBlockProps();
	const { title, email, phone, note, variant } = attributes;

	const isDark = variant === 'dark';
	const bgColor = isDark ? '#002b48' : '#ffffff';
	const textColor = isDark ? '#ffffff' : '#191c1d';
	const labelColor = isDark ? 'rgba(255,255,255,0.6)' : 'rgba(0,0,0,0.5)';
	const valueColor = isDark ? '#ffffff' : '#002b48';
	const noteColor = isDark ? '#82c1fd' : '#42474e';
	const borderStyle = isDark ? {} : { border: '1px solid rgba(194,199,207,0.2)' };

	return (
		<>
			<InspectorControls>
				<PanelBody title={ __( 'Card Settings', 'alaska' ) }>
					<SelectControl
						label={ __( 'Variant', 'alaska' ) }
						value={ variant }
						options={ [
							{ label: __( 'Dark (Primary)', 'alaska' ), value: 'dark' },
							{ label: __( 'Light', 'alaska' ), value: 'light' },
						] }
						onChange={ ( value ) => setAttributes( { variant: value } ) }
					/>
					<TextControl
						label={ __( 'Title', 'alaska' ) }
						value={ title }
						onChange={ ( value ) => setAttributes( { title: value } ) }
					/>
					<TextControl
						label={ __( 'Email', 'alaska' ) }
						value={ email }
						onChange={ ( value ) => setAttributes( { email: value } ) }
					/>
					<TextControl
						label={ __( 'Phone', 'alaska' ) }
						value={ phone }
						onChange={ ( value ) => setAttributes( { phone: value } ) }
					/>
					<TextareaControl
						label={ __( 'Note', 'alaska' ) }
						value={ note }
						onChange={ ( value ) => setAttributes( { note: value } ) }
					/>
				</PanelBody>
			</InspectorControls>
			<div { ...blockProps }>
				<div
					style={ {
						backgroundColor: bgColor,
						color: textColor,
						borderRadius: '0.75rem',
						padding: '2rem',
						boxShadow: '0 4px 24px -4px rgba(25,28,29,0.06)',
						...borderStyle,
					} }
				>
					<h3
						style={ {
							fontFamily: "'Manrope', sans-serif",
							fontSize: '1.25rem',
							fontWeight: 700,
							margin: '0 0 1.5rem',
							color: isDark ? '#ffffff' : '#002b48',
						} }
					>
						{ title }
					</h3>

					{ email && (
						<div style={ { display: 'flex', alignItems: 'flex-start', gap: '1rem', marginBottom: '1.25rem' } }>
							<span style={ { color: isDark ? '#82c1fd' : '#136299', fontSize: '20px' } }>✉</span>
							<div>
								<div style={ { fontSize: '0.75rem', textTransform: 'uppercase', letterSpacing: '0.1em', color: labelColor, marginBottom: '0.25rem' } }>
									{ __( 'Email', 'alaska' ) }
								</div>
								<div style={ { fontWeight: 500, color: valueColor } }>
									{ email }
								</div>
							</div>
						</div>
					) }

					{ phone && (
						<div style={ { display: 'flex', alignItems: 'flex-start', gap: '1rem', marginBottom: '1.25rem' } }>
							<span style={ { color: isDark ? '#82c1fd' : '#136299', fontSize: '20px' } }>📞</span>
							<div>
								<div style={ { fontSize: '0.75rem', textTransform: 'uppercase', letterSpacing: '0.1em', color: labelColor, marginBottom: '0.25rem' } }>
									{ __( 'Phone', 'alaska' ) }
								</div>
								<div style={ { fontWeight: 500, color: valueColor } }>
									{ phone }
								</div>
							</div>
						</div>
					) }

					{ note && (
						<div
							style={ {
								marginTop: '1.5rem',
								paddingTop: '1.5rem',
								borderTop: isDark ? '1px solid rgba(255,255,255,0.1)' : '1px solid rgba(194,199,207,0.3)',
								fontSize: '0.875rem',
								color: noteColor,
								fontWeight: 500,
							} }
						>
							{ note }
						</div>
					) }
				</div>
			</div>
		</>
	);
}
