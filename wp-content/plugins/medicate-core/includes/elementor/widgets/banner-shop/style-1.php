<?php
namespace Elementor;
if (!defined('ABSPATH')) {
    exit;
}
$settings = $this->get_settings();


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

$title_html = $settings['title_text'];
$title = sprintf('<%1$s class="shop-banner-title">%2$s</%1$s>', $settings['title_tag'],$title_html);
$image_html = "";

if (!empty($settings['image']['url'])) {
    $image_html = '<div class="pt-shop-banner-image"><img src="'.esc_url($settings['image']['url']).'" class="img-fluid"  alt="'.esc_attr(__('fancybox' , 'medicate')).'" />';
    $image_html .= '</div>';
}
?>


<div class="pt-shop-banner pt-style-1 <?php echo esc_attr($settings['content_align']); ?>">
 <?php echo $image_html; ?>
 <div class="shop-banner-content">
  <h6 class="shop-banner-subtitle"><?php echo esc_html($settings['sub_title_text']); ?></h6>
  <?php echo $title; ?>
  <div class="pt-btn-container">
    <a <?php echo $this->get_render_attribute_string('btn_attr'); ?>>
      <div class="pt-button-block">
          <span class="pt-button-text"><?php echo esc_html($settings['button_text']); ?></span>          
      </div>
  </a>
</div>
</div>
</div>