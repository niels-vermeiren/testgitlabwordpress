<?php
namespace Elementor; 
use Elementor\Plugin as Elementor_Plugin;
if ( ! defined( 'ABSPATH' ) ) exit; 
    //$this->add_render_attribute( 'list_item', 'class', 'elementor-icon-list-item' );
$settings = $this->get_settings();
$tabs = $this->get_settings_for_display( 'tabs' );
$elementor = Elementor_Plugin::instance();
?>
<div class="pt-advance-tab">
	<div class="nav nav-tabs nav-fill" id="advance-nav-tab" role="tablist">
		<?php 
		foreach ($tabs as $index=>$tab) 
		{
			if($index == 0)
			{
				$class = "active";
			}
			else
			{
				$class = "";
			}
			?>
			<a class="pt-tabs nav-item nav-link <?php echo esc_attr($class) ?>" 
				id="advance-nav-home-<?php echo $index; ?>" data-bs-toggle="tab" 
				href="#<?php echo esc_attr('advance-nav-'.$index); ?>" 
				role="tab" aria-controls="advance-nav-home-<?php echo $index; ?>" 
				aria-selected="true"><?php echo $tab['tab_title'] ?></a>

			<?php } 
			?>
		</div>
		<div class="tab-content" id="advance-nav-tabContent">
			<?php 
			foreach ($tabs as $index=>$tab) 
			{
				if($index == 0)
				{
					$class = "show active";
				}
				else
				{
					$class = "";
				}
				?>			
				<div class="pt-advance-tab-content tab-pane fade <?php echo esc_attr($class); ?>" id="<?php echo esc_attr('advance-nav-'.$index); ?>" role="tabpanel" aria-labelledby="advance-nav-home-<?php echo $index; ?>">
					<?php
					echo $content = $elementor->frontend->get_builder_content_for_display($tab['template_id']);
					?>

				</div>	
			<?php } ?>
		</div>

	</div>