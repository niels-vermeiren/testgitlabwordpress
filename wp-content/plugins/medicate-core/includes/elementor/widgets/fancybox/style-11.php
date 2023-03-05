<?php
namespace Elementor;
if (!defined('ABSPATH')) {
    exit;
}
$settings = $this->get_settings();
$title_html = $settings['title_text'];
$lists = $this->get_settings_for_display( 'lists' );

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

if ($settings['fancy_style'] === "11") {
    ?>
    <div class="pt-fancy-box pt-style-11">
       <div class="pt-fancy-box-left">
          <div class="pt-fancy-box-icon">
             <i class="<?php echo esc_html($settings['selected_icon']['value']); ?>"></i>
         </div>
         <?php echo $title; ?>
         <div class="pt-fancy-box-info">
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
<div class="pt-fancy-box-right">
    <img src="<?php echo esc_html($settings['bg_image']['url']); ?>" alt="fancy-image">
</div>
</div>

<?php } ?>



