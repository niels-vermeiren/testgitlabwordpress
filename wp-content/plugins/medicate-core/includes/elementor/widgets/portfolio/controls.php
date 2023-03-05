<?php
namespace Elementor;
use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW;
if ( ! defined( 'ABSPATH' ) ) exit;

class Portfoliobox extends Widget_Base {

	public function get_name() {
		return __( 'portfoliobox', 'medicate' );
	}

	public function get_title() {
		return __( 'Portfolio', 'medicate' );
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
		return 'eicon-gallery-grid';
	}
	protected function register_controls() {
		$this->start_controls_section(
			'section_j897',
			[
				'label' => __( 'Style', 'medicate' ),
			]
		);
		$this->add_control(
			'portfolio_style',
			[
				'label' => __( 'Portfolio Style', 'medicate' ),
				'type' => Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1'  => __( 'Style 1', 'medicate' ),
					'2'  => __( 'Style 2', 'medicate' ),
				],
			]
		);


		$this->end_controls_section();
		$this->start_controls_section(
			'section_sliderfrgdeg',
			[
				'label' => __( 'portfolio', 'medicate' ),
			]
		);

		$this->add_control(
			'selected_icon',
			[
				'label' => __('Icon', 'medicate'),
				'type' => Controls_Manager::ICONS,
				'label_block' => true,
				'default' => [
					'value' => 'ion ion-plus-round',
					'library' => 'ion-icons',
				],
				'a4compatibility' => 'icon',
				'separator' => 'before',
			]
		);


		$this->add_control('crop_images',
			array(
				'label'        => esc_html__('Crop Images','medicate' ),
				'type'         => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'true'     => esc_html__( 'yes', 'medicate' ),
				'false'    => esc_html__( 'no', 'medicate' ),
				'return_value' => 'true',

			)
		);
		$this->add_control(
			'crop_height',
			[
				'label' => __( 'height', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Image height', 'medicate' ),
				'label_block' => true,
				'condition' => [
					'crop_images' => 'true',
				],
			]
		);
		$this->add_control(
			'crop_weight',
			[
				'label' => __( 'weight', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Image weight', 'medicate' ),
				'label_block' => true,
				'condition' => [
					'crop_images' => 'true',
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
				],
				'selectors' => [
					'{{WRAPPER}} .pt-portfoliobox' => 'text-align: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section__2p080Z1',
			[
				'label' => __( 'Content', 'medicate' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'head_cat',
			[
				'label' => __( 'Category', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'cat_typography',
				'label' => __( 'Typography', 'medicate' ),
				'selector' => '{{WRAPPER}}  .pt-portfoliobox .pt-portfolio-info span a',
			]
		);

		$this->add_control(
			'title_cat',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-portfoliobox .pt-portfolio-info span a' => 'color: {{VALUE}};',
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
				'selector' => '{{WRAPPER}}  .pt-portfoliobox .pt-portfolio-info h5 a',
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-portfoliobox .pt-portfolio-info h5 a' => 'color: {{VALUE}};',
				],


			]
		);

		$this->add_control(
			'title_hov_color',
			[
				'label' => __( 'Hover Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-portfoliobox .pt-portfolio-info h5 a:hover' => 'color: {{VALUE}};',
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
					'{{WRAPPER}} .pt-portfoliobox .pt-portfolio-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);


		$this->add_control(
			'icon_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-portfoliobox .pt-portfolio-icon i' => 'color: {{VALUE}};',
				],


			]
		);


		$this->add_control(
			'bgicon_color',
			[
				'label' => __( 'Background Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-portfoliobox .pt-portfolio-icon i' => 'background: {{VALUE}};',
				],


			]
		);


		$this->end_controls_section();

		$this->start_controls_section(
			'section_control',
			[
				'label' => __( 'Slider Control', 'medicate' ),
			]
		);
		$slider = new Slider_Controls();
		$slider->slider_control($this);


		$this->end_controls_section();

		$this->start_controls_section(
			'section__2p0fgZ1xx',
			[
				'label' => __( 'Slider Style', 'medicate' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);  

		$slider = new Slider_Controls();
		$slider->slider_style($this);

		$this->end_controls_section();



	}

	protected function render() {
		$settings = $this->get_settings();
		if($settings['portfolio_style'] == '1')
		{
			require plugin_dir_path( __FILE__ ) . 'style-1.php';
		}
		else
		{
			require plugin_dir_path( __FILE__ ) . 'style-2.php';			
		}


		if ( Plugin::$instance->editor->is_edit_mode() ) :
			$slider = new Slider_Controls();
			$slider->load_owl_js();
		endif;
	}

}

Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Portfoliobox() );