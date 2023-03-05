<?php
namespace Elementor; 
if ( ! defined( 'ABSPATH' ) ) exit; 
$settings = $this->get_settings();
?>
<div class="pt-section pt-style-1 text-<?php echo $settings['content_align']; ?>">
		
   		<?php
   		if(!empty($settings['sub_title']))
   		{
   		?> 
   		<span class="pt-section-sub-title"><?php echo esc_html($settings['sub_title']); ?></span>
   	<?php } ?>
   		<?php
   		if(!empty($settings['title_text']))
   		{ 
   		?>
	   <h5 class="pt-section-title" ><?php echo esc_html($settings['title_text']); ?></h5>
	<?php } ?>
	<?php
   		if(!empty($settings['desc_title']))
   		{ 
   		?>
	   <p class="pt-section-description" ><?php echo esc_html($settings['desc_title']); ?></p>
	<?php } ?>
	
</div>