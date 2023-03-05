<?php
namespace Elementor;
if (!defined('ABSPATH')) {
	exit;
}

$html = '';

$settings = $this->get_settings();
$tabs = $this->get_settings_for_display( 'tabs' );

$slider = new Slider_Controls();
$slider->add_render_attribute($this , $settings);

?>

<?php

if($settings['testimonial_style'] == "3")
{
  ?>
  <div class="pt-testimonial pt-testimonial-style-3 ">
   <div class="owl-carousel" <?php echo $this->get_render_attribute_string('slider'); ?>>
     <?php 
     foreach ( $tabs as $index => $item )
     {
      $star = esc_html($item['star']);
      if (!empty($item['description_text'])) 
      {
        $desc_html = $this->parse_text_editor($item['description_text']);
      }
      else 
      {
        $desc_html = "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.";
      }
      ?>
      <div class="pt-testimonial-box pt-style-3" >
        <div class="pt-testimonial-star">
          <?php
          for($i=1;$i<=$star;$i++)
          { 
            ?>
            <i class="fa fa-star"></i>
          <?php } ?>
        </div>
        <div class="pt-testimonial-content"><?php echo $desc_html; ?></div>
        <div class="pt-testimonial-media">
          <div class="pt-testimonial-img">
            <img src="<?php echo esc_url($item['image']['url']); ?>" alt="Testimonial-image">
          </div>
          <div class="pt-testimonial-meta">
            <h5><?php echo esc_html($item['title_text']); ?></h5>
            <span><?php echo esc_html($item['desg_text']); ?></span>
          </div>
          <div class="pt-testimonial-icon">
            <i class="fas fa-quote-right"></i>
          </div>
        </div>
      </div>

    <?php } ?>
  </div>
</div>
<?php } ?>


