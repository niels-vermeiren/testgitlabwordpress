<?php
namespace Elementor;
use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW;
if ( ! defined( 'ABSPATH' ) ) exit;
class Medic_Button extends Widget_Base {
	public function get_name() {
		return __( 'Button', 'medicate' );
	}

	public function get_title() {
		return __( 'Button', 'medicate' );
	}
	public function get_categories() {
		return [ SCEW::get_category() ];
    }

	/**
	 * Get widget icon.
	 *
	 * Retrieve counter widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-button';
	}

	public function __construct( $data = array(), $args = null ) {
		parent::__construct( $data, $args );
		wp_register_style( 'button-style-css', plugin_dir_url( __FILE__ )  . '/css/style.css', array(), '1.0.0' );	
	}
	public function get_style_depends() {
		return ['button-style-css'];
	}
	   

	protected function register_controls() {
		$this->start_controls_section(
			'section_Jnza43wt8d9QH5b77duo',
			[
				'label' => __( 'Button', 'medicate' ),
			]
		);
		$btn = new Button_Controls();
		$btn->get_btn_controls($this);


	}

	protected function render() {
		$settings = $this->get_settings();
        require plugin_dir_path( __FILE__ ) . 'style.php';
    }

}
Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Medic_Button() );