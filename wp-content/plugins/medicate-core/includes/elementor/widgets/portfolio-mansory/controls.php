<?php
namespace Elementor;
use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW;
if ( ! defined( 'ABSPATH' ) ) exit;

class Portfolio_Mansory extends Widget_Base {

	public function get_name() {
		return __( 'portfolio-mansory', 'medicate' );
	}

	public function get_title() {
		return __( 'Portfolio Mansory', 'medicate' );
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
		return 'eicon-gallery-masonry';
	}

	protected function register_controls() {
		$this->start_controls_section(
			'section_sliderrdrt',
			[
				'label' => __( 'portfolio', 'medicate' ),
			]
		);
		$this->add_control(
			'show_filter',
			[
				'label' => __( 'Show Filter-bar', 'plugin-domain' ),
				'type' => Controls_Manager::SWITCHER,
				'block' => __( 'Show', 'your-plugin' ),
				'none' => __( 'Hide', 'your-plugin' ),
				'return_value' => 'none',

				'selectors' => [
						'{{WRAPPER}} .pt-filters .filters' => 'display: {{VALUE}};',

					],

			]
		);


		$this->add_control(
			'no_padding',
			[
				'label' => __( 'No Padding', 'plugin-domain' ),
				'type' => Controls_Manager::SWITCHER,
				'no-padding' => __( 'yes', 'your-plugin' ),
				'padding' => __( 'no', 'your-plugin' ),
				'return_value' => 'no-padding',

			]
		);
		$this->add_control('crop_images',
            array(
                'label'        => esc_html__('Crop Images','thegov-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'true'     => esc_html__( 'yes', 'thegov-core' ),
                'false'    => esc_html__( 'no', 'thegov-core' ),
                'return_value' => 'true',

            )
        );

        $this->add_control(
			'hide_load_more',
			[
				'label' => __( 'Hide Load More', 'plugin-domain' ),
				'type' => Controls_Manager::SWITCHER,
				'none' => __( 'yes', 'your-plugin' ),
				'block' => __( 'no', 'your-plugin' ),
				'return_value' => 'none',
				'selectors' => [
						'{{WRAPPER}} .pt-btn-load-container' => 'display: {{VALUE}};',

					],

			]
		);

	$this->add_control(
			'initial_items',
			[
				'label' => __( 'Number Item To Show', 'plugin-domain' ),
				'type' => Controls_Manager::NUMBER,
				'min' => 1,
				'step' => 1,
				'default' => 5,
			]
		);

	$this->add_control(
			'next_items',
			[
				'label' => __( 'Number Of Item To Load', 'plugin-domain' ),
				'type' => Controls_Manager::NUMBER,
				'min' => 1,
				'step' => 1,
				'default' => 5,
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
				],
				'fa4compatibility' => 'icon',
				'separator' => 'before',
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
					'{{WRAPPER}} .pt-portfolio' => 'text-align: {{VALUE}}',
				],
			]
		);
		 $this->end_controls_section();

        //START BUTTON

		 $this->start_controls_section(
		 	'section_Jnza43wt8d8976H5b77duo',
		 	[
		 		'label' => __( 'Loadmore Button', 'medicate' ),
		 	]
		 );

		 $this->add_control(
			'loadmore_text',
			[
				'label' => __( 'Button Text', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( 'Click Here', 'medicate' ),
				'placeholder' => __( 'Enter your title', 'medicate' ),
				'label_block' => true,
			]
        );

		 $this->add_responsive_control(
			'button_text_align',
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
					'{{WRAPPER}} .pt-btn-container' => 'text-align: {{VALUE}};',
				]
			]
        );

		$this->end_controls_section();


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

    // Style tab start
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
				'selector' => '{{WRAPPER}} .pt-masonry  .pt-portfolio-info span',
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-masonry .pt-portfolio-info span' => 'color: {{VALUE}};',

		 		],


			]
		);

		$this->add_control(
			'head_subtitle',
			[
				'label' => __( 'Designation', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'subtitle_typography',
				'label' => __( 'Typography', 'medicate' ),
				'selector' => '{{WRAPPER}} .pt-masonry  .pt-portfolio-info h5',

			]
		);

		$this->add_control(
			'sub_title_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-masonry .pt-portfolio-info h5' => 'color: {{VALUE}};',
		 		],


			]
		);



		$this->add_control(
			'head_filter_title',
			[
				'label' => __( 'Filter Title', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'filtertitle_typography',
				'label' => __( 'Typography', 'medicate' ),
				'selector' => '{{WRAPPER}} .pt-filters .pt-filter-button-group ul li',

			]
		);

		$this->add_control(
			'filter_title_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-filters .pt-filter-button-group ul li' => 'color: {{VALUE}};',
					'{{WRAPPER}} .pt-filters .pt-filter-button-group ul li.active, .pt-filters .pt-filter-button-group ul li.active:hover' => 'color: {{VALUE}};',
		 		],


			]
		);

		$this->add_control(
			'fil_active_title_color',
			[
				'label' => __( 'Active Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-filters .pt-filter-button-group ul li.active, .pt-filters .pt-filter-button-group ul li.active:hover' => 'color: {{VALUE}};',
		 		],


			]
		);

    $this->add_control(
			'bg_filter_color',
			[
				'label' => __( 'Background ', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-filters .pt-filter-button-group ul li.active, .pt-filters .pt-filter-button-group ul li.active:hover' => 'background: {{VALUE}};',
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
					'{{WRAPPER}} .pt-masonry .pt-portfolio-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);


		$this->add_control(
					'icon_color',
					[
						'label' => __( 'Color', 'medicate' ),

						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .pt-masonry .pt-portfolio-icon i' => 'color: {{VALUE}};',
				 		],


					]
				);


		 $this->end_controls_section();

		 // style tab end
	}

	protected function render() {
		$settings = $this->get_settings();
       require plugin_dir_path( __FILE__ ) . 'style-1.php';


         if (Plugin::$instance->editor->is_edit_mode() ) : ?>



		<script>

		jQuery('.pt-masonry').isotope({
          itemSelector: '.pt-masonry-item',
            masonry: {
              columnWidth: '.grid-sizer',
              gutter: 0

            }

      });

      jQuery('.pt-grid').isotope({
          itemSelector: '.pt-grid-item',
      });

       jQuery('.pt-filter-button-group').on( 'click', '.pt-filter-btn', function() {

        var filterValue = jQuery(this).attr('data-filter');
        // console.log(filterValue);
        jQuery('.pt-masonry').isotope({ filter: filterValue });
        jQuery('.pt-grid').isotope({ filter: filterValue });
        jQuery('.pt-filter-button-group .pt-filter-btn').removeClass('active');
        jQuery(this).addClass('active');



        updateFilterCounts();

      });

	var initial_items = 5;
       var next_items = 3;

	if(jQuery('.pt-masonry').length > 0)
		{
			var initial_items = jQuery('.pt-masonry').data('initial_items');
			var next_items = jQuery('.pt-masonry').data('next_items');
		}

		if(jQuery('.pt-grid').length > 0)
		{
			var initial_items = jQuery('.pt-grid').data('initial_items');
			var next_items = jQuery('.pt-grid').data('next_items');
		}


	function showNextItems(pagination) {
		var itemsMax = jQuery('.visible_item').length;
		var itemsCount = 0;
		jQuery('.visible_item').each(function () {
			if (itemsCount < pagination) {
				jQuery(this).removeClass('visible_item');
				itemsCount++;
			}
		});
		if (itemsCount >= itemsMax) {
			jQuery('#showMore').hide();
		}

		if(jQuery('.pt-masonry').length > 0)
		{
			jQuery('.pt-masonry').isotope('layout');
		}

		if(jQuery('.pt-grid').length > 0)
		{
			jQuery('.pt-grid').isotope('layout');
		}



	}
	// function that hides items when page is loaded
	function hideItems(pagination) {
		var itemsMax = jQuery('.pt-filter-items').length;
		// console.log(itemsMax);
		var itemsCount = 0;
		jQuery('.pt-filter-items').each(function () {
			if (itemsCount >= pagination) {
				jQuery(this).addClass('visible_item');
			}
			itemsCount++;
		});
		if (itemsCount < itemsMax || initial_items >= itemsMax) {
			jQuery('#showMore').hide();
		}
		if(jQuery('.pt-masonry').length > 0)
		{
			jQuery('.pt-masonry').isotope('layout');
		}

		if(jQuery('.pt-grid').length > 0)
		{
			jQuery('.pt-grid').isotope('layout');
		}
	}
	jQuery('#showMore').on('click', function (e) {
		e.preventDefault();
		showNextItems(next_items);
	});
	hideItems(initial_items);

	function updateFilterCounts() {
		// get filtered item elements
		if(jQuery('.pt-masonry').length > 0)
		{
			var itemElems = jQuery('.pt-masonry').isotope('getFilteredItemElements');
		}
		if(jQuery('.pt-grid').length > 0)
		{
			var itemElems = jQuery('.pt-grid').isotope('getFilteredItemElements');
		}


		var count_items = jQuery(itemElems).length;
		// console.log(count_items);

		if (count_items > initial_items) {
			jQuery('#showMore').show();
		} else {
			jQuery('#showMore').hide();
		}
		if (jQuery('.pt-filter-items').hasClass('visible_item')) {
			jQuery('.pt-filter-items').removeClass('visible_item');
		}
		var index = 0;

		jQuery(itemElems).each(function () {
			if (index >= initial_items) {
				jQuery(this).addClass('visible_item');
			}
			index++;
		});
		if(jQuery('.pt-masonry').length > 0)
		{
			jQuery('.pt-masonry').isotope('layout');
		}

		if(jQuery('.pt-grid').length > 0)
		{
			jQuery('.pt-grid').isotope('layout');
		}
	}

		</script>

		<?php endif;
    }

}

Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Portfolio_Mansory() );