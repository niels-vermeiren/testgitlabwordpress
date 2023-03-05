<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
  $content = apply_filters( 'medicate_the_content', get_the_content() );
  $audio = false;
		// Only get audio from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
   $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
 }
 ?>
 <div class="pt-blog-post">
  <div class="pt-post-media">
    <?php
    if(has_post_thumbnail())
    {
     ?>
     <div class="pt-post-media">
      <?php  the_post_thumbnail(); 
      $archive_year  = get_the_time( 'Y' );
      $archive_month = get_the_time( 'm' );
      $archive_day   = get_the_time( 'd' );
      ?>
      <div class="pt-post-date">
       <a href="<?php echo esc_url( get_day_link($archive_year, $archive_month, $archive_day ) ); ?>">
        <span><?php echo esc_html( get_the_date()); ?></span></a>
      </div>
    </div>
    <?php
  }
  ?>
  <?php
  if(!is_single())
  {
    the_content();
  }
  ?>
</div>
<div class="pt-blog-contain">
  <div class="pt-post-meta">
    <ul>
     <li class="pt-post-author">
      <i class="fa fa-user"></i>
      <?php the_author(); ?>
    </li>
    <li class="pt-post-comment">
      <?php
      if(get_comments_number(get_the_ID()) == 1)
      {
        $comment = esc_html__('Comment','medicate');
      }
      else
      {
        $comment = esc_html__('Comments','medicate');
      }
      ?>
      <a href="<?php the_permalink(); ?>"><i class="fa fa-comments"></i><?php echo get_comments_number(get_the_ID()).' '.$comment; ?></a>
      </li>
    </ul>
  </div>
  <?php
  if(!is_single())
  {
    ?>
    <h5 class="pt-blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
  <?php } ?>
  <?php
  if(is_single())
  {
    the_content();
  }
  else
  {
    the_excerpt();
    wp_link_pages( array(
      'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'medicate' ),
      'after'       => '</div>',
      'link_before' => '<span class="page-number">',
      'link_after'  => '</span>',
    ) );
    ?>
    <?php
    $btn_text = 'Read More';
    if(isset($pqf_options['blog_btn_text']) && !empty($pqf_options['blog_btn_text']))
    {
      $btn_text = $pqf_options['blog_btn_text'];
    }
    ?>
    <div class="pt-btn-container">
      <a href="<?php the_permalink(); ?>" class="pt-button">
        <div class="pt-button-block">
          <span  class="pt-button-text"><?php echo esc_html($btn_text); ?></span>
          <i class="ion ion-plus-round"></i>
        </div>
      </a>
    </div>
    <?php
  }
  ?>
</div>
</div>
<?php
$pqf_options = get_option('pqf_options');
if(isset($pqf_options['medicate_display_comment']))
{
  $options = $pqf_options['medicate_display_comment'];
  if($options == "yes")
  {
   if(is_single()){
				// If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
     comments_template();
 endif;
}
}
}
else {
  if(is_single()){
			// If comments are open or we have at least one comment, load up the comment template.
   if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;
}
}
?>
</article><!-- #post-## -->