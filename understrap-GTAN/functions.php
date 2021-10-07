<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}


/**
 * Filter a few parameters into YouTube oEmbed requests, removes extra controls, and related / suggested videos form other channels
 *
 * @link http://goo.gl/yl5D3
 */
function iweb_modest_youtube_player( $html, $url, $args ) {
	return str_replace( 'feature=oembed', 'feature=oembed&modestbranding=1&showinfo=0&rel=0&controls=0', $html );
}
add_filter( 'oembed_result', 'iweb_modest_youtube_player', 10, 3 );

add_filter('tiny_mce_before_init', 'modify_valid_children');

function modify_valid_children($settings){
    $settings['valid_children']="+a[div|p|ul|ol|li|h1|h2|h3|h4|h5|h5|h6]";
    return $settings;
}

/**
* Registers an editor stylesheet for the theme.
*/
function gtan_theme_add_editor_styles() {
add_editor_style( 'css/custom-editor-style.css' );
}
add_action( 'admin_init', 'gtan_theme_add_editor_styles' );

