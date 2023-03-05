<?php
namespace Elementor;
use Medicate\Elementor_widgets\Custom_Post_Data;
if ( ! defined( 'ABSPATH' ) ) exit;
class Button_Controls
{
	public function get_btn_controls($obj)
	{
		$custom_post  = new Custom_Post_Data();
		$obj->add_control(
			'button_text',
			[
				'label' => __( 'Button Text', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( 'Read More', 'medicate' ),
				'placeholder' => __( 'Enter your title', 'medicate' ),
				'label_block' => true,
			]
        );

        $obj->add_control(
			'btn_link',
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


        $obj->add_responsive_control(
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

		$obj->end_controls_section();


		// Button Style Section
		$obj->start_controls_section(
			'section_y8ubBfbAH1e2VypN5be9',
			[
				'label' => __( 'Button Style', 'medicate' ),
				'tab' => Controls_Manager::TAB_STYLE,

			]
		);
		$obj->add_control(
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



		$obj->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'label' => __( 'Typography', 'medicate' ),

				'selector' => '{{WRAPPER}} .pt-button span.pt-button-text',
			]
		);
		$obj->start_controls_tabs( 'tabs_button_style' );
		$obj->start_controls_tab(
			'tab_button_normal',
			[
				'label' => __( 'Normal', 'elementor' ),
			]
		);
		$obj->add_control(
			'button_text_color',
			[
				'label' => __( 'Text Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .pt-button span.pt-button-text , {{WRAPPER}} .pt-button i' => 'color: {{VALUE}};',
				],
			]
		);

		$obj->add_control(
			'background_color',
			[
				'label' => __( 'Background Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-btn-container .pt-button' => 'background: {{VALUE}};',
				],
			]
		);


		$obj->end_controls_tab();
		$obj->start_controls_tab(
			'tab_button_hover',
			[
				'label' => __( 'Hover', 'elementor' ),
			]
		);
		$obj->add_control(
			'hover_color',
			[
				'label' => __( 'Text Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-button:hover span.pt-button-text , {{WRAPPER}} .pt-button:hover i' => 'color: {{VALUE}};',
				],
			]
		);

		$obj->add_control(
			'button_background_hover_color',
			[
				'label' => __( 'Background Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-button:hover' => 'background-color: {{VALUE}};',
				],
			]
		);



		$obj->end_controls_tab();

		$obj->start_controls_tab(
			'tab_button_icon',
			[
				'label' => __( 'icon', 'elementor' ),
			]
		);

		$obj->add_responsive_control(
			'font_size_512t8387',
				[
					'label' => __( 'Icon Size', 'elementor' ),
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
						'{{WRAPPER}} .pt-button i' => 'font-size: {{SIZE}}{{UNIT}};',
					],
				]
		);
		$obj->end_controls_tab();
		$obj->end_controls_tabs();
		$obj->end_controls_section();
	}



//slider button

	public function get_slider_btn_controls($obj)
	{
		$custom_post  = new Custom_Post_Data();

        $obj->add_control(
			'button_text',
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

        $obj->add_responsive_control(
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

		$obj->end_controls_section();


		// Button Style Section
		$obj->start_controls_section(
			'section_y8ubBf7AH1e2VwpN5be9',
			[
				'label' => __( 'Button Style', 'medicate' ),
				'tab' => Controls_Manager::TAB_STYLE,

			]
		);
		$obj->add_control(
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



		$obj->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'label' => __( 'Typography', 'medicate' ),

				'selector' => '{{WRAPPER}} .pt-button span.text',
			]
		);
		$obj->start_controls_tabs( 'tabs_button_style' );
		$obj->start_controls_tab(
			'tab_button_normal',
			[
				'label' => __( 'Normal', 'elementor' ),
			]
		);
		$obj->add_control(
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

		$obj->add_control(
			'background_color',
			[
				'label' => __( 'Background Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-btn-container .pt-button' => 'background: {{VALUE}};',
				],
			]
		);


		$obj->end_controls_tab();
		$obj->start_controls_tab(
			'tab_button_hover',
			[
				'label' => __( 'Hover', 'elementor' ),
			]
		);
		$obj->add_control(
			'hover_color',
			[
				'label' => __( 'Text Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-button:hover span.text , {{WRAPPER}} .pt-button:hover i' => 'color: {{VALUE}};',
				],
			]
		);

		$obj->add_control(
			'button_background_hover_color',
			[
				'label' => __( 'Background Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-button:hover' => 'background-color: {{VALUE}};',
				],
			]
		);



		$obj->end_controls_tab();
		$obj->start_controls_tab(
			'tab_button_icon',
			[
				'label' => __( 'icon', 'elementor' ),
			]
		);

		$obj->add_responsive_control(
		'font_size_512t8387',
			[
				'label' => __( 'Icon Size', 'elementor' ),
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
					'{{WRAPPER}} .pt-button i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);


		$obj->end_controls_tab();
		$obj->end_controls_tabs();
		$obj->end_controls_section();
	}

}
