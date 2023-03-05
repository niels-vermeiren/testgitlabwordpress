<?php
/*
 * Color Options
 */
Redux::setSection( $options, array(
    'title' => esc_html__('Typography','medicate-core'),
    'id'    => 'typo-section',
    'icon'       => 'el el-font',     

    'fields'=> array(

        array(
            'id' => 'info_N7VD051',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('This section contains options Typography', 'medicate-core') ,
        ) ,

        array(
            'id' => 'indent_N7VDM0M1',
            'type' => 'section',
            'indent' => true
        ) ,  
        array(
            'id'        => 'pt_custom_typo',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Use Custom Typography','medicate-core'),
            
            'options'   => array(
                            'yes' => esc_html__('Yes','medicate-core'),
                            'no' => esc_html__('No','medicate-core')
                        ),
            'default'   => esc_html__('no','medicate-core')
        ),      
        array(
            'id'          => 'h1_typo',
            'type'        => 'typography', 
            'title'       => __('H1', 'medicate-core'),
            'google'      => true, 
            'font-backup' => false,
            'font-size' => true,
            'line-height' => false,
            'font-style' => false,
            'font-weight' => false,
            'subset' => false,
            'text-align' => false,
            'text-transform' => true,
            'color' => false,        
            'units'       =>'px',        
            'default'     => array(
                ),
            'required' => array(
                'pt_custom_typo',
                '=',
                'yes'
            ) ,
        ),
        array(
            'id'          => 'h2_typo',
            'type'        => 'typography', 
            'title'       => __('H2', 'medicate-core'),
            'google'      => true, 
            'font-backup' => false,
            'font-size' => true,
            'line-height' => false,
            'font-style' => false,
            'font-weight' => false,
            'subset' => false,
            'text-align' => false,
            'text-transform' => true,
            'color' => false,        
            'units'       =>'px',        
            'default'     => array(
                ),
            'required' => array(
                'pt_custom_typo',
                '=',
                'yes'
            ) ,
        ),
        array(
            'id'          => 'h3_typo',
            'type'        => 'typography', 
            'title'       => __('H3', 'medicate-core'),
            'google'      => true, 
            'font-backup' => false,
            'font-size' => true,
            'line-height' => false,
            'font-style' => false,
            'font-weight' => false,
            'subset' => false,
            'text-align' => false,
            'text-transform' => true,
            'color' => false,        
            'units'       =>'px',        
            'default'     => array(
                ),
            'required' => array(
                'pt_custom_typo',
                '=',
                'yes'
            ) ,
        ),
        array(
            'id'          => 'h4_typo',
            'type'        => 'typography', 
            'title'       => __('H4', 'medicate-core'),
            'google'      => true, 
            'font-backup' => false,
            'font-size' => true,
            'line-height' => false,
            'font-style' => false,
            'font-weight' => false,
            'subset' => false,
            'text-align' => false,
            'text-transform' => true,
            'color' => false,        
            'units'       =>'px',        
            'default'     => array(
                ),
            'required' => array(
                'pt_custom_typo',
                '=',
                'yes'
            ) ,
        ),
        array(
            'id'          => 'h5_typo',
            'type'        => 'typography', 
            'title'       => __('H5', 'medicate-core'),
            'google'      => true, 
            'font-backup' => false,
            'font-size' => true,
            'line-height' => false,
            'font-style' => false,
            'font-weight' => false,
            'subset' => false,
            'text-align' => false,
            'text-transform' => true,
            'color' => false,        
            'units'       =>'px',        
            'default'     => array(
                ),
            'required' => array(
                'pt_custom_typo',
                '=',
                'yes'
            ) ,
        ),
        array(
            'id'          => 'h6_typo',
            'type'        => 'typography', 
            'title'       => __('H6', 'medicate-core'),
            'google'      => true, 
            'font-backup' => false,
            'font-size' => true,
            'line-height' => false,
            'font-style' => false,
            'font-weight' => false,
            'subset' => false,
            'text-align' => false,
            'text-transform' => true,
            'color' => false,        
            'units'       =>'px',        
            'default'     => array(
                ),
            'required' => array(
                'pt_custom_typo',
                '=',
                'yes'
            ) ,
        ),
        array(
            'id'          => 'body_typo',
            'type'        => 'typography', 
            'title'       => __('Body', 'medicate-core'),
            'google'      => true, 
            'font-backup' => false,
            'font-size' => true,
            'line-height' => false,
            'font-style' => false,
            'font-weight' => false,
            'subset' => false,
            'text-align' => false,
            'text-transform' => true,
            'color' => false,        
            'units'       =>'px',        
            'default'     => array(
                ),
            'required' => array(
                'pt_custom_typo',
                '=',
                'yes'
            ) ,
        ),
    )
));