<?php
namespace Elementor;

use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW;

if ( ! defined( 'ABSPATH' ) ) exit;
class before_after extends Widget_Base {
	public function get_name() {
		return __('before_after', 'medicate');
	}
	public function get_title() {
		return __('before after', 'medicate');
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
		return 'eicon-image-before-after';
	}
	protected function register_controls() {
		$this->start_controls_section(
			'section',
			[
				'label' => __( 'Style', 'medicate' ),
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
			]
		);
		$this->add_control(
			'image1',
			[
				'label' => __( 'Choose Image', 'medicate'),
				'type' => Controls_Manager::MEDIA,
				'dynamic' => [
					'active' => true,
				],
			]
		);
        $this->end_controls_section();
	
	}
	protected function render() {
		$settings = $this->get_settings();
		
		require plugin_dir_path( __FILE__ ) . 'style-1.php';
		
		 if ( Plugin::$instance->editor->is_edit_mode() ) : 
        ?>
        	<script type="text/javascript">
        	
                 jQuery.fn.BeerSlider = function ( options ) {
            options = options || {};
            return this.each(function() {
                new BeerSlider(this, options);
            });
        };
        jQuery('.beer-slider').BeerSlider({start: 50});
        	</script>
        <?php 
    	endif;
	}
}
Plugin::instance()->widgets_manager->register_widget_type(new \Elementor\before_after());