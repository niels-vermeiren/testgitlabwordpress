<?php
namespace Elementor;
use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW;

if ( ! defined( 'ABSPATH' ) ) exit;
class banner_fancybox extends Widget_Base {
	public function get_name() {
		return __( 'banner_fancybox', 'medicate' );
	}

	public function get_title() {
		return __( 'Banner Shop', 'medicate' );
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
			'section_jkhj',
			[
				'label' => __( 'Style', 'medicate' ),
			]
		);
		$this->add_control(
			'banner_fancy_style',
			[
				'label' => __( 'Fancybox Style', 'medicate' ),
				'type' => Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1'  => __( 'Style 1', 'medicate' ),
				],
			]
		);


        $this->end_controls_section();
		$this->start_controls_section(
			'section_image',
			[
				'label' => __( 'Fancybox Box', 'medicate' ),
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
				'options' => [
					'text-left' => [
						'title' => __( 'Left', 'medicate' ),
						'icon' => 'eicon-text-align-left',
					],
					'text-center' => [
						'title' => __( 'Center', 'medicate' ),
						'icon' => 'eicon-text-align-center',
					],
					'text-right' => [
						'title' => __( 'Right', 'medicate' ),
						'icon' => 'eicon-text-align-right',
					],

				],

			]
		);
		$this->end_controls_section();


	 // Add Button
		$this->start_controls_section(
			'section_Jnza43wt8d9QH5b77yuyo',
			[
				'label' => __( 'Button', 'medicate' ),
			]
		);
		$btn = new Button_Controls();
		$btn->get_btn_controls($this);


	 // Button End

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
				'selector' => '{{WRAPPER}} .pt-shop-banner .shop-banner-content .shop-banner-title',
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-shop-banner .shop-banner-content .shop-banner-title' => 'color: {{VALUE}};',
		 		],


			]
		);

		$this->add_control(
			'head_subtitle',
			[
				'label' => __( 'SubTitle', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'subtitle_typography',
				'label' => __( 'Typography', 'medicate' ),
				'selector' => '{{WRAPPER}} .pt-shop-banner .shop-banner-content .shop-banner-subtitle',

			]
		);

		$this->add_control(
			'sub_title_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-shop-banner .shop-banner-content .shop-banner-subtitle' => 'color: {{VALUE}};',
		 		],


			]
		);

		$this->end_controls_section();

	}

	protected function render() {

	  $settings = $this->get_settings();

       if($settings['banner_fancy_style'] == '1')
		{
			require plugin_dir_path( __FILE__ ) . 'style-1.php';
		}

    }

}
Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\banner_fancybox() );
