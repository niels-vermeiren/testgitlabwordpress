<?php
/**
	Custom Color
**/
add_action( 'wp_head', 'Medicate_color_style');
function Medicate_color_style()
{
	$pqf_options = get_option('pqf_options');
	$style = '';
	if(isset($pqf_options['pt_custom_color']) && $pqf_options['pt_custom_color'] == 'yes' || function_exists('get_field') && get_field('field_QnFEb235656') == 'yes')
	{
		$style .= ':root {';

		$acf_colors = get_field('key_pjros5565');
		if (get_field('field_QnFEb235656') === 'no') 
			{
				$acf_colors = get_field('field_QnFEb235656');
				unset($acf_colors);
			}

		if(!empty($acf_colors['pt_primary_color']))
		{
			$style .= '--primary-color: '.$acf_colors['pt_primary_color'].' !important;';
		}
		else if(!empty($pqf_options['pt_primary_color']))
		{
			$style .= '--primary-color: '.$pqf_options['pt_primary_color'].' !important;';
		}

		if(!empty($acf_colors['pt_secondary_color']))
		{
			$style .= '--secondary-color: '.$acf_colors['pt_secondary_color'].' !important;';
		}
		else if(!empty($pqf_options['pt_secondary_color']))
		{
			$style .= '--secondary-color: '.$pqf_options['pt_secondary_color'].' !important;';
		}

		if(!empty($acf_colors['pt_dark_color']))
		{
			$style .= '--dark-color: '.$acf_colors['pt_dark_color'].' !important;';
		}
		else if(!empty($pqf_options['pt_dark_color']))
		{
			$style .= '--dark-color: '.$pqf_options['pt_dark_color'].' !important;';
		}

		if(!empty($acf_colors['pt_grey_color']))
		{
			$style .= '--grey-color: '.$acf_colors['pt_grey_color'].' !important;';
		}
		else if(!empty($pqf_options['pt_grey_color']))
		{
			$style .= '--grey-color: '.$pqf_options['pt_grey_color'].' !important;';
		}

		if(!empty($acf_colors['pt_white_color']))
		{
			$style .= '--white-color: '.$acf_colors['pt_white_color'].' !important;';
		}
		else if(!empty($pqf_options['pt_white_color']))
		{
			$style .= '--white-color: '.$pqf_options['pt_white_color'].' !important;';
		}

		if(!empty($acf_colors['pt_primary_dark_color']))
		{
			$style .= '--primary-dark-color: '.$acf_colors['pt_primary_dark_color'].' !important;';
		}
		else if(!empty($pqf_options['pt_primary_dark_color']))
		{
			$style .= '--primary-dark-color: '.$pqf_options['pt_primary_dark_color'].' !important;';
		}
		
		$style .= '}';

		wp_register_style( 'pt-color-style', false );
		wp_enqueue_style( 'pt-color-style' );

		wp_add_inline_style( 'pt-color-style', $style );
	}
}
?>