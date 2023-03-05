<?php
class Medic_Custom_Post
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct()
    {
        add_action('init', array(
            $this,
            'portfolio'
        ));
    }

    public function portfolio()
    {

        $labels = array(
            'name' => esc_html__('Portfolio', 'post type general name', 'repairer-core') ,
            'singular_name' => esc_html__('Portfolio', 'post type singular name', 'repairer-core') ,
            'featured_image' => esc_html__('Portfolio Photo', 'repairer-core') ,
            'set_featured_image' => esc_html__('Set Portfolio Photo', 'repairer-core') ,
            'remove_featured_image' => esc_html__('Remove Portfolio Photo', 'repairer-core') ,
            'use_featured_image' => esc_html__('Use as Portfolio Photo', 'repairer-core') ,
            'menu_name' => esc_html__('Portfolio', 'admin menu', 'repairer-core') ,
            'name_admin_bar' => esc_html__('Portfolio', 'add new on admin bar', 'repairer-core') ,
            'add_new' => esc_html__('Add New', 'Portfolio', 'repairer-core') ,
            'add_new_item' => esc_html__('Add New Portfolio', 'repairer-core') ,
            'new_item' => esc_html__('New Portfolio', 'repairer-core') ,
            'edit_item' => esc_html__('Edit Portfolio', 'repairer-core') ,
            'view_item' => esc_html__('View Portfolio', 'repairer-core') ,
            'all_items' => esc_html__('All Portfolio', 'repairer-core') ,
            'search_items' => esc_html__('Search Portfolio', 'repairer-core') ,
            'parent_item_colon' => esc_html__('Parent Portfolio :', 'repairer-core') ,
            'not_found' => esc_html__('No Classs found.', 'repairer-core') ,
            'not_found_in_trash' => esc_html__('No Classs found in Trash.', 'repairer-core')
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'menu_icon' => 'dashicons-category',
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'category',
                'tag'
            )
        );

        register_post_type('portfolio', $args);

        register_taxonomy('portfolio-categories', 'portfolio', array(
            'label' => esc_html__('Portfolio Category', 'repairer-core') ,
            'rewrite' => true,
            'hierarchical' => true,
        ));
        register_taxonomy('portfolio-tag', 'portfolio', array(
            'label' => esc_html__('Portfolio Tag', 'repairer-core') ,
            'rewrite' => true,
            'hierarchical' => true,
        ));
    }

}

new Medic_Custom_Post;

