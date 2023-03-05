<?php
namespace Elementor; 
if ( ! defined( 'ABSPATH' ) ) exit; 
$settings = $this->get_settings();

if($settings['client_style'] == '2')
{

   if(!empty($settings['grid_custom_dimension']['width']))

   {

    $width = $settings['grid_custom_dimension']['width'];

    $this->add_render_attribute('custom_width', 'style', 'width:'.$width.'px;');

}



if(!empty($settings['grid_custom_dimension']['height']))

{

  $height = $settings['grid_custom_dimension']['height'];

  $this->add_render_attribute('custom_width', 'style', 'height:'.$height.'px;'); 

} 
?>

<?php 
if ( ! empty( $settings['grid_btn_link']['url'] ) ) 
{
    $this->add_render_attribute( 'btn_attr_link', 'href', $settings['grid_btn_linkbtn_link']['url'] );
    if ( $settings['grid_btn_linkbtn_link']['is_external'] ) {
        $this->add_render_attribute( 'btn_attr_link', 'target', '_blank' );
    }
    if ( ! empty( $settings['grid_btn_linkbtn_link']['nofollow'] ) ) {
        $this->add_render_attribute( 'btn_attr_link', 'rel', 'nofollow' );
    }
}
?> 

<div class="pt-clientbox pt-style-1">

    
    <a <?php echo $this->get_render_attribute_string('btn_attr_link'); ?>>
      <?php
      if(!empty($settings['grid_image']['url']))
      { 
          ?>
          <img src="<?php echo esc_url($settings['grid_image']['url']); ?>" alt="pt-client-img" class="pt-client-img" <?php echo $this->get_render_attribute_string('custom_width'); ?>>
      <?php } ?>

      <?php
      if(!empty($settings['grid_image1']['url']))
      { 
          ?>
          <img src="<?php echo esc_url($settings['grid_image1']['url']); ?>" alt="pt-client-img" class="pt-client-hover-img" <?php echo $this->get_render_attribute_string('custom_width'); ?>>
      <?php } ?>

  </a>
</div>

<?php } ?>