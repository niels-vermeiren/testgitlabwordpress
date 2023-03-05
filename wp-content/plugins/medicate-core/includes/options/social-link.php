<?php
/*
 * Footer Options
 */





Redux::setSection( $options, array(
    'title'      => esc_html__( 'Social link', 'medicate' ),
    'id'         => 'social_section',
    'icon'       => ' eicon-social-icons',
    'fields'     => array(

                            array(
                        'id'       => 'social',
                        'type'     => 'sortable',
                        'title'    => __('Social icons', 'medicate'),
                        'subtitle' => __('Define need social icons', 'medicate'),
                        'desc'     => __('This is the description field, again good for additional info.', 'medicate'),
                        'mode'     => 'text',
                        'label' => true,
                        'options' => array(
                             'fa-facebook-f' => '',
                             'fa-github' => '',
                             'fa-google-plus-g' => '',
                             'fa-instagram' => '',
                             'fa-reddit' => '',
                             'fa-pinterest' => '',
                             'fa-skype' => '',
                             'fa-youtube' => '',
                             'fa-vimeo' => '',
                             'fa-steam' => '',
                             'fa-stack-overflow' => '',
                             'fa-linkedin-in' => '',

                        ),
                    ),

                    )
));
