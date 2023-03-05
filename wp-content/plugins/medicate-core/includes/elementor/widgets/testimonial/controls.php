<?php
namespace Elementor;
use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW;
if ( ! defined( 'ABSPATH' ) ) exit;
class Medic_testi extends Widget_Base {
	public function get_name() {
		return __( 'testimonial', 'medicate' );
	}
	public function get_title() {
		return __( 'Testimonial', 'medicate' );
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
		return 'eicon-testimonial-carousel';
	}

	protected function register_controls() {
		$this->start_controls_section(
			'section254654',
			[
				'label' => __( 'Style', 'medicate' ),
			]
		);
        $this->add_control(
			'testimonial_style',
			[
				'label' => __( 'Testimonial Style', 'medicate' ),
				'type' => Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1'  => __( 'Style 1', 'medicate' ),
					'2'  => __( 'Style 2', 'medicate' ),
					'3'  => __( 'Style 3', 'medicate' ),
					'4'  => __( 'Style 4', 'medicate' ),
				],
			]
		);
        $this->end_controls_section();
		$this->start_controls_section(
			'section_slideryguy',
			[
				'label' => __( 'Testimonial', 'medicate' ),
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
			'title_text',
			[
				'label' => __( 'client name', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( 'This is sample title', 'medicate' ),
				'placeholder' => __( 'Enter your title', 'medicate' ),
				'label_block' => true,
			]
        );
		$repeater->add_control(
			'desg_text',
			[
				'label' => __( 'designation', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( 'This is designation title', 'medicate' ),
				'placeholder' => __( 'Enter your title', 'medicate' ),
				'label_block' => true,
			]
        );
		$repeater->add_control(
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
			]
		);
		$repeater->add_control(
			'single_icon',
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
			'star',
			[
				'label' => __( 'Star', 'medicate' ),
				'type' => Controls_Manager::SELECT,
				'default' => '5',
				'options' => [
					'1'  => '1',
					'2'  => '2',
					'3'  => '3',
					'4'  => '4',
					'5'  => '5'
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
						'title_text' => __( 'Service Box', 'medicate' ),
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
					'{{WRAPPER}} .pt-testimonial-box' => 'text-align: {{VALUE}};',
				]
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
						'section__2p08cZ1',
						[
							'label' => __( 'Content', 'medicate' ),
							'tab' => Controls_Manager::TAB_STYLE,
						]
					);
          $this->add_control(
			'head_name',
			[
				'label' => __( 'Name', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
           $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'member_name_typography',
				'label' => __( 'Typography', 'medicate' ),
				'selector' => '{{WRAPPER}} .pt-testimonial-meta h5',
			]
		);
      		$this->add_control(
			'member_name_color',
			[
				'label' => __( 'Color', 'medicate' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-testimonial-meta h5' => 'color: {{VALUE}};',
		 		],
			]
		);
      $this->add_control(
			'head_designation',
			[
				'label' => __( 'Designation', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'Designation_typography',
				'label' => __( 'Typography', 'medicate' ),
				'selector' => '{{WRAPPER}} .pt-testimonial-meta span',
			]
		);
		$this->add_control(
			'Designation_colors',
			[
				'label' => __( 'Color', 'medicate' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-testimonial-meta span' => 'color: {{VALUE}};',
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
				'selector' => '{{WRAPPER}} .pt-testimonial-box .pt-testimonial-content',
			]
		);
        $this->add_control(
			'desc_color',
			[
				'label' => __( 'Color', 'medicate' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-testimonial-box .pt-testimonial-content' => 'color: {{VALUE}};',
		 		],
			]
		);
		$this->add_control(
			'head_bgcolor_beqhi',
			[
				'label' => __( 'Background Color', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		 $this->add_control(
			'all_fancy_bgcolordhdh',
			[
				'label' => __( ' Background Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-testimonial-box' => 'background-color: {{VALUE}};',
		 		],
			]
		);


		 $this->end_controls_section();
		  $this->start_controls_section(
			'section__2p09Z1',
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
			'icon_size_512838987',
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
					'{{WRAPPER}} .pt-testimonial-box .pt-testimonial-star i ' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
			'icon_color',
			[
				'label' => __( 'Color', 'medicate' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-testimonial-box .pt-testimonial-star i' => 'color: {{VALUE}};'
		 		],
			]
		);
		 $this->end_controls_section();

		 $this->start_controls_section(
			'section__2p0vdffhd0Z1xx',
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
        if($settings['testimonial_style'] == '1')
		{
			require plugin_dir_path( __FILE__ ) . 'style-1.php';
		}
        else if($settings['testimonial_style'] == '2')
		{
			require plugin_dir_path( __FILE__ ) . 'style-2.php';
		}	
        else if($settings['testimonial_style'] == '3')
		{
			require plugin_dir_path( __FILE__ ) . 'style-3.php';
		}
		else if($settings['testimonial_style'] == '4')
		{
			require plugin_dir_path( __FILE__ ) . 'style-4.php';
		}

       if (Plugin::$instance->editor->is_edit_mode() ) :
		$slider = new Slider_Controls();
		$slider->load_owl_js($this);
		endif;
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Medic_testi() );