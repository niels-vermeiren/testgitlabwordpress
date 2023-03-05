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
if ($settings['process_style'] === "1") 
{
?>
<div class="pt-process-step pt-process-style-1 <?php echo $settings['content_align_pro']; ?>">
            
      <?php
      foreach ($tabs as $index => $item) 
      {
        ?>
           <div class="pt-process-media">
              <div class="pt-process-icon">
                 <i class="<?php echo esc_html($item['icon_class']['value']); ?>"></i>
              </div>
              <div class="pt-process-number">
                 <span>  <?php echo esc_html($item['step_number']);?></span>
              </div>
           </div>
            <?php            
            $title_html = $item['title_text'];

            if (!empty($item['title_text'])) {
                $title_html = $item['title_text'];
            } else {
                $title_html = "This is sample title";
            }

            $title = sprintf('<%1$s class="pt-process-title">%2$s</%1$s>', $item['title_tag'],$title_html);

            ?>
              <div class="pt-process-info">
                 <?php echo $title; ?>
              <span class="pt-process-sub-title"><?php echo esc_html($item['sub_title_text']);?></span>
              <div class="pt-process-description">
                 <?php echo esc_html($item['description_text']);?>
              </div>            
             </div>
     <?php 
      }
      ?>
</div>

<?php } ?>


