<?php
/*
 * Footer Options
 */
Redux::setSection( $options, array(
    'title'      => esc_html__( 'Contact', 'Medicate-core' ),
    'id'         => 'contact_section',
    'icon'       => 'el el-address-book',
    'fields'     => array(

        array(
            'id'        => 'phone',
            'type'      => 'text',
            'title'     => esc_html__( 'Contact Number','Medicate-core'),


        ),
         array(
            'id'        => 'email',
            'type'      => 'text',
            'title'     => esc_html__( 'First Email','Medicate-core'),


        ),

         array(
            'id'        => 'email1',
            'type'      => 'text',
            'title'     => esc_html__( 'Second Email','Medicate-core'),


        ),
        array(
            'id'        => 'address',
            'type'      => 'textarea',
            'title'     => esc_html__( 'Address','Medicate-core'),
            

        ),
        array(
            'id'        => 'time',
            'type'      => 'text',
            'title'     => esc_html__( 'Time Text','Medicate-core'),


        ),
        array(
            'id'        => 'text',
            'type'      => 'textarea',
            'title'     => esc_html__( 'Text','Medicate-core'),
            

        ),

    )
));