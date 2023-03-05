<?php
function medicate_contact_info() {
	register_widget( 'Pt_Contact' );
}
add_action( 'widgets_init', 'medicate_contact_info' );
/*-------------------------------------------
		medicate Contact Information widget
		--------------------------------------------*/
		class Pt_Contact extends WP_Widget {

			function __construct() {
				//add_action('admin_enqueue_scripts', array($this, 'scripts'));
				parent::__construct(

			// Base ID of your widget
					'Pt_Contact',

			// Widget name will appear in UI
					esc_html('medicate Contact', 'medicate'),

			// Widget description
					array( 'description' => esc_html( 'medicate Contact. ', 'medicate' ), )
				);
			}

	// Creating widget front-end
			public function widget( $args, $instance ) {
				global $wp_registered_sidebars;


				if ( ! isset( $args['widget_id'] ) ) {
					$args['widget_id'] = $this->id;
				}
				$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : false;
				/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
				$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
				$phone = isset( $instance['phone'] ) ? $instance['phone'] : false;
				$email = isset( $instance['email'] ) ? $instance['email'] : false;
				$email1 = isset( $instance['email1'] ) ? $instance['email1'] : false;
				$address = isset( $instance['address'] ) ? $instance['address'] : false;
				$text = isset( $instance['text'] ) ? $instance['text'] : false;


				$pqf_options = get_option('pqf_options');

				?>
				<div class="widget widget-port-1">
					<?php if ( $title ) {
						echo ($args['before_title'] . $title . $args['after_title']);
					}
					?>
					<div class="row">
						<div class="col-sm-12">
							<ul class="pt-contact">

								<?php if ( $text ) :
									?>
									<?php

									if(!empty($pqf_options['text']))
									{
										?>
										<li>

											<a href="tel:<?php echo str_replace(str_split('(),-" '), '',$pqf_options['text']); ?>"><i class="fas fa-envelope"></i>
												<span><?php echo esc_html($pqf_options['text']); ?></span>
											</a>
										</li>
									<?php } ?>
								<?php endif; ?>


								<?php
								if ( $phone ) :
									?>
									<?php
									if(!empty($pqf_options['phone']))
									{
										?>
										<li>

											<a href="tel:<?php echo str_replace(str_split('(),-" '), '',$pqf_options['phone']); ?>"><i class="fas fa-phone"></i>
												<span><?php echo esc_html($pqf_options['phone']); ?></span>
											</a>
										</li>
									<?php } ?>
								<?php endif; ?>

								<?php
								if ( $email ) :
									?>
									<?php
									if(!empty($pqf_options['email']))
									{
										?>
										<li>

											<a href="mailto:<?php echo esc_html($pqf_options['email']); ?>"><i class="fas fa-envelope"></i><span><?php echo esc_html($pqf_options['email']); ?></span></a>
										</li>
									<?php } ?>
								<?php endif; ?>

								<?php
								if ( $address ) :
									?>
									<?php
									if(!empty($pqf_options['address']))
									{
										?>
										<li>
											<i class="fas fa-map-marker"></i>
											<span>
												<?php echo esc_html($pqf_options['address']); ?>
											</span>
										</li>
									<?php } ?>
								<?php endif; ?>

								<?php
								if ( $email1 ) :
									?>
									<?php
									if(!empty($pqf_options['email1']))
									{
										?>
										<li>

											<a href="mailto:<?php echo esc_html($pqf_options['email1']); ?>"><i class="fas fa-envelope"></i><span><?php echo esc_html($pqf_options['email1']); ?></span></a>
										</li>
									<?php } ?>
								<?php endif; ?>

							</ul>
						</div>
					</div>
				</div>
				<?php
			}

	// Widget Backend
			public function form( $instance ) {
				$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
				$phone    = isset( $instance['phone'] ) ? (bool) $instance['phone'] : false;
				$email = isset( $instance['email'] ) ? (bool) $instance['email'] : false;
				$email1 = isset( $instance['email1'] ) ? (bool) $instance['email1'] : false;
				$address = isset( $instance['address'] ) ? (bool) $instance['address'] : false;
				$text = isset( $instance['text'] ) ? (bool) $instance['text'] : false;

				?>

				<p><label for="<?php echo esc_html($this->get_field_id( 'title','medicate' )); ?>"><?php esc_html_e( 'Title:','medicate' ); ?></label>
					<input class="widefat" id="<?php echo esc_html($this->get_field_id( 'title','medicate' )); ?>" name="<?php echo esc_html($this->get_field_name( 'title','medicate')); ?>" type="text" value="<?php echo esc_html($title,'medicate'); ?>" /></p>

					<p><input class="checkbox" type="checkbox"<?php checked( $phone ); ?> id="<?php echo esc_html($this->get_field_id( 'phone','medicate' )); ?>" name="<?php echo esc_html($this->get_field_name( 'phone','medicate' )); ?>" />
						<label for="<?php echo esc_html($this->get_field_id( 'phone','medicate' )); ?>"><?php esc_html_e( 'Display Phone Number?','medicate' ); ?></label></p>

						<p><input class="checkbox" type="checkbox"<?php checked( $email ); ?> id="<?php echo esc_html($this->get_field_id( 'email','medicate' )); ?>" name="<?php echo esc_html($this->get_field_name( 'email','medicate' )); ?>" />
							<label for="<?php echo esc_html($this->get_field_id( 'email','medicate' )); ?>"><?php esc_html_e( 'Display First Email?','medicate' ); ?></label></p>

							<p><input class="checkbox" type="checkbox"<?php checked( $email1 ); ?> id="<?php echo esc_html($this->get_field_id( 'email1','medicate' )); ?>" name="<?php echo esc_html($this->get_field_name( 'email1','medicate' )); ?>" />
							<label for="<?php echo esc_html($this->get_field_id( 'email1','medicate' )); ?>"><?php esc_html_e( 'Display Second Email?','medicate' ); ?></label></p>

							<p><input class="checkbox" type="checkbox"<?php checked( $address ); ?> id="<?php echo esc_html($this->get_field_id( 'address','medicate' )); ?>" name="<?php echo esc_html($this->get_field_name( 'address','medicate' )); ?>" />
								<label for="<?php echo esc_html($this->get_field_id( 'address','medicate' )); ?>"><?php esc_html_e( 'Display Address?','medicate' ); ?></label></p>

								<p><input class="checkbox" type="checkbox"<?php checked( $text ); ?> id="<?php echo esc_html($this->get_field_id( 'text','medicate' )); ?>" name="<?php echo esc_html($this->get_field_name( 'text','medicate' )); ?>" />
									<label for="<?php echo esc_html($this->get_field_id( 'text','medicate' )); ?>"><?php esc_html_e( 'Display text?','medicate' ); ?></label></p>


									<?php
								}
	// Updating widget replacing old instances with new
								public function update( $new_instance, $old_instance ) {
									$instance = array();
									$instance['title'] = sanitize_text_field( $new_instance['title'] );
									$instance['phone'] = isset( $new_instance['phone'] ) ? (bool) $new_instance['phone'] : false;
									$instance['email'] = isset( $new_instance['email'] ) ? (bool) $new_instance['email'] : false;
									$instance['email1'] = isset( $new_instance['email1'] ) ? (bool) $new_instance['email1'] : false;
									$instance['address'] = isset( $new_instance['address'] ) ? (bool) $new_instance['address'] : false;
									$instance['text'] = isset( $new_instance['text'] ) ? (bool) $new_instance['text'] : false;


									return $instance;
								}
							}
/*---------------------------------------
		Class wpb_widget ends here
		----------------------------------------*/
