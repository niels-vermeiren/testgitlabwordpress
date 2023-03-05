<?php
function medicate_recent_post_widgets() {

	register_widget( 'Pt_Recent_Post' );

}

add_action( 'widgets_init', 'medicate_recent_post_widgets' );

/*-------------------------------------------

ptonic Contact Information widget

--------------------------------------------*/

class Pt_Recent_Post extends WP_Widget {

	function __construct() {

		parent::__construct(

// Base ID of your widget

			'Pt_Recent_Post',

// Widget name will appear in UI

			esc_html(' Medicate Recent Post', 'medicate'),

// Widget description

			array( 'description' => esc_html( ' most recent Posts. ', 'medicate' ), )

		);

	}

// Creating widget front-end

	public function widget( $args, $instance ) {

		if ( ! isset( $args['widget_id'] ) ) {

			$args['widget_id'] = $this->id;

		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : false;

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */

		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

		$number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;

		if ( ! $number ) {

			$number = 5;

		}

		$show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;

//$args['after_widget'];

		/* here add extra display item  */

		?>

		<div class="pt-widget-menu widget">

			<?php if ( $title ) {

				echo ($args['before_title'] . $title . $args['after_title']);

			} ?>

			<?php

			$args = array( 'post_type' => 'post', 'posts_per_page' => $number, );

			$loop = new WP_Query( $args );

			while ( $loop->have_posts() )

			{

				$loop->the_post();

				$image_url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID) );
                $final_url = aq_resize( $image_url ,'100', '100' , true, true,true);
         

				?>

				<div class="pt-footer-recent-post">

					<div class="pt-footer-recent-post-media">

						<a href="<?php echo esc_url(get_permalink($loop->ID)); ?>">

							<img src="<?php echo esc_url($final_url); ?>" alt=""></a>

						</div>

						<div class="pt-footer-recent-post-info">

							<?php

							$archive_year  = get_the_time( 'Y' );

							$archive_month = get_the_time( 'm' );

							$archive_day   = get_the_time( 'd' );

							?>
                            
							<a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day ) ); ?>" class="pt-post-date">
								<i class="far fa-calendar-alt"></i><?php echo esc_html( get_the_date('F',get_the_ID()));?> <span><?php echo esc_html( get_the_date('n',get_the_ID())); ?></span>, <?php echo esc_html( get_the_date('Y',get_the_ID()));?> </a>

							<h6><a href="<?php echo esc_url(get_permalink($loop->ID));  ?>"><?php the_title(); ?></a></h6>

						</div>



					</div>

					<?php

				}

				wp_reset_query();

				?>

			</div>

			<?php

		}

// Widget Backend

		public function form( $instance ) {

			$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';

			$tag     = isset( $instance['tag'] ) ? esc_attr( $instance['tag'] ) : 'h2';

			$number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;

			$show_date = isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : false;

			?>

			<p><label for="<?php echo esc_html($this->get_field_id( 'title','medicate' )); ?>"><?php esc_html_e( 'Title:','medicate' ); ?></label>

				<input class="widefat" id="<?php echo esc_html($this->get_field_id( 'title','medicate' )); ?>" name="<?php echo esc_html($this->get_field_name( 'title','medicate')); ?>" type="text" value="<?php echo esc_html($title,'medicate'); ?>" /></p>

				<p><label for="<?php echo esc_html($this->get_field_id( 'number','medicate' )); ?>"><?php esc_html_e( 'Number of posts to show:','medicate' ); ?></label>

					<input class="tiny-text" id="<?php echo esc_html($this->get_field_id( 'number','medicate' )); ?>" name="<?php echo esc_html($this->get_field_name( 'number','medicate' )); ?>" type="number" step="1" min="1" value="<?php echo esc_html($number,'medicate'); ?>" size="3" /></p>

					<?php

				}

// Updating widget replacing old instances with new

				public function update( $new_instance, $old_instance ) {

					$instance = array();

					$instance['title'] = sanitize_text_field( $new_instance['title'] );

					$instance['number'] = (int) $new_instance['number'];

					$instance['show_date'] = isset( $new_instance['show_date'] ) ? (bool) $new_instance['show_date'] : false;

					return $instance;

				}

			}

/*---------------------------------------

Class wpb_widget ends here

----------------------------------------*/