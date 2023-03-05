<?php
namespace Elementor;
use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW;
if ( ! defined( 'ABSPATH' ) ) exit;

class Client extends Widget_Base {

	public function get_name() {
		return __( 'client', 'medicate' );
	}

	public function get_title() {
		return __( 'Client', 'medicate' );
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
		return 'eicon-lock-user';
	}

 //    public function __construct( $data = array(), $args = null ) {
	// 	parent::__construct( $data, $args );
	// 	// vendor files
	// 	wp_enqueue_style( 'owl.carousel', MEDICATE_CORE_ASSETS_URL . 'css/vendor/owl.carousel.min.css', array(), '1.0', 'all' );
	// 	wp_enqueue_script('owl-carousel',  MEDICATE_CORE_ASSETS_URL .'/js/vendor/owl.carousel.min.js', array('jquery'),'2.3.4', true);

	// 	// custom files
	// 	wp_register_style( 'client-style-css', plugin_dir_url( __FILE__ )  . '/css/style-1.css', array(), '1.0.0' );
	// 	wp_register_script( 'client-style-js',  plugin_dir_url( __FILE__ )  . 'js/style-1.js',array('owl-carousel'),'2.0', true );
	// }
	// public function get_style_depends() {
	// 	return ['client-style-css','owl.carousel'];
	// }
	//    public function get_script_depends() {
	// return [ 'client-style-js','owl-carousel'];
	// }

	protected function register_controls(){

		$this->start_controls_section(
			'section248452',
			[
				'label' => __( 'Style', 'medicate' ),
			]
		);

      $this->add_control(
			'client_style',
			[
				'label' => __( 'Client Style', 'medicate' ),
				'type' => Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1'  => __( 'Style 1 Slider', 'medicate' ),
					'2'  => __( 'Style 1 Grid', 'medicate' ),
				],
			]
		);


    $this->end_controls_section();

		$this->start_controls_section(
			'section_asdfsd',
			[
				'label' => __( 'Client', 'medicate' ),
				'condition' => [
					'client_style' => ['1'],
				]
			]
		);

		$this->add_control(
			'custom_dimension',
			[
				'label' => __( 'Image Dimension', 'medicate' ),
				'type' => Controls_Manager::IMAGE_DIMENSIONS,
				'description' => __( 'Crop the original image size to any custom size. Set custom width or height to keep the original size ratio.', 'plugin-name' ),
				'default' => [
					'width' => '',
					'height' => '',
				],

			]
		);

		$repeater = new Repeater();

		 $repeater->add_control(
			'image',
			[
				'label' => __( 'Image1', 'medicate' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],

			]
		);

		 $repeater->add_control(
			'image1',
			[
				'label' => __( 'Image2', 'medicate' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],

			]
		);


		$repeater->add_control(
			'btn_link',
			[
				'label' => __( 'Link', 'medicate' ),
				'type' => Controls_Manager::URL,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => __( 'https://your-link.com', 'medicate' ),
				'separator' => 'before',

			]
		);




		 $this->add_control(
			'list_items',
			[
				'label' => __( 'List', 'medicate' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
						'image' => Utils::get_placeholder_image_src(),
					],
			]
		);

     $this->end_controls_section();

     $this->start_controls_section(
			'section_asdseffsd',
			[
				'label' => __( 'Client', 'medicate' ),
				'condition' => [
					'client_style' => ['2'],
				]			
			]
		);

		$this->add_control(
			'grid_custom_dimension',
			[
				'label' => __( 'Image Dimension', 'medicate' ),
				'type' => Controls_Manager::IMAGE_DIMENSIONS,
				'description' => __( 'Crop the original image size to any custom size. Set custom width or height to keep the original size ratio.', 'plugin-name' ),
				'default' => [
					'width' => '',
					'height' => '',
				],

			]
		);


		 $this->add_control(
			'grid_image',
			[
				'label' => __( 'Image1', 'medicate' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],

			]
		);

		 $this->add_control(
			'grid_image1',
			[
				'label' => __( 'Image2', 'medicate' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],

			]
		);


		$this->add_control(
			'grid_btn_link',
			[
				'label' => __( 'Link', 'medicate' ),
				'type' => Controls_Manager::URL,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => __( 'https://your-link.com', 'medicate' ),
				'separator' => 'before',

			]
		);


     $this->end_controls_section();
     $this->start_controls_section(
			'section__2p08976Z1',
			[
				'label' => __( 'Content', 'medicate' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'head_dot',
			[
				'label' => __( 'Owl dot', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'owldotact_color',
			[
				'label' => __( 'Active Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .owl-carousel .owl-dots .owl-dot.active' => 'background: {{VALUE}};',
		 		],


			]
		);

		$this->add_control(
			'owldot_color',
			[
				'label' => __( 'Inactive Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .owl-carousel .owl-dots .owl-dot' => 'background: {{VALUE}};',
		 		],


			]
		);

		$this->add_control(
			'owldot_hover',
			[
				'label' => __( 'Hover Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .owl-carousel .owl-dots .owl-dot:hover' => 'background: {{VALUE}};',
		 		],
			]
		);

     $this->end_controls_section();

     $this->start_controls_section(
			'section_control',
			[
				'label' => __( 'Slider Control', 'medicate' ),
				'condition' => [
					'client_style' => ['1'],
				]							
			]
		);
		$slider = new Slider_Controls();
		$slider->slider_control($this);


		$this->end_controls_section();


    }

	protected function render() {

        $settings = $this->get_settings();

        if($settings['client_style'] == '1')
		{
			require plugin_dir_path( __FILE__ ) . 'style-1.php';
		}        
		if($settings['client_style'] == '2')
		{
			require plugin_dir_path( __FILE__ ) . 'style-2.php';
		}

		 if ( Plugin::$instance->editor->is_edit_mode() ) :
		$slider = new Slider_Controls();
		$slider->load_owl_js($this);
		endif;


    }

}

Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Client() );
