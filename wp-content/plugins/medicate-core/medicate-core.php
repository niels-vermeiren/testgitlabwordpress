<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://author-medicate.com/
 * @since             1.0.0
 * @package           Medicate
 *
 * @wordpress-plugin
 * Plugin Name:       Medicate core
 * Plugin URI:        http://author-medicate.com/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area lodu.
 * Version:           2.1
 * Author:            author-medicate
 * Author URI:        http://author-medicate.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       Medicate-core
 * Domain Path:       /languages
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MEDICATE_CORE_PLUGIN_NAME', 'Medicate-core' );
define( 'MEDICATE_CORE_VERSION', '1.0.0' );
define( 'MEDICATE_CORE_DIR', plugin_dir_path( __FILE__ ) );
define( 'MEDICATE_CORE_URL', plugin_dir_url( __FILE__ ) );
define( 'MEDICATE_CORE_ASSETS_URL', plugin_dir_url( __FILE__ ) .'public/');
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-activator.php
 */
function activate_medicate_core() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-activator.php';
	Medic_Activator::activate();
}
/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-deactivator.php
 */
function deactivate_medicate_core() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-deactivator.php';
	Medic_Deactivator::deactivate();
}
register_activation_hook( __FILE__, 'activate_medicate_core' );
register_deactivation_hook( __FILE__, 'deactivate_medicate_core' );
/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class.php';
/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_medicate_core() {
	$plugin = new Medicate();
	$plugin->run();
}
run_medicate_core();
