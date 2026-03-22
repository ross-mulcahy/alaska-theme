<?php
/**
 * Site Search Block — Server-side render.
 *
 * @package Alaska
 */

$placeholder = esc_attr( $attributes['placeholder'] ?? 'Search...' );
$variant     = $attributes['variant'] ?? 'default';
$wrapper_attrs = get_block_wrapper_attributes( array(
	'class'               => 'alaska-site-search alaska-site-search--' . esc_attr( $variant ),
	'data-wp-interactive'  => 'alaska/site-search',
	'data-wp-context'     => wp_json_encode( array( 'query' => '', 'results' => array(), 'open' => false ) ),
) );
?>
<div <?php echo $wrapper_attrs; ?>>
	<div class="alaska-site-search__input-wrap">
		<span class="material-symbols-outlined alaska-site-search__icon">search</span>
		<input
			type="text"
			class="alaska-site-search__input"
			placeholder="<?php echo $placeholder; ?>"
			data-wp-on--input="actions.onSearch"
			data-wp-on--focus="actions.onFocus"
			autocomplete="off"
		/>
	</div>
	<div
		class="alaska-site-search__dropdown"
		data-wp-class--alaska-site-search__dropdown--open="context.open"
	></div>
</div>
