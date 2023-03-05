<?php
namespace Elementor;
use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW;
if ( ! defined( 'ABSPATH' ) ) exit;

class Section_Title extends Widget_Base {

	public function get_name() {
		return __( 'section-title', 'medicate' );
	}

	public function get_title() {
		return __( 'Section Title', 'medicate' );
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

	// public function __construct( $data = array(), $args = null ) {
	// 	parent::__construct( $data, $args );
	// 	wp_register_style( 'section-style-1-css', plugin_dir_url( __FILE__ )  . '/css/style-1.css', array(), '1.0.0' );
	// }
	// public function get_style_depends() {
	// 	return ['section-style-1-css'];
	// }
	   

	protected function register_controls() {
		$this->start_controls_section(
			'section_image_title',
			[
				'label' => __( 'Section Title', 'medicate' ),
			]
		);


		$this->add_control(
			'title_text',
			[
				'label' => __( 'Title', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( 'This is title', 'medicate' ),
				'placeholder' => __( 'Enter your title', 'medicate' ),
				'label_block' => true,
			]
		);



        $this->add_control(
			'sub_title',
			[
				'label' => __( 'Sub Title', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( 'This is sub title', 'medicate' ),
				'placeholder' => __( 'Enter your title', 'medicate' ),
				'label_block' => true,

			]

        );

        $this->add_control(
			'desc_title',
			[
				'label' => __( 'Description Title', 'medicate' ),
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( 'This is description', 'medicate' ),
				'placeholder' => __( 'Enter your description', 'medicate' ),
				'label_block' => true,

			]

        );


		$this->end_controls_section();
		 $this->start_controls_section(
			'section__2p08cZ',
			[
				'label' => __( 'Alignment', 'medicate' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		 $this->add_responsive_control(
			'content_align',
			[
				'label' => __( 'Alignment', 'medicate' ),
				'type' => Controls_Manager::CHOOSE,
				'default'    => 'left',
				'options' => [
					'left' => [
						'title' => __( 'Left', 'medicate' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'medicate' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'medicate' ),
						'icon' => 'eicon-text-align-right',
					]
		 		],
		 		'selectors' => [
					'{{WRAPPER}} .pt-section' => 'text-align: {{VALUE}};',
				]
			]
        );
		$this->end_controls_section();


		 // Style
		 $this->start_controls_section(
			'section__2p08cZ1',
			[
				'label' => __( 'Content', 'medicate' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'head_title',
			[
				'label' => __( 'Title', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => __( 'Typography', 'medicate' ),
				'selector' => '{{WRAPPER}} .pt-section .pt-section-title',
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-section .pt-section-title' => 'color: {{VALUE}};',
		 		],


			]
		);

		$this->add_control(
			'head_sub_title',
			[
				'label' => __( 'Sub Title', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'subtitle_typography',
				'label' => __( 'Typography', 'medicate' ),
				'selector' => '{{WRAPPER}} .pt-section .pt-section-sub-title',

			]
		);

		$this->add_control(
			'sub_title_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-section .pt-section-sub-title' => 'color: {{VALUE}};',
		 		],


			]
		);

		$this->add_control(
			'sub_bgcolor',
			[
				'label' => __( 'Background Color', 'medicate' ),
				
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-section .pt-section-sub-title' => 'background: {{VALUE}};',
		 		],
		 			
			]
		);  

		$this->add_control(
			'head_desc',
			[
				'label' => __( 'Description', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'desc_typography',
				'label' => __( 'Typography', 'medicate' ),
				'selector' => '{{WRAPPER}} .pt-section .pt-section-description',
			]
		);

		$this->add_control(
			'desc_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-section .pt-section-description' => 'color: {{VALUE}};',
		 		],


			]
		);



		 $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings();
        require plugin_dir_path( __FILE__ ) . 'style-1.php';
    }

}

Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Section_Title() );