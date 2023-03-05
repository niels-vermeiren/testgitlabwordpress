<?php
namespace Elementor;

if (!defined('ABSPATH')) {
    exit;
}
$html = '';
$settings = $this->get_settings();
$tabs = $this->get_settings_for_display('tabs_four');

?>
<?php
if ($settings['process_style'] === "4") 
{
    ?>
    <?php
    foreach ($tabs as $index => $item) {

     $title_html = $item['title_text_four'];

     if (!empty($item['title_text_four'])) {
        $title_html = $item['title_text_four'];
    }

    if (!empty($item['description_text_four'])) {
        $desc_html = $item['description_text_four'];
    }

    $title = sprintf('<%1$s class="pt-process-title">%2$s</%1$s>', $item['title_tag_four'],$title_html);
    $pos = '';
    if($item['number_up_down'] == 'down')
    {
        $pos = 'down';
    }
    else
    {
        $pos = 'up';
    }
    ?>
    <div class="pt-process-step pt-style-4 <?php echo $pos; ?>">
        <?php
        if($item['number_up_down'] == 'up')
        {
            ?>
            <div class="pt-process-number">
                <?php echo esc_html($item['step_number_four']);
                ?>
            </div>
            <?php 
        }
        ?>
        <div class="pt-process-icon-box">
            <div class="pt-process-icon">
                <i class="<?php echo esc_attr($item['icon_class_four']['value']); ?>" aria-hidden="true"></i>
            </div>
            <div class="pt-process-contain">
                <?php echo $title; ?>
                <p><?php echo $desc_html; ?></p>
            </div>
        </div>
        <?php
        if($item['number_up_down'] == 'down')
        {
            ?>
            <div class="pt-process-number">
                <?php echo esc_html($item['step_number_four']);
                ?>
            </div>
            <?php 
        }
        ?>
    </div>
    <?php
}
?>

<?php } ?>


