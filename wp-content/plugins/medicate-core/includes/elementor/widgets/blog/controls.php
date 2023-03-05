<?php
namespace Elementor;

use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW;

if ( ! defined( 'ABSPATH' ) ) exit;
class Blog extends Widget_Base {
	public function get_name() {
		return __( 'blog', 'medicate' );
	}

	public function get_title() {
		return __( 'Blog', 'medicate' );
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
		return 'eicon-post';
	}

 //    public function __construct( $data = array(), $args = null ) {
	// 	parent::__construct( $data, $args );
	// 	// vendor files
	// 	wp_enqueue_style( 'owl.carousel', MEDICATE_CORE_ASSETS_URL . 'css/vendor/owl.carousel.min.css', array(), '1.0', 'all' );
	// 	wp_enqueue_script('owl-carousel',  MEDICATE_CORE_ASSETS_URL .'/js/vendor/owl.carousel.min.js', array('jquery'),'2.3.4', true);

	// 	// custom files
	// 	wp_register_style( 'blog-style-slider', plugin_dir_url( __FILE__ )  . '/css/style-1-slider.css', array('owl.carousel'), '1.0.0' );
	// 	// wp_register_style( 'blog-style-grid', plugin_dir_url( __FILE__ )  . '/css/style-2-grid.css', array('bootstrap'), '1.0.0' );
	// 	wp_register_script( 'blog-style-js',  plugin_dir_url( __FILE__ )  . 'js/style-1-slider.js', array('owl-carousel'),'2.0', true );

	// }
	// public function get_style_depends() {
	// 	return ['owl.carousel','blog-style-slider'];
	// }
	//    public function get_script_depends() {
	// return ['blog-style-js','owl-carousel'];
	// }

	protected function register_controls() {
		$this->start_controls_section(
			'section_slider',
			[
				'label' => __( 'Blog', 'medicate' ),
			]
		);


		$this->add_control(
			'blog_style',
			[
				'label'      => __( 'Choose Image/Icon', 'medicate' ),
				'type'       => Controls_Manager::SELECT,
				'default'    => '0',
				'options'    => [
					'0'       => __( 'slider', 'medicate' ),
					'1'          => __( '1 Column', 'medicate' ),
					'2'          => __( '2 Column', 'medicate' ),
					'3'          => __( '3 Column', 'medicate' ),

				],
			]
		);

        $this->add_responsive_control(
			'text_align',
			[
				'label' => __( 'Alignment', 'medicate' ),
                'type' => Controls_Manager::CHOOSE,
                'separator' => 'after',
                'default' => __( 'left', 'medicate' ),
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
				]
			]
		);


         $this->add_control(
			'des_button',
			[
				'label' => __( 'description show', 'medicate' ),
				'type' => Controls_Manager::SWITCHER,
				'yes' => __( 'yes', 'medicate' ),
				'no' => __( 'no', 'medicate' ),
			]
        );

         $this->add_control(
			'bhide_button',
			[
				'label' => __( 'Button show', 'medicate' ),
				'type' => Controls_Manager::SWITCHER,
				'yes' => __( 'yes', 'medicate' ),
				'no' => __( 'no', 'medicate' ),
			]
        );
  		$this->add_control('crop_images',
            array(
                'label'        => esc_html__('Crop Images','medicate' ),
                'type'         => Controls_Manager::SWITCHER,
                'true'     => esc_html__( 'yes', 'medicate' ),
                'false'    => esc_html__( 'no', 'medicate' ),
                'return_value' => 'true',
                'condition'=>[
                	'blog_style' => '0',
                ],
            )
        );


        $this->end_controls_section();

		$this->start_controls_section(
			'section_control',
			[
				'label' => __( 'Slider Control', 'medicate' ),
				'condition' => [
					'blog_style' => ['0'],
				],
			]
		);
		$slider = new Slider_Controls();
		$slider->slider_control($this);

		$this->end_controls_section();

       	$this->start_controls_section(
			'section__2p08cZ1',
			[
				'label' => __( 'Content', 'medicate' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'head_a_c',
			[
				'label' => __( 'Author/Comments', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		 $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'a_typography',
				'label' => __( 'Author Typography', 'medicate' ),
				'selector' => '{{WRAPPER}} .pt-blog-post .pt-post-meta ul li',

			]
		);


		$this->add_control(

			'admin_color',
			[
				'label' => __( 'Author Colors', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-blog-post .pt-post-meta ul li' => 'color: {{VALUE}};',


		 		],


			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'c_typography',
				'label' => __( 'Comments Typography', 'medicate' ),
				'selector' => '{{WRAPPER}} .pt-blog-post .pt-post-meta ul li a',

			]
		);

		$this->add_control(

			'cat_color',
			[
				'label' => __( 'comments Colors', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-blog-post .pt-post-meta ul li a' => 'color: {{VALUE}};',


		 		],


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
				'selector' => '{{WRAPPER}} .pt-blog-post .pt-blog-contain .pt-blog-title a'

			]
		);

		 $this->add_control(
			'title_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-blog-post .pt-blog-contain .pt-blog-title a' => 'color: {{VALUE}};',
		 		],


			]
		);

            $this->add_control(
			'htitle_color',
			[
				'label' => __( 'Hover Title Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-blog-post .pt-blog-contain .pt-blog-title a:hover' => 'color: {{VALUE}};',
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
				'name' => 'descrition_typography',
				'label' => __( 'Typography', 'medicate' ),
				'selector' => '{{WRAPPER}} .pt-blog-post .pt-blog-contain .pt-blog-info',
			]
		);

		$this->add_control(
			'desc_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-blog-post .pt-blog-contain .pt-blog-info' => 'color: {{VALUE}};',
		 		],


			]
		);
		$this->add_control(
			'head_bgcolor_beqadehi',
			[
				'label' => __( 'Background Color', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		 $this->add_control(
			'all_blog_bgcolordhdh',
			[
				'label' => __( ' Background Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-blog .pt-blog-contain' => 'background-color: {{VALUE}};',
		 		],
			]
		);

		$this->end_controls_section();

         $this->start_controls_section(
			'section__2p08c8',
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
			'font_size_5128329087',
			[
				'label' => __( 'Author/Comments Typography', 'medicate' ),
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
					'{{WRAPPER}} .pt-blog-post .pt-post-meta ul li i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(

			'admincaticon_color',
			[
				'label' => __( 'Author/Comments Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-blog-post .pt-post-meta ul li i' => 'color: {{VALUE}};',


		 		],


			]
		);

		 $this->end_controls_section();


         //START BUTTON

        $this->start_controls_section(
			'section_Jnza43wt8d8976H5b77duo',
			[
				'label' => __( 'BLOG Button', 'medicate' ),
			]
		);
		$btn = new Button_Controls();
		$btn->get_slider_btn_controls($this);

		// $this->end_controls_section();

		$this->start_controls_section(
			'section__2p0vxf0Z1xx',
			[
				'label' => __( 'Slider Style', 'medicate' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'blog_style' => ['0'],
				],
			]
		);  

		$slider = new Slider_Controls();
		$slider->slider_style($this);

		$this->end_controls_section();

		 // Button End

     }

	protected function render() {
		$settings = $this->get_settings();
		if($settings['blog_style'] == '0')
		{
       	require plugin_dir_path( __FILE__ ) . 'style-1-slider.php';
       }
       if($settings['blog_style'] == '1' || $settings['blog_style'] == '2' ||
		  $settings['blog_style'] == '3')
		{
			       	require plugin_dir_path( __FILE__ ) . 'style-2-grid.php';

		}


        if ( Plugin::$instance->editor->is_edit_mode() ) :
		$slider = new Slider_Controls();
		$slider->load_owl_js();
		endif;
    }

}
Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Blog() );