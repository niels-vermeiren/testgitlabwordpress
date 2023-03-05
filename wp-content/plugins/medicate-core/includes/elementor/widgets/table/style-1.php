<?php
namespace Elementor;
if (!defined('ABSPATH')) {
    exit;
}
$settings = $this->get_settings();
 echo do_shortcode( '[mp-timetable view ='.$settings['views'].' 
 	title ='.$settings['show_title'].' 
 	sub-title ='.$settings['show_sub_title'].'
 	description ='.$settings['show_desc'].'
 	responsive ='.$settings['show_responsive'].'
 	time ='.$settings['show_time'].']' );
