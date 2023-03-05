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

if($settings['testimonial_style'] == "1")

{
    ?>
    <div class="pt-testimonial pt-testimonial-style-1 ">
     <div class="owl-carousel" <?php echo $this->get_render_attribute_string('slider'); ?>>
       <?php

         foreach ( $tabs as $index => $item )
          {
            if (!empty($item['description_text'])) 
            {
                $desc_html = $this->parse_text_editor($item['description_text']);
            }
            else 
            {
                $desc_html = "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.";
            }

         ?>
          <div class="item">
            <div class="pt-testimonial-box pt-style-1">
                 <div class="pt-testimonial-info">
                    <div class="pt-testimonial-content">
                      <p><?php echo $desc_html; ?></p>
                    </div>
                  </div>
                 <div class="pt-testimonial-media">
                    <div class="pt-testimonial-img">
                       <img src="<?php echo esc_url($item['image']['url']); ?>" alt="testimonial-image">
                    </div>
                      <div class="pt-testimonial-meta">

                      <h5><?php echo esc_html($item['title_text']); ?></h5>
                       <span><?php echo esc_html($item['desg_text']); ?></span>
                       </div>

                       <div class="pt-testimonial-icon">
                        <i class="<?php echo esc_attr($item['single_icon']['value']) ?>"></i>
                      </div>
                  </div>
              </div>
          </div>

         <?php } ?>

  </div>

</div>

<?php } ?>

