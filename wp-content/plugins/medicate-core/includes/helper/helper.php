<?php
namespace Medic_Core\Includes\Helper;
class Medic_Helper
{
	protected static $instance = null;


	public static function instance() {
		if ( null == self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}
    public function __construct(){
                remove_filter( 'render_block', 'wp_render_layout_support_flag', 10, 2 );
        remove_filter( 'render_block', 'gutenberg_render_layout_support_flag', 10, 2 );
    }
     public static function  pt_grid_class($count = null)
    {
    $class = '';

        switch ($count)
         {
                case 1:
                case 4:  $class .= 'ipt-lg-6';
                break;
                default: $class .= 'ipt-lg-3';
            }

    return $class;


    }
    public static function portfolio_manasory($wp_get_attachment_url = '' ,$crop = false, $count = '0')
     {
        $pt_featured_image_url = '';
        if (strlen($wp_get_attachment_url)) {
                switch ($count) {
                    case 1:
                    case 4:
                        $pt_featured_image_url = aq_resize($wp_get_attachment_url, "958", "468", $crop, true, true);
                        break;
                    default:
                        $pt_featured_image_url = aq_resize($wp_get_attachment_url, "467", "461", $crop, true, true);
                }
            if (!(bool)$pt_featured_image_url) {
                $pt_featured_image_url = $wp_get_attachment_url;
            }
            $featured_image = '<img  src="' . $pt_featured_image_url . '" alt="" />';
        } else {
            $featured_image = '';
        }
        return $featured_image;
    }

    public static function portfolio_grid($wp_get_attachment_url = '' ,$width, $height,$crop = false, $count = '0')
     {
        $pt_featured_image_url = '';
        if (strlen($wp_get_attachment_url)) {
                switch ($count) {
                    // case 3:
                    // case 4:
                    //     $pt_featured_image_url = aq_resize($wp_get_attachment_url, "958", "468", $crop, true, true);
                    //     break;
                    default:
                        $pt_featured_image_url = aq_resize($wp_get_attachment_url, $width, $height, $crop, true, true);
                }
            if (!(bool)$pt_featured_image_url) {
                $pt_featured_image_url = $wp_get_attachment_url;
            }
            $featured_image = '<img  src="' . $pt_featured_image_url . '" alt="" />';
        } else {
            $featured_image = '';
        }
        return $featured_image;
    }

    public static function blog_crop($wp_get_attachment_url = '' ,$crop = false, $count = '0')
     {
        $pt_featured_image_url = '';
        if (strlen($wp_get_attachment_url)) {
                        $pt_featured_image_url = aq_resize($wp_get_attachment_url, "467", "352", $crop, true, true);
            if (!(bool)$pt_featured_image_url) {
                $pt_featured_image_url = $wp_get_attachment_url;
            }
            $featured_image = '<img  src="' . $pt_featured_image_url . '" alt="" />';
        } else {
            $featured_image = '';
        }
        return $featured_image;
    }    

}

Medic_Helper::instance();