<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              smeeks12763.sb.cis
 * @since             1.0.0
 * @package           Smeeks_Staff_Directory
 *
 * @wordpress-plugin
 * Plugin Name:       Smeeks Staff Directory
 * Plugin URI:        example.com
 * Description:       This is to create a Staff Directory include short and full bios.
 * Version:           1.0.0
 * Author:            Stephanie Meeks
 * Author URI:        smeeks12763.sb.cis
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       smeeks-staff-directory
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-smeeks-staff-directory-activator.php
 */
function activate_smeeks_staff_directory() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-smeeks-staff-directory-activator.php';
	Smeeks_Staff_Directory_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-smeeks-staff-directory-deactivator.php
 */
function deactivate_smeeks_staff_directory() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-smeeks-staff-directory-deactivator.php';
	Smeeks_Staff_Directory_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_smeeks_staff_directory' );
register_deactivation_hook( __FILE__, 'deactivate_smeeks_staff_directory' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-smeeks-staff-directory.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_smeeks_staff_directory() {

	$plugin = new Smeeks_Staff_Directory();
	$plugin->run();

}
run_smeeks_staff_directory();
