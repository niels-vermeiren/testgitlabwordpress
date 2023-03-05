<?php
add_action( 'wp_head', 'medicate_core_banner_style');
add_action( 'wp_head', 'medicate_core_header_style');
add_action( 'wp_head', 'medicate_core_top_heder_style');
add_action( 'wp_head', 'medicate_core_loader_style');
add_action( 'wp_head', 'medicate_core_back_to_top_style');
add_action( 'wp_head', 'medicate_core_logo_style');
add_action( 'wp_head', 'medicate_core_top_menu_style');
add_action( 'wp_head', 'medicate_core_footer_style');

add_action( 'wp_head', 'medicate_typo');

function medicate_typo()
{
	$pqf_options = get_option('pqf_options'); 
	$inline_css = '';

	if(isset($pqf_options['pt_custom_typo']) && $pqf_options['pt_custom_typo'] == 'yes')
	{	
		if($pqf_options['h1_typo'])
		{
			$typo = $pqf_options['h1_typo'];

			if((!$typo['font-family'] == '') || (!$typo['text-transform'] == '') || (!$typo['font-size'] == ''))
			{
				if(!empty($typo['font-family']))
				{
					$inline_css .= 'font-family:'.$typo['font-family'] .' !important;';
				}
				if(!empty($typo['text-transform']))
				{
					$inline_css .= 'text-transform:'.$typo['text-transform'] .' !important;';
				}
				if(!empty($typo['font-size']))
				{
					$inline_css .= 'font-size:'.$typo['font-size'] .' !important;';
				}
				wp_register_style( 'h1-handle', false );
				wp_enqueue_style( 'h1-handle' );

				wp_add_inline_style( 'h1-handle', 'body h1 { '.$inline_css.' }' );
			}
		}
		if($pqf_options['h2_typo'])
		{
			$typo = $pqf_options['h2_typo'];

			if((!$typo['font-family'] == '') || (!$typo['text-transform'] == '') || (!$typo['font-size'] == ''))
			{	
				if(!empty($typo['font-family']))
				{
					$inline_css .= 'font-family:'.$typo['font-family'] .' !important;';
				}
				if(!empty($typo['text-transform']))
				{
					$inline_css .= 'text-transform:'.$typo['text-transform'] .' !important;';
				}
				if(!empty($typo['font-size']))
				{
					$inline_css .= 'font-size:'.$typo['font-size'] .' !important;';
				}
				wp_register_style( 'h2-handle', false );
				wp_enqueue_style( 'h2-handle' );

				wp_add_inline_style( 'h2-handle', 'body h2 { '.$inline_css.' }' );
			}
				
		}
		if($pqf_options['h3_typo'])
		{
			$typo = $pqf_options['h3_typo'];

			if((!$typo['font-family'] == '') || (!$typo['text-transform'] == '') || (!$typo['font-size'] == ''))
			{			
				if(!empty($typo['font-family']))
				{
					$inline_css .= 'font-family:'.$typo['font-family'] .' !important;';
				}
				if(!empty($typo['text-transform']))
				{
					$inline_css .= 'text-transform:'.$typo['text-transform'] .' !important;';
				}
				if(!empty($typo['font-size']))
				{
					$inline_css .= 'font-size:'.$typo['font-size'] .' !important;';
				}
				wp_register_style( 'h3-handle', false );
				wp_enqueue_style( 'h3-handle' );

				wp_add_inline_style( 'h3-handle', 'body h3 { '.$inline_css.' }' );
			}
		}
		if($pqf_options['h4_typo'])
		{
			$typo = $pqf_options['h4_typo'];

			if((!$typo['font-family'] == '') || (!$typo['text-transform'] == '') || (!$typo['font-size'] == ''))
			{
				if(!empty($typo['font-family']))
				{
					$inline_css .= 'font-family:'.$typo['font-family'] .' !important;';
				}
				if(!empty($typo['text-transform']))
				{
					$inline_css .= 'text-transform:'.$typo['text-transform'] .' !important;';
				}
				if(!empty($typo['font-size']))
				{
					$inline_css .= 'font-size:'.$typo['font-size'] .' !important;';
				}
				wp_register_style( 'h4-handle', false );
				wp_enqueue_style( 'h4-handle' );

				wp_add_inline_style( 'h4-handle', 'body h4 { '.$inline_css.' }' );
			}
		}
		if($pqf_options['h5_typo'])
		{
			$typo = $pqf_options['h5_typo'];

			if((!$typo['font-family'] == '') || (!$typo['text-transform'] == '') || (!$typo['font-size'] == ''))
			{			
				if(!empty($typo['font-family']))
				{
					$inline_css .= 'font-family:'.$typo['font-family'] .' !important;';
				}
				if(!empty($typo['text-transform']))
				{
					$inline_css .= 'text-transform:'.$typo['text-transform'] .' !important;';
				}
				if(!empty($typo['font-size']))
				{
					$inline_css .= 'font-size:'.$typo['font-size'] .' !important;';
				}
				wp_register_style( 'h5-handle', false );
				wp_enqueue_style( 'h5-handle' );

				wp_add_inline_style( 'h5-handle', 'body h5 { '.$inline_css.' }' );
			}
			
		}
		if($pqf_options['h6_typo'])
		{
			$typo = $pqf_options['h6_typo'];

			if((!$typo['font-family'] == '') || (!$typo['text-transform'] == '') || (!$typo['font-size'] == ''))
			{			
				if(!empty($typo['font-family']))
				{
					$inline_css .= 'font-family:'.$typo['font-family'] .' !important;';
				}
				if(!empty($typo['text-transform']))
				{
					$inline_css .= 'text-transform:'.$typo['text-transform'] .' !important;';
				}
				if(!empty($typo['font-size']))
				{
					$inline_css .= 'font-size:'.$typo['font-size'] .' !important;';
				}
				wp_register_style( 'h6-handle', false );
				wp_enqueue_style( 'h6-handle' );

				wp_add_inline_style( 'h6-handle', 'body h6 { '.$inline_css.' }' );			
			}
		}
		if($pqf_options['body_typo'])
		{
			$typo = $pqf_options['body_typo'];

			if((!$typo['font-family'] == '') || (!$typo['text-transform'] == '') || (!$typo['font-size'] == ''))
			{
				if(!empty($typo['font-family']))
				{
					$inline_css .= 'font-family:'.$typo['font-family'] .' !important;';
				}
				if(!empty($typo['text-transform']))
				{
					$inline_css .= 'text-transform:'.$typo['text-transform'] .' !important;';
				}
				if(!empty($typo['font-size']))
				{
					$inline_css .= 'font-size:'.$typo['font-size'] .' !important;';
				}
				wp_register_style( 'body-handle', false );
				wp_enqueue_style( 'body-handle' );

				wp_add_inline_style( 'body-handle', 'body { '.$inline_css.' }' );
				wp_add_inline_style( 'body-handle', 'body h1 { '.$inline_css.' }' );
				wp_add_inline_style( 'body-handle', 'body h2 { '.$inline_css.' }' );
				wp_add_inline_style( 'body-handle', 'body h3 { '.$inline_css.' }' );
				wp_add_inline_style( 'body-handle', 'body h4 { '.$inline_css.' }' );
				wp_add_inline_style( 'body-handle', 'body h5 { '.$inline_css.' }' );
				wp_add_inline_style( 'body-handle', 'body h6 { '.$inline_css.' }' );
				wp_add_inline_style( 'body-handle', 'body a { '.$inline_css.' }' );
				wp_add_inline_style( 'body-handle', 'body span { '.$inline_css.' }' );
				wp_add_inline_style( 'body-handle', 'body input { '.$inline_css.' }' );
				wp_add_inline_style( 'body-handle', 'body li { '.$inline_css.' }' );
			}
		}
		
	}
	
}
function medicate_core_footer_style()
{
	$pqf_options = get_option('pqf_options');
	$css = array();

	if(function_exists('get_field') && get_field('field_QnFEb565') != 'inherit')
  	{
  		if(get_field('field_QnFEb565') == 'yes')
  		{
  			   $css[] = array (
				'element' => 'footer#pt-footer',
				'property' => 'display',
				'value' =>  'none !important'
				);
  		}
  	}

	if(isset($pqf_options['footer_back_opt_switch']) && $pqf_options['footer_back_opt_switch'] != 'none')
	{
		if($pqf_options['footer_back_opt_switch'] == 'image')
		{
			if(!empty($pqf_options['footer_back_img']['url']))
			{
				$data = $pqf_options['footer_back_img']['url'];
				$css[] = array (
				'element' => 'footer#pt-footer:before',
				'property' => 'background-image',
				'value' =>  'url('.$data.')!important'
				);
			}
		}
		if($pqf_options['footer_back_opt_switch'] == 'color')
		{
			if(!empty($pqf_options['footer_back_color']))
			{
				$data = $pqf_options['footer_back_color'];
				$css[] = array (
				'element' => 'footer#pt-footer',
				'property' => 'background',
				'value' => $data . '!important'
				);
			}
		}
	}
	if(count($css))
	{
		medicate_core_print_css($css);
	}
}
function medicate_core_top_menu_style()
{
	$pqf_options = get_option('pqf_options');
	$css = array();
	if(isset($pqf_options['menu_normal_color']) && !empty($pqf_options['menu_normal_color']))
	{
		$data = $pqf_options['menu_normal_color'];
		$css[] = array (
		'element' => 'header#pt-header .pt-bottom-header .navbar .navbar-nav li a, header#pt-header .pt-bottom-header .navbar .navbar-nav li i',
		'property' => 'color',
		'value' => $data.'!important'
		);
	}
	if(isset($pqf_options['menu_hover_color']) && !empty($pqf_options['menu_hover_color']))
	{
		$data = $pqf_options['menu_hover_color'];
		$css[] = array (
		'element' => 'header#pt-header .pt-bottom-header .navbar .navbar-nav li:hover a , header#pt-header .pt-bottom-header .navbar .navbar-nav li:hover i',
		'property' => 'color',
		'value' => $data.'!important'
		);
	}
	if(isset($pqf_options['menu_active_color']) && !empty($pqf_options['menu_active_color']))
	{
		$data = $pqf_options['menu_active_color'];
		$css[] = array (
		'element' => 'header#pt-header .pt-bottom-header .navbar .navbar-nav li.current-menu-item a, header#pt-header .pt-bottom-header .navbar .navbar-nav li.current_page_item a,header#pt-header .pt-bottom-header .navbar .navbar-nav li.current-menu-item i, header#pt-header .pt-bottom-header .navbar .navbar-nav li.current_page_item i',
		'property' => 'color',
		'value' => $data.'!important'
		);
	}
	// sub menu color
	if(isset($pqf_options['sub_menu_normal_color']) && !empty($pqf_options['sub_menu_normal_color']))
	{
		$data = $pqf_options['sub_menu_normal_color'];
		$css[] = array (
		'element' => 'header#pt-header .pt-bottom-header .navbar .navbar-nav li .sub-menu li a',
		'property' => 'color',
		'value' => $data.'!important'
		);
	}
	if(isset($pqf_options['sub_menu_hover_color']) && !empty($pqf_options['sub_menu_hover_color']))
	{
		$data = $pqf_options['sub_menu_hover_color'];
		$css[] = array (
		'element' => 'header#pt-header .pt-bottom-header .navbar .navbar-nav li .sub-menu li a:hover',
		'property' => 'color',
		'value' => $data.'!important'
		);
	}
	if(isset($pqf_options['sub_menu_active_color']) && !empty($pqf_options['sub_menu_active_color']))
	{
		$data = $pqf_options['sub_menu_active_color'];
		$css[] = array (
		'element' => 'header#pt-header .pt-bottom-header .navbar .navbar-nav li .sub-menu li.current-menu-item a',
		'property' => 'color',
		'value' => $data.'!important'
		);
	}

	if(isset($pqf_options['sub_menu_background_color']) && !empty($pqf_options['sub_menu_background_color']))
	{
		$data = $pqf_options['sub_menu_background_color'];
		$css[] = array (
		'element' => 'header#pt-header .pt-bottom-header .navbar .navbar-nav li .sub-menu',
		'property' => 'background',
		'value' => $data.'!important'
		);
	}
	if(isset($pqf_options['sub_menu_background_active_color']) && !empty($pqf_options['sub_menu_background_active_color']))
	{
		$data = $pqf_options['sub_menu_background_active_color'];
		$css[] = array (
		'element' => 'header#pt-header .pt-bottom-header .navbar .navbar-nav li .sub-menu li.current-menu-item a',
		'property' => 'background',
		'value' => $data.'!important'
		);
	}
	if(isset($pqf_options['sub_menu_background_hover_color']) && !empty($pqf_options['sub_menu_background_hover_color']))
	{
		$data = $pqf_options['sub_menu_background_hover_color'];
		$css[] = array (
		'element' => 'header#pt-header .pt-bottom-header .navbar .navbar-nav li .sub-menu li a:hover',
		'property' => 'background',
		'value' => $data.'!important'
		);
	}


	if(isset($pqf_options['action_back_color']) && !empty($pqf_options['action_back_color']))
	{
		$data = $pqf_options['action_back_color'];
		$css[] = array (
		'element' => 'header#pt-header.pt-header-default .pt-btn-container .pt-button',
		'property' => 'background',
		'value' => $data,
		'responsive' => false
		);
	}
	if(isset($pqf_options['action_back_hover_color']) && !empty($pqf_options['action_back_hover_color']))
	{
		$data = $pqf_options['action_back_hover_color'];
		$css[] = array (
		'element' => 'header#pt-header.pt-header-default .pt-btn-container .pt-button:hover',
		'property' => 'background',
		'value' => $data,
		'responsive' => false
		);
	}
	if(isset($pqf_options['action_text_color']) && !empty($pqf_options['action_text_color']))
	{
		$data = $pqf_options['action_text_color'];
		$css[] = array (
		'element' => 'header#pt-header .pt-bottom-header .pt-button',
		'property' => 'color',
		'value' => $data,
		'responsive' => false
		);
	}
	if(isset($pqf_options['action_text_hover_color']) && !empty($pqf_options['action_text_hover_color']))
	{
		$data = $pqf_options['action_text_hover_color'];
		$css[] = array (
		'element' => 'header#pt-header .pt-bottom-header .pt-button:hover',
		'property' => 'color',
		'value' => $data,
		'responsive' => false
		);
	}

	if(count($css))
	{
		medicate_core_print_css($css);
	}
}
function medicate_core_logo_style()
{
	$pqf_options = get_option('pqf_options');
	$css = array();
	if(isset($pqf_options['logo_type']))
	{
		if($pqf_options['logo_type'] == 'image')
        {
        	if(!empty($pqf_options['logo_url']['url']))
            {
            	if(!empty($pqf_options['logo_dimensions']['height']) && preg_match('~[0-9]+~',$pqf_options['logo_dimensions']['height']))
            	{
            		$data = $pqf_options['logo_dimensions']['height'];

            		$css[] = array (
					'element' => '#pt-header img.logo',
					'property' => 'height',
					'value' => $data.'!important'
					);
            	}
            	if(!empty($pqf_options['logo_dimensions']['width']) && preg_match('~[0-9]+~',$pqf_options['logo_dimensions']['width']))
            	{
            		$data = $pqf_options['logo_dimensions']['width'];

            		$css[] = array (
					'element' => '#pt-header img.logo',
					'property' => 'width',
					'value' => $data.'!important'
					);
            	}

            }
        }
        if($pqf_options['logo_type'] == 'text')
        {
        	if(!empty($pqf_options['header_logo_text']))
            {
            	if(!empty($pqf_options['header_logo_color']))
            	{
            		$data = $pqf_options['header_logo_color'];
            		$css[] = array (
					'element' => '#pt-header .pt-logo-text',
					'property' => 'color',
					'value' => $data.'!important'
					);
            	}

            }
        }
	}
	if(count($css))
	{
		medicate_core_print_css($css);
	}

}
function medicate_core_back_to_top_style()
{
	$pqf_options = get_option('pqf_options');
	$css = array();
	 if(isset($pqf_options['back_to_top']))
     {
        if($pqf_options['back_to_top'] == 'no')
        {

    		$css[] = array (
			'element' => '#back-to-top',
			'property' => 'display',
			'value' => 'none !important'
			);
        }
        if($pqf_options['back_to_top'] == 'yes')
        {

        	if(!empty($pqf_options['back_top_background_color']))
        	{

        			$data = $pqf_options['back_top_background_color'];
        			$css[] = array (
					'element' => '#back-to-top .top',
					'property' => 'background',
					'value' => $data . '!important'
					);


        	}
        	if(!empty($pqf_options['back_top_background_color_hover']))
        	{
        		$data = $pqf_options['back_top_background_color_hover'];
        		$css[] = array (
				'element' => '#back-to-top .top:hover',
				'property' => 'background',
				'value' => $data.'!important'
				);
        	}
        }

     }
  	if(count($css))
	{
		medicate_core_print_css($css);
	}
}
function medicate_core_loader_style()
{
	$pqf_options = get_option('pqf_options');
	$css = array();
	 if(!empty($pqf_options['loader_background_color']))
     {
        $data = $pqf_options['loader_background_color'];
    	$css[] = array (
		'element' => '#pt-loading',
		'property' => 'background',
		'value' => $data.'!important'
		);
     }
     if(isset($pqf_options['html_loaders']) && $pqf_options['loader_switch'] == 'loader' &&!empty($pqf_options['multi_loader_color']) )
     {
     
        $data = $pqf_options['multi_loader_color'];

        if($pqf_options['html_loaders'] == 'loader-two')
        {
	    	$css[] = array (
			'element' => '#pt-loading #pt-loading-center .lds-dual-ring::after',
			'property' => 'border-color',
			'value' => $data.'  transparent !important'
			);              	
        }
        elseif($pqf_options['html_loaders'] == 'loader-four')
        {
			$css[] = array (
			'element' => '#pt-loading #pt-loading-center>div>div::before',
			'property' => 'background',
			'value' => $data.' !important'
			);    	
			$css[] = array (
			'element' => '#pt-loading #pt-loading-center>div>div',
			'property' => 'background',
			'value' => $data.' !important'
			);		
			$css[] = array (
			'element' => '#pt-loading #pt-loading-center>div>div::after',
			'property' => 'background',
			'value' => $data.' !important'
			);       	
        }        
        elseif($pqf_options['html_loaders'] == 'loader-five')
        {
	    	$css[] = array (
			'element' => '#pt-loading #pt-loading-center>div>div',
			'property' => 'border-color',
			'value' => $data.' transparent transparent transparent !important'
			);     	
        }        
        elseif($pqf_options['html_loaders'] == 'loader-six' || $pqf_options['html_loaders'] == 'loader-eight')
        {
			$css[] = array (
			'element' => '#pt-loading #pt-loading-center>div>div::after',
			'property' => 'background',
			'value' => $data.' !important'
			);    	
        }
        else
        {
	    	$css[] = array (
			'element' => '#pt-loading #pt-loading-center>div>div',
			'property' => 'background',
			'value' => $data.' !important'
			);
    	}
     }     
	if(isset($pqf_options['loader_switch']))
    {
    	if($pqf_options['loader_switch'] == 'text')
        {
        	if(!empty($pqf_options['loader_text']))
            {
            	$data = $pqf_options['loader_color'];
            	$css[] = array (
				'element' => '#pt-loading .pt-loader-text',
				'property' => 'color',
				'value' => $data.'!important'
				);
            }
        }
     	if($pqf_options['loader_switch'] == 'image')
        {

            if(!empty($pqf_options['background_loader']['url']))
            {
            	if(!empty($pqf_options['loader_dimensions']['height']) && preg_match('~[0-9]+~',$pqf_options['loader_dimensions']['height']))
            	{
            		$data = $pqf_options['loader_dimensions']['height'];

            		$css[] = array (
					'element' => '#pt-loading img',
					'property' => 'height',
					'value' => $data.'!important'
					);
            	}
            	if(!empty($pqf_options['loader_dimensions']['width']) && preg_match('~[0-9]+~',$pqf_options['loader_dimensions']['width']))
            	{
            		$data = $pqf_options['loader_dimensions']['width'];

            		$css[] = array (
					'element' => '#pt-loading img',
					'property' => 'width',
					'value' => $data.'!important'
					);
            	}

            }
        }
    }
    if(count($css))
	{
		medicate_core_print_css($css);
	}
}
function medicate_core_banner_style()
{
	$pqf_options = get_option('pqf_options');
	$css = array();

	if(function_exists('get_field') && get_field('field_QnF23') != 'inherit')
  	{
  		if(get_field('field_QnF23') == 'no')
  		{
  			    $css[] = array (
				'element' => '.content-area .site-main',
				'property' => 'padding',
				'value' =>  '0 !important;'
				);

  		}
  	}
	if(function_exists('get_field') && get_field('field_QnFE45b565') != 'inherit')
  	{
  		if(get_field('field_QnFE45b565') == 'yes')
  		{

  			   $css[] = array (
				'element' => '.pt-breadcrumb',
				'property' => 'display',
				'value' =>  'none !important;'
				);

  			    $css[] = array (
				'element' => '.content-area .site-main',
				'property' => 'padding',
				'value' =>  '0 !important;'
				);

  		}
  	}

	else if(isset($pqf_options['enable_banner']) && $pqf_options['enable_banner'] == 'no')
	{
		$css[] = array (
		'element' => '.pt-breadcrumb',
		'property' => 'display',
		'value' => 'none !important'
		);
	}
	if(isset($pqf_options['display_breadcrumbs']) && $pqf_options['display_breadcrumbs'] == 'no')
	{
		$css[] = array (
		'element' => '.pt-breadcrumb .pt-breadcrumb-container',
		'property' => 'display',
		'value' => 'none !important'
		);
	}
	if(isset($pqf_options['breadcrumbs_color']) && !empty($pqf_options['breadcrumbs_color']))
	{
		$data = $pqf_options['breadcrumbs_color'];
		$css[] = array (
		'element' => '.pt-breadcrumb-container .breadcrumb li a',
		'property' => 'color',
		'value' => $data . '!important'
		);
	}
	if(isset($pqf_options['breadcrumbs_hover_color']) && !empty($pqf_options['breadcrumbs_hover_color']))
	{
		$data = $pqf_options['breadcrumbs_hover_color'];
		$css[] = array (
		'element' => '.pt-breadcrumb-container .breadcrumb li a:hover',
		'property' => 'color',
		'value' => $data . '!important'
		);
	}
	if(isset($pqf_options['breadcrumbs_active_color']) && !empty($pqf_options['breadcrumbs_active_color']))
	{
		$data = $pqf_options['breadcrumbs_active_color'];
		$css[] = array (
		'element' => '.pt-breadcrumb-container .breadcrumb li.active',
		'property' => 'color',
		'value' => $data . '!important'
		);
	}
	if(isset($pqf_options['breadcrumbs_indicator_color']) && !empty($pqf_options['breadcrumbs_indicator_color']))
	{
		$data = $pqf_options['breadcrumbs_indicator_color'];
		$css[] = array (
		'element' => '.pt-breadcrumb-container .breadcrumb .breadcrumb-item + .breadcrumb-item::before',
		'property' => 'color',
		'value' => $data . '!important'
		);
	}
	if(isset($pqf_options['display_title']) && $pqf_options['display_title'] == 'no')
	{
		$css[] = array (
		'element' => '.pt-breadcrumb .pt-breadcrumb-title',
		'property' => 'display',
		'value' => 'none !important'
		);
	}
	if(isset($pqf_options['title_color']) && !empty($pqf_options['title_color']))
	{
		$data = $pqf_options['title_color'];
		$css[] = array (
		'element' => '.pt-breadcrumb-container .breadcrumb li',
		'property' => 'color',
		'value' => $data . '!important'
		);
	}

	if(isset($pqf_options['banner_back_type']))
	{
		if($pqf_options['banner_back_type'] == 'color')
		{
			if(!empty($pqf_options['banner_back_color']))
			{
				$data = $pqf_options['banner_back_color'];
				$css[] = array (
				'element' => '.pt-breadcrumb',
				'property' => 'background',
				'value' => $data . '!important'
				);
			}
		}
		if($pqf_options['banner_back_type'] == 'image')
		{
			if(!empty($pqf_options['banner_image']['url']))
			{
				$data = $pqf_options['banner_image']['url'];
				$css[] = array (
				'element' => '.pt-breadcrumb',
				'property' => 'background-image',
				'value' =>  'url('.$data.')!important'
				);
			}
		}
	}
	if(count($css))
	{
		medicate_core_print_css($css);
	}


}
function medicate_core_header_style()
{
	$pqf_options = get_option('pqf_options');
	$css = array();



	if(function_exists('get_field') && get_field('field_QnF1Eb565') != 'inherit')
  	{
  		if(get_field('field_QnF1Eb565') == 'yes')
  		{
  			   $css[] = array (
				'element' => 'header#pt-header',
				'property' => 'display',
				'value' =>  'none !important'
				);

  		}
  	}
	if(isset($pqf_options['header_back_opt_switch']) && $pqf_options['header_back_opt_switch'] != 'none')
	{
		if($pqf_options['header_back_opt_switch'] == 'image')
		{
			if(!empty($pqf_options['header_back_img']['url']))
			{
				$data = $pqf_options['header_back_img']['url'];
				$css[] = array (
				'element' => 'header .pt-bottom-header',
				'property' => 'background',
				'value' =>  'url('.$data.')!important'
				);
			}
		}
		if($pqf_options['header_back_opt_switch'] == 'color')
		{
			if(!empty($pqf_options['header_back_color']))
			{
				$data = $pqf_options['header_back_color'];
				$css[] = array (
				'element' => 'header .pt-bottom-header',
				'property' => 'background',
				'value' => $data . '!important'
				);
			}
		}
		if($pqf_options['header_back_opt_switch'] == 'transparent')
		{

				$css[] = array (
				'element' => 'header .pt-bottom-header',
				'property' => 'background',
				'value' => 'transparent !important'
				);

		}
		if($pqf_options['header_back_opt_switch'] == 'dark')
		{

				$css[] = array (
				'element' => 'header .pt-bottom-header',
				'property' => 'background',
				'value' => 'black !important'
				);

		}
		if($pqf_options['header_back_opt_switch'] == 'white')
		{

				$css[] = array (
				'element' => 'header .pt-bottom-header',
				'property' => 'background',
				'value' => 'white !important'
				);

		}

	}

	if(isset($pqf_options['header_contact_enable']) && $pqf_options['header_contact_enable'] == 'no')
	{
		$css[] = array (
		'element' => '#pt-header .pt-header-call',
		'property' => 'display',
		'value' => 'none !important'
		);
	}

    if(function_exists('get_field') && get_field('field_QnF1Ebspxx') != 'inherit')
  	{	
  		if(get_field('field_QnF1Ebspxx') == 'no')
  		{
  			$css[] = array (
			'element' => '#pt-header .pt-menu-search-block a',
			'property' => 'display',
			'value' => 'none !important'
			);
  		}
    }
	else if(isset($pqf_options['header_search_enable']) && $pqf_options['header_search_enable'] == 'no')
	{
		$css[] = array (
		'element' => '#pt-header .pt-menu-search-block a',
		'property' => 'display',
		'value' => 'none !important'
		);
	}

	if(isset($pqf_options['header_sidebar_enable']) && $pqf_options['header_sidebar_enable'] == 'no')
	{
		$css[] = array (
		'element' => 'header#pt-header.pt-header-style-2 .pt-toggle-btn',
		'property' => 'display',
		'value' => 'none !important'
		);

		$css[] = array (
		'element' => 'header#pt-header.pt-header-style-5 .pt-toggle-btn',
		'property' => 'display',
		'value' => 'none !important'
		);
	}

    
	if(function_exists('get_field') && get_field('field_QnF1Ebspp') != 'inherit')
  	{	
  		if(get_field('field_QnF1Ebspp') == 'no')
  		{
  			$css[] = array (
			'element' => '#pt-header .pt-btn-container',
			'property' => 'display',
			'value' => 'none !important'
			);
  		}
    }
	else if(isset($pqf_options['header_action_enable']) && $pqf_options['header_action_enable'] == 'no')
	{
		$css[] = array (
		'element' => '#pt-header .pt-btn-container',
		'property' => 'display',
		'value' => 'none !important'
		);
	}

	if(isset($pqf_options['header_sidebar_enable']) && $pqf_options['header_sidebar_enable'] == 'yes')
	    {

        	if(!empty($pqf_options['sidebar_logo']['url']))
            {
            	if(!empty($pqf_options['sidebar_logo_dimenation']['height']) && preg_match('~[0-9]+~',$pqf_options['sidebar_logo_dimenation']['height']))
            	{
            		$data = $pqf_options['sidebar_logo_dimenation']['height'];

            		$css[] = array (
					'element' => '.pt-sidebar-header img.pt-sidebar-logo',
					'property' => 'height',
					'value' => $data.'!important'
					);
            	}
            	if(!empty($pqf_options['sidebar_logo_dimenation']['width']) && preg_match('~[0-9]+~',$pqf_options['sidebar_logo_dimenation']['width']))
            	{
            		$data = $pqf_options['sidebar_logo_dimenation']['width'];

            		$css[] = array (
					'element' => '.pt-sidebar-header img.pt-sidebar-logo',
					'property' => 'width',
					'value' => $data.'!important'
					);
            	}

            }
        }

	if(count($css))
	{
		medicate_core_print_css($css);
	}
}
function medicate_core_top_heder_style()
{

	$pqf_options = get_option('pqf_options');
	get_field('field_QnF1Ebs');
	$css = array();


	if ( function_exists('get_field') && get_field('field_QnF1Ebs') == 'no' )
	{
			$css[] = array (
			'element' => 'header#pt-header .pt-top-header ',
			'property' => 'display',
			'value' =>  'none !important'
			);
	}

	if(isset($pqf_options['medicate_core_social_switch']))
	{
		if(!$pqf_options['medicate_core_social_switch'])
		{
			$css[] = array (
			'element' => 'header#pt-header .pt-top-header .pt-header-social ul',
			'property' => 'display',
			'value' =>  'none !important'
			);

		}
	}
	if(isset($pqf_options['medicate_core_contact_switch']))
	{
		if(!$pqf_options['medicate_core_contact_switch'])
		{
			$css[] = array (
			'element' => 'header#pt-header .pt-top-header .pt-header-contact ul li a',
			'property' => 'display',
			'value' =>  'none !important'
			);

		}
	}

	if(isset($pqf_options['top_header_enable']))
	{
		if($pqf_options['top_header_enable'] == 'no')
		{

			$css[] = array (
			'element' => 'header .pt-top-header',
			'property' => 'display',
			'value' =>  'none !important'
			);

		}
	}


	if(isset($pqf_options['top_header_back_type']) && $pqf_options['top_header_back_type'] != 'none')
	{
		if($pqf_options['top_header_back_type'] == 'image')
		{
			if(!empty($pqf_options['top_header_back_img']['url']))
			{
				$data = $pqf_options['top_header_back_img']['url'];
				$css[] = array (
				'element' => 'header .pt-top-header',
				'property' => 'background',
				'value' =>  'url('.$data.')!important'
				);
			}
		}
		if($pqf_options['top_header_back_type'] == 'color')
		{
			if(!empty($pqf_options['top_header_back_color']))
			{
				$data = $pqf_options['top_header_back_color'];
				$css[] = array (
				'element' => 'header .pt-top-header',
				'property' => 'background',
				'value' => $data . '!important'
				);
			}
		}
		if($pqf_options['top_header_back_type'] == 'transparent')
		{

				$css[] = array (
				'element' => 'header .pt-top-header',
				'property' => 'background',
				'value' => 'transparent !important'
				);

		}
		if($pqf_options['top_header_back_type'] == 'dark')
		{

				$css[] = array (
				'element' => 'header .pt-top-header',
				'property' => 'background',
				'value' => 'black !important'
				);

		}
		if($pqf_options['top_header_back_type'] == 'white')
		{

				$css[] = array (
				'element' => 'header .pt-top-header',
				'property' => 'background',
				'value' => 'white !important'
				);

		}
		if(isset($pqf_options['top_header_text_color']) && !empty($pqf_options['top_header_text_color']))
		{
			$data = $pqf_options['top_header_text_color'];
			$css[] = array (
			'element' => 'header .pt-top-header ul li a',
			'property' => 'color',
			'value' => $data . '!important'
			);
		}
		if(isset($pqf_options['top_header_text_hover_color']) && !empty($pqf_options['top_header_text_hover_color']))
		{
			$data = $pqf_options['top_header_text_hover_color'];
			$css[] = array (
			'element' => 'header .pt-top-header ul li a:hover',
			'property' => 'color',
			'value' => $data . '!important'
			);
		}
		if(isset($pqf_options['top_header_icon_color']) && !empty($pqf_options['top_header_icon_color']))
		{
			$data = $pqf_options['top_header_icon_color'];
			$css[] = array (
			'element' => 'header .pt-top-header ul li i',
			'property' => 'color',
			'value' => $data . '!important'
			);
		}
		if(isset($pqf_options['top_header_icon_hover_color']) && !empty($pqf_options['top_header_icon_hover_color']))
		{
			$data = $pqf_options['top_header_icon_hover_color'];
			$css[] = array (
			'element' => 'header .pt-top-header ul li i:hover',
			'property' => 'color',
			'value' => $data . '!important'
			);
		}
		if(function_exists('get_field') && !empty(get_field('key_pjros58985')) )
		{
			if (!empty(get_field('key_pjros58985')['ht_back_color'])) 
			{
				$css[] = array (
					'element' => 'header#pt-header',
					'property' => 'background',
					'value' => get_field('key_pjros58985')['ht_back_color'] .' !important'
				);
			}


		}


		if(function_exists('get_field') && !empty(get_field('key_pjros58985')) )
		{

			if (!empty(get_field('key_pjros58985')['ht_sticky_color'])) 
			{
				$css[] = array (
					'element' => 'header#pt-header.pt-header-default .pt-bottom-header.pt-header-sticky',
					'property' => 'background',
					'value' => get_field('key_pjros58985')['ht_sticky_color'].' !important'
				);
			}


		}


	//menu


		if(function_exists('get_field') && !empty(get_field('key_pjros58985')) )
		{

			if (!empty(get_field('key_pjros58985')['ht_normal_color'])) 
			{
				$css[] = array (
					'element' => 'header#pt-header .pt-bottom-header .navbar .navbar-nav li a,header#pt-header .pt-bottom-header .navbar .navbar-nav li i',
					'property' => 'color',
					'value' => get_field('key_pjros58985')['ht_normal_color'].' !important'
				);
			}


		}


		if(function_exists('get_field') && !empty(get_field('key_pjros58985')) )
		{

			if (!empty(get_field('key_pjros58985')['ht_active_color'])) 
			{
				$css[] = array (
					'element' => 'header#pt-header .pt-bottom-header .navbar .navbar-nav li.current-menu-item a, header#pt-header .pt-bottom-header .navbar .navbar-nav li.current_page_item a,header#pt-header .pt-bottom-header .navbar .navbar-nav li.current-menu-item i, header#pt-header .pt-bottom-header .navbar .navbar-nav li.current_page_item i',
					'property' => 'color',
					'value' => get_field('key_pjros58985')['ht_active_color'].' !important'
				);
			}


		}

		if(function_exists('get_field') && !empty(get_field('key_pjros58985')) )
		{

			if (!empty(get_field('key_pjros58985')['ht_act_bg_color'])) 
			{
				$css[] = array (
					'element' => 'header#pt-header .pt-bottom-header .navbar .navbar-nav li.current-menu-item a, header#pt-header .pt-bottom-header .navbar .navbar-nav li.current_page_item a,header#pt-header .pt-bottom-header .navbar .navbar-nav li.current-menu-item i, header#pt-header .pt-bottom-header .navbar .navbar-nav li.current_page_item i',
					'property' => 'background',
					'value' => get_field('key_pjros58985')['ht_act_bg_color'].' !important'
				);
			}


		}

		if(function_exists('get_field') && !empty(get_field('key_pjros58985')) )
		{

			if (!empty(get_field('key_pjros58985')['ht_sub_bg_color'])) 
			{
				$css[] = array (
					'element' => 'header#pt-header .pt-bottom-header .navbar .navbar-nav li .sub-menu li a',
					'property' => 'background',
					'value' => get_field('key_pjros58985')['ht_sub_bg_color'].' !important'
				);
			}
		}		
		
	}



	if(count($css))
	{
		medicate_core_print_css($css);
	}
}
function medicate_core_print_css($css)
{
	$str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$id = substr(str_shuffle(md5($str_result)),0, 5);

	echo '<style id="medicate-custom-style-'.$id.'">';
	foreach ( $css as $val ) {
        if ( ! empty( $val[ 'element' ] ) ) {
           echo  "\n" . html_entity_decode(esc_attr($val[ 'element' ])) . "{\n";
            echo esc_attr($val[ 'property' ]) . ":" . esc_attr($val[ 'value' ]) . ";\n";
            echo "}\n\n";
        }

        }
	echo '</style>';
}
?>