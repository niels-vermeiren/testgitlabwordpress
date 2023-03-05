<?php
namespace Elementor;
use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW;
if ( ! defined( 'ABSPATH' ) ) exit;

class Teams extends Widget_Base {

	public function get_name() {
		return __( 'team', 'medicate' );
	}

	public function get_title() {
		return __( 'Team', 'medicate' );
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

	// public function __construct( $data = array(), $args = null ) {
	// 	parent::__construct( $data, $args );
	// 	// vendor files
	// 	wp_enqueue_style( 'owl.carousel', MEDICATE_CORE_ASSETS_URL . 'css/vendor/owl.carousel.min.css', array(), '1.0', 'all' );
	// 	wp_enqueue_script('owl-carousel',  MEDICATE_CORE_ASSETS_URL .'/js/vendor/owl.carousel.min.js', array('jquery'),'2.3.4', true);


	// 	// custom files
	// 	wp_register_style( 'team-style-css', plugin_dir_url( __FILE__ )  . '/css/style-1.css', array('owl.carousel'), '1.0.0' );
	// 	wp_register_script( 'team-style-js',  plugin_dir_url( __FILE__ )  . 'js/style-1.js', array('owl-carousel'), '1.0.0' );
	// }
	// public function get_style_depends() {
	// 	return ['team-style-css','owl.carousel'];
	// }
	//    public function get_script_depends() {
	// return [ 'owl-carousel','team-style-js'];
	// }


	protected function register_controls() {

		$this->start_controls_section(
			'section235644',
			[
				'label' => __( 'Style', 'medicate' ),
			]
		);


		 $this->add_control(
			'team_style',
			[
				'label'      => __( 'Style', 'medicate' ),
				'type'       => Controls_Manager::SELECT,
				'default'    => '1',
				'options'    => [
					'1'          => __( 'Style-1 Team slider', 'medicate' ),
					'2'          => __( 'Style-1 Team grid', 'medicate' ),
					'3'          => __( 'Style-2 Team slider', 'medicate' ),
					'4'          => __( 'Style-2 Team grid', 'medicate' ),
					'5'          => __( 'Style-3 Team slider', 'medicate' ),
					'6'          => __( 'Style-3 Team grid', 'medicate' ),
					'7'          => __( 'Style-4 Team slider', 'medicate' ),
					'8'          => __( 'Style-4 Team grid', 'medicate' ),
					
				],
			]
		);
        $this->end_controls_section();
        $this->start_controls_section(
			'sectionpo',
			[
				'label' => __( 'Single Style', 'medicate' ),
			]
		);

		$repeater = new Repeater();
		$repeater->add_control(
			'image',
			[
				'label' => __( 'Choose Image', 'medicate'),
				'type' => Controls_Manager::MEDIA,
				'dynamic' => [
					'active' => true,
				],

			]
		);

			$repeater->add_control(
			'selected_icon',
			[
				'label' => __( 'Icon', 'medicate' ),
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


		$repeater->add_control(
			'title_text',
			[
				'label' => __( 'Title', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( 'This is title', 'medicate' ),
				'placeholder' => __( 'Enter  title', 'medicate' ),
				'label_block' => true,

			]
        );

        $repeater->add_control(
			'website_link_team',
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
        $repeater->add_control(
			'sub_title_text',
			[
				'label' => __( 'Designation', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( 'Designation', 'medicate' ),
				'label_block' => true,

			]
        );
        $repeater->add_control(
			'work_text',
			[
				'label' => __( 'Work', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( 'Enter work', 'medicate' ),
				'label_block' => true,

			]
        );

        $repeater->add_control(
			'social_icon_lists',
			[
				'label' => __( 'Social Icons', 'medicate' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'social' => 'fab fa-facebook',
					],
					[
						'social' => 'fab fa-twitter',
					],
					[
						'social' => 'fab fa-google-plus',
					],
				],
				'fields' => [
					[
						'name' => 'social',
						'label' => __( 'Icon', 'medicate' ),
						'type' => Controls_Manager::ICON,
						'label_block' => true,
						'default' => 'fab fa-wordpress',
						'include' => [
							'fab fa-apple',
							'fab fa-behance',
							'fab fa-bitbucket',
							'fab fa-codepen',
							'fab fa-delicious',
							'fab fa-digg',
							'fab fa-dribbble',
							'fab fa-envelope',
							'fab fa-facebook',
							'fab fa-flickr',
							'fab fa-foursquare',
							'fab fa-github',
							'fab fa-google-plus',
							'fab fa-houzz',
							'fab fa-instagram',
							'fab fa-jsfiddle',
							'fab fa-linkedin',
							'fab fa-medium',
							'fab fa-odnoklassniki',
							'fab fa-meetup',
							'fab fa-pinterest',
							'fab fa-product-hunt',
							'fab fa-reddit',
							'fab fa-shopping-cart',
							'fab fa-slideshare',
							'fab fa-snapchat',
							'fab fa-soundcloud',
							'fab fa-spotify',
							'fab fa-stack-overflow',
							'fab fa-telegram',
							'fab fa-tripadvisor',
							'fab fa-tumblr',
							'fab fa-twitch',
							'fab fa-twitter',
							'fab fa-vimeo',
							'fab fa-vk',
							'fab fa-weibo',
							'fab fa-weixin',
							'fab fa-whatsapp',
							'fab fa-wordpress',
							'fab fa-xing',
							'fab fa-yelp',
							'fab fa-youtube',
						],
					],
					[
						'name' => 'link',
						'label' => __( 'Link', 'medicate' ),
						'type' => Controls_Manager::URL,
						'label_block' => true,
						'default' => [
							'is_external' => 'true',
						],
						'placeholder' => __( 'http://your-link.com', 'medicate' ),
					],
				],

			]
		);


		$this->add_control(

			'tabs',

			[

				'label' => __( 'Tabs Items', 'medicate' ),

				'type' => Controls_Manager::REPEATER,

				'fields' => $repeater->get_controls(),

				'default' => [

					[

						'title_text' => __( 'Title', 'medicate' ),

					]

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
					'{{WRAPPER}} .pt-team-box' => 'text-align: {{VALUE}};',
				]
			]
        );
		$this->end_controls_section();


        $this->start_controls_section(
			'section_control',
			[
				'label' => __( 'Slider Control', 'medicate' ),
				'condition' => [
            		'team_style' => ['1','3','5','7']
        	     ],
			]
		);
		$slider = new Slider_Controls();
		$slider->slider_control($this);


		$this->end_controls_section();

		 // Style tab start
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
				'selector' => '{{WRAPPER}} .pt-team-box .pt-team-info h5',
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-team-box .pt-team-info h5' => 'color: {{VALUE}};',

		 		],


			]
		);

		$this->add_control(
			'head_subtitle',
			[
				'label' => __( 'Designation', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'subtitle_typography',
				'label' => __( 'Typography', 'medicate' ),
				'selector' => '{{WRAPPER}} .pt-team-box .pt-team-info .pt-team-designation',

			]
		);

		$this->add_control(
			'sub_title_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-team-box .pt-team-info .pt-team-designation' => 'color: {{VALUE}};',
		 		],


			]
		);

		$this->add_control(
			'head_bgtittle',
			[
				'label' => __( 'Background', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'title_color_bgcolor',
			[
				'label' => __( 'Background Color', 'medicate' ),
				
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-team-box .pt-team-info' => 'background: {{VALUE}};',
		 		],
		 		'condition' => [
            		'team_style' => ['1','2'],
        	     ],
				
				
			]
		);  

		 $this->end_controls_section();

		 $this->start_controls_section(
			'section__2p08Z1',
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

		  $this->add_control(
			'icon_size_5128328987',
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
					'{{WRAPPER}} .pt-team-box .pt-team-social ul li a' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);


		$this->add_control(
					'icon_color',
					[
						'label' => __( 'Color', 'medicate' ),

						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .pt-team-box .pt-team-social ul li a' => 'color: {{VALUE}};',
				 		],


					]
				);


		 $this->end_controls_section();

		 $this->start_controls_section(
			'section__2p0vxf0Z1xx',
			[
				'label' => __( 'Slider Style', 'medicate' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'Style' => ['1','2'],
				],
			]
		);  

		$slider = new Slider_Controls();
		$slider->slider_style($this);

		$this->end_controls_section();
		 // style tab end




	}

	protected function render() {
		$settings = $this->get_settings();

        if($settings['team_style'] == '1')
		{
			 require plugin_dir_path( __FILE__ ) . 'style-1.php';
		}
		elseif($settings['team_style'] == '2')
		{
			 require plugin_dir_path( __FILE__ ) . 'style-2.php';			
		}
		elseif($settings['team_style'] == '3')
		{
			 require plugin_dir_path( __FILE__ ) . 'style-3.php';			
		}
		elseif($settings['team_style'] == '4')
		{
			 require plugin_dir_path( __FILE__ ) . 'style-4.php';			
		}
		elseif($settings['team_style'] == '5')
		{	
			 require plugin_dir_path( __FILE__ ) . 'style-5.php';			
		}
		elseif($settings['team_style'] == '6')
		{
			 require plugin_dir_path( __FILE__ ) . 'style-6.php';		
		}
		elseif($settings['team_style'] == '7')
		{
			 require plugin_dir_path( __FILE__ ) . 'style-7.php';			
		}
		elseif($settings['team_style'] == '8')
		{
			 require plugin_dir_path( __FILE__ ) . 'style-8.php';			
		}

         if ( Plugin::$instance->editor->is_edit_mode() ) :
		$slider = new Slider_Controls();
		$slider->load_owl_js($this);
		endif;
    }

}

Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Teams() );