<?php
/*
 * optmize Options
 */
Redux::setSection($options, array(
    'title'  => esc_html__('optimize', 'medicate'),
    'id'     => 'optimize_opt',
    'icon'   => 'el el-cogs',
    'fields' => array(
        array(
            'id'      => 'optimize_css_minify',
            'type'    => 'button_set',
            'title'   => esc_html__('optimize css minify', 'Medicate-core'),
            'desc'    => __('If Have Done Final Change In Css Then Turn On This Option Other Wise Set To Off Bocz Its Minify Css In To One File Then You Can Change It ', 'Medicate-core'),

            'options' => array(
                'yes' => esc_html__('Yes', 'Medicate-core'),
                'no'  => esc_html__('No', 'Medicate-core'),
            ),
            'default' => esc_html__('no', 'Medicate-core'),

        ),
        array(
            'id'      => 'optimize_js_minify',
            'type'    => 'button_set',
            'title'   => esc_html__('optimize js minify', 'Medicate-core'),
            'desc'    => __('If Have Done Final Change In Css Then Turn On This Option Other Wise Set To Off Bocz Its Minify Css In To One File Then You Can Change It ', 'Medicate-core'),

            'options' => array(
                'yes' => esc_html__('Yes', 'Medicate-core'),
                'no'  => esc_html__('No', 'Medicate-core'),
            ),
            'default' => esc_html__('no', 'Medicate-core'),

        ),

        array(
            'id'       => 'optimize_css_cleaner',
            'type'     => 'Text',
            'title'    => __('Clean Css Cache', 'redux_docs_generator'),
            'desc'     => __('If You Want To Generate Css From New Css File Or If You Have Done Some Change In Main Css Fime Please Clean Css Cache', 'redux_docs_generator'),
            'class'    => 'optimize_css_cleaner',
            // 'compiler' => true,
            'required' => array('optimize_css_minify', '=', array('yes')  ) ,
            
        ),
        array(
            'id'       => 'optimize_js_cleaner',
            'type'     => 'Text',
            'title'    => __('Clean js Cache', 'redux_docs_generator'),
            'desc'     => __('If You Want To Generate Css From New Css File Or If You Have Done Some Change In Main Css Fime Please Clean Css Cache', 'redux_docs_generator'),
            'class'    => 'optimize_js_cleaner',
            // 'compiler' => true,
            'required' => array('optimize_js_minify', '=', array('yes')  ) ,
            
        ),

    ),
)
);
