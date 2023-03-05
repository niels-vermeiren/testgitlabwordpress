<?php
namespace Elementor;
use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW;
if ( ! defined( 'ABSPATH' ) ) exit;


class Pilelabs_Portfolio_info extends Widget_Base {

	public function get_name() {
		return __( 'pilelabs_portfolio_info', 'pilelabs' );
	}
	
	public function get_title() {
		return __( 'Portfolio Info', 'pilelabs' );
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
		return 'eicon-editor-list-ul';
	}
	protected function register_controls() {
		$this->start_controls_section(
			'list_section',
			[
				'label' => __( 'Portfolio Info', 'pilelabs' ),
			]
		);

		
		$this->add_control(
			'list_main_item_title',
			[
				'label' => __( 'Main Title', 'pilelabs' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => __( 'List Item', 'pilelabs' ),
				'default' => __( 'List Item', 'pilelabs' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$this->add_control(
			'info_description',
			[
				'label' => __( 'Description', 'pilelabs' ),
				'type' => Controls_Manager::TEXTAREA,
				'label_block' => true,
				'placeholder' => __( 'List Item', 'pilelabs' ),				
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$repeater = new Repeater();

        $repeater->add_control(
			'list_item_title',
			[
				'label' => __( 'Title', 'pilelabs' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => __( 'List Item', 'pilelabs' ),
				'default' => __( 'List Item', 'pilelabs' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$repeater->add_control(
			'list_item_sub_title',
			[
				'label' => __( 'Info', 'pilelabs' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => __( 'List Item', 'pilelabs' ),
				'default' => __( 'List Item', 'pilelabs' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);

		 $this->add_control(
			'list',
			[
				'label' => __( 'List', 'pilelabs' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_item' => __( 'List 1', 'pilelabs' ),
						
					]
					
				]
			]
		);
		
		
        
        
       

		$this->end_controls_section();

		// Style
		 $this->start_controls_section(
			'section__2p08cZ1',
			[
				'label' => __( 'Content', 'pilelabs' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		 $this->add_control(
			'head_title',
			[
				'label' => __( 'Title', 'pilelabs' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		 $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => __( 'Typography', 'pilelabs' ),				
				'selector' => '{{WRAPPER}} .pt-portfolio-info-box h5',
			]
		);
		 
		$this->add_control(
			'title_color',
			[
				'label' => __( 'Color', 'pilelabs' ),
				
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-portfolio-info-box h5' => 'color: {{VALUE}};',
					
					
		 		],
				
				
			]
		);

		$this->add_control(
			'head_desc',
			[
				'label' => __( 'Description', 'pilelabs' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'desc_typography',
				'label' => __( 'Typography', 'pilelabs' ),				
				'selector' => '{{WRAPPER}} .pt-portfolio-info-box p',
				 
			]
		);
		
		$this->add_control(
			'desc_title_color',
			[
				'label' => __( 'Color', 'pilelabs' ),
				
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-portfolio-info-box p' => 'color: {{VALUE}};',
		 		],
				
				
			]
		);

		$this->add_control(
			'head_list_heading',
			[
				'label' => __( 'List heading', 'pilelabs' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				
			]
		);

		 $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'list_head_typography',
				'label' => __( 'Typography', 'pilelabs' ),				
				'selector' => '{{WRAPPER}} .pt-portfolio-info-box .pt-porfolio-info ul li h5',
			]
		);

		$this->add_control(
			'list_head_color',
			[
				'label' => __( 'Color', 'pilelabs' ),
				
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-portfolio-info-box .pt-porfolio-info ul li h5' => 'color: {{VALUE}};',
		 		],
				
				
			]
		);

		$this->add_control(
			'head_list_title',
			[
				'label' => __( 'List Title', 'pilelabs' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		 $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'list_title_typography',
				'label' => __( 'Typography', 'pilelabs' ),				
				'selector' => '{{WRAPPER}} .pt-portfolio-info-box .pt-porfolio-info ul li span',
			]
		);

		$this->add_control(
			'ls_title_color',
			[
				'label' => __( 'Color', 'pilelabs' ),
				
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-portfolio-info-box .pt-porfolio-info ul li span' => 'color: {{VALUE}};',
					
		 		],
				
				
			]
		);
			
		 $this->end_controls_section();

	}
	
	protected function render() {
		$settings = $this->get_settings();
       require plugin_dir_path( __FILE__ ) . 'style-1.php';
    }	    
		
}

Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Pilelabs_Portfolio_info() );