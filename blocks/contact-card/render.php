<?php
/**
 * Contact Card Block — Server-side render.
 *
 * @package Alaska
 */

$title   = $attributes['title'] ?? 'Media Inquiries';
$email   = $attributes['email'] ?? '';
$phone   = $attributes['phone'] ?? '';
$note    = $attributes['note'] ?? '';
$variant = $attributes['variant'] ?? 'dark';

$wrapper_attrs = get_block_wrapper_attributes( array(
	'class' => 'alaska-contact-card alaska-contact-card--' . esc_attr( $variant ),
) );
?>
<div <?php echo $wrapper_attrs; ?>>
	<h3 class="alaska-contact-card__title"><?php echo esc_html( $title ); ?></h3>
	<div class="alaska-contact-card__details">
		<?php if ( $email ) : ?>
			<div class="alaska-contact-card__row">
				<span class="material-symbols-outlined alaska-contact-card__icon">mail</span>
				<div>
					<p class="alaska-contact-card__label">Email</p>
					<a href="mailto:<?php echo esc_attr( $email ); ?>" class="alaska-contact-card__value">
						<?php echo esc_html( $email ); ?>
					</a>
				</div>
			</div>
		<?php endif; ?>
		<?php if ( $phone ) : ?>
			<div class="alaska-contact-card__row">
				<span class="material-symbols-outlined alaska-contact-card__icon">call</span>
				<div>
					<p class="alaska-contact-card__label">Phone</p>
					<p class="alaska-contact-card__value"><?php echo esc_html( $phone ); ?></p>
				</div>
			</div>
		<?php endif; ?>
	</div>
	<?php if ( $note ) : ?>
		<div class="alaska-contact-card__footer">
			<p class="alaska-contact-card__note"><?php echo esc_html( $note ); ?></p>
		</div>
	<?php endif; ?>
</div>
