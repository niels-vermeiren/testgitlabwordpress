<?php
namespace Elementor;
if (!defined('ABSPATH')) {
    exit();
}
$html = '';
$settings = $this->get_settings();
$cut = (bool) $settings['crop_images'];
$height = '';
$weight = '';
if ($cut == 1) {
    $height = $settings['crop_height'];
    $weight = $settings['crop_weight'];
    $img_args = ['size_dimention' => ['width' => $weight, 'height' => $height]];
} else {
    $img_args = ['size_dimention' => ['width' => '', 'height' => '']];
}
$this->add_render_attribute('btn_attr', 'class', 'pt-button');
$args = [
    'post_type' => 'portfolio',
    'post_status' => 'publish',
    'suppress_filters' => 0,
];
$posts = new \WP_Query($args);
global $post;
$slider = new Slider_Controls();
$slider->add_render_attribute($this, $settings);
?>

<div class="pt-portfoliobox-main">
  <div class="row">
    <div class="col-lg-2 ">
      <nav class="owl-filter-bar">

        <a href="javascript:void(0)" class="item" data-owl-filter="*">All</a>
        <?php
        $taxonomy = 'portfolio-categories';
        $terms = get_terms($taxonomy); // Get all terms of a taxonomy
        if ($terms && !is_wp_error($terms)) {
            foreach ($terms as $term) { ?>
    <a href="javascript:void(0)" class="item" data-owl-filter=".<?php echo $term->term_id; ?>"><?php echo esc_html($term->name); ?></a>

  <?php }
        }
        ?>
</nav>
</div>
<div class="col-lg-10">
  <div class="pt-portfoliobox pt-portfoliobox-style-1">
    <div class="owl-carousel owl-carousel-2" <?php echo $this->get_render_attribute_string('slider'); ?>>
      <?php
      if ($posts->have_posts()) {
          while ($posts->have_posts()) {

              $posts->the_post();
              $image_url = wp_get_attachment_url(get_post_thumbnail_id($posts->ID));
              $image_id = get_post_thumbnail_id($posts->ID);
              if ($cut == 1) {
                  $final_url = aq_resize($image_url, $img_args['size_dimention']['width'], $img_args['size_dimention']['height'], true, true, true);
                  $final_url = '<img  src="' . $final_url . '" alt="portfolio-slider" />';
              } else {
                  $final_url = '<img  src="' . $image_url . '" alt="portfolio-slider" />';
              }

              $catname = '';
              $category = (array) get_the_terms($post->ID, 'portfolio-categories');
              $array = json_decode(json_encode($category), true);
              foreach ($array as $cat) {
                  $catname .= " " . $cat['term_id'] . " ";
              }
              ?>
          <div class="item <?php echo esc_attr($catname); ?>">
            <div class="pt-portfoliobox pt-style-1">
              <div class="pt-portfolio-img">
                  <?php echo $final_url; ?>
                <a href="<?php the_permalink(); ?>">
                  <?php if(!empty($settings['selected_icon']['value']))
                  {
                    $icon_class = $settings['selected_icon']['value'];
                  }
                  else 
                  {
                    $icon_class = 'ion ion-plus-round';
                  }?>
                  <div class="pt-portfolio-icon"><i class="<?php echo $icon_class; ?>"></i></div>
                </a>
              </div>
              <div class="pt-portfolio-info">
                <?php
                $term_data = '';
                $terms = get_the_terms(get_the_ID(), 'portfolio-categories');
                if ($terms && !is_wp_error($terms)) {

                    $draught_links = [];
                    foreach ($terms as $index => $term) {
                        if ($index <= 0) {
                            $term_data .= '<a href="' . esc_url(get_category_link($term->term_id)) . '">' . esc_html($term->name) . '</a>';
                        }
                    }
                    ?>
                  <span>
                    <?php echo $term_data; ?>
                  </span>
                  <?php
                }
                ?>
                <h5><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h5>
              </div>
            </div>
          </div>
          <?php
          }
      }
      wp_reset_query();
      ?>
    </div>
  </div></div>
</div>
</div>

