<?php
namespace Elementor;
use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW;
if ( ! defined( 'ABSPATH' ) ) exit;

class Infobox extends Widget_Base {

	public function get_name() {
		return __( 'infobox', 'medicate' );
	}

	public function get_title() {
		return __( 'Infobox', 'medicate' );
	}

	public function get_categories() {
		return [ SCEW::get_category() ];
    }

	/**
	 * Get widget icon.
	 *
	 * Retrieve heading widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-info-box';
	}
     
     
	// public function __construct( $data = array(), $args = null ) {
	// 	parent::__construct( $data, $args );
	// 	wp_register_style( 'infobox-style-1-css', plugin_dir_url( __FILE__ )  . '/css/style-1.css', array(), '1.0.0' );
	// 	wp_register_style( 'infobox-style-2-css', plugin_dir_url( __FILE__ )  . '/css/style-2.css', array(), '1.0.0' );
	// 	 wp_register_style( 'infobox-style-3-css', plugin_dir_url( __FILE__ )  . '/css/style-3.css', array(), '1.0.0' );	
	// }
	// public function get_style_depends() {
	// 	return ['infobox-style-1-css','infobox-style-2-css','infobox-style-3-css'];
	// }
	   

	protected function register_controls() {
		$this->start_controls_section(
			'sectioninfobox',
			[
				'label' => __( 'Style', 'medicate' ),
			]
		);
		$this->add_control(
			'infobox_style',
			[
				'label' => __( 'Infobox Style', 'medicate' ),
				'type' => Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1'  => __( 'Style 1', 'medicate' ),
					'2'  => __( 'Style 2', 'medicate' ),
					'3'  => __( 'Style 3', 'medicate' ),
				],
			]
		);


        $this->end_controls_section();

		$this->start_controls_section(
			'sectionftf',
			[
				'label' => __( 'Infobox', 'medicate' ),
			]
		);



        $this->add_control(
			'image_style',
			[
				'label'      => __( 'Choose Image/Icon', 'medicate' ),
				'type'       => Controls_Manager::SELECT,
				'default'    => 'none',
				'options'    => [
					'none'       => __( 'None', 'medicate' ),
					'1'          => __( 'Image', 'medicate' ),
					'2'          => __( 'Icon', 'medicate' ),

				],
			]
		);
		$this->add_control(
			'image',
			[
				'label' => __( 'Choose Image', 'medicate'),
				'type' => Controls_Manager::MEDIA,
				'dynamic' => [
					'active' => true,
				],

				'condition' => [
					'image_style' => '1',
				],
			]
		);
		$this->add_control(
			'selected_icon',
			[
				'label' => __( 'Choose Icon', 'medicate' ),
				'type' => Controls_Manager::ICONS,
				'label_block' => true,
				'default' => [
					'value' => 'fas fa-check',
					'library' => 'fa-solid',
				],
                'fa4compatibility' => 'icon',
				'separator' => 'before',
				'condition' => [
					'image_style' => '2',
				]
			]
		);

		$this->add_control(
			'single_icon',
			[
				'label' => __( 'Single Icon', 'medicate' ),
				'type' => Controls_Manager::ICONS,
				'label_block' => true,
				'default' => [
					'value' => 'fas fa-check',
					'library' => 'fa-solid',
				],
                'fa4compatibility' => 'icon',
				'separator' => 'before',
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
				'default' => __( 'This is sample title', 'medicate' ),
				'placeholder' => __( 'Enter your title', 'medicate' ),
				'label_block' => true,
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
			'desc_content',
			[
				'label' => __( 'Enable/disable description', 'medicate' ),
				'type' => Controls_Manager::SWITCHER ,
				'label_on' => __( 'Show', 'medicate' ),
				'label_off' => __( 'Hide', 'medicate' ),
				'return_value' => 'yes',
				'default' => 'yes',

			]
		);

		$this->add_control(
			'description_text',
			[
				'label' => __( 'Content', 'medicate' ),
				'type' => Controls_Manager::WYSIWYG,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( 'Enter your Description here', 'medicate' ),
				'placeholder' => __( 'Enter your description', 'medicate' ),
				'separator' => 'before',
				'rows' => 10,
				'show_label' => true,
				'condition' => [
					'desc_content' => 'yes',
				]
			]
		);


        $this->add_control(
			'title_number',
			[
				'label' => __( 'Number', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( 'This is number', 'medicate' ),
				'placeholder' => __( 'Enter your number', 'medicate' ),
				'label_block' => true,
				'condition' => [
					'infobox_style' => ['1'],
				]
			]
        );

        $this->add_control(
			'number_icon',
			[
				'label' => __( 'Number Icon', 'medicate' ),
				'type' => Controls_Manager::ICONS,
				'label_block' => true,
				'default' => [
					'value' => 'fas fa-check',
					'library' => 'fa-solid',
				],
                'fa4compatibility' => 'icon',
				'separator' => 'before',
				'condition' => [
					'infobox_style' => ['1'],
				]
			]
		);

		$repeater = new Repeater();

		$repeater->add_control(
			'enable_disable',
			[
				'label' => __( 'Enable/disable', 'medicate' ),
				'type' => Controls_Manager::SWITCHER ,
				'label_on' => __( 'Show', 'medicate' ),
				'label_off' => __( 'Hide', 'medicate' ),
				'return_value' => 'yes',
				'default' => 'yes',

			]
		);

		$repeater->add_control(
			'tab_title',
			[
				'label' => __( 'Weakend Title', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( 'This is weakend title', 'medicate' ),
				'placeholder' => __( 'Enter your weakend title', 'medicate' ),
				'label_block' => true,

			]
        );


         $repeater->add_control(
			'tab_time',
			[
				'label' => __( 'Weakend Time', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( 'This is weakend title', 'medicate' ),
				'placeholder' => __( 'Enter your weakend title', 'medicate' ),
				'label_block' => true,

			]
        );

		$this->add_control(
			'tabs',
			[
				'label' => __( 'List Items', 'medicate' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'tab_title' => __( 'Monday', 'medicate' ),
					]

				],
				'title_field' => '{{{ tab_title }}}',
				'condition' => [
					'infobox_style' => ['3'],
				]
			]
		);

		$this->add_control(
			'show_button',
			[
				'label' => __( 'Show/Hide button', 'medicate' ),
				'type' => Controls_Manager::SWITCHER,
				'yes' => __( 'yes', 'medicate' ),
				'no' => __( 'no', 'medicate' ),
				'condition' => [
					'infobox_style' => ['2'],
				]

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
					'{{WRAPPER}} .pt-info-box' => 'text-align: {{VALUE}};',
				]
			]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'section__2108cy',
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
				'selector' => '{{WRAPPER}} .pt-info-box .pt-info-title',
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-info-box .pt-info-title' => 'color: {{VALUE}};',
		 		],


			]
		);

		$this->add_control(
			'head_num',
			[
				'label' => __( 'Number', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',

			]
		);

		 $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'number_typography',
				'label' => __( 'Typography', 'medicate' ),
				'selector' => '{{WRAPPER}} .pt-info-box .pt-info-call h5',
			]
		);

		$this->add_control(
			'number_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-info-box .pt-info-call h5' => 'color: {{VALUE}};',
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
				'name' => 'description_typography',
				'label' => __( 'Typography', 'medicate' ),
				'selector' => '{{WRAPPER}} .pt-info-box .pt-infobox-description',
			]
		);

		$this->add_control(
			'desc_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-info-box .pt-infobox-description' => 'color: {{VALUE}};',

		 		],


			]
		);

		$this->add_control(
			'head_tab_title',
			[
				'label' => __( 'Weakend Title', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		 $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'weakend_typography',
				'label' => __( 'Typography', 'medicate' ),
				'selector' => '{{WRAPPER}} .pt-info-box .pt-info-hours .pt-info-hours-row ul li .pt-info-hours-title',
			]
		);

		$this->add_control(
			'weak_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-info-box .pt-info-hours .pt-info-hours-row ul li .pt-info-hours-title' => 'color: {{VALUE}};',

		 		],


			]
		);


		$this->add_control(
			'head_tab_time',
			[
				'label' => __( 'Weakend Time', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		 $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'weaktime_typography',
				'label' => __( 'Typography', 'medicate' ),
				'selector' => '{{WRAPPER}} .pt-info-box .pt-info-hours .pt-info-hours-row ul li .pt-info-hours-content',
			]
		);

		$this->add_control(
			'weaktime_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-info-box .pt-info-hours .pt-info-hours-row ul li .pt-info-hours-content' => 'color: {{VALUE}};',

		 		],


			]
		);

		 $this->end_controls_section();

		  $this->start_controls_section(
			'section__2456Z1',
			[
				'label' => __( 'Icon', 'medicate' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		 $this->add_control(
			'head_icon',
			[
				'label' => __( 'Right Icon', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		  $this->add_control(
			'icon_size_512832y67',
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
					'{{WRAPPER}} .pt-info-box .pt-info-box-right-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);


		$this->add_control(
					'icon_color',
					[
						'label' => __( 'Color', 'medicate' ),

						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .pt-info-box .pt-info-box-right-icon i' => 'color: {{VALUE}};',
				 		],


					]
				);


		$this->add_control(
			'headss_icon',
			[
				'label' => __( 'Left Icon', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		  $this->add_control(
			'iconss_size_512832y67',
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
					'{{WRAPPER}} .pt-info-box .pt-info-box-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);


		$this->add_control(
					'iconss_color',
					[
						'label' => __( 'Color', 'medicate' ),

						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .pt-info-box .pt-info-box-icon i' => 'color: {{VALUE}};',
				 		],


					]
				);


		$this->add_control(
			'headss_iconss',
			[
				'label' => __( 'Icon', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		  $this->add_control(
			'iconss_ssize_512832y67',
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
					'{{WRAPPER}} .pt-info-box .pt-info-call i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);


		$this->add_control(
					'iconsss_color',
					[
						'label' => __( 'Color', 'medicate' ),

						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .pt-info-box .pt-info-call i' => 'color: {{VALUE}};',
				 		],


					]
				);


		     $this->add_control(
					'icon_bbg_color',
					[
						'label' => __( 'Background Color', 'medicate' ),

						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .pt-info-box .pt-info-call i' => 'background-color: {{VALUE}};',
				 		],


					]
				);
		 $this->end_controls_section();

	// Add Button
		$this->start_controls_section(
			'section_Jnza436755QH5b77yuyo',
			[
				'label' => __( 'Button', 'medicate' ),
				'condition' => [
					'infobox_style' => ['2'],
				]
			]
		);
		$btn = new Button_Controls();
		$btn->get_btn_controls($this);


	 // Button End
	}

	protected function render() {
		$settings = $this->get_settings();
       if($settings['infobox_style'] == '1')
		{
			require plugin_dir_path( __FILE__ ) . 'style-1.php';
		}

		if($settings['infobox_style'] == '2')
		{
			require plugin_dir_path( __FILE__ ) . 'style-2.php';
		}
		if($settings['infobox_style'] == '3')
		{
			require plugin_dir_path( __FILE__ ) . 'style-3.php';
		}
    }

}

Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Infobox() );