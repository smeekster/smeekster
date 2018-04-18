<?php
/
class Meta_Manager_Public {

	/**
	 * A reference to the version of the plugin that is passed to this class from the caller.
	 *
	 * @access private
	 * @var    string    $version    The current version of the plugin.
	 */
	private $version;

	/**
	 * Initializes this class and stores the current version of this plugin.
	 *
	 * @param    string    $version    The current version of this plugin.
	 */
	public function __construct( $version ) {
		$this->version = $version;
	}

	/**
	 * Uses the partial located in the admin directory for rendering the
	 * post meta data the end of the post content.
	 *
	 * @param    string    $content    The post content.
	 * @return   string    $content    The post content including the given posts meta data.
	 */
	public function display_post_meta_data( $content ) {

		ob_start();

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/smeeks-staff-directory-admin-display.php';
		$template = ob_get_contents();
		$content .= $template;

		ob_end_clean();

		return $content;

	}

}