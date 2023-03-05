<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage medicate
 * @since 1.0
 * @version 1.0
 */

get_header();
$pqf_options = get_option('pqf_options');
$title_text = 'Oeps! Deze pagina vonden we niet.' ;
$desc_text = 'Gelieve terug te gaan naar de blog of home pagina';
if(isset($pqf_options['title_404']) && !empty($pqf_options['title_404']))
{
	$title_text = $pqf_options['title_404'];
}

if(isset($pqf_options['description_404']) && !empty($pqf_options['description_404']))
{
	$desc_text = $pqf_options['description_404'];
}

?>
<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="pt-not-found">
				<div class="page-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="pt-error-block">


							<div class="pt-errot-text">404</div>
							<h2><?php echo  esc_html($title_text); ?></h2>
							<p>Oeps! Deze pagina vonden we niet.</p>
							<div class="pt-btn-block">


							 	<div class="pt-btn-container">	
					              <a href="<?php echo esc_url(home_url()); ?>" class="pt-button">
					              	<div class="pt-button-block">
					                  <span  class="pt-button-text">Terug naar homepagina</span>
					                  <i class="ion ion-plus-round"></i>
					                </div>
					              </a>
					             
            					</div>



								</div>

							</div>
						</div>
					</div>
				</div><!-- .page-content -->
			</div><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .container -->

<?php get_footer();