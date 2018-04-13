<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       smeeks12763.sb.cis
 * @since      1.0.0
 *
 * @package    Smeeks_Staff_Directory
 * @subpackage Smeeks_Staff_Directory/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Smeeks_Staff_Directory
 * @subpackage Smeeks_Staff_Directory/admin
 * @author     Stephanie Meeks <smeeks1@cnm.edu>
 */
class Smeeks_Staff_Directory_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Smeeks_Staff_Directory_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Smeeks_Staff_Directory_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/smeeks-staff-directory-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Smeeks_Staff_Directory_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Smeeks_Staff_Directory_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/smeeks-staff-directory-admin.js', array( 'jquery' ), $this->version, false );

	}
	public function register_smeeks_staff_directory_post_type() {
		register_post_type( 'staff_directory',
			array(
				'labels' => array(
				'name' => __( 'Staff Directory' ),
				'singular_name' => __( 'Staff Directory' )
				),
			'public' => true,
			'has_archive' => true,
			'support' =>array('title', 'editor', 'thumbnail')
			)
		);	
	}
	public function display_smeeks_staff_directory_meta_fields() {
		//https://developer.wordpress.org/reference/functions/add_meta_box/
		//add_meta_box(id,title,callback,screen,context,priority,callback_args)
		add_meta_box("smeeks_staff_directory_meta", "Smeeks Staff Directory Details", array($this,"render_smeeks_staff_directory_meta_options"), "smeeks_staff_directory", "normal", "default");
	}
	public function render_smeeks_staff_directory_meta_options() {
		require_once plugin_dir_path( __FILE__ ) . 'partials/smeeks-staff-directory-admin-display.php';
	}
	
	
	
	public function save_smeeks_staff_directory_meta_fields() {
		global $post;
		$smeeks_staff_directory_first_name = sanitize_text_field( $_POST['smeeks_staff_directory_first_name'] );
		update_post_meta($post->ID, "smeeks_staff_directory_first_name", $smeeks_staff_directory_first_name);
		$smeeks_staff_directory_last_name = sanitize_text_field( $_POST['smeeks_staff_directory_last_name'] );
		update_post_meta($post->ID, "smeeks_staff_directory_last_name", $smeeks_staff_directory_last_name);
		$smeeks_staff_directory_sort_order = sanitize_text_field( $_POST['smeeks_staff_directory_sort_order'] );
		update_post_meta($post->ID, "smeeks_staff_directory_sort_order", $smeeks_staff_directory_sort_order);
	}	
	function smeeks_staff_directory_sort_menu(){
		//add_submenu_page( string $parent_slug, string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '' )
		add_submenu_page( 'edit.php?post_type=smeeks_staff_directory', 'Sort', 'Sort', 'manage_options', 'smeeks_staff_directory_sort', array($this,'render_smeeks_staff_directory_sort') ); 
	}

	public function render_smeeks_staff_directory_sort() {
		//die('render_staff_directory_sort');
		require_once plugin_dir_path( __FILE__ ) . 'partials/smeeks-staff-directory-admin-sort.php';
	}
	
	

}
