<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Multi_Authors
 * @subpackage Multi_Authors/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Multi_Authors
 * @subpackage Multi_Authors/public
 * @author     Your Name <email@example.com>
 */
class Multi_Authors_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $multi_authors    The ID of this plugin.
	 */
	private $multi_authors;

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
	 * @param      string    $multi_authors       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $multi_authors, $version ) {

		$this->multi_authors = $multi_authors;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Multi_Authors_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Multi_Authors_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->multi_authors, plugin_dir_url( __FILE__ ) . 'css/multi-authors-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Multi_Authors_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Multi_Authors_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->multi_authors, plugin_dir_url( __FILE__ ) . 'js/multi-authors-public.js', array( 'jquery' ), $this->version, false );

	}

}
