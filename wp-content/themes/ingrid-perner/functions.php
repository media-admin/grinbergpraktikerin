<?php
/**
 * Theme Name child theme functions and definitions
 */
/*—————————————————————————————————————————*/
/* Include the parent theme style.css
/*—————————————————————————————————————————*/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

/**
 * SVG Icons class.
 */
require '/home/.sites/437/site7582100/web/wp-content/themes/ingrid-perner/classes/class-ingridperner-svg-icons.php';

/**
 * SVG Icons related functions.
 */
require '/home/.sites/437/site7582100/web/wp-content/themes/ingrid-perner/inc/icon-functions.php';