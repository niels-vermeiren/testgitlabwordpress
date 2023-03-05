<?php
namespace Elementor;

if (!defined('ABSPATH')) {
    exit;
}
$html = '';
$settings = $this->get_settings();
$tabs = $this->get_settings_for_display('tabs');
$desc_html =""; 
?>

<?php
if ($settings['process_style'] === "3") 
{
?>
<div class="pt-process-step pt-style-3 <?php echo $settings['content_align_pro']; ?>">
            <?php
      foreach ($tabs as $index => $item) {

           $title_html = $item['title_text'];

            if (!empty($item['title_text'])) {
                $title_html = $item['title_text'];
            } 
            
            if (!empty($item['description_text'])) {
                $desc_html = $item['description_text'];
            }

            $title = sprintf('<%1$s class="pt-process-title">%2$s</%1$s>', $item['title_tag'],$title_html);

        ?>
        <div class="pt-process-media">
                <div class="pt-step-number">
                     <?php echo esc_html($item['step_number']);?>
                </div>             
         </div>
            <div class="pt-process-info">
                 <?php echo $title; ?>
                <p><?php echo $desc_html; ?></p>
            </div>
            <?php
      }
      ?>
</div>

<?php } ?>

