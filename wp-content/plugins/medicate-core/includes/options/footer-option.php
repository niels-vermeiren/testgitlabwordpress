<?php
/*
 * Footer Options
 */

Redux::setSection( $options, array(
    'title' => esc_html__( 'Footer', 'Medicate-core' ),
    'id'    => 'footer-editor',
    'icon'  => 'eicon-footer',
    'customizer_width' => '500px',
) );

Redux::setSection( $options, array(
    'title' => esc_html__('Footer Logo','Medicate-core'),
    'id'    => 'footer-logo',

    'subsection' => true,
    'desc'  => esc_html__('This section contains options for footer.','Medicate-core'),
    'fields'=> array(

      array(
            'id' => 'info_L6N7VDM05M',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('This sectin contain options for Footer logo', 'Medicate-core-core') ,
        ) ,

        array(
            'id' => 'indentL6N7VDM05M',
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id'       => 'logo_footer',
            'type'     => 'media',
            'url'      => false,
            'title'    => esc_html__( 'Footer Logo','Medicate-core'),
            'default'  => array(
            'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
            ),

        ),

    )
));



Redux::setSection( $options, array(
    'title' => esc_html__('Footer Option','Medicate-core'),
    'id'    => 'footer-section',

    'subsection' => true,
    'fields'=> array(

        array(
            'id' => 'info_N7VDM05M',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('This section contains options for footer', 'Medicate-core') ,
        ) ,

        array(
            'id' => 'indent_N7VDM05M',
            'type' => 'section',
            'indent' => true
        ) ,



        array(
            'id'        => 'footer_layout',
            'type'      => 'select',
            'title'     => esc_html__( 'Footer Layout Type','Medicate-core' ),
            'subtitle'  => wp_kses( __( '<br />Choose among these structures (1column, 2column and 3column) for your footer section.<br />To filling these column sections you should go to appearance > widget.<br />And put every widget that you want in these sections.','Medicate-core' ), array( 'br' => array() ) ),
            'options'   => array(
                                '1' =>  esc_html__( 'Footer Layout 1','Medicate-core' ),
                                '2' =>  esc_html__( 'Footer Layout 2','Medicate-core' ),
                                '3' =>  esc_html__( 'Footer Layout 3','Medicate-core' ),
                                '4' =>  esc_html__( 'Footer Layout 4','Medicate-core' ),
                            ),
            'default'   => '4',
        ),
         array(
            'id' => 'footer_back_opt_switch',
            'type' => 'button_set',
            'title' => esc_html__('Background', 'Medicate-core') ,

            'options' => array(
                'none' => esc_html__('none', 'Medicate-core') ,
                'image' => esc_html__('Image', 'Medicate-core') ,
                'color' => esc_html__('Color', 'Medicate-core'),
            ) ,
            'default' => esc_html__('none', 'Medicate-core')
        ) ,
         array(
            'id' => 'footer_back_img',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Image', 'Medicate-core') ,
            'read-only' => false,
            'required' => array(
                'footer_back_opt_switch',
                '=',
                'image'
            ) ,
        ) ,

        array(
            'id' => 'footer_back_color',
            'type' => 'color',
            'title' => esc_html__('Color', 'Medicate-core') ,

            'mode' => 'background',
            'required' => array(
                'footer_back_opt_switch',
                '=',
                'color'
            ) ,
            'transparent' => false
        ) ,
    )
));

Redux::setSection( $options, array(
    'title'      => esc_html__( 'Footer Copyright', 'Medicate-core' ),
    'id'         => 'footer-copyright',

    'subsection' => true,
    'fields'     => array(
        array(
            'id' => 'info_7VDM05M',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('This section contains options Footer Copyright', 'Medicate-core') ,
        ) ,

        array(
            'id' => 'indent_7VDM05M',
            'type' => 'section',
            'indent' => true
        ) ,
        array(
            'id'        => 'copyright_text',
            'type'      => 'textarea',
            'title'     => esc_html__( 'Copyright Text','Medicate-core'),
            'default'   => esc_html__( 'Copyright '.date('Y').' medicate All Rights Reserved','Medicate-core'),
        ),

        // array(
        //     'id'        => 'medicate_reserved_text',
        //     'type'      => 'textarea',
        //     'title'     => esc_html__( 'Right Reserved Text','Medicate-core'),
        //     'default'   => esc_html__( 'All Rights Reserved','Medicate-core'),
        // ),


    ))
);

Redux::setSection( $options, array(
    'title'      => esc_html__( 'Subscribe', 'Medicate-core' ),
    'id'         => 'medicate-subscribe',
    
    'subsection' => true,
    'fields'     => array(

        array(
            'id' => 'info_7VM05M',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('This section contains options Subscription Block', 'Medicate-core') ,
        ) ,

        array(
            'id' => 'indent_7VM05M',
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id'        => 'footer_subscribe',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Subscribe','Medicate-core'),
            'subtitle' => esc_html__( 'Display Subscribe On All page', 'Medicate-core' ),
            'options'   => array(
                            'yes' => esc_html__('Yes','Medicate-core'),
                            'no' => esc_html__('No','Medicate-core')
                        ),
            'default'   => esc_html__('yes','Medicate-core')
        ),

          array(
            'id' => 'subscribe_img',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Subscription Image', 'Medicate-core') ,
            'read-only' => false,                        
            'required'  => array( 'footer_subscribe', '=', 'yes' ),
        ) ,

        array(
            'id'        => 'subscribe_title',
            'type'      => 'text',
            'title'     => esc_html__( 'Subscribe Title','Medicate-core'),
            'required'  => array( 'footer_subscribe', '=', 'yes' ),
            
        ),

        // array(
        //     'id'        => 'medicate_sub_description',
        //     'type'      => 'textarea',
        //     'title'     => esc_html__( 'Subscribe Description','Medicate-core'),
        //     'required'  => array( 'footer_subscribe', '=', 'yes' ),
            
        // ),

        array(
            'id'        => 'subscribe_shortcode',
            'type'      => 'text',
            'title'     => esc_html__( 'Subscribe Shortcode','Medicate-core'),
            'subtitle'  => wp_kses( __( '<br />Put you Mailchimp for WP Shortcode here','Medicate-core' ), array( 'br' => array() ) ),
            'required'  => array( 'footer_subscribe', '=', 'yes' ),
        ),
    )) 
);