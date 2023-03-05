<?php

namespace Elementor;

use Peaceful\Medicate\Options;

use Medic_Core\Includes\Helper\Medic_Helper;

if (!defined('ABSPATH')) {

  exit;

}
$html = '';
$settings = $this->get_settings();
$this->add_render_attribute( 'btn_attr', 'class', 'pt-button' );
if($settings['btn_style'] == 'btn-flat')
{

  $this->add_render_attribute( 'btn_attr', 'class', 'pt-button-flat' );
}

if($settings['btn_style'] == 'btn-outline')
{

  $this->add_render_attribute( 'btn_attr', 'class', 'pt-button-outline' );
}

if($settings['btn_style'] == 'btn-link')
{

  $this->add_render_attribute( 'btn_attr', 'class', 'pt-button-link' );
}
$max_count = 25;
$count = 0;
$cut = ($settings['crop_images']);
$height = '';
$weight = '';
if ($cut === 'false' )
{
$height = $settings['crop_height'];
$weight = $settings['crop_weight'];
// $custom = $settings['thumbnail_custom_dimension'];
 // $img_args = array('size_dimention' => array('width' => $weight , 'height' => $height));
}
// else{
//  // $img_args = array('size_dimention' => array('width' => '' , 'height' => ''));
// }

// print_r($img_args);

$args = array(
  'post_type' => 'portfolio',
  'post_status' => 'publish',
  'suppress_filters' => 0,
);
$posts = new \WP_Query($args);
global $post;
?>
 <div class="pt-filters">
 <div class="filters pt-filter-button-group">
        <ul>

          <li class="active pt-filter-btn" data-filter="*">All</li>
          <?php
          $taxonomy = 'portfolio-categories';
          $terms = get_terms($taxonomy); // Get all terms of a taxonomy
          if ( $terms && !is_wp_error( $terms ) ) {
             foreach ( $terms as $term ) {

          ?>
          <li class="pt-filter-btn" data-filter=".<?php echo $term->term_id; ?>"><?php echo esc_html($term->name); ?></li>
          <?php } } ?>
        </ul>
    </div>
</div>

 <div class="pt-grid <?php echo esc_attr($settings['no_padding']); ?>" data-next_items="<?php echo esc_attr($settings['next_items']); ?>" data-initial_items="<?php echo esc_attr($settings['initial_items']); ?>">
        <?php
        $i=0;
         if ($posts->have_posts())
         {
          $catname = '';
            while ($posts->have_posts()) {
              $posts->the_post();
              $image_url = wp_get_attachment_url( get_post_thumbnail_id($posts->ID) );
            $category = (array) get_the_terms( $post->ID, 'portfolio-categories' );
            $array = json_decode(json_encode($category), true);
            //print_r($array);
            foreach ( $array as $cat){
              $catname .= " ".$cat['term_id'] ." ";
            }
            if ($count < $max_count)
              {
               $count++;
                }
                else
                {
                 $count = 1;
                }

            $item_class = Medic_Helper::pt_grid_class($count);
            $final_url = Medic_Helper::portfolio_grid($image_url , $weight, $height,  $cut , 0);
        ?>
        <div class="pt-grid-item pt-filter-items <?php echo esc_attr($settings['grid_style'])."  ".$item_class . " ".$catname; ?>">
            <div class="pt-portfoliobox pt-style-1">
            <div class="pt-portfolio-img">
                <?php echo $final_url; ?>
              <a href="<?php the_permalink(); ?>">
              <div class="pt-portfolio-icon"><i class="<?php echo esc_attr($settings['selected_icon']['value']) ?>"></i></div>
              </a>
            </div>
            <div class="pt-portfolio-info">
             <?php
             $i = 0;
             $taxonomy = 'portfolio-categories';
            $terms = get_the_terms(get_the_ID(),$taxonomy); // Get all terms of a taxonomy
            if ( $terms && !is_wp_error( $terms ) ) {
             foreach ( $terms as $term ) {
              if($i > 0)
              {
                break;
              }
              ?>
              <span><?php echo esc_html($term->name); ?></span>
              <?php $i++; } } ?>
              <h5><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h5>
            </div>
          </div>
        </div>


        <?php
        $catname = ''; $i++; }
      }
    ?>
    </div>
    <div class="pt-btn-load-container text-center">
   <a id="showMore" class="pt-button" href="#">
      <div class="pt-button-block">

         <span  class="pt-button-text"><?php echo esc_html($settings['loadmore_text']); ?></span>
          <i class="ion ion-plus-round"></i>
      </div>
   </a>
</div>
