<?php
namespace Elementor;
if (!defined('ABSPATH')) {
	exit;
}

$settings = $this->get_settings();
$title_html = $settings['title_text'];

if (!empty($settings['title_text'])) {

	$title_html = $settings['title_text'];

} 

$title = sprintf('<%2$s class="pt-service-title">%1$s</%2$s>',$title_html,$settings['title_tag'] );


$banner = '<div class="pt-service-img"><img src="'.esc_url($settings['image']['url']).'" alt="'.esc_attr(__('servicebox' , 'medicate')).'" />
</div>';
if ($settings['service_style'] === "4")
{
   if ( ! empty( $settings['link_url']['url'] ) )
    {
        $this->add_render_attribute( 'btn_attr_link', 'href', $settings['link_url']['url'] );
        if ( $settings['link_url']['is_external'] ) {
            $this->add_render_attribute( 'btn_attr_link', 'target', '_blank' );
        }
        if ( ! empty( $settings['link_url']['nofollow'] ) ) {
            $this->add_render_attribute( 'btn_attr_link', 'rel', 'nofollow' );
        }
    }


   ?>
  <div class="pt-service-box pt-style-4">
   <div class="pt-service-block">
       <?php echo $banner; ?>
      <div class="pt-service-box-info">
         <div class="pt-info-text">
              <a <?php echo $this->get_render_attribute_string('btn_attr_link'); ?>>
               <?php echo $title; ?>
            </a>
         </div>
         <a <?php echo $this->get_render_attribute_string('btn_attr_link'); ?>>
            <div class="pt-service-icon">
                <i class="<?php echo esc_attr($settings['icons1']['value']) ?>"></i>
            </div>
         </a>
      </div>
   </div>
</div>

<?php

} ?>






