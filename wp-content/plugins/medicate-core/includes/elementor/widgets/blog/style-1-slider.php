<?php

namespace Elementor;

use Peaceful\Medicate\Options;

use Medic_Core\Includes\Helper\Medic_Helper;

if ( ! defined( 'ABSPATH' ) )

{

  exit;

}

$settings = $this->get_settings();

$align = $settings['text_align'];

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
$max_count = 1;
$count = 0;
$cut = ($settings['crop_images']);
      global $paged;

      if (empty($paged))

      {

        $paged = 1;

      }

      $args = array(

      'post_type'         => 'post',

      'post_status'       => 'publish',

      'suppress_filters'  => 0,

      'paged' => $paged

      );

      $posts = new \WP_Query($args);

     $slider = new Slider_Controls();
     $slider->add_render_attribute($this , $settings);

  ?>

<div class="pt-blog text-<?php echo esc_attr($align,'medicate'); ?>">

  <div class="owl-carousel" <?php echo $this->get_render_attribute_string('slider'); ?>>

    <?php

      if ( $posts -> have_posts() )

      {

          while ( $posts -> have_posts() )

          {

            $posts->the_post();
            $image_url = wp_get_attachment_url( get_post_thumbnail_id($posts->ID) );

          ?>

            <div class="item">

               <div class="pt-blog-post pt-style-1">

                  <div class="pt-post-media">

                   <?php
                    if ($count < $max_count)
                    {
                    $count++;
                    }
                    else
                    {
                     $count = 1;
                    }
                    $item_class = Medic_Helper::pt_grid_class($count);
                    $final_url = Medic_Helper::blog_crop($image_url , $cut , $count);
                    
                     the_post_thumbnail(); ?>

                    <?php

                     $archive_year  = get_the_time( 'Y' );

                     $archive_month = get_the_time( 'm' );

                     $archive_day   = get_the_time( 'd' );

                     ?>



                    <?php if(has_post_thumbnail()){ ?>

                     <div class="pt-post-date">

                        <a href="<?php echo esc_url( get_day_link($archive_year, $archive_month, $archive_day ) ); ?>">

                        <span><?php echo esc_html( get_the_date()); ?></span></a>

                     </div>

                    <?php } ?>
                    </div>



                  <div class="pt-blog-contain">

                    <div class="pt-post-meta">

                        <ul>
                           <li class="pt-post-author"><i class="fa fa-user"></i><?php the_author(); ?></li>

                           <li class="pt-post-comment">
                              <?php
                              if(get_comments_number(get_the_ID()) == 1)
                              {
                                $comment = esc_html__('Comment','medicate');
                              }
                              else
                              {
                                $comment = esc_html__('Comments','medicate');
                              }
                              ?>
                                <a href="<?php the_permalink(); ?>"><i class="fa fa-comments"></i>
                                  <?php echo get_comments_number(get_the_ID()).' '.$comment; ?></a>
                            </li>


                        </ul>

                     </div>

                     <h5 class="pt-blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>


                     <div class="pt-blog-info">

                        <?php if ($settings['des_button'] == 'yes') {

                           the_excerpt();

                            }  ?>

                     </div>
                     <?php if ($settings['bhide_button'] == 'yes') { ?>
                    <div class="pt-btn-container">

                        <a href="<?php echo esc_url(get_the_permalink()); ?>" <?php echo $this->get_render_attribute_string('btn_attr'); ?> >
                          <div class="pt-button-block">
                            <span class="pt-button-text">Lees meer</span>
                            <i class="ion ion-plus-round"></i>
                          </div>
                           </a>
                    </div>
                   <?php }  ?>
                  </div>

               </div>

            </div>

          <?php

          }

           wp_reset_query();

      }
      ?>

  </div>

</div>
