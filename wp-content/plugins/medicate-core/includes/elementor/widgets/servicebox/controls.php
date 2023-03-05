<?php
namespace Elementor;
use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW;
if ( ! defined( 'ABSPATH' ) ) exit;

class Medic_Service_Boxes extends Widget_Base {

	public function get_name() {
		return __( 'medicate_Service_Box', 'medicate' );
	}

	public function get_title() {
		return __( 'Service Box', 'medicate' );
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
		return 'eicon-info-box';
	}
	   
	
	protected function register_controls() {

        $this->start_controls_section(

			'section5456676',

			[

				'label' => __( 'Style', 'medicate' ),

			]

		);


        $this->add_control(

			'service_style',

			[

				'label' => __( 'Service box Style', 'medicate' ),

				'type' => Controls_Manager::SELECT,

				'default' => '1',

				'options' => [

					'1'  => __( 'Style 1', 'medicate' ),
					'2'  => __( 'Style 2', 'medicate' ),
					'3'  => __( 'Style 3', 'medicate' ),
					'4'  => __( 'Style 4', 'medicate' ),
			]
		]

		);

        $this->end_controls_section();

		$this->start_controls_section(
			'section_service_boxes',
			[
				'label' => __( 'ServiceBox', 'medicate' ),
			]
		);

		$this->add_control(
			'icons1',
			[
				'label' => __( 'Icon', 'medicate' ),
				'type' => Controls_Manager::ICONS,
				'label_block' => true,
				'default' => [
					'value' => 'ion ion-android-arrow-dropright',
					'library' => 'fa-solid',
				],
                'fa4compatibility' => 'icon',
				'separator' => 'before',
			]
		);

		$this->add_control(
			'image',
			[
				'label' => __( 'Image', 'medicate'),
				'type' => Controls_Manager::MEDIA,
				'dynamic' => [
					'active' => true,
				],


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
			'sub_title_text',
			[
				'label' => __( 'Sub Title', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( 'This is sub sample title', 'medicate' ),
				'placeholder' => __( 'Enter your title', 'medicate' ),
				'label_block' => true,
				'condition' => [
					'service_style!' => ['3','4'],
				],				
			]
        );

        $this->add_control(
			'title_tag',
			[
				'label' => __( 'Title Tag', 'medicate' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'h5',
				'options' => [
					'h1'  => 'h1',
					'h2'  => 'h2',
					'h3'  => 'h3',
					'h4'  => 'h4',
					'h5'  => 'h5',
					'h6'  => 'h6',
					'p'  => 'p',
					'span'  => 'span',

				],

			]

		);


		$this->add_control(
			'link_url',
			[
				'label' => __( 'Link', 'medicate' ),
				'type' => Controls_Manager::URL,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => __( 'https://your-link.com', 'medicate' ),
				'separator' => 'before',
				'condition' => [
					'service_style!' => ['3'],
				],

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
					'{{WRAPPER}} .pt-service-box' => 'text-align: {{VALUE}};',
				]
			]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'section_Jnnjhjd9QH5b77duo',
			[
				'label' => __( 'Button', 'medicate' ),
				'condition' => [
					'service_style' => ['3'],
				]
			]
		);
		$btn = new Button_Controls();
		$btn->get_btn_controls($this);

		
		$this->start_controls_section(
			'section__2p78cZ1',
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
				'selector' => '{{WRAPPER}} .pt-service-box .pt-service-title',
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-service-box .pt-service-title' => 'color: {{VALUE}};',

		 		],


			]
		);

		$this->add_control(
			'head_subtitle',
			[
				'label' => __( 'Sub Title', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'service_style!' => ['3','4'],
				],				
			]
		);

		 $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'subtitle_typography',
				'label' => __( 'Typography', 'medicate' ),
				'selector' => '{{WRAPPER}} .pt-service-box .pt-service-sub-title',
				'condition' => [
					'service_style!' => ['3','4'],
				],			]
		);

		$this->add_control(
			'subtitle_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-service-box .pt-service-sub-title' => 'color: {{VALUE}};',

		 		],
				'condition' => [
					'service_style!' => ['3','4'],
				],

			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section__2ui543Z1',
			[
				'label' => __( 'Icon', 'medicate' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		 $this->add_control(
			'head_icon',
			[
				'label' => __( 'Icon', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_responsive_control(
			'font_size_5896784387',
			[
				'label' => __( 'Typography', 'medicate' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],

				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],

				'selectors' => [
					'{{WRAPPER}} .pt-service-box .pt-service-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'icon_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-service-box .pt-service-icon i' => 'color: {{VALUE}};',

		 		],


			]
		);
		$this->end_controls_section();

	}

	protected function render() {
	   $settings = $this->get_settings();

       if($settings['service_style'] == '1')
		{
			require plugin_dir_path( __FILE__ ) . 'style-1.php';
		}       
		if($settings['service_style'] == '2')
		{
			require plugin_dir_path( __FILE__ ) . 'style-2.php';
		}
		if($settings['service_style'] == '3')
		{
			require plugin_dir_path( __FILE__ ) . 'style-3.php';
		}
		if($settings['service_style'] == '4')
		{
			require plugin_dir_path( __FILE__ ) . 'style-4.php';
		}
		
    }

}

Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Medic_Service_Boxes() );