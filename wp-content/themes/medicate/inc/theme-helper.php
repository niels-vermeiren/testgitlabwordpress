<?php
namespace peaceful\medicate;
class Helper
{
	protected static $instance = null;
	public static function instance() {
		if ( null == self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}
	public function __construct (){ }
	public static function display_header() {
		$pqf_options = get_option('pqf_options');
			?>
				<div class="pt-breadcrumb">
				   <div class="container">
				      <div class="row align-items-center">
				         <div class="col-lg-12">
				            <nav aria-label="breadcrumb">
				            	<div class="pt-breadcrumb-title">
				            		<h1>
				                  		<?php self::page_title(); ?>
			              		 	</h1>
				            	</div>
				               <div class="pt-breadcrumb-container">
									<ol class="breadcrumb">
		                 		 		<?php self::breadcrumbs(); ?>
			               			</ol>
				               </div>
				            </nav>
				         </div>
				      </div>
				   </div>
				</div>
			<?php
	}
	public static function page_title() {
	  if (is_home()) {
	    if (get_option('page_for_posts', true)) {
	      echo get_the_title(get_option('page_for_posts', true));
	    }
	    else {
	      _e('Home', 'medicate');
	    }
	  }
	  elseif (is_archive()) {
	    $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
	    if ($term) {
	      echo esc_html($term->name);
	    }
	    elseif (is_post_type_archive()) {
	      echo get_queried_object()->labels->name;
	    }
	    elseif (is_day()) {
	      printf(__('Daily Archives: %s', 'medicate'), get_the_date());
	    }
	    elseif (is_month()) {
	      printf(__('Monthly Archives: %s', 'medicate'), get_the_date('F Y'));
	    }
	    elseif (is_year()) {
	      printf(__('Yearly Archives: %s', 'medicate'), get_the_date('Y'));
	    }
	    elseif (is_author()) {
	      $author = get_queried_object();
	      printf(__('Author Archives: %s', 'medicate'), $author->display_name);
	    }
	    else {
	      single_cat_title();
	    }
	  }
	  elseif (is_search()) {
	    printf(__('Search Results for %s', 'medicate'), get_search_query());
	  }
	  elseif (is_404()) {
	    _e('Page Not Found', 'medicate');
	  }
	  else {
	    the_title();
	  }
	}
	public static function breadcrumbs() {
		  $showOnHome = 0;
     $home = ''.esc_html__('Home', 'medicate').'';
     $showCurrent = 1;

     global $post;
     $homeLink = esc_html(home_url());

     if (is_front_page()) {

     	if ($showOnHome == 1) echo '<li class="breadcrumb-item"><a href="' . $homeLink . '"><i class="fas fa-home mr-2"></i>' . $home . '</a></li>';


     } else {

       echo '<li class="breadcrumb-item"><a href="' . $homeLink . '"><i class="fas fa-home mr-2"></i>' . $home . '</a></li> ';

        if( is_home()){
          echo  '<li class="breadcrumb-item active">'.esc_html__('Blog', 'medicate').'</li>';
       }elseif ( is_category() ) {
         $thisCat = get_category(get_query_var('cat'), false);
         if ($thisCat->parent != 0) echo '<li class="breadcrumb-item">'.get_category_parents($thisCat->parent, TRUE, '  ').'</li>';
         echo  '<li class="breadcrumb-item active">'.esc_html__('Archive by category : ', 'medicate').' "' . single_cat_title('', false) . '" </li>';

       } elseif ( is_search() ) {
         echo  '<li class="breadcrumb-item active">'.esc_html__('Search results for : ', 'medicate').' "' . get_search_query() . '"</li>';

       } elseif ( is_day() ) {
         echo '<li class="breadcrumb-item"><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ';
         echo '<li class="breadcrumb-item"><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a></li>  ';
         echo  '<li class="breadcrumb-item active">'.get_the_time('d').'</li>';

       } elseif ( is_month() ) {
         echo '<li class="breadcrumb-item"><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ';
         echo  '<li class="breadcrumb-item active">'.get_the_time('F').'</li>';

       } elseif ( is_year() ) {
         echo  '<li class="breadcrumb-item active">'.get_the_time('Y').'</li>';

       } elseif ( is_single() && !is_attachment() ) {
         if ( get_post_type() != 'post' ) {
           $post_type = get_post_type_object(get_post_type());
           $slug = $post_type->rewrite;
           echo '<li class="breadcrumb-item"><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li>';
           if ($showCurrent == 1) echo '<li class="breadcrumb-item active">'. get_the_title().'</li>';
         } else {
           $cat = get_the_category(); $cat = $cat[0];

           if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s\s$#", "$1", $cats);
           echo '<li class="breadcrumb-item">'.get_category_parents($cat, TRUE, '  ').'</li>';
           if ($showCurrent == 1) echo  '<li class="breadcrumb-item active">'.get_the_title().'</li>';
         }

       } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
         $post_type = get_post_type_object(get_post_type());
         echo  '<li class="breadcrumb-item active">'.$post_type->labels->singular_name.'</li>';

       } elseif ( is_attachment() ) {
         $parent = get_post($post->post_parent);
         $cat = get_the_category($parent->ID); $cat = $cat[0];
         echo '<li class="breadcrumb-item">'.get_category_parents($cat, TRUE, '  ').'</li>';
         echo '<li class="breadcrumb-item"><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li>';
         if ($showCurrent == 1) echo '<li class="breadcrumb-item active"> ' .  get_the_title().'</li>';

       } elseif ( is_page() && !$post->post_parent ) {
         if ($showCurrent == 1) echo  '<li class="breadcrumb-item active">'.get_the_title().'</li>';

       } elseif ( is_page() && $post->post_parent ) {
         $parent_id  = $post->post_parent;
         $breadcrumbs = array();
         while ($parent_id) {
           $page = get_page($parent_id);
           $breadcrumbs[] = '<li class="breadcrumb-item"><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
           $parent_id  = $page->post_parent;
         }
         $breadcrumbs = array_reverse($breadcrumbs);

         if ($showCurrent == 1) echo '<li class="breadcrumb-item active"> ' .  get_the_title().'</li>';

       } elseif ( is_tag() ) {
         echo  '<li class="breadcrumb-item active">'.esc_html__('Posts tagged', 'medicate').' "' . single_tag_title('', false) . '"</li>';

       } elseif ( is_author() ) {
          global $author;
         $userdata = get_userdata($author);
         echo  '<li class="breadcrumb-item active">'.esc_html__('Articles posted by : ', 'medicate').' ' . $userdata->display_name.'</li>';

       } elseif ( is_404() ) {
         echo  '<li class="breadcrumb-item active">'.esc_html__('Error 404', 'medicate').'</li>';
       }

       if ( get_query_var('paged') ) {
         if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
         echo '<li class="breadcrumb-item">'. esc_html__('Page','medicate') . ' ' . get_query_var('paged').'</li>';
         if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
       }
     }
	}
	public static function get_svg( $args = array() ) {

		if ( empty( $args ) ) {
			return esc_html__( 'Please define default parameters in the form of an array.', 'medicate' );
		}
		if ( false === array_key_exists( 'icon', $args ) ) {
			return esc_html__( 'Please define an SVG icon filename.', 'medicate' );
		}

		$defaults = array(
			'icon'        => '',
			'title'       => '',
			'desc'        => '',
			'fallback'    => false,
		);

		$args = wp_parse_args( $args, $defaults );
		$aria_hidden = ' aria-hidden="true"';

		$aria_labelledby = '';

		if ( $args['title'] ) {
			$aria_hidden     = '';
			$unique_id       = uniqid();
			$aria_labelledby = ' aria-labelledby="title-' . $unique_id . '"';
			if ( $args['desc'] ) {
				$aria_labelledby = ' aria-labelledby="title-' . $unique_id . ' desc-' . $unique_id . '"';
			}
		}
	}
	public static function pagination($numpages = '', $pagerange = '', $paged='')
	{
		global $paged;
		if (empty($pagerange)) {
			$pagerange = 2;
		}

		if (empty($paged)) {
			$paged = 1;
		}
		if ($numpages == '') {
			global $wp_query;
			$numpages = $wp_query->max_num_pages;
			if(!$numpages) {
				$numpages = 1;
			}
		}


		$pagination_args = array(
		//'base'            => get_pagenum_link(1) . '%_%',
		'format'		  => '?paged=%#%',
		'total'           => $numpages,
		'current'         => $paged,
		'show_all'        => False,
		'end_size'        => 1,
		'mid_size'        => $pagerange,
		'prev_next'       => True,
		'prev_text'       =>  esc_html__( 'Previous page', 'medicate' ),
		'next_text'       => esc_html__( 'Next page', 'medicate' ),
		'type'            => 'list',
		'add_args'        => false,
		'add_fragment'    => ''
		);

		$paginate_links = paginate_links($pagination_args);
		if ($paginate_links) {

					echo '<div class="col-lg-12 col-md-12">
						<div class="pt-pagination">
								<nav aria-label="Page navigation">';
								printf( esc_html__('%s','medicate'),$paginate_links);
								echo '</nav>
							</div>
						</div>';


		}
	}
	public  static function comments( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
        if ( 'div' == $args['style'] ) {
            $tag = 'div';
            $add_below = 'comment';
        } else {
            $tag = 'li';
            $add_below = 'div-comment';
        }
    ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
        <p><?php esc_html__( 'Pingback:', 'medicate' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( esc_html__( '(Edit)', 'medicate' ), '<span class="edit-link">', '</span>' ); ?></p>
    <?php
            break;
        default :
        global $post;
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
        <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
			<div class="pt-comment-info">
				<div class="pt-comment-wrap">
					<div class="pt-comment-avatar">
						<?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
					</div>
					<div class="pt-comment-box">
						<h5 class="title">
							<?php printf( wp_kses( '%s ', 'medicate' ), sprintf( '%s', get_comment_author_link() ) ); ?>
						</h5>
						<div class="pt-comment-metadata">

							<?php edit_comment_link( esc_html__( 'Edit', 'medicate' ), '<span class="edit-link">', '</span>' ); ?>
						</div><!-- .comment-metadata -->
						<?php if ( '0' == $comment->comment_approved ) : ?>
						<p class="comment-awaiting-moderation"><?php esc_html__( 'Your comment is awaiting moderation.', 'medicate' ); ?></p>
						<?php endif; ?>
						<div class="comment-content">
							<?php comment_text(); ?>
						</div><!-- .comment-content -->
					</div><!-- .comment-author -->
					<div class="reply">
						<?php comment_reply_link( array_merge( $args, array( 'add_below' => 'div-comment', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
					</div><!-- .reply -->
				</div>
			</div>
        </article><!-- .comment-body -->
    <?php
        break;
	endswitch;
}
public static function page_images() {
  $pqf_options = get_option('pqf_options');
  $feature_image = '';
$page_id = get_queried_object_id();
if ( has_post_thumbnail( $page_id ) && !is_single() && !is_404() )
{
    $image_array = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ) );
     $feature_image = $image_array[0];
}
else if(is_single())
{
  if (class_exists('ReduxFramework'))
  {
    if(!empty($pqf_options['single_side_image']['url']))
    {
      $feature_image = $pqf_options['single_side_image']['url'];

    }
  }
}
else if (class_exists('ReduxFramework'))
{
  if(!empty($pqf_options['banner_side_image']['url']))
  {
    $feature_image = $pqf_options['banner_side_image']['url'];

  }
}
if(!empty($feature_image))
{
  ?>
  <img src="<?php echo esc_url($feature_image); ?>" class="img-fluid" alt='seozie-img'>
  <?php
}


}


}