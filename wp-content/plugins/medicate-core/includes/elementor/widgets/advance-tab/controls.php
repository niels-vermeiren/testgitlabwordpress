<?php
namespace Elementor;

use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW;

if ( ! defined( 'ABSPATH' ) ) exit;
class hostingo_Advance_Tab extends Widget_Base {
	public function get_name() {
		return __( 'hostingo_Advance_Tab', 'medicate' );
	}
	
	public function get_title() {
		return __( 'Advance Section Tab', 'medicate' );
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
    public function pt_get_templates()
    {
         $tabs_array = array();
        $tabs = new \WP_Query(
            array(
                'post_type'      => 'elementor_library',
                'posts_per_page' => '-1',
                'meta_query'     => array_merge(
                    array(
                        'relation' => 'AND',
                    ),
                    array(
                        array(
                            'key'   => '_elementor_template_type',
                            'value' => 'section',
                        ),
                    )
                ),
            )
        );
           
            foreach($tabs->posts as $_post) {
                $tabs_array[$_post->ID] = $_post->post_title;
            }
            return $tabs_array;
    }
	protected function register_controls() {
			$this->start_controls_section(
        'section_categories',
        [
            'label' => __( 'Tabs', 'medicate' ),
        ]
    );
    $repeater = new Repeater();
    $repeater->add_control(
        'tab_title',
        [
            'label'       => __( 'Tab Title', 'medicate' ),
            'type'        => Controls_Manager::TEXT,
            'default'     => __( 'Tab Title', 'medicate' ),
            'label_block' => true,
        ]
    );
    $repeater->add_control(
    'template_id',
        [
        'label' => 'Template',
        'label_block' => true,
        'type' => Controls_Manager::SELECT2,
        'options'   => $this->pt_get_templates(),
        ]
        );
    $this->add_control(
        'tabs',
        [
            'label'       => __( 'Tabs', 'medicate' ),
            'type'        => Controls_Manager::REPEATER,
            'fields'      => $repeater->get_controls(),
            'title_field' => '{{{ tab_title }}}',
        ]
    );
    $this->end_controls_section();
     $this->start_controls_section(
			'sectionfdf_style',
			[
				'label' => __( 'style', 'medicate' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
    $this->add_control(
			'adv_colorsW',
			[
				'label' => __( 'text Color', 'medicate' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-advance-tab .nav-tabs .pt-tabs.nav-link.active' => 'color: {{VALUE}};',
					
				],
			]
		); 
    $this->add_control(
			'active_colorWs',
			[
				'label' => __( 'text Color', 'medicate' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-advance-tab .nav-tabs .pt-tabs.nav-link' => 'color: {{VALUE}};',
					
				],
			]
		);
    $this->add_control(
			'back_active_colorsW',
			[
				'label' => __( 'background active Color', 'medicate' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-advance-tab .nav-tabs .pt-tabs.nav-link.active' => 'background: {{VALUE}};',
					
				],
			]
		);
    $this->add_control(
			'back_ac_colorsW',
			[
				'label' => __( 'background  Color', 'medicate' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-advance-tab .nav-tabs .pt-tabs.nav-link' => 'background: {{VALUE}};',
					
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
Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\hostingo_Advance_Tab() );
