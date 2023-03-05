<?php
function Medicate_core_get_layout_options($name = '' , $type ='' , $title ='' , $subtitle = '')
{
	if($type == 'column')
	{
	 return array(
            'id'        => $name.'_layout',
            'type'      => 'select',
            'title'     => esc_html__( $title ,'Medicate-core' ),
            'subtitle' => wp_kses( __( $subtitle ,'Medicate-core' ), array( 'br' => array() ) ),
            'options'   => array(

                                'one-column' => esc_html__( 'One Columns','Medicate-core' ),
                                'two-column' => esc_html__( 'Two Columns','Medicate-core' ),
                                'three-column' => esc_html__( 'Three Columns','Medicate-core' ),
                                'four-column' => esc_html__( 'Four Columns','Medicate-core' ),
                            ),
            'default'   => 'one-column',
        );
 	}
 	if($type == 'sidebar')
 	{
 		  return array(
            'id'        => $name.'_sidebar',
            'type'      => 'select',
            'title'     => esc_html__( $title ,'Medicate-core' ),
            'subtitle'     => esc_html__( $subtitle,'Medicate-core' ),
            'options'   => array(
                                'no_sidebar' => esc_html__( 'No Sidebar','Medicate-core' ),
                                'left_sidebar' => esc_html__( 'Left Sidebar','Medicate-core' ),
                                'right_sidebar' => esc_html__( 'Right Sidebar','Medicate-core' ),


                            ),
            'default'   => 'right_sidebar',
        );
 	}
}
