<?php
/*
 * Color Options
 */
Redux::setSection( $options, array(
    'title' => esc_html__('Color Option','Medicate-core'),
    'id'    => 'color-section',


    'fields'=> array(

        array(
            'id' => 'info_N7VD05',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('This section contains options for site colors', 'Medicate-core') ,
        ) ,

        array(
            'id' => 'indent_N7VDM0M',
            'type' => 'section',
            'indent' => true
        ) ,




        array(
            'id'        => 'pt_custom_color',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Use Custom Color','Medicate-core'),

            'options'   => array(
                            'yes' => esc_html__('Yes','Medicate-core'),
                            'no' => esc_html__('No','Medicate-core')
                        ),
            'default'   => esc_html__('no','Medicate-core')
        ),



        array(
            'id' => 'pt_primary_color',
            'type' => 'color',
            'title' => esc_html__('Primary Color', 'Medicate-core') ,
            'subtitle' => esc_html__('Replace With Your Color', 'Medicate-core') ,
            'mode' => 'background',
            'required' => array(
                'pt_custom_color',
                '=',
                'yes'
            ) ,
            'transparent' => false
        ) ,
        array(
            'id' => 'pt_secondary_color',
            'type' => 'color',
            'title' => esc_html__('Secondary Color', 'Medicate-core') ,
            'subtitle' => esc_html__('Replace With Your Color', 'Medicate-core') ,
            'mode' => 'background',
            'required' => array(
                'pt_custom_color',
                '=',
                'yes'
            ) ,
            'transparent' => false
        ) ,
        array(
            'id' => 'pt_primary_dark_color',
            'type' => 'color',
            'title' => esc_html__('Primary Dark Color', 'Medicate-core') ,
            'subtitle' => esc_html__('Replace With Your Color', 'Medicate-core') ,
            'mode' => 'background',
            'required' => array(
                'pt_custom_color',
                '=',
                'yes'
            ) ,
            'transparent' => false
        ) ,

        array(
            'id' => 'pt_dark_color',
            'type' => 'color',
            'title' => esc_html__('Dark Color', 'Medicate-core') ,
            'subtitle' => esc_html__('Replace With Your Color', 'Medicate-core') ,
            'mode' => 'background',
            'required' => array(
                'pt_custom_color',
                '=',
                'yes'
            ) ,
            'transparent' => false
        ) ,

        array(
            'id' => 'pt_grey_color',
            'type' => 'color',
            'title' => esc_html__('Gray Color', 'Medicate-core') ,
            'subtitle' => esc_html__('Replace With Your Color', 'Medicate-core') ,
            'mode' => 'background',
            'required' => array(
                'pt_custom_color',
                '=',
                'yes'
            ) ,
            'transparent' => false
        ) ,

        array(
            'id' => 'pt_white_color',
            'type' => 'color',
            'title' => esc_html__('White Color', 'Medicate-core') ,
            'subtitle' => esc_html__('Replace With Your Color', 'Medicate-core') ,

            'mode' => 'background',
            'required' => array(
                'pt_custom_color',
                '=',
                'yes'
            ) ,
            'transparent' => false
        ) ,
    )
));