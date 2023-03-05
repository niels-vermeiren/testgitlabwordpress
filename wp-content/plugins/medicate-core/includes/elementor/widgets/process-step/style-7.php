<?php
namespace Elementor;

if (!defined('ABSPATH')) {
 exit;
}
$html = '';
$settings = $this->get_settings();
$tabs = $this->get_settings_for_display('tabs');

?>

<?php
if ($settings['process_style'] === "7") 
{
   ?>

   <div class="pt-process-step pt-style-7 <?php echo $settings['content_align_pro']; ?>">
    <?php
    foreach ($tabs as $index => $item) 
    { 
      ?>
      <div class="pt-process-number">
         <span><?php echo esc_html($item['step_number']); ?></span>
      </div>
      <div class="pt-process-icon-box">
         <div class="pt-process-icon">
          <i class="<?php echo esc_attr($item['icon_class']['value']); ?>"></i>
       </div>
       <div class="pt-process-contain">
        <?php 
        $title_html = $item['title_text']; 
        $title = sprintf('<%1$s class="pt-process-title">%2$s</%1$s>', $item['title_tag'],$title_html);
        echo $title; 
        ?>

        <?php if (!empty($item['description_text'])) 
        {
          $desc_html = $item['description_text'];

          echo '<p class="pt-process-description">'.$desc_html.'</p>';
       } 
       ?>

    </div>
 </div>


<?php } ?>
</div>


<?php } ?>









