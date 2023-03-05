<?php
add_action( 'tgmpa_register', 'medicate_register_required_plugins' );


function medicate_register_required_plugins() {
		$plugins = array(
		 array(
            'name'      => esc_html__( 'Advanced Custom Fields','medicate' ),
            'slug'      => 'advanced-custom-fields',
            'required'  => true,

        ),
        array(
            'name'      => esc_html__( 'Elementor','medicate' ),
            'slug'      => 'elementor',
            'required'  => true,

        ),
         array(
            'name'      => esc_html__( 'Redux Framework','medicate' ),
            'slug'      => 'redux-framework',
            'required'  => true,

        ),
        array(
            'name'      => esc_html__( 'One Click Demo Import','medicate' ),
            'slug'      => 'one-click-demo-import',
            'required'  => true,

        ),
        array(
            'name'      => esc_html__( 'MC4WP: Mailchimp for WordPress','medicate' ),
            'slug'      => 'mailchimp-for-wp',
            'required'  => true,

        ),
        array(
            'name'      => esc_html__( 'Contact Form 7','medicate' ),
            'slug'      => 'contact-form-7',
            'required'  => true,

        ),
        array(
            'name'      => esc_html__( 'Timetable and Event Schedule by MotoPress','medicate' ),
            'slug'      => 'mp-timetable',
            'required'  => true,

        ),
        array(
            'name'      => esc_html__( 'WooCommerce','medicate' ),
            'slug'      => 'woocommerce',
            'required'  => true,

        ),
		array(
			'name'      => esc_html__( 'medicate Core','medicate' ),
			'slug'      => 'medicate-core',
			'source'    => Pcfq_Theme_Helper::pcfq_external_plugin_url('medicate/medicate-core'),

			'required'  => true,
		),
		array(
			'name'      => esc_html__( 'Slider Revolution','medicate' ),
			'slug'      => 'revslider',
			'source'    => Pcfq_Theme_Helper::pcfq_external_plugin_url('revslider'),
			'required'  => true,
		),

	);


	$config = array(
		'id'           => 'medicate',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.


	);

	tgmpa( $plugins, $config );
}