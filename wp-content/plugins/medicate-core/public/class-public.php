<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://author-medicate.com/
 * @since      1.0.0
 *
 * @package    Medicate
 * @subpackage Medicate/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Medicate
 * @subpackage Medicate/public
 * @author     author-medicate <author-medicate@gmail.com>
 */
class Medic_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
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
		 * defined in Medic_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Medic_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		$obj = new Medic_Custom_Icons();
		$obj->enqueue_styles();
		

		// Pt_WP_Filesystem::getInstance()->Pfq_theme_add_style( 'magnific-popup','', array(), '1.0', 'all', MEDICATE_CORE_DIR.'public/css/vendor/magnific-popup.min.css' );
		Pt_WP_Filesystem::getInstance()->Pfq_theme_add_style( 'jquery.mCustomScrollbar', plugin_dir_url( __FILE__ ) . 'css/vendor/jquery.mCustomScrollbar.min.css' , array(), $this->version, 'all', plugin_dir_url( __FILE__ ) . 'css/vendor/jquery.mCustomScrollbar.min.css' );
		Pt_WP_Filesystem::getInstance()->Pfq_theme_add_style( 'owl.carousel', plugin_dir_url( __FILE__ ) . 'css/vendor/owl.carousel.min.css' , array(), $this->version, 'all', plugin_dir_url( __FILE__ ) . 'css/vendor/owl.carousel.min.css' );

		Pt_WP_Filesystem::getInstance()->Pfq_theme_add_style( 'magnific-popup', plugin_dir_url( __FILE__ ) . 'css/vendor/magnific-popup.min.css' , array(), $this->version, 'all', plugin_dir_url( __FILE__ ) . 'css/vendor/magnific-popup.min.css' );
		Pt_WP_Filesystem::getInstance()->Pfq_theme_add_style( 'BeerSlider', plugin_dir_url( __FILE__ ) . 'css/vendor/BeerSlider.css' , array(), $this->version, 'all', plugin_dir_url( __FILE__ ) . 'css/vendor/BeerSlider.css' );
		
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		// $min = (defined('SCRIPT_DEBUG') &&  SCRIPT_DEBUG ) ? '' : '.min';
		// wp_enqueue_script( 'asyncloader', plugin_dir_url( __FILE__ ) . '/js/vendor/asyncloader.min.js', array( 'jquery' ), $this->version, false );
		// wp_enqueue_script('owl-carousel', plugin_dir_url( __FILE__ ) . '/js/vendor/owl.carousel.min.js', array('jquery'),'2.3.4', true);

		// wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/script.js', array( 'jquery' , 'asyncloader' ), $this->version, false );
		// wp_enqueue_script('BeerSlider', plugin_dir_url( __FILE__ ) . 'js/vendor/BeerSlider.js', array( 'jquery' ),'1.0', true);
		 Pt_WP_Filesystem::Pfq_theme_add_script('owl-carousel', plugin_dir_url( __FILE__ ) . '/js/vendor/owl.carousel.min.js', array('jquery'),'2.3.4', true, plugin_dir_url( __FILE__ ) . '/js/vendor/owl.carousel.min.js');
		 Pt_WP_Filesystem::Pfq_theme_add_script('countTo', plugin_dir_url( __FILE__ ) . '/js/vendor/jquery.countTo.min.js', array('jquery'),'2.3.4', true, plugin_dir_url( __FILE__ ) . '/js/vendor/jquery.countTo.min.js');
		 Pt_WP_Filesystem::Pfq_theme_add_script('magnific-popup', plugin_dir_url( __FILE__ ) . '/js/vendor/jquery.magnific-popup.min.js', array('jquery'),'2.3.4', true, plugin_dir_url( __FILE__ ) . '/js/vendor/jquery.magnific-popup.min.js');
		 Pt_WP_Filesystem::Pfq_theme_add_script('isotope', plugin_dir_url( __FILE__ ) . '/js/vendor/isotope.pkgd.min.js', array('jquery'),'2.3.4', true, plugin_dir_url( __FILE__ ) . '/js/vendor/isotope.pkgd.min.js');
		 Pt_WP_Filesystem::Pfq_theme_add_script('progressbar', plugin_dir_url( __FILE__ ) . '/js/vendor/progressbar.js', array('jquery'),'2.3.4', true, plugin_dir_url( __FILE__ ) . '/js/vendor/progressbar.js');




		 Pt_WP_Filesystem::Pfq_theme_add_script('BeerSlider', plugin_dir_url( __FILE__ ) . 'js/vendor/BeerSlider.js', array( 'jquery' ),'1.0', true, plugin_dir_url( __FILE__ ) . 'js/vendor/BeerSlider.js');
		Pt_WP_Filesystem::Pfq_theme_add_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/script.js', array( 'jquery'  ), $this->version, true,plugin_dir_url( __FILE__ ) . 'js/script.js' );
		// $vendor_script = array();
		// $vendor_scripts_url = plugin_dir_url( __FILE__ ) . '/js/vendor/';

		// foreach( glob( plugin_dir_path( __FILE__ ) . '/js/vendor/*.js') as $dependency ) {


		// 		$current_index = basename( $dependency, '.min' . '.js' );
		// 		$cur_dep = add_query_arg( 'ver',  '1.0', $vendor_scripts_url . basename( $dependency ) );
		// 		$vendor_script[ $current_index ] = esc_url( $cur_dep );
		// 	}

		// wp_localize_script(
		// 	$this->plugin_name,
		// 	'PluginJsConfig',
		// 	array(

		// 		'js_dependencies'     => $vendor_script,

		// 	)
		// );

	}

}
