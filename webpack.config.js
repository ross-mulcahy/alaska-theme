/**
 * Custom webpack config for the Alaska theme.
 *
 * Extends @wordpress/scripts' default config and disables `output.clean`
 * so that hand-maintained files in blocks/ (most importantly each block's
 * render.php) are preserved across builds.
 *
 * Without this, wp-scripts wipes blocks/<block>/ before each build and
 * removes render.php — breaking dynamic rendering for every block.
 */
const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );

module.exports = {
	...defaultConfig,
	output: {
		...defaultConfig.output,
		clean: false,
	},
};
