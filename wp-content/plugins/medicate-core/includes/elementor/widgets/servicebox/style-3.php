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


if (!empty($settings['title_text'])) 
{
	$title_html = $settings['title_text'];
}

$title = sprintf('<%2$s class="pt-service-title">%1$s</%2$s>',$title_html,$settings['title_tag'] );

if ($settings['service_style'] === "3")
{
    ?>

    <div class="pt-service-box pt-style-3">
        <div class="pt-service-block">
            <div class="pt-service-img front">
                <img src="<?php echo esc_url($settings['image']['url']); ?>" alt="servicebox">
                <div class="pt-service-box-info">
                    <div class="pt-service-icon">
                        <i class="<?php echo esc_attr($settings['icons1']['value']) ?>"></i>
                    </div>
                    <?php echo $title; ?>
                </div>
            </div>
            <div class="pt-service-img back">
                <img src="<?php echo esc_url($settings['image']['url']); ?>" alt="servicebox">
                <div class="pt-service-box-info">
                    <?php echo $title; ?>
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
      </div>
  </div>

  <?php
} 
?>




