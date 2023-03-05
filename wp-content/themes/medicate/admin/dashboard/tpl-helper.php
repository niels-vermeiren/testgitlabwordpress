<?php

/**
 * Template Activate Theme
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

$allowed_html = array(
	'a' => array(
		'href' => true,
		'target' => true,
	),
);
?>
<div class="Pcfq-theme-helper">
	<div class="container-form">
		<h1 class="Pcfq-title">
			<?php echo esc_html__('Need Help?', 'medicate');?>
		</h1>
		<div class="Pcfq-content">
			<p class="Pcfq-content_subtitle">
				<?php
					echo wp_kses( __( 'Please read a <a target="_blank" href="https://themeforest.net/page/item_support_policy">Support Policy</a> before submitting a ticket and make sure that your question related to our product issues.', 'medicate' ), $allowed_html);
				?>
				<br/>
					<?php
					echo esc_html__('If you did not find an answer to your question, feel free to contact us.', 'medicate');
					?>
			</p>
		</div>
		<div class="Pcfq-row">
			<div class="Pcfq-col Pcfq-col-4">
				<div class="Pcfq-col_inner">
					<div class="Pcfq-info-box_wrapper">
						<div class="Pcfq-info-box">
							<div class="Pcfq-info-box_icon-wrapper">
								<div class="Pcfq-info-box_icon">
									<img src="<?php echo CONST_MEDICATE_URI . '/admin/assest/img/doc.png'?>">
								</div>
							</div>
							<div class="Pcfq-info-box_content-wrapper">
								<div class="Pcfq-info-box_title">
									<h3 class="Pcfq-info-box_icon-heading">
										<?php
											esc_html_e('Documentation', 'medicate');
										?>
									</h3>
								</div>
								<div class="Pcfq-info-box_content">
									<p>
										<?php
										esc_html_e('please read the documentation. All functionality will mension here to resolved you issues.', 'medicate');
										?>
									</p>
								</div>
								<div class="Pcfq-info-box_btn">
									<a target="_blank" href="https://documentation.peacefulqode.com/v/medicate-documentation/">
										<?php
											esc_html_e('Visit Documentation', 'medicate');
										?>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="Pcfq-col Pcfq-col-4">
				<div class="Pcfq-col_inner">
					<div class="Pcfq-info-box_wrapper">
						<div class="Pcfq-info-box">
							<div class="Pcfq-info-box_icon-wrapper">
								<div class="Pcfq-info-box_icon">
									<img src="<?php echo CONST_MEDICATE_URI . '/admin/assest/img/mail.png'?>">
								</div>
							</div>
							<div class="Pcfq-info-box_content-wrapper">
								<div class="Pcfq-info-box_title">
									<h3 class="Pcfq-info-box_icon-heading">
										<?php
											esc_html_e('Support Mail', 'medicate');
										?>
									</h3>
								</div>
								<div class="Pcfq-info-box_content">
									<p>
										<?php
											esc_html_e('If your query not solved., submit a ticket with well describe your issue.', 'medicate');
										?>
									</p>
									<h2>Email : peacefulthemes@gmail.com</h2>
								</div>
								<div class="Pcfq-info-box_btn">
									<!-- <a target="_blank" href="https://webgeniuslab.ticksy.com"> -->
										<a href="mailto:peacefulthemes@gmail.com" target="_blank">
										<?php
											esc_html_e('Create a ticket', 'medicate');
										?>

									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="Pcfq-col Pcfq-col-4">
				<div class="Pcfq-col_inner">
					<div class="Pcfq-info-box_wrapper">
						<div class="Pcfq-info-box">
							<div class="Pcfq-ribbon"><span>Recommend</span></div>
							<div class="Pcfq-info-box_icon-wrapper">
								<div class="Pcfq-info-box_icon">
									<img src="<?php echo CONST_MEDICATE_URI . '/admin/assest/img/customizing.png'?>">
								</div>
							</div>
							<div class="Pcfq-info-box_content-wrapper">	
								<div class="Pcfq-info-box_title">
									<h3 class="Pcfq-info-box_icon-heading">
										<?php
											esc_html_e('Theme Customization ', 'medicate');
										?>
									</h3>
								</div>					
								<div class="Pcfq-info-box_content">
									<p>
										<?php
											esc_html_e('If your Want Customization Theme Core Function.submit Request here with all details.', 'medicate');
										?>
									</p>
									<h2>Email Us : peacefulthemes@gmail.com</h2>
								</div>		
								<div class="Pcfq-info-box_btn">
									<!-- <a target="_blank" href="https://webgeniuslab.ticksy.com"> -->
										<a href="https://peacefulqode.com/contact/" target="_blank">
										<?php
											esc_html_e('Create a Request', 'medicate');
										?>	
										
									</a>
								</div>
							</div>
						</div>			
					</div>	
				</div>
			</div>	
		</div>

	</div>
</div>

