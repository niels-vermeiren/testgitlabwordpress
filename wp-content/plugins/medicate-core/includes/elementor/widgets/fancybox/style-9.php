<?php
namespace Elementor;
if (!defined('ABSPATH')) {
    exit;
}
$settings = $this->get_settings();
$title_html = $settings['title_text'];
$number = $settings['number_text'];


$title = sprintf('<%1$s class="pt-fancy-box-title">%2$s</%1$s>', $settings['title_tag'],$title_html);


if (!empty($settings['description_text'])) {

    $desc_html = $this->parse_text_editor($settings['description_text']);

}

if ($settings['fancy_style'] === "9") {

    ?>

<div class="pt-fancy-box  pt-style-9">
    <div class="pt-fancy-box-media">
      <?php echo $title; ?>
        <div class="pt-fancy-box-icon">
            <i class="<?php echo esc_html($settings['selected_icon']['value']); ?>"></i>
        </div>
    </div>
    <div class="pt-fancy-box-info">
        <div class="pt-fancy-box-content">
        <?php if ($settings['desc_content'] === 'yes') 
        {
        ?>
            <p class="pt-fancybox-description"><?php echo $desc_html; ?></p>
        <?php 
        }
        ?>
        </div>
    </div>
</div>

<?php } ?>

