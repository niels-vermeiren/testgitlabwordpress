<?php
namespace Elementor;
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
   global $paged;
  if (empty($paged)) {
  $paged = 1;
  }
  $args = array(
  'post_type'         => 'post',
  'post_status'       => 'publish',
  'suppress_filters'  => 0,
  'paged' => $paged
  );
  $posts = new \WP_Query($args);

    $pagination_args = array(
    //'base'            => get_pagenum_link(1) . '%_%',
    'format'      => '?paged=%#%',
    'total'           => $posts->max_num_pages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => 2,
    'prev_next'       => True,
    'prev_text'       =>  esc_html__( 'Vorige pagina', 'medicate' ),
    'next_text'       => esc_html__( 'Volgende pagina', 'medicate' ),
    'type'            => 'list',
    'add_args'        => false,
    'add_fragment'    => ''
    );
   $paginate_links = paginate_links($pagination_args);
    if($settings['blog_style'] === "1")
    {
        $col = 'col-lg-12';
        $grid = 'pt-blog-col-1';
    }
    if($settings['blog_style'] === "2")
    {
        $col = 'col-lg-6';
        $grid = 'pt-blog-col-2';
    }
    if($settings['blog_style'] === "3")
    {
        $col = 'col-lg-4';
        $grid = 'pt-blog-col-3';
    }
  ?>
<div class="pt-blog <?php echo esc_attr($grid); ?>">
  <div class="row">

    <?php
      if ( $posts -> have_posts() )
      {
      while ( $posts -> have_posts() )
      {
        $posts->the_post();

      ?>
          <div class="<?php echo esc_attr__($col,'medicate'); ?>">
           <div class="pt-blog-post">
              <div class="pt-post-media">
              <?php  the_post_thumbnail(); ?>

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
                                  <?php echo get_comments_number(get_the_ID()); ?></a>
                        </li>
                    </ul>
                 </div>

                 <h5 class="pt-blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

                 <div class="pt-blog-info">
                    <?php if ($settings['des_button'] == 'yes') {

                           the_excerpt();

                            }  ?>
                 </div>

                 <div class="pt-btn-container">
                        <a href="<?php echo esc_url(get_the_permalink()); ?>" <?php echo $this->get_render_attribute_string('btn_attr'); ?> >
                          <div class="pt-button-block">
                            <span class="pt-button-text"><?php echo esc_html($settings['button_text']); ?></span>
                            <i class="ion ion-plus-round"></i>
                          </div>
                        </a>
                    </div>


              </div>
           </div>
          </div>

    <?php
      }
      if ($paginate_links) {

        echo '<div class="col-lg-12 col-md-12 col-sm-12">
          <div class="pt-pagination">
              <nav aria-label="Page navigation">';
              printf( esc_html__('%s','medicate'),$paginate_links);
              echo '</nav>
            </div>
          </div>';
    }

      }
      wp_reset_query();

      ?>
  </div>
</div>