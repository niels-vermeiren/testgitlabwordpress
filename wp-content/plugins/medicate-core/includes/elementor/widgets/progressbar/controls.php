<?php
namespace Elementor;
use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW; 
if ( ! defined( 'ABSPATH' ) ) exit; 

class Lab_Progressbar extends Widget_Base {

	public function get_name() {
		return __( 'lab_progressbar', 'medicate' );
	}
	
	public function get_title() {
		return __( 'Progressbar', 'medicate' );
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
		return 'eicon-skill-bar';
	}

	

	protected function register_controls() {
		$this->start_controls_section(
			'section_hiadk',
			[
				'label' => __( 'Style', 'medicate' ),
			]
		);
		$this->add_control(
			'Progressbar_style',
			[
				'label' => __( 'Progressbar Style', 'medicate' ),
				'type' => Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1'  => __( 'Style 1', 'medicate' ),
					// '2'  => __( 'Style 2', 'medicate' ),

				],
			]
		);

        
        $this->end_controls_section();
		$this->start_controls_section(
			'section55645',
			[
				'label' => __( 'Progressbar', 'medicate' ),
			]
		);       
        
        $repeater = new Repeater();
        $repeater->add_control(
			'section_title',
			[
				'label' => __( 'Title', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'default' => __( 'Add Your Title Text Here', 'medicate' ),
			]
		);	

		$repeater->add_control(
			'tab_score',
			[
				'label' => __( 'Score out of 100', 'medicate' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => '%',
					'size' => 50,
				],
				
			]
		);
		 $this->add_control(
			'progress_bar',
			[
				'label' => __( 'Add Progress Bar', 'medicate' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'section_title' => __( 'List Items', 'medicate' ),
						'tab_score'=>__( '50', 'medicate' ),
                        
					]
					
				],
				'title_field' => '{{{ section_title }}}',
				'figure_field' => '{{{ tab_score }}}',
			]
        );
		  $this->add_control(
			'data_height',
			[
				'label' => __( 'height', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		

		 $this->end_controls_section();

		$this->start_controls_section(
			'section_progress_style',
			[
				'label' => __( 'Content', 'medicate' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'head_pbc',
			[
				'label' => __( 'Progress Bar', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'progres_color',
			[
				'label' => __( 'Background bar Color', 'medicate' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [					
					'{{WRAPPER}} .pt-progressbar-box .pt-progressbar-content .pt-progress-bar span' => 'background-color: {{VALUE}} !important;',
					
				],
			]
		);

		$this->add_control(
			'progress_back_color',
			[
				'label' => __( 'Background Color', 'medicate' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [					
					'{{WRAPPER}} .pt-progressbar-style-1 .pt-progress-bar' => 'background: {{VALUE}} !important;',
					
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
				'name' => 'title_text_typography',
				'label' => __( 'Typography', 'medicate' ),				
				'selector' => '{{WRAPPER}} .pt-progressbar-box .progress-title',
			]
		);
		

		$this->add_control(
			'title_color',
			[
				'label' => __( 'Color', 'medicate' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-progressbar-box .progress-title' => 'color: {{VALUE}};',
					
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
				'name' => 'number_text_typography',
				'label' => __( 'Typography', 'medicate' ),				
				'selector' => '{{WRAPPER}} .pt-progressbar-box .progress-value',
			]
		);

		$this->add_control(
			'number_color',
			[
				'label' => __( 'Color', 'medicate' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-progressbar-box .progress-value' => 'color: {{VALUE}};'
					
					
				],
			]
		);

		$this->add_control(
			'head_border_type',
			[
				'label' => __( 'Border', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
	
        $this->add_responsive_control(
			'progressbar_height',
			[
				'label' => __( 'Height', 'medicate' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .pt-progressbar-box .pt-progressbar-content .pt-progress-bar span' => 'height: {{SIZE}}{{UNIT}};line-height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		 $this->add_responsive_control(
			'progressbar_border_radius',
			[
				'label' => __( 'Border Radius', 'medicate' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .pt-progress-bar' => 'border-radius: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
        $this->end_controls_section();

	}
	
	protected function render() {
		$settings = $this->get_settings();

     	require plugin_dir_path( __FILE__ ) . 'style-1.php';
	
        if ( ! Plugin::$instance->editor->is_edit_mode() ) {
			
			?>
	
			<script>	
						 /*------------------------
                Progress Bar
                --------------------------*/
                 jQuery('.pt-progress-bar > span').each(function() {
                    
                    var progress_bar = jQuery(this);
                    var width = jQuery(this).data('percent');
                    progress_bar.css({
                        'transition': 'width 2s'
                    });
                    jQuery('.progress-value').css({'transition': 'margin 2s'});

                    setTimeout(function() {
                        jQuery(this).show(function() {
                            progress_bar.css('width', width + '%');
                        });
                    }, 500);

                    setTimeout(function() {
                        jQuery('.pt-progressbar-style-2 .progress-value').show(function() {
                            jQuery('.pt-progressbar-style-2 .progress-value').css('margin-left', width + 'px');
                        });
                    }, 500);

                    setTimeout(function() {
                        jQuery('.pt-progressbar-style-3 .progress-tooltip').show(function() {
                            jQuery('.pt-progressbar-style-3 .progress-tooltip').css('margin-left', width + 'px');
                        });
                    }, 500);
                });
			</script>

		<?php 
		}
    }	    
		
}

Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Lab_Progressbar() );