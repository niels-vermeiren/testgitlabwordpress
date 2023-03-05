<?php
namespace Elementor;
use Medicate\Elementor_widgets\Medic_Elementor_Init as SCEW;
if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * Elementor Blog widget.
 *
 * Elementor widget that displays an eye-catching headlines.
 *
 * @since 1.0.0
 */
class woo_Pt_PRoduct_Grid extends Widget_Base {
	/**
	 * Get widget name.
	 *
	 * Retrieve heading widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return __( 'woo_ft_Product_grid', 'medicate' );
	}
	/**
	 * Get widget title.
	 *
	 * Retrieve heading widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Woccommerece Product Grid', 'medicate' );
	}
	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the heading widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * @since 2.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ SCEW::get_woo_category() ];
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
		return 'eicon-slider-push';
	}
	/**
	 * Register heading widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {
		$this->start_controls_section(
			'section_blog',
			[
				'label' => __( 'Product Grid', 'medicate' ),
			]
		);
		$this->add_control(
			'pt_product_type',
			[
				'label'      => __( 'Select Product', 'medicate' ),
				'type'       => Controls_Manager::SELECT,
				'default'    => 'products',
				'options'    => [
					'featured_products' => __( 'Feature Product', 'medicate' ),
					'recent_products' => __( 'Recent Product', 'medicate' ),
					'sale_products'   => __( 'Sale Product', 'medicate' ),
					'best_selling_products' => __( 'Best Selling Product', 'medicate' ),
					'top_rated_products'    => __( 'Top Rated Product', 'medicate' ),
					'products'          => __( 'All Products', 'medicate' ),
				],
			]
		);
        $this->add_control(
			'pt_woo_column',
			[
				'label'      => __( 'Column', 'medicate' ),
				'type'       => Controls_Manager::SELECT,
				'options'    => [
					'1'          => __( '1 Columns', 'medicate' ),
					'2'          => __( '2 Columns', 'medicate' ),
					'3'          => __( '3 Columns', 'medicate' ),
					'4'          => __( '4 Columns', 'medicate' ),
					'5'          => __( '5 Columns', 'medicate' ),
					'6'          => __( '6 Columns', 'medicate' ),
				],
				'default'    => '1',
			]
		);
		$this->add_control(
			'pt_pt_woo_order_by',
			[
				'label'   => __( 'Order By', 'medicate' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'rand',
				'options' => [
						'none' => esc_html__('None', 'medicate'),
						'rand' => esc_html__('Random', 'medicate'),
						'date' => esc_html__('Date', 'medicate'),
						'menu_order' => esc_html__('Menu Order', 'medicate'),
						'popularity' => esc_html__('Popularity', 'medicate'),
						'rating' => esc_html__('Rating', 'medicate'),
						'title' => esc_html__('Title', 'medicate'),
				],
			]
		);
		$this->add_control(
			'pt_woo_order',
			[
				'label'   => __( 'Order', 'medicate' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'ASC',
				'options' => [
						'DESC' => esc_html__('Descending', 'medicate'),
						'ASC' => esc_html__('Ascending', 'medicate')
				],
			]
		);
		$this->add_control(
			'pt_woo_per_page',
			[
				'label' => __( 'Per Page', 'medicate' ),
				'type' => Controls_Manager::NUMBER,
				'min' => 1,
				'step' => 1,
				'default' => 10,
			]
		);
		$this->add_control(
			'pt_show_pagination',
			[
				'label' => __( 'Show Pagination', 'medicate' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'medicate' ),
				'label_off' => __( 'Hide', 'medicate' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$array = [];
		$categories = pt_woo_get_category();
		if ( ! empty( $categories ) ) {
  			foreach ( $categories as $cat ) {
    			$array[$cat->slug] = $cat->slug;
  			}
		}
		$this->add_control(
			'pt_woo_category',
			[
				'label' => __( 'Display Product From Specific Categoy', 'medicate' ),
				'type' => Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple' => true,
				'options' => $array,
			]
		);
		$this->add_control(
			'pt_cat_operator',
			[
				'label'   => __( 'Categoy Operator', 'medicate' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'IN',
				'options' => [
						'AND' => esc_html__('AND', 'medicate'),
						'IN' => esc_html__('IN', 'medicate'),
						'NOT IN' => esc_html__('NOT IN', 'medicate'),
				],
			]
		);
		$this->add_control(
			'pt_woo_tag',
			[
				'label' => __( 'Display Product From Specific Tag', 'medicate' ),
				'type' => Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple' => true,
				'options' => pt_woo_product_tags(),
			]
		);
		$this->add_control(
			'pt_tag_operator',
			[
				'label'   => __( 'Tag Operator', 'medicate' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'IN',
				'options' => [
						'AND' => esc_html__('AND', 'medicate'),
						'IN' => esc_html__('IN', 'medicate'),
						'NOT IN' => esc_html__('NOT IN', 'medicate'),
				],
			]
		);
        $this->end_controls_section();
	}
	/**
	 * Render Blog widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

		require plugin_dir_path( __FILE__ ) . '/render.php';
		if ( Plugin::$instance->editor->is_edit_mode() ) :
		?>
		<?php endif;
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\woo_Pt_PRoduct_Grid() );
