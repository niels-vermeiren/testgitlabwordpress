<?php
namespace Elementor;
use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW; 

if ( ! defined( 'ABSPATH' ) ) exit; 
class price_plan extends Widget_Base {
	public function get_name() {
		return __( 'price_plan', 'medicate' );
	}
	
	public function get_title() {
		return __( 'Pricing Plan', 'medicate' );
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
		return 'eicon-price-table';
	}
	protected function register_controls() {
		$this->start_controls_section(
			'section_sfnkf',
			[
				'label' => __( 'Style', 'medicate' ),
			]
		);
		$this->add_control(
			'price_style',
			[
				'label' => __( 'Price Style', 'medicate' ),
				'type' => Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1'  => __( 'Style 1', 'medicate' ),
					'2'  => __( 'Style 2', 'medicate' ),
					'3'  => __( 'Style 3', 'medicate' ),
					'4'  => __( 'Style 4', 'medicate' ),
					'5'  => __( 'Style 5', 'medicate' ),
				],
			]
		);

        
        $this->end_controls_section();
		$this->start_controls_section(
			'section_icon',
			[
				'label' => __( 'Pricing Plan', 'medicate' ),
			]
		);
		$this->add_control(
			'title',
			[
				'label' => __( 'Title', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				
				'label_block' => true,
				'default' => __( 'Your Title Here', 'medicate' ),
			]
		);
		$this->add_control(
			'price_icon',
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
				'condition' => [
					'price_style' => ['1','3'],
				]
			]
		);


		$this->add_control(
			'price',
			[
				'label' => __( 'Price', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'default' => __( 'Enter Price', 'medicate' ),
				
			]
		);		
		$this->add_control(
			'price_currency',
			[
				'label' => __( 'Currency', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'default' => __( '$', 'medicate' ),
				
			]
		);
		$this->add_control(
			'price_duration',
			[
				'label' => __( 'Duration', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'default' => __( 'Monthly', 'medicate' ),
				
			]
		);
		$this->add_control(
			'show_button',
			[
				'label' => __( 'Show/Hide button', 'pilelabs' ),
				'type' => Controls_Manager::SWITCHER,
				'yes' => __( 'yes', 'pilelabs' ),
				'no' => __( 'no', 'pilelabs' ),
			]
        );
		
		$this->add_control(
			'active',
			[
				'label' => __( 'Is Active?', 'elementor' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'label_off',
				'yes' => __( 'yes', 'pilelabs' ),
				'no' => __( 'no', 'pilelabs' ),
			]
		);

		$repeater = new Repeater();


		$repeater->add_control(
			'plan_title',
			[
				'label' => __( 'Plan list info', 'medicate' ),
				'type' => Controls_Manager::WYSIWYG,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'default' => __( 'Enter Plan title', 'medicate' ),
				
			]
		);

		$repeater->add_control(
			'enable_disable',
			[
				'label' => __( 'Enable/disable', 'medicate' ),
				'type' => Controls_Manager::SWITCHER ,
				'label_on' => __( 'Show', 'medicate' ),
				'label_off' => __( 'Hide', 'medicate' ),
				'return_value' => 'yes',
			]
		);

		$repeater->add_control(
			'plan_icons',
			[
				'label' => __( 'Icon', 'medicate' ),
				'type' => Controls_Manager::ICONS,
				'label_block' => true,
                'fa4compatibility' => 'icon',
				'separator' => 'before',
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
						'title_text' => __( 'Plan tabs', 'medicate' ),
					]
				]
			]
		);



		$this->end_controls_section();

		$this->start_controls_section(
			'section__2p090Z',
			[
				'label' => __( 'Alignment', 'medicate' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		 $this->add_responsive_control(
			'align',
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
					'text-end' => [
						'title' => __( 'Right', 'medicate' ),
						'icon' => 'eicon-text-align-right',
					],
					
				],
				
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
				'selector' => '{{WRAPPER}} .pt-pricing-plan .pt-title',
			]
		);
		 
		$this->add_control(
			'title_color',
			[
				'label' => __( 'Color', 'medicate' ),
				
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-pricing-plan .pt-title' => 'color: {{VALUE}};',			
		 		],
				
				
			]
		);


		$this->add_control(
			'head_price',
			[
				'label' => __( 'Price', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		 $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'price_typography',
				'label' => __( 'Typography', 'medicate' ),				
				'selector' => '{{WRAPPER}} .pt-pricing-plan .pt-amount',
			]
		);

		$this->add_control(
			'price_color',
			[
				'label' => __( 'Color', 'medicate' ),
				
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-pricing-plan .pt-amount' => 'color: {{VALUE}};',
		 		],
				
				
			]
		);

		$this->add_control(
			'head_list_title',
			[
				'label' => __( 'Plan Title', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		 $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'listtitle_typography',
				'label' => __( 'Typography', 'medicate' ),				
				'selector' => '{{WRAPPER}} .pt-pricing-plan .pt-pricing-list li',
			]
		);

		$this->add_control(
			'listtitle_color',
			[
				'label' => __( 'Color', 'medicate' ),
				
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-pricing-plan .pt-pricing-list li' => 'color: {{VALUE}};',
					
		 		],
				
				
			]
		);
			
		 $this->end_controls_section();


		// Add Button
		$this->start_controls_section(
			'section_Jnza43wt8d9QH5b77yuyo',
			[
				'label' => __( 'Button', 'medicate' ),
				'condition' => [
					'show_button' => 'yes',
				]
			]
		);
		$btn = new Button_Controls();
		$btn->get_btn_controls($this);
		 
		 	 
	 // Button End
		$this->start_controls_section(
			'section__2ui6',
			[
				'label' => __( 'Icon', 'medicate' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);


		
		$this->add_control(
			'head_sticon',
			[
				'label' => __( 'Price Plan Icon', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		 $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'sticon_typography',
				'label' => __( 'Typography', 'medicate' ),				
				'selector' => '{{WRAPPER}} .pt-pricing-plan .pt-service-media i',
			]
		);	

		$this->add_control(
			'icon_stcolor_dgewd',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-pricing-plan .pt-service-media i' => 'color: {{VALUE}};',

		 		],
		 		
			]
		);


		$this->end_controls_section();

	}
	
	protected function render() {
		$settings = $this->get_settings();
		if($settings['price_style'] == '1')
		{
			require plugin_dir_path( __FILE__ ) . 'style-1.php';
		}
		elseif($settings['price_style'] == '2')
		{
			require plugin_dir_path( __FILE__ ) . 'style-2.php';
		}		
		elseif($settings['price_style'] == '3')
		{
			require plugin_dir_path( __FILE__ ) . 'style-3.php';
		}
		elseif($settings['price_style'] == '4')
		{
			require plugin_dir_path( __FILE__ ) . 'style-4.php';
		}
		elseif($settings['price_style'] == '5')
		{
			require plugin_dir_path( __FILE__ ) . 'style-5.php';
		}
		
	}	    
	
}
Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\price_plan() );