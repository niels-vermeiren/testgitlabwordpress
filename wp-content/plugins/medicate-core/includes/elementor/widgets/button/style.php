<?php
namespace Elementor; 
if ( ! defined( 'ABSPATH' ) ) exit; 
$html = '';

$settings = $this->get_settings();
//$settings = $this->get_settings_for_display();


$title_html = $settings['button_text'];


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

?>


  <div class="pt-btn-container">
        <a <?php echo $this->get_render_attribute_string('btn_attr'); ?>>
          <div class="pt-button-block">
          <span class="pt-button-text"><?php echo esc_html($settings['button_text']); ?></span>
            <i class="ion ion-plus-round"></i>
          </div>
        </a>
  </div>

<?php
$this->add_render_attribute( 'btn_attr', 'href', '' ); 
?>
