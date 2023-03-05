<?php
use peaceful\medicate\Helper;
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage medicate
 * @since 1.0
 * @version 1.0
 */

$pqf_options = get_option('pqf_options');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php
    if ( ! function_exists( 'has_site_icon' ) || ! wp_site_icon() ) {
      if( !empty($pqf_options['background_favicon']) ) { ?>
        <link rel="shortcut icon" href="<?php echo esc_url($pqf_options['background_favicon']['url']); ?>" />
   
        <?php
      }
      else{
        ?>
        <link rel="shortcut icon" href="<?php echo CONST_MEDICATE_ASSETS_URI.'img/ico.png' ?>" />
        
      <?php }
    }
wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <!-- loading -->
  <?php medicate_display_loader(); ?>

<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html__( 'Skip to content', 'medicate' ); ?></a>
<?php
  if(function_exists('get_field') && get_field('field_QnF1Eb') == 'yes')

  {

    $header_option = get_field('key_pjros');

      if($header_option['header_options'] == 'default')

      {

        get_template_part( 'template-parts/header/header', 'default' );

      }
      elseif($header_option['header_options'] == 'style-one')
      {

        get_template_part( 'template-parts/header/header', 'style-one' );

      }
      elseif($header_option['header_options'] == 'style-two')
      {

        get_template_part( 'template-parts/header/header', 'style-two' );

      }
      elseif($header_option['header_options'] == 'style-three')
      {

        get_template_part( 'template-parts/header/header', 'style-three' );

      } 
      elseif($header_option['header_options'] == 'style-four')
      {

        get_template_part( 'template-parts/header/header', 'style-four' );

      }  
      elseif($header_option['header_options'] == 'style-five')
      {

        get_template_part( 'template-parts/header/header', 'style-five' );

      }
      else

      {

        get_template_part( 'template-parts/header/header', 'default' );

      }

  }


  else if(class_exists('ReduxFramework'))

  {

    if(isset($pqf_options['pt_header_layout']))

    {

      if($pqf_options['pt_header_layout'] == 'default')

      {

        get_template_part( 'template-parts/header/header', 'default' );

      }
      elseif($pqf_options['pt_header_layout'] == 'style-one')
      {

        get_template_part( 'template-parts/header/header', 'style-one' );

      }
      elseif($pqf_options['pt_header_layout'] == 'style-two')
      {

        get_template_part( 'template-parts/header/header', 'style-two' );

      }
      elseif($pqf_options['pt_header_layout'] == 'style-three')
      {

        get_template_part( 'template-parts/header/header', 'style-three' );

      }
      elseif($pqf_options['pt_header_layout'] == 'style-four')
      {

        get_template_part( 'template-parts/header/header', 'style-four' );

      } 
      elseif($pqf_options['pt_header_layout'] == 'style-five')
      {

        get_template_part( 'template-parts/header/header', 'style-five' );

      }
      else
      {

        get_template_part( 'template-parts/header/header', 'default' );

      }

    }

  }
  else
      {

        get_template_part( 'template-parts/header/header', 'default' );

      }

?>
<?php Helper::instance()->display_header(); ?>
<div class="peacefulthemes-contain">
  <div class="site-content-contain">
    <div id="content" class="site-content">