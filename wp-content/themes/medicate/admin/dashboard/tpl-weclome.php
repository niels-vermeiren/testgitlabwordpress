<?php

/**
 * Template Welcome
 *
 * @link       https://themeforest.net/user/peacefuldesign
 * @since      1.0.0
 *
 *
 *
 */

/**
 * @since      1.0.0
 *
 *
 * @author     PeaceFulThemes
 */
?>
<div class="Pcfq-welcome_page">


	<div class="Pcfq-welcome-step_wrap">
		<div class="Pcfq-welcome_sidebar left_sidebar">
			<div class="theme-screenshot">
				<img src="<?php echo esc_url(get_template_directory_uri() . "/screenshot.png"); ?>">

			</div>
		</div>
		<div class="Pcfq-welcome_content">
			<div class="Pcfq-welcome_title">
				<h1><?php esc_html_e('Welcome to the setup for', 'medicate');?>
					<?php echo esc_html(wp_get_theme()->get('Name')); ?>
				</h1>
			</div>

			<div class="Pcfq-welcome_subtitle">
					<?php
						echo sprintf(esc_html__('It looks like you may have recently upgraded to this theme. Great! This setup  will help ensure all the default settings are correct. It will also show some information about your new website and support options' , 'medicate'));
					?>
			</div>
			<ul>
			  <li>
			  	<span class="step">
			  		<?php esc_html_e('Step 1', 'medicate');?>
			  	</span>
			  	<?php esc_html_e('Activate your license.', 'medicate');?>
			  	<span class="attention-title">
			  		<strong>
			  			<?php esc_html_e('Important:', 'medicate');?>
			  		</strong>
			  		<?php esc_html_e('one license  only for one website', 'medicate');?>
			  	</span>
			  </li>
			  <li>
			  	<span class="step">
			  		<?php esc_html_e('Step 2', 'medicate');?>
			  	</span>
			  	<?php

				echo sprintf('Check requirements to avoid errors with your WordPress.');

			  	?>
			  </li>
			  <li>
			  	<span class="step">
			  		<?php esc_html_e('Step 3', 'medicate');?>
			  	</span>
			  	<?php esc_html_e('Install Required and recommended plugins.', 'medicate');?>
			  </li>

			</ul>
			<div class="Pcfq-btn-holder">
				<a  class="button button-primary button-next" href="<?php echo esc_url(admin_url('admin.php?page=Pcfq-activate-theme-panel')); ?>">
				<span class="text-btn"><?php esc_html_e( 'Next Step', 'medicate' ); ?></span>
				</a>

			</div>


		</div>

	</div>


</div>
