<?php
/**
 * SVG icons related functions
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

/**
 * Gets the SVG code for a given icon.
 */
function ingridperner_get_icon_svg( $icon, $size = 24 ) {
	return IngridPerner_SVG_Icons::get_svg( 'ui', $icon, $size );
}

