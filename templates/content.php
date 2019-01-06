<?php 
/**
 * @Packge     : CarRentals
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

// Post Item Start
?>

<div id="<?php the_ID(); ?>" <?php post_class( esc_attr( 'single-blog-post' ) ); ?>>
	<?php 
	
	/**
	 * Blog Post thumbnail
	 * @Hook  carrentals_blog_posts_thumb
	 *
	 * @Hooked carrentals_blog_posts_thumb_cb
	 * 
	 *
	 */
	do_action( 'carrentals_blog_posts_thumb' );
	
	/**
	 * Blog Post Meta
	 * @Hook  carrentals_blog_posts_meta
	 *
	 * @Hooked carrentals_blog_posts_meta_cb
	 * 
	 *
	 */
	do_action( 'carrentals_blog_posts_meta' );

	/**
	 * Blog Post title
	 * @Hook  carrentals_blog_posts_title
	 *
	 * @Hooked carrentals_blog_posts_title_cb
	 * 
	 *
	 */
	do_action( 'carrentals_blog_posts_title' );
		
	/**
	 * Blog Excerpt With read more button
	 * @Hook  carrentals_blog_posts_excerpt
	 *
	 * @Hooked carrentals_blog_posts_excerpt_cb
	 * 
	 *
	 */
	do_action( 'carrentals_blog_posts_excerpt' );

	/**
	 * Blog Excerpt With read more button
	 * @Hook  carrentals_blog_posts_bottom_meta
	 *
	 * @Hooked carrentals_blog_posts_bottom_meta_cb
	 * 
	 *
	 */
	do_action( 'carrentals_blog_posts_bottom_meta' );
	?>
</div>