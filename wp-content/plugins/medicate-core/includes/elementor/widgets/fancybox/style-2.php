<?php
namespace Elementor;
if (!defined('ABSPATH')) {
    exit;
}
$settings = $this->get_settings();
$title_html = $settings['title_text'];
$title = sprintf('<%1$s class="pt-fancy-box-title">%2$s</%1$s>', $settings['title_tag'],$title_html);


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
<div class="pt-fancy-box pt-style-2">
   <div class="pt-fancy-img">
      <img src="<?php echo esc_html($settings['bg_image']['url']); ?>" alt="<?php esc_attr(__('fancybox' , 'medicate')); ?>" >
      <div class="pt-fancy-box-icon">
         <i class="<?php echo esc_html($settings['selected_icon']['value']); ?>"></i>
      </div>
   </div>
<?php
if (!empty($settings['description_text'])) 
{
    $desc_html = $this->parse_text_editor($settings['description_text']);
}
else 
{
    $desc_html = "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.";
}

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
   <div class="pt-fancy-box-info <?php echo esc_html($settings['content_align']); ?>">
      <?php echo $this->parse_text_editor($title); ?>

      <?php if ($settings['desc_content'] === 'yes') {?>
      <p class="pt-fancybox-description"><?php echo $desc_html; ?></p>
        <?php }?>
      <div class="pt-btn-container">
         <a <?php echo $this->get_render_attribute_string('btn_attr'); ?> >
            <div class="pt-button-block">
               <span class="pt-button-text"><?php echo esc_html($settings['button_text']);?></span>
               <i class="ion ion-plus-round"></i>
            </div>
         </a>
      </div>
   </div>
</div>
<?php
$this->add_render_attribute( 'btn_attr', 'href', '' ); 
?>


