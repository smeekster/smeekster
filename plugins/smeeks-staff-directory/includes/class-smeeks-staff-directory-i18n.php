<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       smeeks12763.sb.cis
 * @since      1.0.0
 *
 * @package    Smeeks_Staff_Directory
 * @subpackage Smeeks_Staff_Directory/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Smeeks_Staff_Directory
 * @subpackage Smeeks_Staff_Directory/includes
 * @author     Stephanie Meeks <smeeks1@cnm.edu>
 */
class Smeeks_Staff_Directory_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'staff-directory',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
