<?php
namespace Elementor;
if (!defined('ABSPATH')) {
    exit;
}
$settings = $this->get_settings();
$title_html = $settings['title_text'];

$this->add_render_attribute( 'btn_attr', 'class', 'pt-button' ); 

if ( ! empty( $settings['btn_link']['url'] ) ) 
{
    $this->add_render_attribute( 'btn_attr', 'href', $settings['btn_link']['url'] );

    if ( $settings['btn_link']['is_external'] ) {
        $this->add_render_attribute( 'btn_attr', 'target', '_blank' );
    }

    if ( ! empty( $settings['btn_link']['nofollow'] ) ) {
        $this->add_render_attribute( 'btn_attr', 'rel', 'nofollow' );
    }
}

if($settings['btn_style'] == 'btn-flat')
{
  
  $this->add_render_attribute( 'btn_attr', 'class', 'pt-button-flat' ); 
}

if($settings['btn_style'] == 'btn-outline')
{
  
  $this->add_render_attribute( 'btn_attr', 'class', 'pt-button-outline' ); 
}

if($settings['btn_style'] == 'btn-link')
{
  
  $this->add_render_attribute( 'btn_attr', 'class', 'pt-button-link' ); 
}

$title = sprintf('<%1$s class="pt-fancy-box-title">%2$s</%1$s>', $settings['title_tag'],$title_html);
$image_html = "";

if ($settings['image_style'] === "1") {

    if (!empty($settings['bg_image']['url'])) {

        $image_html = '<div class="pt-fancy-box-image"><img src="'.esc_url($settings['bg_image']['url']).'" alt="'.esc_attr(__('fancybox' , 'medicate')).'" />';

        $image_html .= '</div>';
    }
}
if ($settings['image_style'] === "2") {

    if (!empty($settings['selected_icon']['value'])) {

        $this->add_render_attribute('selected_icon', 'class', esc_attr($settings['selected_icon']['value']));

        $image_html .= '<div class="pt-fancy-box-icon">';

        $image_html .= sprintf('<i %1$s></i>', $this->get_render_attribute_string('selected_icon'));

        $image_html .= '</div>';
    }
}

if (!empty($settings['description_text'])) {

    $desc_html = $this->parse_text_editor($settings['description_text']);

} else {

    $desc_html = "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.";

}
?>



<?php

if ($settings['fancy_style'] === "1") {

?>

<div class="pt-fancy-box pt-style-1">
      <?php echo $image_html; ?>
        <div class="pt-fancy-box-info">
                <?php echo $title; ?>
                <?php if ($settings['desc_content'] === 'yes') {
                ?>
                <p class="pt-fancybox-description"><?php echo $desc_html; ?>
                <?php
                 } ?></p>
                <div class="pt-btn-container">
                    <a <?php echo $this->get_render_attribute_string('btn_attr'); ?>>
                      <div class="pt-button-block">
                      <span class="pt-button-text"><?php echo esc_html($settings['button_text']); ?></span>
                        <i class="ion ion-plus-round"></i>
                      </div>
                    </a>
                </div>
                  
        </div>
</div>
<?php } ?>



