<?php
/*
 * Blog Page Options
*/
Redux::setSection($options, array(
    'title' => esc_html__('Page', 'Medicate-core') ,
    'id' => 'section_dab925e',
    'icon' => 'eicon-product-pages',
    'customizer_width' => '1000px',
));

// Blog Page Settings
Redux::setSection( $options, array(
    'title' => esc_html__('Blog Page Settings','Medicate-core'),
    'id'    => 'section_0beceba',
    'subsection' => true,
    'desc'  => esc_html__('This section contains options for Pages.','Medicate-core'),
    'fields'=> array(
        array(
            'id' => 'info__0beceba',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),

            'title' => __('Blog Page Options', 'Medicate-core') ,
        ) ,

        array(
            'id' => 'indent_0beceba',
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id'       => 'blog_btn_text',
            'type'     => 'text',
            'title'    => esc_html__( 'Blog Button Name', 'Medicate-core' ),
            'subtitle' => esc_html__( 'Change Blog Button Name in blog page and singal blog page', 'Medicate-core' ),
            'default'  => esc_html__('Lees meer','Medicate-core' ),
        ),
        array(
            'id' => 'info_general'.rand(10,1000),
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Blog Page Column Option', 'Medicate-core') ,

        ) ,

        array(
            'id' => 'section-general'.rand(10,1000),
            'type' => 'section',
            'indent' => true
        ) ,

        Medicate_core_get_layout_options( 'blog' , 'column' , ''),

         array(
            'id' => 'info_general'.rand(10,1000),
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Blog Page Sidebar Options', 'Medicate-core') ,

        ) ,

        array(
            'id' => 'section-general'.rand(10,1000),
            'type' => 'section',
            'indent' => true
        ) ,

      Medicate_core_get_layout_options( 'pt_blog' , 'sidebar' , '' ),

        array(
            'id' => 'info_general'.rand(10,1000),
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),

            'title' => __('Blog Single Page Sider Options', 'Medicate-core') ,
        ) ,

        array(
            'id' => 'section-general'.rand(10,1000),
            'type' => 'section',
            'indent' => true
        ) ,

        Medicate_core_get_layout_options( 'single_blog' , 'sidebar' , '' ),





        array(
            'id'        => 'enable_comment',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Comments','Medicate-core'),
            'subtitle' => esc_html__( 'Turn on to display comments.','Medicate-core'),
            'options'   => array(
                            'yes' => esc_html__('On','Medicate-core'),
                            'no' => esc_html__('Off','Medicate-core')
                        ),
            'default'   => esc_html__('yes','Medicate-core')
        ),


    )
    ));
Redux::setSection( $options, array(
        'title' => esc_html__('404','Medicate-core'),
        'id'    => 'fourzerofour-section',

        'subsection' => true,
        'desc'  => esc_html__('This section contains options for 404.','Medicate-core'),
        'fields'=> array(
            array(
                'id' => 'info_general'.rand(10,1000),
                'type' => 'info',
                'style' => 'custom',
                'color' => sanitize_hex_color($color),

                'title' => __('404 Page Options', 'Medicate-core') ,
            ) ,

            array(
                'id' => 'section-general'.rand(10,1000),
                'type' => 'section',
                'indent' => true
            ) ,


            array(
                'id'        => 'title_404',
                'type'      => 'text',
                'title'     => esc_html__( '404 Page Title','Medicate-core'),
                'default'   => esc_html__( '404 Error','Medicate-core' )
            ),
            array(
                'id'        => 'description_404',
                'type'      => 'textarea',
                'title'     => esc_html__( '404 Page Description','Medicate-core'),
                'default'   => esc_html__( 'Oops! This Page is Not Found.','Medicate-core' )
            ),
        ))
    );
?>