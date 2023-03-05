<?php
namespace Elementor;
use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW;
if ( ! defined( 'ABSPATH' ) ) exit;

class pt_cost_calculator extends Widget_Base {

	public function get_name() {
		return __( 'cost-calculator', 'medicate' );
	}

	public function get_title() {
		return __( 'Cost Calculator', 'medicate' );
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
	return 'eicon-site-title';
}



protected function register_controls() {

	$this->start_controls_section(
		'section_calculator_GASDUygu',
		[
			'label' => __( 'Treatments', 'medicate' ),
		]
	);

	$this->add_control(
		'treatment_field_name',
		[
			'label' => esc_html__( 'Field Name', 'medicate' ),
			'type' => Controls_Manager::TEXT,
			'default' => esc_html__( 'Treatment Name', 'medicate' ),
			'placeholder' => esc_html__( 'Enter Field Name', 'medicate' ),
		]
	);

	$repeater = new Repeater();

	$repeater->add_control(
		'treatment_name',
		[
			'label' => esc_html__( 'Treatment', 'medicate' ),
			'type' => Controls_Manager::TEXT,
			'default' => esc_html__( 'Dentist', 'medicate' ),
			'placeholder' => esc_html__( 'Type your Treatment here', 'medicate' ),
		]
	);

	$this->add_control(
		'treatment_list',
		[
			'label' => __( 'Treatments List', 'medicate' ),
			'type' => Controls_Manager::REPEATER,
			'fields' => $repeater->get_controls(),
			
			'title_field' => '{{{ treatment_name }}}',
		]
	);

	$this->end_controls_section();	

	$this->start_controls_section(
		'section_calculator_ggUsdygu',
		[
			'label' => __( 'Treatment Category', 'medicate' ),
		]
	);

	$this->add_control(
		'treatment_cat_field_name',
		[
			'label' => esc_html__( 'Field Name', 'medicate' ),
			'type' => Controls_Manager::TEXT,
			'default' => esc_html__( 'Treatment Category', 'medicate' ),
			'placeholder' => esc_html__( 'Enter Field Name', 'medicate' ),
		]
	);

	$repeater = new Repeater();

	$repeater->add_control(
		'treatment_category_name',
		[
			'label' => esc_html__( 'Treatment Category', 'medicate' ),
			'type' => Controls_Manager::TEXT,
			'default' => esc_html__( 'Normal', 'medicate' ),
		]
	);	
	$repeater->add_control(
		'treatment_category_price',
		[
			'label' => esc_html__( 'Treatment Price', 'medicate' ),
			'type' => Controls_Manager::TEXT,
			'default' => esc_html__( '500', 'medicate' ),
		]
	);

	$this->add_control(
		'treatment_category_list',
		[
			'label' => __( 'Treatments Category List', 'medicate' ),
			'type' => Controls_Manager::REPEATER,
			'fields' => $repeater->get_controls(),
			
			'title_field' => '{{{ treatment_category_name }}}',
		]
	);

	$this->end_controls_section();

	$this->start_controls_section(
		'section_calculator_locationdhdh',
		[
			'label' => __( 'Location', 'medicate' ),
		]
	);

	$this->add_control(
		'treatment_location_field_name',
		[
			'label' => esc_html__( 'Field Name', 'medicate' ),
			'type' => Controls_Manager::TEXT,
			'default' => esc_html__( 'Location', 'medicate' ),
			'placeholder' => esc_html__( 'Enter Field Name', 'medicate' ),
		]
	);

	$repeater = new Repeater();

	$repeater->add_control(
		'location_name',
		[
			'label' => esc_html__( 'Treatment Category', 'medicate' ),
			'type' => Controls_Manager::TEXT,
			'default' => esc_html__( 'At Hospital', 'medicate' ),
		]
	);	
	$repeater->add_control(
		'location_price',
		[
			'label' => esc_html__( 'Treatment Price', 'medicate' ),
			'type' => Controls_Manager::TEXT,
			'default' => esc_html__( '500', 'medicate' ),
		]
	);

	$this->add_control(
		'location_list',
		[
			'label' => __( 'Treatments Category List', 'medicate' ),
			'type' => Controls_Manager::REPEATER,
			'fields' => $repeater->get_controls(),
			
			'title_field' => '{{{ location_name }}}',
		]
	);

	$this->end_controls_section();

	$this->start_controls_section(
		'section_time_duudhdfh',
		[
			'label' => __( 'Time', 'medicate' ),
		]
	);

	$this->add_control(
		'time_field_name',
		[
			'label' => esc_html__( 'Field Name', 'medicate' ),
			'type' => Controls_Manager::TEXT,
			'default' => esc_html__( 'Time', 'medicate' ),
			'placeholder' => esc_html__( 'Enter Field Name', 'medicate' ),
		]
	);

	$repeater = new Repeater();

	$repeater->add_control(
		'time_text',
		[
			'label' => esc_html__( 'Time', 'medicate' ),
			'type' => Controls_Manager::TEXT,
			'default' => esc_html__( 'Morning', 'medicate' ),
		]
	);	
	

	$this->add_control(
		'time_list',
		[
			'label' => __( 'Treatments Category List', 'medicate' ),
			'type' => Controls_Manager::REPEATER,
			'fields' => $repeater->get_controls(),
			
			'title_field' => '{{{ time_text }}}',
		]
	);

	$this->end_controls_section();

	$this->start_controls_section(
		'section_calculatorxdfsdf_GASDUygu',
		[
			'label' => __( 'Special Appointment Price', 'medicate' ),
		]
	);	

	$this->add_control(
		'special_appointment',
		[
			'label' => esc_html__( 'Special Appointment Price', 'medicate' ),
			'type' => Controls_Manager::TEXT,
			'default' => esc_html__( '500', 'medicate' ),
			'placeholder' => esc_html__( '', 'medicate' ),
		]
	);

	$this->end_controls_section();

}

protected function render() {
	$settings = $this->get_settings();
	require plugin_dir_path( __FILE__ ) . 'style-1.php';
}

}

Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\pt_cost_calculator() );