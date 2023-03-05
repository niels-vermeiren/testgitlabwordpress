<?php
namespace Elementor;
use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW; 
if ( ! defined( 'ABSPATH' ) ) exit; 

class Process_Step extends Widget_Base {

	public function get_name() {
		return __( 'Process_Step', 'medicate' );
	}
	
	public function get_title() {
		return __( 'Process Step', 'medicate' );
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
			'section',
			[
				'label' => __( 'Style', 'medicate' ),
			]
		);

		$this->add_control(
            'process_style',
            [
				'label' => __( 'Process Step Style', 'medicate' ),
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
				],
			]
        );

        $this->end_controls_section();

		$this->start_controls_section(
			'sectionsstep',
			[
				'label' => __( 'Process Step Box', 'medicate' ),
				'condition' => [
					'process_style' => ['1','2','3','5','6','7'],
				]			
			]
		);

        
    $repeater = new Repeater();
		
		$repeater->add_control(
			'title_text',
			[
				'label' => __( 'Title', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( 'This is title', 'medicate' ),
				'placeholder' => __( 'Enter your title', 'medicate' ),
				'label_block' => true,
			]
        );

        $repeater->add_control(
			'sub_title_text',
			[
				'label' => __( 'Sub Title', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( 'This is sub title', 'medicate' ),
				'placeholder' => __( 'Enter your sub title', 'medicate' ),
				'label_block' => true,
			]
        );

       $repeater->add_control(
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
		 $repeater->add_control(
			'image_style_4',
			[
				'label' => __( 'Image1', 'medicate' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],

			]
		);

		$repeater->add_control(
			'icon_class',
			[
				'label' => __( 'Icon', 'medicate' ),
				'type' => Controls_Manager::ICONS,
				'label_block' => true,
				'default' => [
					'value' => 'ion ion-android-arrow-dropright',
					
				],
                'fa4compatibility' => 'icon',
				'separator' => 'before',
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
			'step_number',
			[
				'label' => __( 'Step Number', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( '1', 'medicate' ),
				'placeholder' => __( 'Enter Step Number', 'medicate' ),
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
						'tab_title' => __( 'Lists', 'medicate' ),
					]

				],
				'title_field' => '{{{ title_text }}}',
			]
		);
		
       
		$this->end_controls_section();

		$this->start_controls_section(
			'sectionsstep_four',
			[
				'label' => __( 'Process Step Box', 'medicate' ),
				'condition' => [
					'process_style' => ['4'],
				]				
			]
		);

        
    	$repeater = new Repeater();
		
		$repeater->add_control(
			'title_text_four',
			[
				'label' => __( 'Title', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( 'This is title', 'medicate' ),
				'placeholder' => __( 'Enter your title', 'medicate' ),
				'label_block' => true,
			]
        );

       $repeater->add_control(
			'title_tag_four',
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

		$repeater->add_control(
			'icon_class_four',
			[
				'label' => __( 'Icon', 'medicate' ),
				'type' => Controls_Manager::ICONS,
				'label_block' => true,
				'default' => [
					'value' => 'ion ion-android-arrow-dropright',
					
				],
                'fa4compatibility' => 'icon',
				'separator' => 'before',
			]
		);

		$repeater->add_control(
			'description_text_four',
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
			'step_number_four',
			[
				'label' => __( 'Step Number', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( '1', 'medicate' ),
				'placeholder' => __( 'Enter Step Number', 'medicate' ),
				'label_block' => true,
				
			]
        );
        $repeater->add_control(
			'number_up_down',
			[
				'label' => __( 'Number Position', 'medicate' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'up',
				'options' => [
					'up'  => __( 'Up', 'medicate' ),
					'down'  => __( 'Down', 'medicate' ),
				],				
			]			
		);


        $this->add_control(
			'tabs_four',
			[
				'label' => __( 'List Items', 'medicate' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'tab_title' => __( 'Lists', 'medicate' ),
					]

				],
			]
		);
		
       
		$this->end_controls_section();


		$this->start_controls_section(
			'section__2p08cZ',
			[
				'label' => __( 'Alignment', 'pilelabs' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		 $this->add_responsive_control(
			'content_align_pro',
			[
				'label' => __( 'Alignment', 'pilelabs' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'text-left' => [
						'title' => __( 'Left', 'pilelabs' ),
						'icon' => 'eicon-text-align-left',
					],
					'text-center' => [
						'title' => __( 'Center', 'pilelabs' ),
						'icon' => 'eicon-text-align-center',
					],
					'text-right' => [
						'title' => __( 'Right', 'pilelabs' ),
						'icon' => 'eicon-text-align-right',
					],
					
				],
				
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section__2p78aZ1',
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
				'selector' => '{{WRAPPER}} .pt-process-step .pt-process-title',
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-process-step .pt-process-title' => 'color: {{VALUE}};',

		 		],


			]
		);

		$this->add_control(
			'sub_head_title',
			[
				'label' => __( 'Sub Title', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'process_style' => ['1','2'],
				],
			]
		);

		 $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'sub_title_typography',
				'label' => __( 'Typography', 'medicate' ),
				'selector' => '{{WRAPPER}} .pt-process-step .pt-process-sub-title',
				'condition' => [
					'process_style' => ['1','2'],
				],
			]
		);

		$this->add_control(
			'sub_title_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-process-step .pt-process-sub-title' => 'color: {{VALUE}};',
		 		],
		 		'condition' => [
					'process_style' => ['1','2'],
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
				'selector' => '{{WRAPPER}} .pt-process-step .pt-process-number',
			]
		);

		$this->add_control(
			'num_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-process-step .pt-process-number' => 'color: {{VALUE}};',

		 		],


			]
		);


		$this->add_control(
			'head_des',
			[
				'label' => __( 'Description', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'process_style' => ['2','3','4','6','7'],
				],
			]
		);

		 $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'des_typography',
				'label' => __( 'Typography', 'medicate' ),
				'selector' => '{{WRAPPER}} .pt-process-step p',
				'condition' => [
					'process_style' => ['2','3','4','6','7'],
				],			
			]
		);

		$this->add_control(
			'des_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-process-step p' => 'color: {{VALUE}};',

		 		],
				'condition' => [
					'process_style' => ['2','3','4','6','7'],
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section__2ui6753Z1',
			[
				'label' => __( 'Icon', 'medicate' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'process_style' => ['1','4','5'],
				],
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
			'font_size_5896784387',
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
					'{{WRAPPER}} .pt-process-step .pt-process-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'icon_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-process-step .pt-process-icon i' => 'color: {{VALUE}};',

		 		],


			]
		);

		$this->end_controls_section();

	}
	
	protected function render() {
		$settings = $this->get_settings();
       if($settings['process_style'] == '1')
		{
			require plugin_dir_path( __FILE__ ) . 'style-1.php';
		}
		elseif($settings['process_style'] == '2')
		{
			require plugin_dir_path( __FILE__ ) . 'style-2.php';			
		}
		elseif($settings['process_style'] == '3')
		{
			require plugin_dir_path( __FILE__ ) . 'style-3.php';			
		}		
		elseif($settings['process_style'] == '4')
		{
			require plugin_dir_path( __FILE__ ) . 'style-4.php';			
		}
		elseif($settings['process_style'] == '5')
		{
			require plugin_dir_path( __FILE__ ) . 'style-5.php';			
		}
		elseif($settings['process_style'] == '6')
		{
			require plugin_dir_path( __FILE__ ) . 'style-6.php';			
		}
		elseif($settings['process_style'] == '7')
		{
			require plugin_dir_path( __FILE__ ) . 'style-7.php';			
		}
    }	    
		
}

Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Process_Step() );