<?php
namespace Elementor;
use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW;
if ( ! defined( 'ABSPATH' ) ) exit;

class Custome_Tabs extends Widget_Base {

	public function get_name() {
		return __( 'Custom Tabs', 'medicate' );
	}
	
	public function get_title() {
		return __( 'Custom Tabs', 'medicate' );
	}

	public function get_categories() {
		return [ SCEW::get_category() ];
	}

	
	public function get_icon() {
		return 'eicon-tabs';
	}

	
	protected function register_controls() {
		$this->start_controls_section(
			'section_tabs',
			[
				'label' => __( 'Tabs', 'medicate' ),
			]
		);

		$repeater = new Repeater();

		$repeater->add_control(
			'tab_title',
			[
				'label' => __( 'Title & Description', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Tab Title', 'medicate' ),
				'placeholder' => __( 'Tab Title', 'medicate' ),
				'label_block' => true,
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
			'image',
			[
				'label' => __( 'Choose Image', 'medicate'),
				'type' => Controls_Manager::MEDIA,
				'dynamic' => [
					'active' => true,
				],
				'default' => [
					'INDUSTRIE_PLUGIN_URL' => Utils::get_placeholder_image_src(),
				]
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
				'default' => __( 'This is sample title', 'medicate' ),
				'placeholder' => __( 'Enter your title', 'medicate' ),
				'label_block' => true,
			]
		);
		
		$repeater->add_control(
			'description_text',
			[
				'label' => __( 'Content', 'medicate' ),
				'type' => Controls_Manager::TEXTAREA,
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
			'list',
			[
				'label' => __( 'Lists', 'medicate' ),
				'type' => Controls_Manager::WYSIWYG,
				'dynamic' => [
					'active' => true,
				],
				
				'placeholder' => __( 'Put Html Code Here', 'medicate' ),
				'separator' => 'before',
				'rows' => 10,
				'show_label' => true,
			]
        );

         $repeater->add_control(
			'tab_btn_link',
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
			'tabs',
			[
				'label' => __( 'Tabs Items', 'medicate' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'tab_title' => __( 'Tab #1', 'medicate' ),
						'image' => Utils::get_placeholder_image_src(),
						'title_text' => __( 'Title', 'medicate' ),
						'description_text' => __( 'Description', 'medicate' ),
						
					]
				]
			]
		);

		

		

		$this->add_responsive_control(
			'text_align',
			[
				'label' => __( 'Alignment', 'medicate' ),
				'type' => Controls_Manager::CHOOSE,
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

		

		$this->end_controls_section();

		 // Add Button
		// $this->start_controls_section(
		// 	'section_Jnza43wt8d9QH5b77yuyo',
		// 	[
		// 		'label' => __( 'Button', 'medicate' ),
		// 	]
		// );
		// $btn = new Button_Controls();
		// $btn->get_btn_controls($this);
		  // Button Style Section
		$this->start_controls_section(
			'section_y8ubBfbAH1e2VwpN5be9',
			[
				'label' => __( 'Button Style', 'medicate' ),
				'tab' => Controls_Manager::TAB_STYLE,
				
			]
		);
		$this->add_control(
			'btn_style',
			[
				'label' => __( 'Button Style', 'medicate' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'btn-flat',
				'options' => [
					'btn-flat'  => __( 'Flat', 'medicate' ),
					'btn-outline' => __( 'Outline', 'medicate' ),
					'btn-link' => __( 'Link', 'medicate' ),
					
				],
			]
		);
		
        
         
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'label' => __( 'Typography', 'medicate' ),
				
				'selector' => '{{WRAPPER}} .pt-button span.text',
			]
		);
		$this->start_controls_tabs( 'tabs_button_style' );
		$this->start_controls_tab(
			'tab_button_normal',
			[
				'label' => __( 'Normal', 'elementor' ),
			]
		);
		$this->add_control(
			'button_text_color',
			[
				'label' => __( 'Text Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .pt-button span.text , {{WRAPPER}} .pt-button i' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'background_color',
			[
				'label' => __( 'Background Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-btn-container .pt-button' => 'background: {{VALUE}};',
				],
			]
		);
	
		
		$this->end_controls_tab();
		$this->start_controls_tab(
			'tab_button_hover',
			[
				'label' => __( 'Hover', 'elementor' ),
			]
		);
		$this->add_control(
			'hover_color',
			[
				'label' => __( 'Text Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-button:hover span.text , {{WRAPPER}} .pt-button:hover i' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'button_background_hover_color',
			[
				'label' => __( 'Background Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-button:hover' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		
		
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		 	 
	 // Button End
	}

	/**
	 * Render tabs widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
        // $settings = $this->get_settings();
       require plugin_dir_path( __FILE__ ) . 'style-1.php';
		
    }
    
   

	
}

Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Custome_Tabs() );
