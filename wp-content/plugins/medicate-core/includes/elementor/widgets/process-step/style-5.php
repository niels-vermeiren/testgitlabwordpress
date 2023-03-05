<?php
namespace Elementor;

if (!defined('ABSPATH')) {
  exit;
}
$html = '';
$settings = $this->get_settings();
$tabs = $this->get_settings_for_display('tabs');
$image_html= "";

?>

<?php
if ($settings['process_style'] === "5") 
{
   ?>

   <div class="pt-process-step pt-process-style-5 <?php echo $settings['content_align_pro']; ?>">
     <?php
     foreach ($tabs as $index => $item) 
     { 
      ?>

      <div class="pt-process-media">
       <?php 
       if (!empty($item['image_style_4']['url'])) 
       {

        $image_html = '<div class="pt-process-img"><img src="'.esc_url($item['image_style_4']['url']).'" alt="'.esc_attr(__('medicate' , 'medicate')).'" /> </div>';
     }
     echo $image_html; 
     ?>
     <div class="pt-process-number">
      <span><?php echo esc_html($item['step_number']); ?></span>
   </div>
   <div class="pt-process-icon">
      <i class="<?php echo esc_attr($item['icon_class']['value']); ?>"></i>
   </div>
</div>
<div class="pt-process-step-info">
   <?php 
   $title_html = $item['title_text']; 
   $title = sprintf('<%1$s class="pt-process-title">%2$s</%1$s>', $item['title_tag'],$title_html);
   echo $title; 
   ?>
</div>
<?php } ?>
</div>


<?php } ?>






