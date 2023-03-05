<?php
namespace Elementor;
if (!defined('ABSPATH')) {
  exit;

}
$settings = $this->get_settings();
$settings = $this->get_settings_for_display();

?>
<div class="pt-before-after">
      
      <div id="slider" class="beer-slider" data-beer-label="after">
      <img src=" <?php echo esc_url($settings['image']['url']); ?>" alt="before-after">
      <div class="beer-reveal" data-beer-label="before">
        <img src= "<?php echo esc_url($settings['image1']['url']); ?>" alt="before-after">
      </div>
    </div>  
    </div>