<?php
namespace Elementor;
use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW;

if ( ! defined( 'ABSPATH' ) ) exit;
class Fancybox extends Widget_Base {
	public function get_name() {
		return __( 'fancybox', 'medicate' );
	}

	public function get_title() {
		return __( 'Fancybox', 'medicate' );
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
			'fancy_style',
			[
				'label' => __( 'Fancybox Style', 'medicate' ),
				'type' => Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1'  => __( 'Style 1', 'medicate' ),
					'2'  => __( 'Style 2', 'medicate' ),
					'3'  => __( 'Style 3', 'medicate' ),
					'4'  => __( 'Style 4', 'medicate' ),
					'5'  => __( 'Style 5', 'medicate' ),
					'6'  => __( 'Style 6', 'medicate' ),
					'7'  => __( 'Style 7', 'medicate' ),
					'8'  => __( 'Style 8', 'medicate' ),
					'9'  => __( 'Style 9', 'medicate' ),
					'10'  => __( 'Style 10', 'medicate' ),
					'11'  => __( 'Style 11', 'medicate' ),
					'12'  => __( 'Style 12', 'medicate' ),
					'13'  => __( 'Style 13', 'medicate' ),
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
			'bg_image',
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
				'label' => __( 'Icon', 'medicate' ),
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
			'number_text',
			[
				'label' => __( 'Number', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( '01', 'medicate' ),
				'placeholder' => __( 'Enter your number', 'medicate' ),
				'label_block' => true,
				'condition' => [
				'fancy_style' => ['4'],
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
				'default' => __( 'This is Sub title', 'medicate' ),
				'placeholder' => __( 'Enter your sub title', 'medicate' ),
				'label_block' => true,
				'condition' => [
				'fancy_style' => ['7'],
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
			'tab_active',
			[
				'label' => __( 'Active', 'medicate' ),
				'type' => Controls_Manager::SWITCHER ,
				'label_on' => __( 'Yes', 'medicate' ),
				'label_off' => __( 'No', 'medicate' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'fancy_style' => ['6','12'],
				]

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
				'condition' => [
					'fancy_style!' => ['11'],
				],
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
					'fancy_style!' => ['11'],
				]
			]
		);

		$this->end_controls_section();
		
		$this->start_controls_section(
			'section_listfdjh',
			[
				'label' => __( 'List', 'medicate' ),
				'condition' => [
					'fancy_style' => ['8','11'],
				]
			]
		);

		$repeater = new Repeater();

		$repeater->add_control(
			'selected_icon_second',
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
			'list_title',
			[
				'label' => __( 'Title ', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'List Title', 'medicate' ),
				'placeholder' => __( 'List Title', 'medicate' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'lists',
			[
				'label' => __( 'Tabs Items', 'medicate' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_title' => __( 'List', 'medicate' ),
					]
				]
			]
		);

		$this->end_controls_section();



          $this->start_controls_section(
			'section__2p56cZ',
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
					'{{WRAPPER}} .pt-fancy-box' => 'text-align: {{VALUE}};',
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
			'head_sub_title',
			[
				'label' => __( 'Sub Title', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
				'fancy_style' => ['7'],
				],							
			]
		);

		 $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'sub_title_typography',
				'label' => __( 'Typography', 'medicate' ),
				'selector' => '{{WRAPPER}} .pt-fancy-box .pt-fancy-box-subtitle',
				'condition' => [
				'fancy_style' => ['7'],
				],				
			]
		);

		$this->add_control(
			'sub_title_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-fancy-box .pt-fancy-box-subtitle' => 'color: {{VALUE}};',
		 		],
				'condition' => [
				'fancy_style' => ['7'],
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
				'selector' => '{{WRAPPER}} .pt-fancy-box .pt-fancy-box-title',
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-fancy-box .pt-fancy-box-title' => 'color: {{VALUE}};',


		 		],


			]
		);

		//description typography for style-1	
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
				'selector' => '{{WRAPPER}} .pt-fancy-box .pt-fancybox-description',
			]
		);

		$this->add_control(
			'desc_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-fancy-box .pt-fancybox-description' => 'color: {{VALUE}};',

		 		],


			]
		);
	 $this->end_controls_section();

		
	
	}

	protected function render() {

	  $settings = $this->get_settings();

       if($settings['fancy_style'] == '1')
		{
			require plugin_dir_path( __FILE__ ) . 'style-1.php';
		}
		elseif ($settings['fancy_style'] == '2') 
		{
			require plugin_dir_path( __FILE__ ) . 'style-2.php';
		}
		elseif ($settings['fancy_style'] == '3') 
		{
			require plugin_dir_path( __FILE__ ) . 'style-3.php';
		}
		elseif ($settings['fancy_style'] == '4')
		{
			require plugin_dir_path( __FILE__ ) . 'style-4.php';
		}
		elseif ($settings['fancy_style'] == '5')
		{
			require plugin_dir_path( __FILE__ ) . 'style-5.php';
		}		
		elseif ($settings['fancy_style'] == '6')
		{
			require plugin_dir_path( __FILE__ ) . 'style-6.php';
		}		
		elseif ($settings['fancy_style'] == '7')
		{
			require plugin_dir_path( __FILE__ ) . 'style-7.php';
		}
		elseif ($settings['fancy_style'] == '8')
		{
			require plugin_dir_path( __FILE__ ) . 'style-8.php';
		}		
		elseif ($settings['fancy_style'] == '9')
		{
			require plugin_dir_path( __FILE__ ) . 'style-9.php';
		}
		elseif ($settings['fancy_style'] == '10')
		{
			require plugin_dir_path( __FILE__ ) . 'style-10.php';
		}
		elseif ($settings['fancy_style'] == '11')
		{
			require plugin_dir_path( __FILE__ ) . 'style-11.php';
		}
		elseif ($settings['fancy_style'] == '12')
		{
			require plugin_dir_path( __FILE__ ) . 'style-12.php';
		}
		elseif ($settings['fancy_style'] == '13')
		{
			require plugin_dir_path( __FILE__ ) . 'style-13.php';
		}
    }

}
Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Fancybox() );
