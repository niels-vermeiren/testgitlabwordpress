<?php
namespace Elementor; 
if ( ! defined( 'ABSPATH' ) ) exit; 

$settings   = $this->get_settings();
$tabs       = $this->get_settings_for_display('tabs');
$align      = $settings['align'];


$active = $settings['active'];
if ($active === "yes") {
   $align .= ' active';
}

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

<?php
if ($settings['price_style'] === "4") {
    ?>
    <div class="pt-pricing-plan pt-style-4 <?php echo esc_attr($align); ?>">
     <div class="pt-pricing-head">
      <span class="pt-title"><?php echo esc_html($settings['title']); ?></span>
      <div class="price">
       <span class="pt-amount"><?php echo esc_html($settings['price_currency']); ?> <?php echo esc_html($settings['price']); ?></span>
       <span class="price-month">/ <?php echo esc_html($settings['price_duration']); ?></span>
   </div>
</div>
<ul class="pt-pricing-list">
    <?php
    foreach ($tabs as $index => $item) {
      ?>
      <li>
          <?php 
          if (!empty($item['plan_title'])) {
            $desc_html = $this->parse_text_editor($item['plan_title']);
        }     
            ?>
            <span> <?php echo $desc_html; ?></span><i aria-hidden="true" class="<?php echo esc_html($item['plan_icons']['value']); ?>"></i>
          
    </li>
<?php } ?>
</ul>
<?php if ($settings['show_button'] == 'yes') 
{
    ?>
    <div class="pt-btn-container">
     <a class="pt-button pt-button-flat" <?php echo $this->get_render_attribute_string('btn_attr'); ?>>
        <div class="pt-button-block">
           <span class="pt-button-text"><?php echo esc_html($settings['button_text']);?></span>
           <i class="ion ion-plus-round"></i>
       </div>
   </a>
</div>
<?php
}
?>
</div>
<?php } ?>


