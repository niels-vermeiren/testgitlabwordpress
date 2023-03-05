<?php
namespace Elementor; 
if ( ! defined( 'ABSPATH' ) ) exit; 
$html = '';
    
    $progress_bar = $this->get_settings_for_display( 'progress_bar' );
    $align = '';
    $settings = $this->get_settings();
    $this->add_render_attribute('progressbar', 'data-h', $settings['data_height']);

  ?>


   <div class="pt-progressbar-box pt-progressbar-style-<?php echo esc_html($settings['Progressbar_style']); ?>" <?php echo esc_attr( $align ); ?> <?php echo $this->get_render_attribute_string('progressbar'); ?>>
     <?php foreach ($progress_bar as $index => $item ) {      
      ?>
    <div class="pt-progressbar-content">
        
           <span class="progress-title"><?php echo sprintf('%1$s',esc_html($item['section_title'],'medicate')) ; ?></span> 
           <span class="progress-value"><?php echo ($item['tab_score']['size']);echo ($item['tab_score']['unit']); ?> </span> 
          <div class="pt-progress-bar">

            <span data-width="<?php  echo $item['tab_score']['size']; ?>" class="show-progress"></span>

          </div> 
       </div> 
     <?php } ?>
   </div>
