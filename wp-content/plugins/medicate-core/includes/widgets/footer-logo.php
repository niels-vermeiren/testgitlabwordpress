<?php
function medicate_footer_logo() {
    register_widget( 'Pt_Footer_Logo' );
}
add_action( 'widgets_init', 'medicate_footer_logo' );

/*-------------------------------------------
		medicate Contact Information widget
--------------------------------------------*/
class Pt_Footer_Logo extends WP_Widget {

	function __construct() {
		parent::__construct(

			// Base ID of your widget
			'Pt_Footer_Logo',

			// Widget name will appear in UI
			esc_html('Footer Logo', 'medicate'),

			// Widget description
			array( 'description' => esc_html( 'Footer Logo. ', 'medicate' ), )
		);
	}

	// Creating widget front-end

	public function widget( $args, $instance ) {

		global $wp_registered_sidebars;
		$pqf_options = get_option('pqf_options');




        if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : false;

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

		$footer_about = isset( $instance['footer_about'] ) ? $instance['footer_about'] : false;


		if(!empty($pqf_options['logo_footer']['url']))
		{
			$logo = $pqf_options['logo_footer']['url'];
		}

		/* here add extra display item  */
		?>
		<div class="widget">
			<?php if ( $title ) {
				 // echo ($args['before_title'] . $title . $args['after_title']);
			} ?>
					<?php
					if(isset($logo))
					{?> 
					<img src="<?php echo esc_url($logo) ?>" class="pt-footer-logo" alt="<?php esc_attr_e('medicate-footer-logo','medicate'); ?>">
					<?php
					}
					if($footer_about)
					{
					?>
					<p><?php echo esc_html($footer_about); ?></p>

				<?php } ?>

				<div class="pt-footer-social">


                        <ul>
                     <?php
                     if(isset($pqf_options['social']))
                     {
                     foreach ($pqf_options['social'] as $key => $value) {
                     if(!empty($value))
                     {
                     ?>
                     <li><a href="<?php echo esc_url($value); ?>"><i class="fab <?php echo esc_attr($key); ?>"></i></a></li>

                  <?php } } }?>
                  <li><a href="https://wa.me/32485004270?text=" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                  </ul>

                  

				</div>

			</div>
<div>
                  <a class="pt-button pt-button-flat customize-unpreviewable" href="/contact/?doel=Vraag%20stellen#contacteer-ons">
          <div class="pt-button-block">
          <span class="pt-button-text">Laat van u horen</span>
            <i class="ion ion-plus-round"></i>
          </div>
        </a></div>
	<?php
	}

	// Widget Backend
	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';

		$footer_about = isset( $instance['footer_about'] ) ? esc_html($instance['footer_about'])  : false;
		?>

		<p><label for="<?php echo esc_html($this->get_field_id( 'title','medicate' )); ?>"><?php esc_html_e( 'Title:','medicate' ); ?></label>
		<input class="widefat" id="<?php echo esc_html($this->get_field_id( 'title','medicate' )); ?>" name="<?php echo esc_html($this->get_field_name( 'title','medicate')); ?>" type="text" value="<?php echo esc_html($title,'medicate'); ?>" /></p>

		<p>
			<textarea class="widefat" id="<?php echo esc_html($this->get_field_id( 'footer_about','medicate' )); ?>" name="<?php echo esc_html($this->get_field_name( 'footer_about','medicate')); ?>" placeholder="<?php esc_attr__('Enter description text here' , 'medicate') ?>"><?php echo esc_html($footer_about); ?></textarea>
		</p>

		<?php
	}

	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['footer_about'] = sanitize_text_field( $new_instance['footer_about'] );

        return $instance;
	}
}
/*---------------------------------------
		Class wpb_widget ends here
----------------------------------------*/
