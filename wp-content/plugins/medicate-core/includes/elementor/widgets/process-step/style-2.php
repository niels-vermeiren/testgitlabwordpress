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
if ($settings['process_style'] === "2") 
{
?>
<!-- structure -->
<div class="pt-process-step pt-process-style-2 <?php echo $settings['content_align_pro']; ?>">
    <?php
    foreach ($tabs as $index => $item) { ?>

    <div class="pt-process-media">
    <?php 
    if (!empty($item['image_style_4']['url'])) 
    {

        $image_html = '<div class="pt-process-img"><img src="'.esc_url($item['image_style_4']['url']).'" alt="'.esc_attr(__('medicate' , 'medicate')).'" /> </div>';
    }
    echo $image_html; ?>
        <div class="pt-process-number">
            <span><?php echo esc_html($item['step_number']); ?></span>
        </div>
    </div>

    <div class="pt-process-step-info">
            <?php 
            $title_html = $item['title_text']; 
            $title = sprintf('<%1$s class="pt-process-title">%2$s</%1$s>', $item['title_tag'],$title_html);
            echo $title; 
            ?>
            <span class="pt-process-sub-title"><?php echo esc_html($item['sub_title_text'])?></span>

        <div class="pt-process-description">
            <?php if (!empty($item['description_text'])) 
            {
                 $desc_html = $item['description_text'];
            } 
            else 
            {
                 $desc_html = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
            } ?>
            <p><?php echo $desc_html; ?></p>
        </div>

    </div>
    <?php } ?>
</div>

<!-- structure -->

<?php } ?>






