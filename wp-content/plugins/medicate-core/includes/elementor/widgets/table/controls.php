<?php
namespace Elementor;
use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW;
if ( ! defined( 'ABSPATH' ) ) exit;
class table extends Widget_Base {
	public function get_name() {
		return __( 'table', 'medicate-core' );
	}
	
	public function get_title() {
		return __( 'Medicate table', 'medicate-core' );
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
		return 'eicon-table';
	}
	protected function register_controls() {
		$this->start_controls_section(
			'section_Jnza43wt8d9QH5b77duo',
			[
				'label' => __( 'Medicate table', 'medicate-core' ),
			]
		);
		
		$this->add_control(
			'views',
			[
				'label' => __( 'Border Style', 'plugin-domain' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'dropdown_list'  => __( 'dropdown_list', 'plugin-domain' ),
					'tabs' => __( 'tabs', 'plugin-domain' ),
					
				],
			]
		);
		$this->add_control(
			'show_title',
			[
				'label' => __( 'Show  Title', 'medicate-core' ),
				'type' => Controls_Manager::SWITCHER,
				'1' => __( 'Show', 'medicate-core' ),
				'0' => __( 'Hide', 'medicate-core' ),
				
			]
		);
		$this->add_control(
			'show_sub_title',
			[
				'label' => __( 'Show sub Title', 'medicate-core' ),
				'type' => Controls_Manager::SWITCHER,
				'1' => __( 'Show', 'medicate-core' ),
				'0' => __( 'Hide', 'medicate-core' ),
				
			]
		);
		$this->add_control(
			'show_desc',
			[
				'label' => __( 'Show description', 'medicate-core' ),
				'type' => Controls_Manager::SWITCHER,
				'1' => __( 'Show', 'medicate-core' ),
				'0' => __( 'Hide', 'medicate-core' ),
				'0' => 'hide',
			]
		);
		$this->add_control(
			'show_time',
			[
				'label' => __( 'Show time', 'medicate-core' ),
				'type' => Controls_Manager::SWITCHER,
				'1' => __( 'Show', 'medicate-core' ),
				'0' => __( 'Hide', 'medicate-core' ),
				'0' => 'hide',
			]
		);
		$this->add_control(
			'show_responsive',
			[
				'label' => __( 'Show responsive', 'medicate-core' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'medicate-core' ),
				'label_off' => __( 'Hide', 'medicate-core' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->end_controls_section();
	}
	
	protected function render() {
	   $settings = $this->get_settings();

			require plugin_dir_path( __FILE__ ) . 'style-1.php';
    }	    
		
}
Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\table() );