<?php

namespace Elementor;

use Peaceful\Medicate\Options;

use Medic_Core\Includes\Helper\Medic_Helper;

if (!defined('ABSPATH')) {

	exit;

}

$html = '';

$settings = $this->get_settings();

$layout = $settings['portfolio_style'];

$cut = (bool) ($settings['crop_images']);

$height = '';

$weight = '';
$final_url = '';

if ($cut == 1 ){

$height = $settings['crop_height'];

$weight = $settings['crop_weight'];

// $custom = $settings['thumbnail_custom_dimension'];

  $img_args = array('size_dimention' => array('width' => $weight , 'height' => $height));



}
// else{

//   $img_args = array('size_dimention' => array('width' => '' , 'height' => ''));

// }



$this->add_render_attribute( 'btn_attr', 'class', 'pt-button' );

$args = array(

	'post_type' => 'portfolio',

	'post_status' => 'publish',

	'suppress_filters' => 0,

);

$posts = new \WP_Query($args);

global $post;

$slider = new Slider_Controls();

$slider->add_render_attribute($this ,$settings);

?>

<div class="pt-portfoliobox pt-portfoliobox-style-<?php echo esc_html($layout); ?>">

  <div class="owl-carousel" <?php echo $this->get_render_attribute_string('slider'); ?>>

    <?php

    if ($posts->have_posts()) {

      while ($posts->have_posts()) {

      $posts->the_post();

       $image_url = wp_get_attachment_url( get_post_thumbnail_id($posts->ID) );





       if ($cut == 1 ){

        $final_url = Medic_Helper::portfolio_grid($image_url , $weight, $height,  $cut , 0 );

       }

      else

       {

        $final_url = '<img  src="' . $image_url . '" alt="portfolio-slider" />';

       }



       ?>

       <div class="item">

        <div class="pt-portfoliobox pt-style-<?php echo esc_html($layout); ?>">

          <div class="pt-portfolio-block">

            <div class="pt-portfolio-img  ">

              <?php echo $final_url; ?>



              <a href="<?php the_permalink(); ?>">

                <div class="pt-portfolio-icon"><i class="<?php echo esc_attr($settings['selected_icon']['value']) ?>"></i></div>

              </a>

            </div>

         <div class="pt-portfolio-info">

          <?php

          $term_data = '';

          $terms = get_the_terms( get_the_ID(), 'portfolio-categories' );

          if ( $terms && ! is_wp_error( $terms ) ) {

            $draught_links = [];

            foreach ( $terms as $index => $term )

            {

              if($index <= 0)

              {

                $term_data .= '<a href="'.esc_url(get_category_link($term->term_id)).'">'.esc_html($term->name).'</a>';

              }

            }

            ?>

            <div class="pt-portfolio-link">

              <?php echo ($term_data); ?>

            </div>

            <?php

          }

          ?>

          <h5><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h5>

        </div>

      </div>

    </div>

  </div>

  <?php

}

}

wp_reset_query();

?>

</div>

</div>