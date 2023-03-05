<?php
/*
* Header Options
*/

Redux::setSection($options, array(
    'title' => esc_html__('Header', 'Medicate-core') ,
    'id' => 'section_230ac35',
    'icon' => 'eicon-header',
    'customizer_width' => '500px',
));

Redux::setSection($options, array(
    'title' => esc_html__('Layout', 'Medicate-core') ,
    'id' => 'section_09d4601',
    'subsection' => true,
    'desc' => esc_html__('Section For Customize Header', 'Medicate-core') ,
    'fields' => array(

        array(
            'id' => 'info__09d4601',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Header Layout Options', 'Medicate-core') ,
        ) ,

        array(
            'id' => 'indent_09d4601',
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id'        => 'pt_header_layout',
            'type'      => 'select',
            'title'     => esc_html__( 'Header Layout','Medicate-core' ),


            'options'   => array(
                'default' => esc_html__( 'Default','Medicate-core' ),
                'style-one' => esc_html__( 'Style One','Medicate-core' ),
                'style-two' => esc_html__( 'Style Two','Medicate-core' ),
                'style-three' => esc_html__( 'Style Three','Medicate-core' ),
                'style-four' => esc_html__( 'Style Four','Medicate-core' ),
                'style-five' => esc_html__( 'Style Five','Medicate-core' ),
            ),
            'default'   => 'default',
        ),

        array(
            'id' => 'sticky_header_enable',
            'type' => 'button_set',
            'title' => esc_html__('Sticky header', 'Medicate-core') ,

            'options' => array(
                'yes' => esc_html__('Yes', 'Medicate-core') ,
                'no' => esc_html__('No', 'Medicate-core')

            ) ,
            'default' => esc_html__('yes', 'Medicate-core'),
            
        ) ,
         //cart button
        array(
            'id' => 'header_cart_enable',
            'type' => 'button_set',
            'title' => esc_html__('Enable Cart Button', 'Medicate-core') ,

            'options' => array(
                'yes' => esc_html__('Yes', 'Medicate-core') ,
                'no' => esc_html__('No', 'Medicate-core')

            ) ,
            'default' => esc_html__('yes', 'Medicate-core'),
            'required' => array('pt_header_layout', '=', array('default','style-four','style-five')  ) ,
           
        ) ,


        array(
            'id' => 'header_search_enable',
            'type' => 'button_set',
            'title' => esc_html__('Enable Search Button', 'Medicate-core') ,

            'options' => array(
                'yes' => esc_html__('Yes', 'Medicate-core') ,
                'no' => esc_html__('No', 'Medicate-core')

            ) ,
            'default' => esc_html__('yes', 'Medicate-core'),
            
        ) ,

        array(
            'id' => 'header_action_enable',
            'type' => 'button_set',
            'title' => esc_html__('Enable Action Button', 'Medicate-core') ,

            'options' => array(
                'yes' => esc_html__('Yes', 'Medicate-core') ,
                'no' => esc_html__('No', 'Medicate-core')

            ) ,
            'default' => esc_html__('no', 'Medicate-core'),
            'required' => array('pt_header_layout', '=', array('default','stye-five')  ) ,
        ) ,

        array(
            'id' => 'action_btn_text',
            'type' => 'text',
            'title' => esc_html__('Action Button Text', 'Medicate-core') ,
            'required' => array('header_action_enable', '=', array('yes' ) ) ,

        ) ,

        array(
            'id' => 'action_btn_url',
            'type' => 'text',
            'title' => esc_html__('Action Button Url', 'Medicate-core') ,
            'required' => array('header_action_enable', '=', array('yes' ) ) ,

        ) ,

        array(
            'id' => 'action_back_color',
            'type' => 'color',
            'title' => esc_html__('Action Button Background', 'Medicate-core') ,

            'mode' => 'background',
            'required' => array(
                'header_action_enable',
                '=',
                'yes'
            ) ,
            'transparent' => false
        ) ,
          array(
            'id' => 'action_back_hover_color',
            'type' => 'color',
            'title' => esc_html__('Action Button Hover Background', 'Medicate-core') ,

            'mode' => 'background',
            'required' => array(
                'header_action_enable',
                '=',
                'yes'
            ) ,
            'transparent' => false
        ) ,

         array(
            'id' => 'action_text_color',
            'type' => 'color',
            'title' => esc_html__('Action Button Text', 'Medicate-core') ,

            'mode' => 'background',
            'required' => array(
                'header_action_enable',
                '=',
                'yes'
            ) ,
            'transparent' => false
        ) ,
            array(
            'id' => 'action_text_hover_color',
            'type' => 'color',
            'title' => esc_html__('Action Button Text Hover', 'Medicate-core') ,

            'mode' => 'background',
            'required' => array(
                'header_action_enable',
                '=',
                'yes'
            ) ,
            'transparent' => false
        ) ,

        // array(
        //     'id' => 'header_contact_enable',
        //     'type' => 'button_set',
        //     'title' => esc_html__('Enable Contact Number', 'Medicate-core') ,

        //     'options' => array(
        //         'yes' => esc_html__('Yes', 'Medicate-core') ,
        //         'no' => esc_html__('No', 'Medicate-core')

        //     ) ,
        //     'default' => esc_html__('yes', 'Medicate-core'),
        // ) ,

        // array(
        //     'id' => 'header_contact_text',
        //     'type' => 'text',
        //     'title' => esc_html__('Contact Text', 'Medicate-core') ,
        //     'required' => array('header_contact_enable', '=', array('yes' ) ) ,

        // ) ,
//Sidebar
        array(
            'id' => 'header_sidebar_enable',
            'type' => 'button_set',
            'title' => esc_html__('Enable Siderbar', 'Medicate-core') ,

            'options' => array(
                'yes' => esc_html__('Yes', 'Medicate-core') ,
                'no' => esc_html__('No', 'Medicate-core')

            ) ,
            'default' => esc_html__('yes', 'Medicate-core'),
            
        ) ,
        array(
            'id' => 'sidebar_logo',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Image', 'Medicate-core') ,
            'read-only' => false,
            'required' => array(
                'header_sidebar_enable',
                '=',
                'yes'
            ) ,
        ) ,

        array(
            'id' => 'sidebar_logo_dimenation',
            'type' => 'dimensions',
            'units' => array(
                'em',
                'px',
                '%'
            ) , // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true', // Allow users to select any type of unit
            'title' => esc_html__('Sidebar Logo (Width/Height) Option', 'Medicate-core') ,
            'required' => array(
                'header_sidebar_enable',
                '=',
                'yes'
            ) ,

            ) ,

        array(
            'id'        => 'sidebar_desc',
            'type'      => 'textarea',
            'title'    => __('Enter Description', 'Medicate-core'),
            'desc' => esc_html__('Enter Text', 'Medicate-core') ,
            'required' => array(
                'header_sidebar_enable',
                '=',
                'yes'
            ) ,
        ),

        array(
            'id' => 'header_back_opt_switch',
            'type' => 'button_set',
            'title' => esc_html__('Background', 'Medicate-core') ,

            'options' => array(
                'none' => esc_html__('none', 'Medicate-core') ,
                'image' => esc_html__('Image', 'Medicate-core') ,
                'color' => esc_html__('Color', 'Medicate-core'),
                'transparent' => esc_html__('Transparent', 'Medicate-core'),
                'dark' => esc_html__('Dark', 'Medicate-core'),
                'white' => esc_html__('White', 'Medicate-core')
            ) ,
            'default' => esc_html__('none', 'Medicate-core')
        ) ,
        array(
            'id' => 'header_back_img',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Image', 'Medicate-core') ,
            'read-only' => false,
            'required' => array(
                'header_back_opt_switch',
                '=',
                'image'
            ) ,
        ) ,

        array(
            'id' => 'header_back_color',
            'type' => 'color',
            'title' => esc_html__('Color', 'Medicate-core') ,

            'mode' => 'background',
            'required' => array(
                'header_back_opt_switch',
                '=',
                'color'
            ) ,
            'transparent' => false
        ) ,
        array(
            'id' => 'info__09d461',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Header Menu Color Options', 'Medicate-core') ,
        ) ,

        array(
            'id' => 'indent_09d601',
            'type' => 'section',
            'indent' => true
        ) ,
        array(
            'id' => 'menu_normal_color',
            'type' => 'color',
            'title' => esc_html__('Normal Color', 'Medicate-core') ,

            'mode' => 'background',

            'transparent' => false
        ) ,
        array(
            'id' => 'menu_hover_color',
            'type' => 'color',
            'title' => esc_html__('Hover Color', 'Medicate-core') ,

            'mode' => 'background',

            'transparent' => false
        ) ,

        array(
            'id' => 'menu_active_color',
            'type' => 'color',
            'title' => esc_html__('Active Color', 'Medicate-core') ,

            'mode' => 'background',

            'transparent' => false
        ) ,

        array(
            'id' => 'info__09d61',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Header Sub Menu Color Options', 'Medicate-core') ,
        ) ,

        array(
            'id' => 'indent_09d01',
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id' => 'sub_menu_normal_color',
            'type' => 'color',
            'title' => esc_html__('Normal Color', 'Medicate-core') ,

            'mode' => 'background',

            'transparent' => false
        ) ,
        array(
            'id' => 'sub_menu_hover_color',
            'type' => 'color',
            'title' => esc_html__('Hover Color', 'Medicate-core') ,

            'mode' => 'background',

            'transparent' => false
        ) ,

        array(
            'id' => 'sub_menu_active_color',
            'type' => 'color',
            'title' => esc_html__('Active Color', 'Medicate-core') ,

            'mode' => 'background',

            'transparent' => false
        ) ,

        array(
            'id' => 'sub_menu_background_color',
            'type' => 'color',
            'title' => esc_html__('Background Color', 'Medicate-core') ,

            'mode' => 'background',

            'transparent' => false
        ) ,

        array(
            'id' => 'sub_menu_background_hover_color',
            'type' => 'color',
            'title' => esc_html__('Background Hover Color', 'Medicate-core') ,

            'mode' => 'background',
            'transparent' => false
        ) ,

        array(
            'id' => 'sub_menu_background_active_color',
            'type' => 'color',
            'title' => esc_html__('Background Active Color', 'Medicate-core') ,

            'mode' => 'background',
            'transparent' => false
        ) ,

    )
));


//Top Header Options
Redux::setSection($options, array(
    'title' => esc_html__('Top Header', 'Medicate-core') ,
    'id' => 'section_05b1956',
    'subsection' => true,
    'desc' => esc_html__('Section For Customize Top header.', 'Medicate-core') ,
    'fields' => array(
        array(
            'id' => 'info__05b1956',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Top Header Setting', 'Medicate-core') ,
        ) ,
        array(
            'id' => 'section_1b5c143',
            'type' => 'section',
            'indent' => true
        ) ,
        array(
            'id' => 'top_header_enable',
            'type' => 'button_set',
            'title' => esc_html__('Enable Top Header', 'Medicate-core') ,
            'options' => array(
                'yes' => esc_html__('Yes', 'Medicate-core') ,
                'no' => esc_html__('No', 'Medicate-core')
            ) ,
            'default' => esc_html__('no', 'Medicate-core')
        ) ,
        array(
            'id'        => 'pt_top_header_layout',
            'type'      => 'select',
            'title'     => esc_html__( 'Top Header Layout','Medicate-core' ),
            'options'   => array(
                'social-right' => esc_html__( 'Social Right','Medicate-core' ),
                'social-left' => esc_html__( 'Social Left','Medicate-core' ),
            ),
            'default'   => 'default',
            'required' => array(
                'top_header_enable',
                '=',
                'yes'
            ) ,
        ),
        array(
            'id' => 'top_header_text',
            'type' => 'text',
            'title' => esc_html__('Action Text', 'Medicate-core') ,
            'required' => array(
                'pt_top_header_layout',
                '=',
                'social-style-two'
            ) ,
        ) ,
        array(
            'id'       => 'medicate_core_social_switch',
            'type'     => 'switch',
            'title'    => __('Display Social Media In Header', 'Medicate-core'),
            'default'  => true,
        ),
        array(
            'id'       => 'medicate_core_contact_switch',
            'type'     => 'switch',
            'title'    => __('Display Contact In Header', 'Medicate-core'),
            'default'  => true,
        ),
        array(
            'id' => 'top_header_back_type',
            'type' => 'button_set',
            'title' => esc_html__('Top Header Background Type', 'Medicate-core') ,
            'options' => array(
                'none' => esc_html__('none','Medicate-core'),
                'image' => esc_html__('Image', 'Medicate-core') ,
                'color' => esc_html__('color', 'Medicate-core'),
                'transparent' => esc_html__('Transparent', 'Medicate-core'),
                'dark' => esc_html__('Dark', 'Medicate-core'),
                'white' => esc_html__('White', 'Medicate-core')
            ) ,
            'default' => esc_html__('none', 'Medicate-core'),
            'required' => array(
                'top_header_enable',
                '=',
                'yes'
            ) ,
        ) ,
        array(
            'id' => 'top_header_back_color',
            'type' => 'color',
            'title' => esc_html__('Top Header Background Color', 'Medicate-core') ,
            'default' => '#ffffff',
            'mode' => 'background',
            'transparent' => false,
            'required' => array(
                'top_header_back_type',
                '=',
                'color'
            ) ,
        ) ,
        array(
            'id' => 'top_header_back_img',
            'type' => 'media',
            'title' => esc_html__('Image', 'Medicate-core') ,
            'default' => '#ffffff',
            'url'=>true,
            'required' => array(
                'top_header_back_type',
                '=',
                'image'
            ) ,
        ) ,
        array(
            'id' => 'top_header_text_color',
            'type' => 'color',
            'title' => esc_html__('Top Header Text Color', 'Medicate-core') ,
            'mode' => 'background',
            'transparent' => false,
            'required' => array(
                'top_header_enable',
                '=',
                'yes'
            ) ,
        ) ,
        array(
            'id' => 'top_header_text_hover_color',
            'type' => 'color',
            'title' => esc_html__('Top Header Text Hover Color', 'Medicate-core') ,
            'mode' => 'background',
            'transparent' => false,
            'required' => array(
                'top_header_enable',
                '=',
                'yes'
            ) ,
        ) ,
        array(
            'id' => 'top_header_icon_color',
            'type' => 'color',
            'title' => esc_html__('Top Header Icon Color', 'Medicate-core') ,
            'mode' => 'background',
            'transparent' => false,
            'required' => array(
                'top_header_enable',
                '=',
                'yes'
            ) ,
        ) ,
        array(
            'id' => 'top_header_icon_hover_color',
            'type' => 'color',
            'title' => esc_html__('Top Header Icon Hover Color', 'Medicate-core') ,
            'mode' => 'background',
            'transparent' => false,
            'required' => array(
                'top_header_enable',
                '=',
                'yes'
            ) ,
        ) ,


    )
));


