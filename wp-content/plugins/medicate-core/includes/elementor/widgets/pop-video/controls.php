<?php
namespace Elementor;
use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW;
if ( ! defined( 'ABSPATH' ) ) exit;
class Medic_Popup_video extends Widget_Base {
	public function get_name() {
		return __( 'Popup_video', 'medicate' );
	}

	public function get_title() {
		return __( 'Popup video', 'medicate' );
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
		return 'eicon-video-camera';
	}
	protected function register_controls() {

		$this->start_controls_section(
			'section248457',
			[
				'label' => __( 'Style', 'medicate' ),
			]
		);

         $this->add_control(
			'PV_style',
			[
				'label' => __( 'Popup Video Style', 'medicate' ),
				'type' => Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1'  => __( 'Style 1', 'medicate' ),
					'2'  => __( 'Style 2', 'medicate' ),


				],
			]
		);
        $this->end_controls_section();

		$this->start_controls_section(
			'section_video',
			[
				'label' => __( 'Popup_video', 'medicate' ),
			]
		);
		$this->add_control(
			'image_style',
			[
				'label'      => __( 'Choose Image/Icon', 'medicate' ),
				'type'       => Controls_Manager::SELECT,
				'default'    => 'none',
				'options'    => [
					'none'       => __( 'None', 'medicate' ),
					'image'          => __( 'Image', 'medicate' ),
					'icon'          => __( 'Icon', 'medicate' ),

				],
			]
		);
		$this->add_control(
			'image',
			[
				'label' => __( 'Choose Image', 'medicate'),
				'type' => Controls_Manager::MEDIA,
				'dynamic' => [
					'active' => true,
				],

				'condition' => [
					'image_style' => 'image',
				],
			]
		);
		$this->add_control(
			'selected_icon',
			[
				'label' => __( 'Icon', 'medicate' ),
				'type' => Controls_Manager::ICONS,
				'label_block' => true,
				'default' => [
					'value' => 'ion ion-play',

				],
                'fa4compatibility' => 'icon',
				'separator' => 'before',
				'condition' => [
					'image_style' => 'icon',
				]
			]
		);
		$this->add_control(
			'video_type',
			[
				'label' => __( 'Source', 'medicate' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'video_link',
				'options' => [
					'video_link' => __( 'Link', 'medicate' ),
					'hosted' => __( 'Self Hosted', 'medicate' ),
				],
			]
		);
		$this->add_control(
			'self_url',
			[
				'label' => __( 'Choose File', 'medicate' ),
				'type' => Controls_Manager::MEDIA,

				'media_type' => 'video',
				'condition' => [
					'video_type' => 'hosted',
				],
			]
		);
		$this->add_control(
			'link_url',
			[
				'label' => __( 'Link', 'medicate' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your URL', 'medicate' ),
				'default' => 'https://www.youtube.com/watch?v=XHOmBV4js_E',
				'label_block' => true,
				'condition' => [
					'video_type' => 'video_link',
				],
			]
		);
		$this->add_control(
			'colour_elements',
			[
				'label' => __( 'Show Elements', 'medicate' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'multiple' => false,
				'options' => [
					'default'  => __( 'default', 'medicate' ),
					'primary' => __( 'primary', 'medicate' ),
				],
			]
		);
		$this->add_control(
			'img',
			[
				'label' => __( 'Choose Image', 'medicate'),
				'type' => Controls_Manager::MEDIA,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'PV_style' => ['1']
				]
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

			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'section__289656',
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

		$this->add_responsive_control(
			'font_size_5789054287',
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
					'{{WRAPPER}} .pt-popup-video-block .pt-video-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);


		 $this->add_control(
			'icon_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-popup-video-block .pt-video-icon i' => 'color: {{VALUE}};',
		 		],


			]
		);

        $this->end_controls_section();        

        $this->start_controls_section(
			'section__2896ser56',
			[
				'label' => __( 'Background', 'medicate' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'head_background',
			[
				'label' => __( 'Background', 'medicate' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		  );

		 $this->add_control(
			'background_color',
			[
				'label' => __( 'Color', 'medicate' ),

				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pt-popup-video-block .pt-video-icon a' => 'background: {{VALUE}};',
		 		],


			]
		);

        $this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings();
        if($settings['PV_style'] == '1')
		{
			require plugin_dir_path( __FILE__ ) . 'style-1.php';
		}
		else if($settings['PV_style'] == '2')
		{
			require plugin_dir_path( __FILE__ ) . 'style-2.php';
		}

         if ( Plugin::$instance->editor->is_edit_mode() ) : ?>
		<script>
		 jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps, .button-play').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        preloader: true,
    });
		</script>

		<?php endif;
    }

}
Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Medic_Popup_video() );