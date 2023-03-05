<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage medicate
 * @since 1.0
 * @version 1.0
 */
$pqf_options = get_option('pqf_options');
?>

<div class="pt-copyright-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center ">
				<?php
				if(isset($pqf_options['copyright_text']) && !empty($pqf_options['copyright_text']))
				{
				?>
				<span class="pt-copyright"> 
					&copy; <?php echo date("Y"); ?> Webmade |
					<a href='/algemene-voorwaarden'>Algemene voorwaarden</a> | 
					<a href='/cookiebeleid'>Cookiebeleid</a> | 
					<a href='/privacy-policy'>Privacybeleid</a>

				</span>
				<?php }
				else
				{
				 ?>

		

			<?php } ?>

			</div>
		</div>
	</div>

</div>