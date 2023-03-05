<?php

namespace Elementor;

use Peaceful\Medicate\Options;

use Medic_Core\Includes\Helper\Medic_Helper;

if (!defined('ABSPATH')) {

  exit;

}
$html = '';
$list = '';

$settings = $this->get_settings();



$tabs = $this->get_settings_for_display( 'list' );
foreach ( $tabs as $index => $item ){
   $list.='<li>
   				<h5>'.$item['list_item_title'].'</h5>
   				<span>'.$item['list_item_sub_title'].'</span>
   			</li>';
}




?>
<div class="pt-portfolio-info-box">
	<div class="pt-porfolio-info-header">
		<h5><?php echo esc_html($settings['list_main_item_title']); ?></h5>
		<p><?php echo esc_html($settings['info_description']); ?></p>
	</div>
	<div class="pt-porfolio-info">
		<ul class="pt-info-list">
			<?php echo $list; ?>
		</ul>
	</div>
</div>