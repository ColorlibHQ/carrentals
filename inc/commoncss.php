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

// enqueue css
function carrentals_common_custom_css() {
    
    wp_enqueue_style( 'carrentals-common', get_template_directory_uri().'/assets/css/common.css' );
		
		$headerBg          = esc_url( get_header_image() );
		$headerTextColor   = esc_attr( carrentals_opt( 'carrentals_headertextcolor' ) );
		$headerbgcolor     = esc_attr( carrentals_opt( 'carrentals_headerbgcolor' ) );
		$headerOverlay     = esc_attr( carrentals_opt( 'carrentals_headeroverlaycolor' ) );
		$navbarbg 			= esc_attr( carrentals_opt( 'carrentals_header_navbar_bgColor' ) );
		$stickynavbarbg 	= esc_attr( carrentals_opt( 'carrentals_header_navbarsticky_bgColor' ) );
		$navmenuColor 			= esc_attr( carrentals_opt( 'carrentals_header_navbar_menuColor' ) );
		$navmenuHovColor 		= esc_attr( carrentals_opt( 'carrentals_header_navbar_menuHovColor' ) );
		$stickynavmenuColor 	= esc_attr( carrentals_opt( 'carrentals_header_sticky_navbar_menuColor' ) );
		$stickynavmenuHovColor 	= esc_attr( carrentals_opt( 'carrentals_header_sticky_navbar_menuHovColor' ) );
		$foftext1     	   = esc_attr( carrentals_opt( 'carrentals_fof_textonecolor_settings' ) );
		$foftext2     	   = esc_attr( carrentals_opt( 'carrentals_fof_texttwocolor_settings' ) );
		$fofbgcolor        = esc_attr( carrentals_opt( 'carrentals_fof_bgcolor_settings' ) );
		$footerbgColor     = esc_attr( carrentals_opt( 'carrentals_footer_bgColor_settings' ) );
		$footerTextColor   = esc_attr( carrentals_opt( 'carrentals_footer_color_settings' ) );
		$anchorcolor 	   = esc_attr( carrentals_opt( 'carrentals_footer_anchorcolor_settings' ) );
		$anchorhovcolor    = esc_attr( carrentals_opt( 'carrentals_footer_anchorhovcolor_settings' ) );
		$widgettitlecolor  = esc_attr( carrentals_opt( 'carrentals_footer_widgettitlecolor_settings' ) );
		$themecolor  	   = esc_attr( carrentals_opt( 'carrentals_themecolor' ) );

        $customcss ="
			.genric-btn.primary,
			.genric-btn.primary-border:hover,
			.default-switch input + label,
			.primary-switch input:checked + label:before,
			.primary-btn,
			.exibition-area .owl-dot.active,
			.single-exibition .tags li:hover,
			.single-footer-widget .click-btn,
			.generic-banner,
			.tags-widget ul li:hover,
			.commentform-area .primary-btn,
			.home-about-area .home-about-right .primary-btn,
			.single-service:hover,
			.team-area .thumb div,
			.single-price:hover .price-bottom,
			.single-price .price-bottom .primary-btn,
			.model-area .owl-dot.active,
			.callaction-btn,
			.facts-area {
				background-color: {$themecolor};
			}

			b, 
			sup, 
			sub, 
			u,
			del,
			a:hover,
			.genric-btn.primary-border,
			.genric-btn.primary:hover,
			.ordered-list li,
			.ordered-list-alpha li,
			.ordered-list-roman li,
			.default-select .nice-select .list .option.selected,
			.default-select .nice-select .list .option:hover,
			.form-select .nice-select .list .option.selected,
			.form-select .nice-select .list .option:hover,
			.home-about-area .home-about-right .primary-btn:hover,
			.top-head-right ul li:hover a,
			.nav-menu ul li:hover > a,
			#mobile-nav ul .menu-has-children i.fa-chevron-up,
			.single-model .title h2,
			.single-feature:hover h4,
			#mobile-nav ul .menu-item-active,
			.primary-btn:hover,
			.primary-btn.white:hover,
			.primary-btn.white:hover span,
			.single-service .fa,
			.single-service .lnr,
			.single-service h4,
			.single-blog:hover h4,
			.copy-right-text i, .copy-right-text a,
			.footer-social a:hover i,
			.single-footer-widget .bb-btn,
			.footer-text a, .footer-text i,
			.single-exhibition .price,
			.contact-page-area .form-area .primary-btn:hover,
			.contact-page-area .single-contact-address .fa,
			.contact-page-area .single-contact-address .lnr,
			.single-blog-post .tags li:hover a,
			.search-widget i,
			.protfolio-widget ul li a i:hover,
			.single-widget ul li:hover a,
			.single-widget ul li:hover,
			.category-widget ul li:hover h6, 
			.category-widget ul li:hover span,
			.recent-posts-widget .single-recent-post:hover h4,
			.single-blog-post .tags li:first-child:after,
			.contact-page-area .form-area .primary-btn:hover,
			.single-blog-post a,
			.single-blog-post a h1,
			.sl-wrapper .fa-heart,
			.ui-datepicker-next span,
			.ui-datepicker-prev span,
			.single-review .star .checked,
			.tags li .fa,
			#logo a {
				color: {$themecolor};
			}
			.genric-btn.primary-border,
			.genric-btn.primary:hover,
			.generic-blockquote,
			.unordered-list li:before,
			.single-input-primary:focus,
			#header #logo h1 a, #header #logo h1 a:hover,
			.primary-btn:hover,
			.contact-page-area .form-area .primary-btn:hover,
			.home-about-area .home-about-right .primary-btn:hover,
			.single-widget ul li:hover,
			.category-widget ul li:hover,
			.commentform-area .primary-btn:hover,
			.callaction-btn:hover,
			blockquote, 
			.generic-blockquote {
				border-color: {$themecolor};
			}

			.global-banner {
				background-image: url( {$headerBg} );
			}
			.banner-area .overlay-bg,
			.global-banner .overlay-bg {
				background-color: {$headerOverlay}
			}
			.about-content h1, 
			.about-content a,
			.bread-crumb.link-nav {
				color: {$headerTextColor};
			}
			.global-banner {
				background-color: {$headerbgcolor}
			}

			#f0f{
				background-color: {$fofbgcolor}
			}
			.inner-child-fof .h1 {
				color: {$foftext1}
			}
			.inner-child-fof a,
			.inner-child-fof p {
				color: {$foftext2}
			}
			.footer-area{
				background-color: {$footerbgColor};
				color: {$footerTextColor};
			}
			caption,
			footer .s-text8 {
				color: {$footerTextColor};
			}
			.single-footer-widget a,
			.footer-bottom a{
				color: {$anchorcolor};
			}
			.single-footer-widget a:hover,
			.footer-bottom a:hover{
				color: {$anchorhovcolor};
			}
			.single-footer-widget h6{
				color: {$widgettitlecolor};
			}
			#header {
				background-color: {$navbarbg};
			}
			#header.header-scrolled {
				background: {$stickynavbarbg};
			}
			.nav-menu a {
				color: {$navmenuColor};
			}
			.nav-menu a:hover {
				color: {$navmenuHovColor};
			}
			.header-scrolled .nav-menu a {
				color: {$stickynavmenuColor};
			}
			.header-scrolled .nav-menu a:hover {
				color: {$stickynavmenuHovColor};
			}

        ";
       
    wp_add_inline_style( 'carrentals-common', $customcss );
    
}
add_action( 'wp_enqueue_scripts', 'carrentals_common_custom_css', 50 );