<?php
namespace Elementor;
use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW;
if (!defined('ABSPATH')) {
	exit;
}

class Counter extends Widget_Base {

	public function get_name() {
		return __('counters', 'medicate');
	}

	public function get_title() {
		return __('Counters', 'medicate');
	}

	public function get_categories() {
		return [ SCEW::get_category() ];
    }

	/**
	 * Get widget icon.
	 *
	 * Retrieve button widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-counter';
	}

	// public function __construct( $data = array(), $args = null ) {
	// 	parent::__construct( $data, $args );
	// 	// vendor files
	// 	wp_enqueue_script('Counto',  MEDICATE_CORE_ASSETS_URL .'/js/vendor/jquery.countTo.min.js', array('jquery'),'2.0', true);


	// 	// custom files
	// 	wp_register_style( 'count-style-1-css', plugin_dir_url( __FILE__ )  . '/css/style-1.css', array(), '1.0.0' );

	// 	wp_register_script( 'count-style-1-js',  plugin_dir_url( __FILE__ )  . 'js/style-1.js',array('Counto'),'2.0', true );
	// }
	// public function get_style_depends() {
	// 	return ['count-style-1-css'];
	// }
	//    public function get_script_depends() {
	// return [ 'Counto','count-style-1-js'];
	// }

	protected function register_controls() {
      $this->start_controls_section(
			'sectiocounters',
			[
				'label' => __( 'Style', 'medicate' ),
			]
		);
		$this->add_control(
			'counter_style',
			[
				'label' => __( 'Counter Style', 'medicate' ),
				'type' => Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1'  => __( 'Style 1', 'medicate' ),
					'2'  => __( 'Style 2', 'medicate' ),
					'3'  => __( 'Style 3', 'medicate' ),
				],
			]
		);


        $this->end_controls_section();

		$this->start_controls_section(
			'sectionwrvvw',
			[
				'label' => __('Counter', 'medicate'),
			]
		);

		$this->add_control(
			'selected_icon',
			[
				'label' => __( 'Icon', 'medicate' ),
				'type' => Controls_Manager::ICONS,
				'label_block' => true,
				'default' => ['value' => 'ion ion-play',
					],
                'fa4compatibility' => 'icon',
				'separator' => 'before',
				'condition' => [
					'counter_style' => '1',
				]

			]
		);

		$this->add_control(
			'title_number',
			[
				'label' => __('Number', 'medicate'),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __('59', 'medicate'),
				'placeholder' => __('Enter your Number', 'medicate'),
				'label_block' => true,
			]
		);

		 $this->add_control(
			'show_prefix',
			[
				'label' => __( 'Show Prefix', 'medicate' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'medicate' ),
				'label_off' => __( 'Hide', 'medicate' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'counter_prefix',
			[
				'label' => __('Counter Prefix', 'medicate'),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __('+', 'medicate'),
				'placeholder' => __('Enter Prefix', 'medicate'),
				'label_block' => true,
				'condition' => ['show_prefix' => 'yes']
			]
		);


		$this->add_control(
			'description',
			[
				'label' => __( 'Description', 'medicate' ),
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( 'amazing projects done' ),
				'placeholder' => __( 'Enter your description', 'medicate' ),
				'separator' => 'none',
				'rows' => 10,
				'show_label' => false,

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
					'{{WRAPPER}} .pt-counter' => 'text-align: {{VALUE}};',
				]
			]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'section__2p08cZ1',
			[
				'label' => __( 'Content', 'medicate' ),
				'tab' => Controls_Manager::TAB_STYLE,
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
				'name' => 'title_typography',
				'label' => __( 'Typography', 'medicate' ),
				'selector' => '{{WRAPPER}}  .pt-counter .pt-counter-info .pt-counter-num-prefix .timer',
			]
		);

            $this->add_control(
			'title_num',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-counter .pt-counter-info .pt-counter-num-prefix .timer' => 'color: {{VALUE}};',
		 		],


			]
		);

         $this->add_control(
			'head_prex',
			[
				'label' => __( 'Prefix', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

         $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'prefix_typography',
				'label' => __( 'Typography', 'medicate' ),
				'selector' => '{{WRAPPER}}  .pt-counter .pt-counter-info .pt-counter-num-prefix .pt-counter-prefix',
			]
		);


             $this->add_control(
			'prefixnum',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-counter .pt-counter-info .pt-counter-num-prefix .pt-counter-prefix' => 'color: {{VALUE}};',
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
				'selector' => '{{WRAPPER}} .pt-counter .pt-counter-info .pt-counter-description',
			]
		);

		$this->add_control(
			'desc_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-counter .pt-counter-info .pt-counter-description ' => 'color: {{VALUE}};',
		 		],


			]
		);


		 $this->end_controls_section();

		 $this->start_controls_section(
			'section__2p08Zt',
			[
				'label' => __( 'Icon', 'medicate' ),
				'tab' => Controls_Manager::TAB_STYLE,
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
					'{{WRAPPER}}  .pt-counter .pt-counter-media i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		  $this->add_control(
			'icon',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-counter .pt-counter-media i' => 'color: {{VALUE}};',
		 		],


			]
		);

		  $this->end_controls_section();


	}

	protected function render() {
	   $settings = $this->get_settings();
	   if($settings['counter_style'] == '1')
	   {	   	
       		require plugin_dir_path( __FILE__ ) . 'style-1.php';
	   }
	   else if ($settings['counter_style'] == '2')
	   {
       		require plugin_dir_path( __FILE__ ) . 'style-2.php';	   	
	   }
	   else if ($settings['counter_style'] == '3')
	   {
       		require plugin_dir_path( __FILE__ ) . 'style-3.php';	   	
	   }

		if (Plugin::$instance->editor->is_edit_mode()): ?>

		<script>
			 jQuery('.timer').countTo();
		</script>

		<?php endif;
	}

}

Plugin::instance()->widgets_manager->register_widget_type(new \Elementor\Counter());