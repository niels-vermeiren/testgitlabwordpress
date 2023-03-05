<?php
namespace Elementor; 
if ( ! defined( 'ABSPATH' ) ) exit; 


$settings = $this->get_settings();
$html = '';

$tabs = $this->get_settings_for_display( 'tabs' );
$lists = $this->get_settings_for_display( 'list' );

$align = $settings['text_align'];



$this->add_render_attribute( 'btn_attr', 'class', 'pt-button' ); 


if($settings['btn_style'] == 'btn-flat')
{
  
  $this->add_render_attribute( 'btn_attr', 'class', 'pt-button-flat' ); 
}

if($settings['btn_style'] == 'btn-outline')
{
  
  $this->add_render_attribute( 'btn_attr', 'class', 'pt-button-outline' ); 
}

if($settings['btn_style'] == 'btn-link')
{
  
  $this->add_render_attribute( 'btn_attr', 'class', 'pt-button-link' ); 
}

$html .='<div class="pt-tabs-1">
			<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">'; 
foreach ( $tabs as $index => $item )
{
	

	if($index == 0)
	{
		$class = "active";
	}
	else
	{
		$class = "";
	}

   $html .= sprintf('<a class="pt-tabs nav-item nav-link '.esc_attr($class).'" 
							   id="nav-home-'.$index.'" data-bs-toggle="tab" 
							   href="#'.esc_attr('nav-'.$index).'" 
							   role="tab" aria-controls="nav-home-'.$index.'" 
							   aria-selected="true"><i class="%2$s"></i><span>%1$s</span></a>',esc_html($item['tab_title']), esc_attr($item['selected_icon']['value']) );

}


$html .= '</div>';
$html .= '<div class="tab-content text-'.esc_attr($align).'" id="nav-tabContent">';


$image_html ='';

foreach ( $tabs as $index => $item ){
	$row = 'row align-items-center';
	if ( ! empty( $item['image']['url'] ) ) {
		$image_html = sprintf('<img src="%1$s" class="pt-full-width" alt="seo-image" />',esc_url($item['image']['url']));
	}
	if($index == 0)
	{
		$class = "active";
	}
	else
	{
		$class = "";
	}
	if($index%2 != 0)
	{
		$row = 'row flex-row-reverse align-items-center';
	}

	if ( ! empty( $item['tab_btn_link']['url'] ) ) 
	{
	    $this->add_render_attribute( 'btn_attr'.$index, 'href', $item['tab_btn_link']['url'] );

	    if ( $item['tab_btn_link']['is_external'] ) {
	        $this->add_render_attribute( 'btn_attr'.$index, 'target', '_blank' );
	    }

	    if ( ! empty( $item['tab_btn_link']['nofollow'] ) ) {
	        $this->add_render_attribute( 'btn_attr'.$index, 'rel', 'nofollow' );
	    }
	}

	$html .= '<div class="tab-pane fade show  '.esc_attr($class).'" id="'.esc_attr('nav-'.$index).'" role="tabpanel" aria-labelledby="nav-home-'.$index.'">
				<div class="'.esc_attr($row).'">
					<div class="col-lg-6">
						'.$image_html.'
					</div>
					<div class="col-lg-6">
						<div class="pt-tab-info">
							<h2>'.esc_html($item['title_text']).'</h2>
							<p>'.esc_html($item['description_text']).'</p>';
							if(!empty($item['list']))
							{
								$html .= $this->parse_text_editor($item['list']);	
							}
							$html .= '<div class="pt-btn-container">
						    <div class="pt-button-block">
									<a '.$this->get_render_attribute_string('btn_attr').'  class="diensten-btn">
						       
									<span class="text">CONTACT OPNEMEN</span><i class="ion ion-plus-round"></i>
						  
									</a>
						    </div>  

						</div>';
						$html.='</div>
					</div>
				</div>			
					
  			  </div>';
  			  $image_html ='';

}

$html .= '</div></div>';
echo $html;
