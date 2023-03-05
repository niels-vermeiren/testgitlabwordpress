<?php

namespace Elementor;



if (!defined('ABSPATH')) {

    exit;

}



$settings = $this->get_settings();





$title_html = $settings['title_text'];

$title = sprintf('<%1$s class="pt-info-title">%2$s</%1$s>', $settings['title_tag'],$title_html);





$image_html = "";

if ($settings['image_style'] === "1") {

    if (!empty($settings['image']['url'])) {

        $image_html = '<div class="pt-info-box-image"><img src="'.esc_url($settings['image']['url']).'" alt="'.esc_attr(__('infobox' , 'medicate')).'" />';

        $image_html .= '</div>';



    }

}



if ($settings['image_style'] === "2") {

    if (!empty($settings['selected_icon']['value'])) {

        $this->add_render_attribute('selected_icon', 'class', esc_attr($settings['selected_icon']['value']));

        $image_html .= '<div class="pt-info-box-icon">';

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

if ($settings['infobox_style'] === "2") {

    ?>

<div class="pt-info-box pt-style-2">

    <div class="pt-info-box-right-icon">
          <i class="<?php echo esc_attr($settings['single_icon']['value']) ?>"></i>
    </div>

    <?php echo $image_html; ?>
    <?php echo $title; ?>
    <?php if ($settings['desc_content'] === 'yes') {

    ?>

    <p class="pt-infobox-description"><?php echo $desc_html; ?>

    <?php

     }?>
   <?php if ($settings['show_button'] == 'yes') {

       require MEDICATE_CORE_DIR . '/includes/elementor/widgets/button/style.php';

         }
      ?>

</div>

<?php } ?>



