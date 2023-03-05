<?php
/**
* Displays header widgets if assigned
*
* @package WordPress
* @subpackage pilelabs
* @since 1.0
* @version 1.0
*/
$pqf_options = get_option('pqf_options');

$row = "row no-gutters";
$soc_align = "";
$con_align = "";
$sticky = "";
$sidebar_logo = "";
$hide_top = "";
if(isset($pqf_options['sticky_header_enable']) && $pqf_options['sticky_header_enable'])
{
	$sticky = "pt-has-sticky";
}
if(isset($pqf_options['pt_top_header_layout']))
{
	if($pqf_options['pt_top_header_layout'] == 'social-right')
	{
		$row = "row no-gutters flex-row-reverse";
		$soc_align = "text-right";
		$con_align = "";
	}
	if($pqf_options['pt_top_header_layout'] == 'social-left')
	{
		$row = "row no-gutters";
		$soc_align = "";
		$con_align = "text-right";
	}
}
if(isset($pqf_options['sidebar_logo']) && !empty($pqf_options['sidebar_logo']['url']))
{
	$sidebar_logo = $pqf_options['sidebar_logo']['url'];
}
if ($pqf_options['top_header_enable'] == 'no')
{
	$hide_top = "pt-topbar-hide";
}


?>
<div class="pt-background-overlay"></div>


<header id="pt-header" class="pt-header-style-6 <?php  echo esc_attr($sticky); ?> <?php echo esc_attr($hide_top); ?>">
	<div class="pt-top-header">
		<div class="container">
			<?php
			if(function_exists('get_field') && get_field('field_QnF1Ebs') != 'inherit')
			{
				$header_option = get_field('field_QnF1Ebs');
				if($header_option == 'yes')
				{
					$top_header = get_field('key_pjroswas');

					if ($top_header['top_header_options'] == 'social-left' || 'social-right')
					{
						get_template_part( 'template-parts/header/header', 'top' );
					}
					else{
						get_template_part( 'template-parts/header/header', 'top' );
					}
				}

			}
			elseif(class_exists('ReduxFramework'))
			{
				if($pqf_options['top_header_enable'] == 'yes')
				{
					get_template_part( 'template-parts/header/header', 'top' );
				}
			}
			?>
		</div>
	</div>
	<div class="pt-bottom-header <?php echo esc_attr($sticky); ?> ">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="<?php  echo esc_url( home_url( '/' ) ); ?>">
							<?php medicate_display_logo(); ?>
						</a>


						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<?php if ( has_nav_menu( 'primary' ) ) : ?>
								<?php wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu_class'  => 'navbar-nav ml-auto',
									'menu_id'     => 'pt-main-menu',
									'container_id' => 'pt-menu-contain',
									'container_class' => 'pt-menu-contain',
								) ); ?>
							<?php endif; ?>
						</div>
						<?php
						if(class_exists('ReduxFramework'))
						{
							?>
							<div class="pt-menu-search-block">
								<a href="javascript:void(0)" id="pt-seacrh-btn"><i class="ti-search"></i></a>
								<div class="pt-search-form">
									<?php get_search_form(); ?>
								</div>
							</div>
							<?php

							if ( class_exists( 'WooCommerce' ) ) 
							{
								if(isset($pqf_options['header_cart_enable']) && $pqf_options['header_cart_enable'] == 'yes' )
								{

									?>
									<div class="pt-shop-btn">
										<div class="pt-cart"><?php echo do_shortcode( '[medicate-mini-cart]' ); ?></div>
									</div>
									<?php
								} } 

								if ($pqf_options['header_action_enable'] == 'yes') {
									?>
									<div class="pt-btn-container">
										<?php
										if(isset($pqf_options['action_btn_url']) && !empty($pqf_options['action_btn_url']))
										{
											$url = $pqf_options['action_btn_url'];
										}
										else
										{
											$url = "#";
										}
										?>
										<a href="<?php echo esc_url($url); ?>" class="pt-button">
											<div class="pt-button-block">
												<?php
												if(isset($pqf_options['action_btn_text']) && !empty($pqf_options['action_btn_text']))
												{
													$text = $pqf_options['action_btn_text'];
												}
												else
												{
													$text = 'Get Quote';
												}
												?>
												<span  class="pt-button-text"><?php echo esc_html($text); ?></span>
												<i class="ion ion-plus-round"></i>
											</div>
										</a>
									</div>
								<?php } } ?>
								<?php
								if(class_exists('ReduxFramework'))
								{
									?>
								<?php } ?>

								<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<i class="fas fa-bars"></i>
								</button>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>