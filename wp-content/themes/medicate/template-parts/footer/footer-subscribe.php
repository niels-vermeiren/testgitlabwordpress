<?php
if(class_exists('ReduxFramework'))
{
	$pqf_options = get_option('pqf_options');
	if(isset($pqf_options['subscribe_img']) && !empty($pqf_options['subscribe_img']['url']))
	{
		$img = $pqf_options['subscribe_img']['url'];
	}
	else
	{
		$img = '';
	}

?>
<div class="pt-subscribe align-items-center">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12"> 
				<div class="pt-subscribe-bg">
					<div class="row align-items-center">
						<div class="col-lg-5">
				<div class="pt-subscribe-block">
					<?php
					if(!empty($img))
					{
					?>
					<img src="<?php echo esc_url($img); ?>" class="pt-subscribe-img" alt="<?php esc_attr_e( 'medicate-subscribe-image', 'medicate' ); ?>">
					<?php } ?>
					<div class="pt-subscribe-details">
						<h5><?php if(isset($pqf_options['subscribe_title'])) { echo esc_html($pqf_options['subscribe_title']); } ?></h5>
					</div>
				</div>
			</div>
			<div class="col-lg-7 align-self-center">
				<div class="pt-subscribe-from">
					<?php
						if(isset($pqf_options['subscribe_shortcode']) && !empty($pqf_options['subscribe_shortcode']))
						{
							echo do_shortcode($pqf_options['subscribe_shortcode']);
						}

					?>
				</div>
			</div>
					</div>
				</div>
			</div>
			
		
			
		</div>
		
	</div>
</div>
<?php } ?>