<?php
class Medic_Custom_Icons
{
	 public function __construct()
    {
        add_filter( 'elementor/icons_manager/additional_tabs' , array($this , 'add_icon'));
        add_action('elementor/editor/before_enqueue_scripts' , array($this , 'enqueue_styles'));

    }

    public function add_icon()
    {
    	return [
        	'flaticon' => [
			'name' => 'flaticon',
			'label' => __( 'Flaticon Icons', 'medicate' ),
			'url' => '',
			'enqueue' => '',
			'prefix' => '',
			'displayPrefix' => '',
			'labelIcon' => 'flaticon-stethoscope',
			'ver' => '1.0',
			'fetchJson' => MEDICATE_CORE_URL.'/public/css/vendor/font/flaticons/flaticon.js',
			'native' => true,
         	],
	        'ion-ionicons' => [
			'name' => 'ion-ionicons',
			'label' => __( 'Ionic Icons', 'medicate' ),
			'url' => '',
			'enqueue' => '',
			'prefix' => 'ion-',
			'displayPrefix' => 'ion',
			'labelIcon' => 'ion ion-android-add',
			'ver' => '1.0',
			'fetchJson' => MEDICATE_CORE_URL.'/public/css/vendor/font/ionicons/ionicons.js',
			'native' => true,
        	],
	       'themify-icons' => [
			'name' => 'themify-icons',
			'label' => __( 'Themefy Icons', 'pilelabs-core' ),
			'url' => '',
			'enqueue' => '',
			'prefix' => '',
			'displayPrefix' => '',
			'labelIcon' => 'ti-wand',
			'ver' => '1.0',
			'fetchJson' => MEDICATE_CORE_URL.'/public/css/vendor/font/themify-icons/themify-icons.js',
			'native' => true,
         	],
        ];
    }

    public function enqueue_styles()
    {


		wp_enqueue_style('flations-1', MEDICATE_CORE_URL.'/public/css/vendor/font/flaticons/flaticon.css',array(), '2.0.0', 'all');
    	wp_enqueue_style('ionicons-icons', MEDICATE_CORE_URL.'/public/css/vendor/font/ionicons/ionicons.min.css',array(), '2.0.0', 'all');
		wp_enqueue_style('themify-icons', MEDICATE_CORE_URL.'/public/css/vendor/font/themify-icons/themify-icons.css',array(), '2.0.0', 'all');
    	
    }
}
new Medic_Custom_Icons;
