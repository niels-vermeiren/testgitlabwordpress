<?php
if (function_exists('acf_add_local_field_group')):
    // Page Options
    acf_add_local_field_group(array(
        'key' => 'group_46Cg7N74rVLFfR6',
        'title' => 'Advance Options',
        'fields' => array(
            array(
                'key' => 'field_7a2p3jB7c4cciu',
                'label' => 'Header Options',
                'name' => 'tab_VLFfR6',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ) ,
                'placement' => 'left',
                'endpoint' => 0,
            ) ,

            array(
                'key' => 'field_QnF1Eb',
                'label' => 'Set Seprate Header',
                'name' => 'set_sep_header',
                'type' => 'button_group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'choices' => array(

                    'yes' => 'yes',
                    'no' => 'no',
                ) ,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ) ,
                'message' => '',
                'default_value' => 'no',
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ) ,
            array(
                'key' => 'key_pjros',
                'label' => 'Header Layout',
                'name' => 'header_layout',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_QnF1Eb',
                            'operator' => '==',
                            'value' => 'yes',
                        ) ,
                    ) ,
                ) ,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ) ,
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'field_ATaJj057m',
                        'label' => 'Header Options',
                        'name' => 'header_options',
                        'type' => 'select',
                        'instructions' => '',
                        'required' => 0,

                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ) ,
                        'choices' => [
                            'default' => 'default',
                            'style-one' => 'Style one',
                            'style-two' => 'Style Two',
                            'style-three' => 'Style Three',
                            'style-four' => 'Style Four',
                            'style-five' => 'Style Five',
                        ],


                        'allow_null' => 0,
                        'default_value' => 'default',
                        'layout' => 'vertical',
                        'return_format' => 'value',
                    ) ,
                ) ,
            ) ,
            array(
                'key' => 'field_QnF1Ebspxx',
                'label' => 'Enable Search Button',
                'name' => 'header_search_enable',
                'type' => 'button_group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'choices' => array(

                    'inherit' => 'inherit',
                    'yes' => 'yes',
                    'no' => 'no',
                ) ,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ) ,
                'message' => '',
                'default_value' => 'inherit',
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ) ,

            // top header 
            array(
                'key' => 'field_QnF1Ebs',
                'label' => 'Set Top Header',
                'name' => 'set_top_header',
                'type' => 'button_group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'choices' => array(

                    'inherit' => 'inherit',
                    'yes' => 'yes',
                    'no' => 'no',                            
                ) ,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ) ,
                'message' => '',
                'default_value' => 'no',
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ) ,
            array(
                'key' => 'key_pjrosw',
                'label' => 'top Header Layout',
                'name' => 'top_header_layout',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_QnF1Ebs',
                            'operator' => '==',
                            'value' => 'yes',
                        ) ,
                    ) ,
                ) ,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ) ,
                'layout' => 'table',
                'sub_fields' => array(               
                    array(
                        'key' => 'field_ATaJj057ms',
                        'label' => 'top Header Options',
                        'name' => 'top_header_options',
                        'type' => 'select',
                        'instructions' => '',
                        'required' => 0,

                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ) ,
                        'choices' => array(
                            'social-right'=> esc_html__( 'Social Right','ecofuel-core' ),
                            'social-left'=> esc_html__( 'Social Left','ecofuel-core' ),

                        ) ,

                        'allow_null' => 0,
                        'default_value' => 'social-right',
                        'layout' => 'vertical',
                        'return_format' => 'value',
                    ) ,
                ) ,
            ),
            // end top header


            array(
                'key' => 'field_QnF1Ebspp',
                'label' => 'Enable Action Button',
                'name' => 'header_action_enable',
                'type' => 'button_group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'choices' => array(

                    'inherit' => 'inherit',
                    'yes' => 'yes',
                    'no' => 'no',
                ) ,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ) ,
                'message' => '',
                'default_value' => 'inherit',
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ) ,


            array(
                'key' => 'key_pjos',
                'label' => 'Logo option',
                'name' => 'logo_option',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_QnF1Eb',
                            'operator' => '==',
                            'value' => 'yes',
                        ) ,
                    ) ,
                ) ,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ) ,
                'layout' => 'table',
                'sub_fields' => array(               
                 array(
                    'key' => 'field_QnF1b',
                    'label' => 'Set Seprate Logo',
                    'name' => 'set_sep_logo',
                    'type' => 'button_group',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'choices' => array(

                        'yes' => 'yes',
                        'no' => 'no',                            
                    ) ,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ) ,
                    'message' => '',
                    'default_value' => 'no',
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ) ,
                 array(
                    'key' => 'field_5d6d06',
                    'label' => 'Logo Image',
                    'name' => 'logo_image',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_QnF1b',
                                'operator' => '==',
                                'value' => 'yes',
                            ) ,
                        ) ,
                    ) ,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),

             ) ,
            ) , 

             // end

             // banner option
            array(
                'key' => 'field_7a2p3jB7c4iu',
                'label' => 'Banner Options',
                'name' => 'tab_VLFf45R6',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ) ,
                'placement' => 'left',
                'endpoint' => 0,
            ) ,

            array(
                'key' => 'field_QnFE45b565',
                'label' => 'Hide Banner',
                'name' => 'hide_banner',
                'type' => 'button_group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'choices' => array(
                    'inherit' => 'inherit',
                    'yes' => 'yes',
                    'no' => 'no',
                ) ,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ) ,
                'message' => '',
                'default_value' => 'inherit',
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ) ,
            array(
                'key' => 'field_QnF23',
                'label' => 'Content Padding',
                'name' => 'site_padding',
                'type' => 'button_group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'choices' => array(


                    'yes' => 'yes',
                    'no' => 'no',
                ) ,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ) ,
                'message' => '',
                'default_value' => 'inherit',
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ) ,
        ) ,
'location' => array(
    array(
        array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'page',
        ) ,
    ) ,

    array(
        array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'post',
        ) ,
    ) ,
    array(
        array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'portfolio',
        ) ,

    ) ,
) ,
'menu_order' => 0,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => true,
'description' => '',
));
//Color option
acf_add_local_field_group(array(
    'key' => 'group_46Cg7N74r8t565681LFfR6',
    'title' => 'Color Options',
    'fields' => array(

        array(
            'key' => 'field_72p3jBTfCc56iu',
            'label' => 'Color Options',
            'name' => 'color_tab',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ) ,
            'placement' => 'left',
            'endpoint' => 0,
        ) ,

        array(
            'key' => 'field_QnFEb235656',
            'label' => 'Use Custom Colors',
            'name' => 'color_opt_btn_group',
            'type' => 'button_group',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'choices' => array(

                'inherit' => 'inherit',
                'yes' => 'yes',
                'no' => 'no',
            ) ,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ) ,
            'message' => '',
            'default_value' => 'inherit',
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ) ,


        // header
        array(
            'key' => 'key_pjros58985',
            'label' => 'Header Palette',
            'name' => 'header_color_palette',
            'type' => 'group',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_QnFEb235656',
                        'operator' => '==',
                        'value' => 'yes',
                    ) ,
                ) ,
            ) ,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ) ,
            'layout' => 'table',
            'sub_fields' => array(

                array(
                    'key' => 'ht_back_color',
                    'label' => 'Background Color',
                    'name' => 'ht_back_color',
                    'type' => 'color_picker',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,

                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ) ,
                    'message' => '',
                    'default_value' => '',
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ) ,
                array(
                    'key' => 'ht_sticky_color',
                    'label' => 'Sticky header Color',
                    'name' => 'ht_sticky_color',
                    'type' => 'color_picker',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,

                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ) ,
                    'message' => '',
                    'default_value' => '',
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ) ,

                array(
                    'key' => 'ht_normal_color',
                    'label' => 'Normal Color',
                    'name' => 'ht_normal_color',
                    'type' => 'color_picker',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,

                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ) ,
                    'message' => '',
                    'default_value' => '',
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ) ,

                array(
                    'key' => 'ht_active_color',
                    'label' => 'Active Color',
                    'name' => 'ht_active_color',
                    'type' => 'color_picker',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,

                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ) ,
                    'message' => '',
                    'default_value' => '',
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ) ,

                array(
                    'key' => 'ht_act_bg_color',
                    'label' => 'Background Active Color',
                    'name' => 'ht_act_bg_color',
                    'type' => 'color_picker',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,

                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ) ,
                    'message' => '',
                    'default_value' => '',
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ) ,

                array(
                    'key' => 'ht_sub_bg_color',
                    'label' => 'sub menu bg Color',
                    'name' => 'ht_sub_bg_color',
                    'type' => 'color_picker',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,

                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ) ,
                    'message' => '',
                    'default_value' => '',
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ) ,   
            ) ,
) ,

// end header

array(
    'key' => 'key_pjros5565',
    'label' => 'Main Color Palette',
    'name' => 'color_palette',
    'type' => 'group',
    'instructions' => '',
    'required' => 0,
    'conditional_logic' => array(
        array(
            array(
                'field' => 'field_QnFEb235656',
                'operator' => '==',
                'value' => 'yes',
            ) ,
        ) ,
    ) ,
    'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
    ) ,
    'layout' => 'table',
    'sub_fields' => array(

        array(
            'key' => 'pt_primary_color',
            'label' => 'Primary Color',
            'name' => 'pt_primary_color',
            'type' => 'color_picker',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,

            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ) ,
            'message' => '',
            'default_value' => '',
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ) ,

        array(
            'key' => 'pt_secondary_color',
            'label' => 'Secondary Color',
            'name' => 'pt_secondary_color',
            'type' => 'color_picker',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,

            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ) ,
            'message' => '',
            'default_value' => '',
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ) ,        
        array(
            'key' => 'pt_primary_dark_color',
            'label' => 'Primary Dark Color',
            'name' => 'pt_primary_dark_color',
            'type' => 'color_picker',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,

            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ) ,
            'message' => '',
            'default_value' => '',
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ) ,

        array(
            'key' => 'pt_dark_color',
            'label' => 'Dark Color',
            'name' => 'pt_dark_color',
            'type' => 'color_picker',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,

            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ) ,
            'message' => '',
            'default_value' => '',
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ) ,

        array(
            'key' => 'pt_grey_color',
            'label' => 'Gray Color',
            'name' => 'pt_grey_color',
            'type' => 'color_picker',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,

            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ) ,
            'message' => '',
            'default_value' => '',
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ) ,

        array(
            'key' => 'pt_white_color',
            'label' => 'White Color',
            'name' => 'pt_white_color',
            'type' => 'color_picker',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,

            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ) ,
            'message' => '',
            'default_value' => '',
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ) ,

    ) ,
) ,

) ,

'location' => array(
    array(
        array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'page',
        ) ,

    ) ,
    array(
        array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'post',
        ) ,

    ) ,    
    array(
        array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'portfolio',
        ) ,

    ) ,

) ,
'menu_order' => 2,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => true,
'description' => '',
)); 
endif;
