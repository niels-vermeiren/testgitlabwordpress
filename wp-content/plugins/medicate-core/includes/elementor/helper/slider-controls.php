<?php
namespace Elementor;
Class Slider_Controls
{
	public  function slider_control($obj)
	{
		$obj->add_control(
			'desk_num',
			[
				'label' => __( 'Desktop number', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( '3', 'medicate' ),
				'separator' => 'before',

			]
		);
		$obj->add_control(
			'lap_num',
			[
				'label' => __( 'Laptop number', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( '3', 'medicate' ),
				'separator' => 'before',

			]
		);
		$obj->add_control(
			'tab_num',
			[
				'label' => __( 'Tablet number', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( '2', 'medicate' ),
				'separator' => 'before',

			]
		);
		$obj->add_control(
			'mob_num',
			[
				'label' => __( 'Mobile number', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( '1', 'medicate' ),
				'separator' => 'before',

			]
		);
		$obj->add_control(
			'autoplay',
			[
				'label'      => __( 'Autoplay', 'medicate' ),
				'type'       => Controls_Manager::SELECT,
				'default'    => 'false',
				'options'    => [
					'true'       => __( 'True', 'medicate' ),
					'false'          => __( 'False', 'medicate' ),

				],

			]
		);
		$obj->add_control(
			'loop',
			[
				'label'      => __( 'Loop', 'medicate' ),
				'type'       => Controls_Manager::SELECT,
				'default'    => 'false',
				'options'    => [
					'true'       => __( 'True', 'medicate' ),
					'false'          => __( 'False', 'medicate' ),

				],

			]
		);
		$obj->add_control(
			'nav_arrow',
			[
				'label'      => __( 'Navigation Arrow', 'medicate' ),
				'type'       => Controls_Manager::SELECT,
				'default'    => 'true',
				'options'    => [
					'true'       => __( 'True', 'medicate' ),
					'false'          => __( 'False', 'medicate' ),

				],

			]
		);
		$obj->add_control(
			'dots',
			[
				'label'      => __( 'Dots', 'medicate' ),
				'type'       => Controls_Manager::SELECT,
				'default'    => 'true',
				'options'    => [
					'true'       => __( 'True', 'medicate' ),
					'false'          => __( 'False', 'medicate' ),

				],

			]
		);
		$obj->add_responsive_control(
			'margin',
			[
				'label' => __( 'Space', 'elementor' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 30,
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],


			]
		);

	}

	public function slider_style($obj)
	{
		$obj->add_control(
			'head_dot',
			[
				'label' => __( 'Owl dot', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$obj->add_control(
			'owldotact_color',
			[
				'label' => __( 'Active Color', 'medicate' ),
				
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .owl-carousel .owl-dots .owl-dot.active' => 'background: {{VALUE}};',
		 		],	
			]
		);

		$obj->add_control(
			'owldot_color',
			[
				'label' => __( 'Inactive Color', 'medicate' ),
				
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .owl-carousel .owl-dots .owl-dot' => 'background: {{VALUE}};',
		 		],
				
				
			]
		); 

		$obj->add_control(
			'owldot_hover',
			[
				'label' => __( 'Hover Color', 'medicate' ),
				
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .owl-carousel .owl-dots .owl-dot:hover' => 'background: {{VALUE}};',
		 		],		
			]
		);  
	}

	public function add_render_attribute($obj , $settings = array())
	{
	  $obj->add_render_attribute('slider', 'data-dots', $settings['dots']);
	  $obj->add_render_attribute('slider', 'data-nav', $settings['nav_arrow']);
	  $obj->add_render_attribute('slider', 'data-desk_num', $settings['desk_num']);
	  $obj->add_render_attribute('slider', 'data-lap_num', $settings['lap_num']);
	  $obj->add_render_attribute('slider', 'data-tab_num', $settings['tab_num']);
	  $obj->add_render_attribute('slider', 'data-mob_num', $settings['mob_num']);
	  $obj->add_render_attribute('slider', 'data-mob_sm', $settings['mob_num']);
	  $obj->add_render_attribute('slider', 'data-autoplay', $settings['autoplay']);
	  $obj->add_render_attribute('slider', 'data-loop', $settings['loop']);
	  $obj->add_render_attribute('slider', 'data-margin', $settings['margin']['size']);
	}

	public function load_owl_js()
	{
		?>
		<script type="text/javascript">
			jQuery('.owl-carousel').each(function() {
                var app_slider = jQuery(this);
                var rtl = false;
                var prev = 'fas fa-angle-left';
                var next = 'fas fa-angle-right';
                var prev_text = 'Prev';
                var next_text = 'Next';
                if (jQuery('body').hasClass('gt-is-rtl')) {
                    rtl = true;
                    prev = 'fas fa-angle-right';
                    next = 'fas fa-angle-left';
                }
                if (app_slider.data('prev_text') && app_slider.data('prev_text') != '') {
                    prev_text = app_slider.data('prev_text');
                }
                if (app_slider.data('next_text') && app_slider.data('next_text') != '') {
                    next_text = app_slider.data('next_text');
                }
                app_slider.owlCarousel({
                    rtl: rtl,
                    items: app_slider.data("desk_num"),
                    loop: app_slider.data("loop"),
                    margin: app_slider.data("margin"),
                    nav: app_slider.data("nav"),
                    dots: app_slider.data("dots"),
                    loop: app_slider.data("loop"),
                    autoplay: app_slider.data("autoplay"),
                    autoplayTimeout: app_slider.data("autoplay-timeout"),
                    navText: ["<i class='" + prev + "'></i>", "<i class='" + next + "'></i>"],
                    responsiveClass: true,
                    responsive: {
                        // breakpoint from 0 up
                        0: {
                            items: app_slider.data("mob_sm"),
                            nav: false,
                            dots: true
                        },
                        // breakpoint from 480 up
                        480: {
                            items: app_slider.data("mob_num"),
                            nav: false,
                            dots: true
                        },
                        // breakpoint from 786 up
                        786: {
                            items: app_slider.data("tab_num")
                        },
                        // breakpoint from 1023 up
                        1023: {
                            items: app_slider.data("lap_num")
                        },
                        1199: {
                            items: app_slider.data("desk_num")
                        }
                    }
                });
            });
		</script>
		<?php
	}
}



