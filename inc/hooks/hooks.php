<?php 
/**
 * @Packge 	   : CarRentals
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
// Block direct access
if( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
 *
 * Before Wrapper
 *
 * @Preloader
 *
 */
add_action( 'carrentals_preloader', 'carrentals_site_preloader', 10 );

/**
 * Header
 *
 * @Header Menu
 * @Header Bottom
 * 
 */

add_action( 'carrentals_header', 'carrentals_header_cb', 10 );

/**
 * Hook for footer
 *
 */
add_action( 'carrentals_footer', 'carrentals_footer_area', 10 );
add_action( 'carrentals_footer', 'carrentals_back_to_top', 20 );

/**
 * Hook for Blog, single, page, search, archive pages wrapper.
 */
add_action( 'carrentals_wrp_start', 'carrentals_wrp_start_cb', 10 );
add_action( 'carrentals_wrp_end', 'carrentals_wrp_end_cb', 10 );

/**
 * Hook for Blog, single, search, archive pages column.
 */
add_action( 'carrentals_blog_col_start', 'carrentals_blog_col_start_cb', 10 );
add_action( 'carrentals_blog_col_end', 'carrentals_blog_col_end_cb', 10 );

/**
 * Hook for blog posts thumbnail.
 */
add_action( 'carrentals_blog_posts_thumb', 'carrentals_blog_posts_thumb_cb', 10 );

/**
 * Hook for blog posts title.
 */
add_action( 'carrentals_blog_posts_title', 'carrentals_blog_posts_title_cb', 10 );

/**
 * Hook for blog posts meta.
 */
add_action( 'carrentals_blog_posts_meta', 'carrentals_blog_posts_meta_cb', 10 );

/**
 * Hook for blog posts bottom meta.
 */
add_action( 'carrentals_blog_posts_bottom_meta', 'carrentals_blog_posts_bottom_meta_cb', 10 );

/**
 * Hook for blog posts excerpt.
 */
add_action( 'carrentals_blog_posts_excerpt', 'carrentals_blog_posts_excerpt_cb', 10 );

/**
 * Hook for blog posts content.
 */
add_action( 'carrentals_blog_posts_content', 'carrentals_blog_posts_content_cb', 10 );

/**
 * Hook for blog sidebar.
 */
add_action( 'carrentals_blog_sidebar', 'carrentals_blog_sidebar_cb', 10 );

/**
 * Hook for blog single post social share option.
 */
add_action( 'carrentals_blog_posts_share', 'carrentals_blog_posts_share_cb', 10 );

/**
 * Hook for blog single post meta category, tag, next - previous link and comments form.
 */
add_action( 'carrentals_blog_single_meta', 'carrentals_blog_single_meta_cb', 10 );

/**
 * Hook for page content.
 */
add_action( 'carrentals_page_content', 'carrentals_page_content_cb', 10 );


/**
 * Hook for 404 page.
 */
add_action( 'carrentals_fof', 'carrentals_fof_cb', 10 );
