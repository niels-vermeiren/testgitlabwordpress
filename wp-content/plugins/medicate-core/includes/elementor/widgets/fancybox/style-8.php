<?php
namespace Elementor;
if (!defined('ABSPATH')) {
    exit;
}
$settings = $this->get_settings();
$title_html = $settings['title_text'];
$lists = $this->get_settings_for_display( 'lists' );

$title = sprintf('<%1$s class="pt-fancy-box-title">%2$s</%1$s>', $settings['title_tag'],$title_html);


if (!empty($settings['description_text'])) {

    $desc_html = $this->parse_text_editor($settings['description_text']);

}
?>

<?php

if ($settings['fancy_style'] === "8") {
    ?>
    <div class="pt-fancy-box pt-style-8">
<div class="pt-fancy-box-top">
   <div class="pt-fancy-box-icon">
      <i class="<?php echo esc_html($settings['selected_icon']['value']); ?>"></i>
   </div>
    <?php echo $title; ?>
</div>
<div class="pt-fancy-box-info">
      <?php if ($settings['desc_content'] === 'yes') 
    {
        ?>
        <p class="pt-fancybox-description"><?php echo $desc_html; ?></p>
        <?php 
    }
    ?>  

   <div class="pt-fancy-box-list">
      <ul>
        <?php 
        foreach ( $lists as $index => $item ){ ?>
         <li>
            <i class="<?php echo esc_attr($item['selected_icon_second']['value']) ?>"></i>
            <?php echo esc_html($item['list_title']) ?>
         </li>
         <?php 
         } ?> 
      </ul>
   </div>
</div>
</div>

<?php } ?>






