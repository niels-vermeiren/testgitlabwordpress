<?php
namespace Peaceful\medicate;
class Options {
	protected static $instance = null;
	public static function instance() {
		if ( null == self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	public static function get_image_url( $name , $args = array() , $image_id = '')
	{
		$image_url = '';

		if(empty($image_id))
		{
			$image_id = get_the_ID();
		}
		if(isset($args['size_dimention']) && !empty($args['size_dimention']['width']) && !empty($args['size_dimention']['height']))
		{
		   $image_size = $args['size_dimention'];
		   $image_url =  medicate_resize( get_the_post_thumbnail_url(get_the_ID()), $args['size_dimention']['width'], $args['size_dimention']['height'], true );
		}
		else if( isset($args['size']) && !empty($args['size']) )
		{
			$image_url = get_the_post_thumbnail_url($image_id , $args['size'] );
		}

		else
		{
		    $image_url = get_the_post_thumbnail_url($image_id);
		}
		return $image_url;
	}


}
new Options;
