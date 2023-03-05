<?php
/**
 * medicate functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage medicate
 * @since medicate 1.0
 */
namespace peaceful\medicate;
class medicate_Init
{
	public function __construct (){
		$this->constants();
		$this->version_compare();
		$this->load_dependencies();
	}
	 public function load_dependencies()
	 {

	 	require_once CONST_MEDICATE_DIR . '/inc/theme-setup.php';
        require_once CONST_MEDICATE_DIR . '/inc/theme-helper.php';
        require CONST_MEDICATE_ADMIN_DIR . '/classes/autoload.php';
	 	require_once CONST_MEDICATE_DIR . '/inc/customizer/init.php';
	 }
	 private function constants()
	 {
	 	define( 'CONST_MEDICATE_NAME', 'medicate' );
	 	define('CONST_MEDICATE_DIR', get_template_directory());
		define('CONST_MEDICATE_URI', get_template_directory_uri());
		define('CONST_MEDICATE_ADMIN', admin_url());
		define('CONST_MEDICATE_ADMIN_DIR', get_template_directory() .  '/admin/');
		define('CONST_MEDICATE_ASSETS_URI', CONST_MEDICATE_URI . '/assets/');
		define('CONST_MEDICATE_ASSETS_FONTS_URI', CONST_MEDICATE_URI . '/assets/fonts');
		$wp_upload_arr = wp_get_upload_dir();
		define( 'CONST_MEDICATE_UPLOAD_DIR', $wp_upload_arr['basedir'] . '/' . strtolower( sanitize_file_name( CONST_MEDICATE_NAME ) ) . '/' );
		define( 'CONST_MEDICATE_UPLOAD_URL', $wp_upload_arr['baseurl'] . '/' . strtolower( sanitize_file_name( CONST_MEDICATE_NAME ) ) . '/' );
	 }
	 private function version_compare()
	 {
	 	if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
			require CONST_MEDICATE_DIR . '/inc/back-compat.php';
		}
	 }
}
new medicate_Init;
