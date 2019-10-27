<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.anan.design
 * @since             1.0.0
 * @package           Type_Tester
 *
 * @wordpress-plugin
 * Plugin Name:       Type Tester
 * Plugin URI:        http://typetester.anan.design
 * Description:       This plugin allows a user to "play around" with a typeface by allowing to change the style and display.
 * Version:           1.0.0
 * Author:            Danny Anan
 * Author URI:        http://www.anan.design
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       type-tester
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
define( 'TYPE_TESTER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-type-tester-activator.php
 */
function activate_type_tester() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-type-tester-activator.php';
	Type_Tester_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-type-tester-deactivator.php
 */
function deactivate_type_tester() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-type-tester-deactivator.php';
	Type_Tester_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_type_tester' );
register_deactivation_hook( __FILE__, 'deactivate_type_tester' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-type-tester.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_type_tester() {

	$plugin = new Type_Tester();
	$plugin->run();

}
run_type_tester();
