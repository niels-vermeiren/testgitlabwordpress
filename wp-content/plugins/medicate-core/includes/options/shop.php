<?php
/*
 * Banner Options
 */

Redux::setSection( $options, array(
    'title' => esc_html__('Shop','Medicate-core'),
    'id'    => 'section_c930',
    'icon'  => 'eicon-products',
    'desc'  => esc_html__('Section For Customize Shop page.','Medicate-core'),
    'fields'=> array(

        array(
            'id' => 'info_general'.rand(10,1000),
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),

            'title' => __('Shop Page', 'Medicate-core') ,
        ) ,

        array(
            'id' => 'section-general'.rand(10,1000),
            'type' => 'section',
            'indent' => true
        ) ,




        array(
            'id'        => 'shop_column_num',
            'type'      => 'select',
            'title'     => esc_html__( 'Shop page Setting','Medicate-core' ),
            'subtitle'  => wp_kses( __( '<br />Choose among these structures (Right Sidebar, Left Sidebar, 1column, 2column and 3column) for your blog section.<br />To filling these column sections you should go to appearance > widget.<br />And put every widget that you want in these sections.','Medicate-core' ), array( 'br' => array() ) ),
            'options'   => array(
                '1' => esc_html__( 'Style One','Medicate-core' ),
                '2' => esc_html__( 'Style Two','Medicate-core' ),
                '3' => esc_html__( 'Style three','Medicate-core' ),
                '4' => esc_html__( 'Style four','Medicate-core' ),
                '5' => esc_html__( 'Style five','Medicate-core' ),
                '6' => esc_html__( 'Style six','Medicate-core' ),



            ),
            'default'   => 'Style three',
        ),


        array(
            'id' => 'info_general'.rand(10,1000),
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Shop Page Sidebar Options', 'Medicate-core') ,
        ) ,

        array(
            'id' => 'section-general'.rand(10,1000),
            'type' => 'section',
            'indent' => true
        ) ,
        array(
            'id'        => 'pt_shop_siderbar',
            'type'      => 'select',
            'title'     => esc_html__( 'Shop Page Sidebar Setting','Medicate-core' ),


            'options'   => array(
                'no_sidebar' => esc_html__( 'no sidebar','Medicate-core' ),
                'left_sidebar' => esc_html__( 'left sidebar','Medicate-core' ),
                'right_sidebar' => esc_html__( 'right_sidebar','Medicate-core' ),
            ),
            'default'   => 'left sidebar',
        ),

        array(
            'id' => 'info_general'.rand(10,1000),
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Shop Page Social Options', 'Medicate-core') ,
        ) ,

        array(
            'id' => 'section-general'.rand(10,1000),
            'type' => 'section',
            'indent' => true
        ) ,
        array(
            'id'       => 'social_link_single_product',
            'type'     => 'sortable',
            'title'    => __('Social Link icons For single product', 'Medicate-core'),
            'mode'     => 'text',
            'label' => true,
            'options' => array(
               'fa-facebook-f' => '',
               'fa-instagram' => '',
               'fa-skype' => '',
               'fa-twitter' => '',
           ),
        ),


    )




));
?>