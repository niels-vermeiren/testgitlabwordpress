<?php
/*
 * Banner Options
 */

Redux::setSection( $options, array(
    'title' => esc_html__('Banner','Medicate-core'),
    'id'    => 'section_c93098b',
    'icon'  => 'eicon-banner',
    'desc'  => esc_html__('Section For Customize Breadcrumbs.','Medicate-core'),
    'fields'=> array(

       array(
            'id' => 'info_c93098b',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Banner Layout Options', 'Medicate-core') ,
        ) ,
        array(
            'id' => 'indent_c8138f9',
            'type' => 'section',
            'indent' => true        ) ,


        array(
            'id'        => 'enable_banner',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Enable Banner','Medicate-core'),
            'options'   => array(
                            'yes' => esc_html__('Yes','Medicate-core'),
                            'no' => esc_html__('No','Medicate-core')
                        ),
            'default'   => esc_html__('yes','Medicate-core')
        ),

        array(
            'id'        => 'display_breadcrumbs',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Breadcrumbs on Banner','Medicate-core'),
            'options'   => array(
                            'yes' => esc_html__('Yes','Medicate-core'),
                            'no' => esc_html__('No','Medicate-core')
                        ),
            'required'  => array( 'enable_banner', '=', 'yes' ),

                'default'   => esc_html__('yes','Medicate-core')
        ),

        array(
            'id'        => 'display_title',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Title on Banner','Medicate-core'),
            'options'   => array(
                            'yes' => esc_html__('Yes','Medicate-core'),
                            'no' => esc_html__('No','Medicate-core')
                        ),
            'required'  => array( 'enable_banner', '=', 'yes' ),

            'default'   => esc_html__('yes','Medicate-core')
        ),

        array(
            'id'            => 'breadcrumbs_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Breadcrumb Color', 'Medicate-core' ),

            'mode'          => 'background',
            'required'  => array( 'enable_banner', '=', 'yes' ),
            'transparent'   => false
        ),

         array(
            'id'            => 'breadcrumbs_hover_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Breadcrumb Hover Color', 'Medicate-core' ),

            'mode'          => 'background',
            'required'  => array( 'enable_banner', '=', 'yes' ),
            'transparent'   => false
        ),

         array(
            'id'            => 'breadcrumbs_active_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Breadcrumb Active Color', 'Medicate-core' ),

            'mode'          => 'background',
            'required'  => array( 'enable_banner', '=', 'yes' ),
            'transparent'   => false
        ),

           array(
            'id'            => 'breadcrumbs_indicator_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Indicator Icon Color', 'Medicate-core' ),

            'mode'          => 'color',
            'required'  => array( 'enable_banner', '=', 'yes' ),
            'transparent'   => false
        ),
        array(
            'id'            => 'title_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Title Color', 'Medicate-core' ),

            'mode'          => 'background',
            'required'  => array( 'enable_banner', '=', 'yes' ),
            'transparent'   => false
        ),

        array(
            'id'       => 'banner_back_type',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Banner Background Type', 'Medicate-core' ),

            'options'  => array(
                'color' => 'Color',
                'image' => 'Image',

            ),
            'default'  => 'color',
            'required'  => array( 'enable_banner', '=', 'yes' ),
        ),

        array(
            'id'       => 'banner_image',
            'type'     => 'media',
            'url'      => false,
            'title'    => esc_html__( 'Banner Background Image','Medicate-core'),
            'read-only'=> false,
            'required'  => array( 'banner_back_type', '=', 'image' ),
            'subtitle' => esc_html__( 'Upload Image for your body.','Medicate-core'),


        ),

        array(
            'id'            => 'banner_back_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Background Color', 'Medicate-core' ),
            'subtitle'      => esc_html__( 'Choose Background Color', 'Medicate-core' ),
            'required'  => array( 'banner_back_type', '=', 'color' ),
            'mode'          => 'background',
            'transparent'   => false,

        ),

    )
));
?>