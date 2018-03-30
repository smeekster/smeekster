<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              smeeks.example.com
 * @since             1.0.0
 * @package           smeeksplugin
 *
 * @wordpress-plugin
 * Plugin Name:       smeeksplugin
 * Plugin URI:        smeeksplugin.example.com
 * Description:       This plugin will create a Staff Page to include short Bios and full Bios of staff.
 * Version:           1.0.0
 * Author:            Stephanie Meeks
 * Author URI:        smeeksplugin.example.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       smeeksplugin
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
define( 'smeeksplugin', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-smeeksplugin-activator.php
 */
function activate_smeeksplugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-smeeksplugin-activator.php';
	smeeksplugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-smeeksplugin-deactivator.php
 */
function deactivate_smeeksplugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-smeeksplugin-deactivator.php';
	smeeksplugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_smeeksplugin' );
register_deactivation_hook( __FILE__, 'deactivate_smeeksplugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-smeeksplugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_smeeksplugin() {

	$plugin = new smeeksplugin();
	$plugin->run();

}
run_smeeksplugin();
