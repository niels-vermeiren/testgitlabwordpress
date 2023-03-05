<?php
/*
 * Global Options
*/

Redux::setSection($options, array(
    'title' => esc_html__('Global', 'Medicate-core') ,
    'id' => 'section_0026e62',
    'icon' => 'eicon-global-settings',
    'customizer_width' => '500px',
));


//Favicon Option
Redux::setSection($options, array(
    'title' => esc_html__('Favicon', 'Medicate-core') ,
    'id' => 'section_08d42cd',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'info_b470602',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Favicon', 'Medicate-core') ,
            'desc' => __('Upload .ico File For Favicon Icon', 'Medicate-core')
        ) ,
        array(
            'id' => 'indent_0026e62',
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id' => 'background_favicon',
            'type' => 'media',
            'url' => true,
            'read-only' => false,


        ) ,
    )
));

//Loader Options
Redux::setSection($options, array(
    'title' => esc_html__('Loader', 'Medicate-core') ,
    'id' => 'section_06c6c5e',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'info_01ec772',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Loader Options', 'Medicate-core') ,
        ) ,
        array(
            'id' => 'section_7b84de1',
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id' => 'loader_switch',
            'type' => 'button_set',
            'title' => __('', 'Medicate-core') ,
            'subtitle' => __('', 'Medicate-core') ,
            'desc' => __('', 'Medicate-core') ,
            //Must provide key => value pairs for options
            'options' => array(
                'none' => esc_html__('none','Medicate-core'),
                'loader' => esc_html__('Loaders','Medicate-core'),
                'image' => esc_html__('Image','Medicate-core'),
                'text' => esc_html__('text', 'Medicate-core'),

            ) ,
            'default' => esc_html__('image','Medicate-core')

        ) ,

                //Multiple loaders
        array(
            'id' => 'html_loaders',
            'type' => 'image_select',
            'title'    => __('Loader Styles', 'Medicate-core'),
            'options' => array(
                'loader-one'      => array(
                    'alt' => 'Loader 1',
                    'img' => MEDICATE_CORE_ASSETS_URL .'/img/loader/1.png',
                ),  
                'loader-two'      => array(
                    'alt' => 'Loader 2',
                    'img' => MEDICATE_CORE_ASSETS_URL .'/img/loader/2.png',
                ), 
                'loader-three'      => array(
                    'alt' => 'Loader 3',
                    'img' => MEDICATE_CORE_ASSETS_URL .'/img/loader/3.png',
                ),  
                'loader-four'      => array(
                    'alt' => 'Loader 4',
                    'img' => MEDICATE_CORE_ASSETS_URL .'/img/loader/4.png',
                ),  
                'loader-five'      => array(
                    'alt' => 'Loader 5',
                    'img' => MEDICATE_CORE_ASSETS_URL .'/img/loader/5.png',
                ), 
                'loader-six'      => array(
                    'alt' => 'Loader 6',
                    'img' => MEDICATE_CORE_ASSETS_URL .'/img/loader/6.png',
                ),
                'loader-seven'      => array(
                    'alt' => 'Loader 7',
                    'img' => MEDICATE_CORE_ASSETS_URL .'/img/loader/7.png',
                ),
                'loader-eight'      => array(
                    'alt' => 'Loader 8',
                    'img' => MEDICATE_CORE_ASSETS_URL .'/img/loader/8.png',
                ),                              
            ),
            'default' => 'loader-one',            
            'desc' => 'Select Loader Style.',
            'url' => false,
            'read-only' => false,
            'required' => array(
                'loader_switch',
                '=',
                'loader'
            ) ,
        ),    

        array(
            'id' => 'multi_loader_color',
            'type' => 'color', 
            'title'    => __('Loader Color', 'Medicate-core'),                                 
            'desc' => esc_html__('Choose Color For Loader.', 'Medicate-core') ,            
            'mode' => 'background',            
            'transparent' => false,
            'required' => array(
                'loader_switch',
                '=',
                'loader'
            ) ,
        ), 



        array(
            'id' => 'background_loader',
            'type' => 'media',
            'title'    => __('Upload Loader Image', 'Medicate-core'),

            'desc' => 'upload gif image here',
            'url' => false,
            'read-only' => false,
            'required' => array(
                'loader_switch',
                '=',
                'image'
            ) ,
        ) ,

      array(
            'id' => 'loader_dimensions',
            'type' => 'dimensions',
            'units' => array(
                'em',
                'px',
                '%'
            ) , // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true', // Allow users to select any type of unit
            'title' => esc_html__('Loader (Width/Height) Option', 'Medicate-core') ,
            'required' => array(
                'loader_switch',
                '=',
                'image'
            ) ,

        ) ,
        array(
            'id'        => 'loader_text',
            'type'      => 'text',
            'title'    => __('Enter Loader Text', 'Medicate-core'),
            'default'   => esc_html__( 'Loading....','Medicate-core' ),
            'desc' => esc_html__('Enter Text', 'Medicate-core') ,
            'required' => array(
                'loader_switch',
                '=',
                'text'
            ) ,
        ),
        array(
            'id'       => 'loader_tag',
            'type'     => 'select',
            'title'    => __('Select Html Tag', 'Medicate-core'),
            'desc'     => __('Select Tag For Loader Text.', 'Medicate-core'),
            // Must provide key => value pairs for select options
            'options'  => array(
                'h1' => esc_html__('h1', 'Medicate-core'),
                'h2' => esc_html__('h2', 'Medicate-core'),
                'h3' => esc_html__('h3', 'Medicate-core'),
                'h4' => esc_html__('h4', 'Medicate-core'),
                'h5' => esc_html__('h5', 'Medicate-core'),
                'h6' => esc_html__('h6', 'Medicate-core'),

            ),
            'required' => array(
                'loader_switch',
                '=',
                'text'
            ) ,
            'default' => esc_html__('h2', 'Medicate-core'),
        ),

        array(
            'id' => 'loader_color',
            'type' => 'color',
            'title'    => __('Choose Color Loader Text', 'Medicate-core'),
            'desc' => esc_html__('Choose Color For Loader Text .', 'Medicate-core') ,

            'mode' => 'background',
            'transparent' => false,
            'required' => array(
                'loader_switch',
                '=',
                'text'
            ) ,
        ),

        array(
            'id' => 'loader_background_color',
            'type' => 'color',
            'title'    => __('Background Color', 'Medicate-core'),
            'desc' => esc_html__('Choose Background Color For  Loader.', 'Medicate-core') ,

            'mode' => 'background',
            'transparent' => false,

        ) ,

    )
));
// Back To Top Options
Redux::setSection($options, array(
    'title' => esc_html__('Back To Top', 'Medicate-core') ,
    'id' => 'section_4afd0c7',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'info_4afd0c7',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Enable Back To Top', 'Medicate-core') ,
        ) ,
        array(
            'id' => 'indent_4afd0c7',
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id'       => 'back_to_top',
            'type'     => 'button_set',
            'options'  => array(
                'yes' => 'Yes',
                'no' => 'No'
            ),
            'default'  => 'yes'
        ),

         array(
            'id' => 'back_top_background_color',
            'type' => 'color',
            'title'    => __('Background Color', 'Medicate-core'),
            'desc' => esc_html__('Choose Background Color For Back To Top.', 'Medicate-core') ,

            'mode' => 'background',
            'transparent' => false,
            'required' => array(
                'back_to_top',
                '=',
                'yes'
            ) ,

        ) ,

        array(
            'id' => 'back_top_background_color_hover',
            'type' => 'color',
            'title'    => __('Background Hover Color', 'Medicate-core'),
            'desc' => esc_html__('Choose Background Hover Color For Back To Top.', 'Medicate-core') ,
            'mode' => 'background',
            'transparent' => false,
            'required' => array(
                'back_to_top',
                '=',
                'yes'
            ) ,

        ) ,


    )
));


// Logo Options
Redux::setSection($options, array(
    'title' => esc_html__('Logo', 'Medicate-core') ,
    'id' => 'section_9584bc8',
    'icon' => 'eicon-logo',
    'customizer_width' => '500px',
));
Redux::setSection($options, array(
    'title' => esc_html__('Header Logo', 'Medicate-core') ,
    'id' => 'section_b5687c6',
    'subsection' => true,
    'fields' => array(

        array(
            'id' => 'info_c50e968',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Header Logo Options', 'Medicate-core') ,
        ) ,

        array(
            'id' => 'indent_9658318',
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id' => 'logo_type',
            'type' => 'button_set',
            'title' => __('Header Logo Type', 'Medicate-core') ,
            'desc' => __('', 'Medicate-core') ,
            //Must provide key => value pairs for options
            'options' => array(
                'image' => esc_html__('Image','Medicate-core'),
                'text' => esc_html__('text', 'Medicate-core'),

            ) ,
            'default' => esc_html__('image','Medicate-core')

        ) ,

        array(
            'id' => 'logo_url',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Image', 'Medicate-core') ,
            'read-only' => false,
            'indent' => true,
            'required' => array(
                'logo_type',
                '=',
                'image'
            ) ,

        ) ,
        array(
            'id' => 'logo_dimensions',
            'type' => 'dimensions',
            'units' => array(
                'em',
                'px',
                '%'
            ) , // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true', // Allow users to select any type of unit
            'title' => esc_html__('Header Logo (Width/Height) Option', 'Medicate-core') ,

            'required' => array(
                'logo_type',
                '=',
                'image'
            ) ,

        ) ,

        array(
            'id' => 'header_logo_text',
            'type' => 'text',
            'title' => esc_html__('Header Logo Text', 'Medicate-core') ,
            'required' => array(
                'logo_type',
                '=',
                'text'
            ) ,

        ) ,
         array(
            'id'       => 'header_logo_tag',
            'type'     => 'select',
            'title'    => __('Select Html Tag', 'Medicate-core'),
            'desc'     => __('Select Tag For Text.', 'Medicate-core'),
            // Must provide key => value pairs for select options
            'options'  => array(
                'h1' => esc_html__('h1', 'Medicate-core'),
                'h2' => esc_html__('h2', 'Medicate-core'),
                'h3' => esc_html__('h3', 'Medicate-core'),
                'h4' => esc_html__('h4', 'Medicate-core'),
                'h5' => esc_html__('h5', 'Medicate-core'),
                'h6' => esc_html__('h6', 'Medicate-core'),

            ),
            'required' => array(
                'logo_type',
                '=',
                'text'
            ) ,
            'default' => esc_html__('h2', 'Medicate-core'),
        ),



        array(
            'id' => 'header_logo_color',
            'type' => 'color',
            'title' => esc_html__('Set Header Logo Color', 'Medicate-core') ,
            'subtitle' => esc_html__('Choose Header Logo Color', 'Medicate-core') ,
            'default' => '#ffffff',
            'mode' => 'background',
            'transparent' => false,
            'required' => array(
                'logo_type',
                '=',
                'text'
            ) ,
        ) ,


        array(
            'id' => 'divider_9658318',
            'type' => 'divide'
        ) ,




    )
));


?>