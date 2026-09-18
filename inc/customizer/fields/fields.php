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

/***********************************
 * General Section Fields
 ***********************************/


// Theme Main Color Picker
Colorlib_Customizer::add_field(
    'carrentals_themecolor',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Theme Main Color.', 'carrentals' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'carrentals_general_options_section',
        'default'     => '#fab700',
    )
);
// Google map api key field
$url = 'https://developers.google.com/maps/documentation/geocoding/get-api-key';

Colorlib_Customizer::add_field(
    'carrentals_map_apikey',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Google map api key', 'carrentals' ),
        'description'       => sprintf( __( 'Set google map api key. To get api key %s click here %s.', 'carrentals' ), '<a target="_blank" href="'.esc_url( $url  ).'">', '</a>' ),
        'section'           => 'carrentals_general_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '',
        
    )
);
/***********************************
 * Header Section Fields
 ***********************************/

// Header Nav Bar Background Color Picker
Colorlib_Customizer::add_field(
    'carrentals_header_navbar_bgColor',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Background Color', 'carrentals' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'carrentals_headertop_options_section',
        'default'     => '',
    )
);
// Header Sticky  Nav Bar Background Color Picker
Colorlib_Customizer::add_field(
    'carrentals_header_navbarsticky_bgColor',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Header Sticky Nav Bar Background Color', 'carrentals' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'carrentals_headertop_options_section',
        'default'     => '',
    )
);
// Header Nav Bar Menu Color Picker
Colorlib_Customizer::add_field(
    'carrentals_header_navbar_menuColor',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Menu Color', 'carrentals' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'carrentals_headertop_options_section',
        'default'     => '#fff',
    )
);
// Header Nav Bar Menu Hover Color Picker
Colorlib_Customizer::add_field(
    'carrentals_header_navbar_menuHovColor',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Menu Hover Color', 'carrentals' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'carrentals_headertop_options_section',
        'default'     => '#4a7aec',
    )
);
// Header sticky nav bar menu color picker
Colorlib_Customizer::add_field(
    'carrentals_header_sticky_navbar_menuColor',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Sticky Header Nav Bar Menu Color', 'carrentals' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'carrentals_headertop_options_section',
        'default'     => '#fff',
    )
);
// Header sticky nav bar menu hover color picker
Colorlib_Customizer::add_field(
    'carrentals_header_sticky_navbar_menuHovColor',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Sticky Header Nav Bar Menu Hover Color', 'carrentals' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'carrentals_headertop_options_section',
        'default'     => '#4a7aec',
    )
);
// Page Header Background Color Picker
Colorlib_Customizer::add_field(
    'carrentals_headerbgcolor',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Header Background Color', 'carrentals' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => '#999',
    )
);
// Page Header text Color Picker
Colorlib_Customizer::add_field(
    'carrentals_headertextcolor',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Header Text Color', 'carrentals' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => '#fff',
    )
);
// Header overlay switch field
Colorlib_Customizer::add_field(
    'carrentals-headeroverlay-toggle-settings',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Toggle header overlay', 'carrentals' ),
        'section'     => 'colors',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
// Header overlay color
Colorlib_Customizer::add_field(
    'carrentals_headeroverlaycolor',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Header Overlay Color', 'carrentals' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => 'rgba(0, 0, 0, 0.7)',
    )
);

/***********************************
 * Blog Section Fields
 ***********************************/


// Post excerpt length field
Colorlib_Customizer::add_field(
    'carrentals_post_excerpt',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Post Excerpt', 'carrentals' ),
        'description' => esc_html__( 'Set post excerpt length.', 'carrentals' ),
        'section'     => 'carrentals_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);
// Blog sidebar layout field
Colorlib_Customizer::add_field(
    'carrentals-blog-sidebar-settings',
    array(
        'type'     => 'colorlib-layouts',
        'label'    => esc_html__( 'Blog Layout', 'carrentals' ),
        'section'  => 'carrentals_blog_options_section',
        'description' => esc_html__( 'Select the option to set blog page sidebar position.', 'carrentals' ),
        'layouts'  => array(
            '1' => get_template_directory_uri() . '/inc/customizer/colorlib-customizer/assets/img/layout-one-column.svg',
            '2' => get_template_directory_uri() . '/inc/customizer/colorlib-customizer/assets/img/layout-sidebar-right.svg',
            '3' => get_template_directory_uri() . '/inc/customizer/colorlib-customizer/assets/img/layout-sidebar-left.svg',
        ),
        'default'  => array(
            'columnsCount' => 1,
            'columns'      => array(
                1 => array(
                    'index' => 1,
                ),
                2 => array(
                    'index' => 2,
                ),
                3 => array(
                    'index' => 3,
                ),
            ),
        ),
        'min_span' => 4,
        'fixed'    => true
    )
);
if( defined( 'CARRENTALS_COMPANION_VERSION' ) ) {
// Header social switch field
Colorlib_Customizer::add_field(
    'carrentals-blog-social-share-toggle',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Blog Social Share Show/Hide', 'carrentals' ),
        'section'     => 'carrentals_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

// Header social switch field
Colorlib_Customizer::add_field(
    'carrentals-blog-like-toggle',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Blog Like Button Show/Hide', 'carrentals' ),
        'section'     => 'carrentals_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
}
/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Colorlib_Customizer::add_field(
    'carrentals_fof_text_one',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'carrentals' ),
        'section'           => 'carrentals_fof_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Ooops 404 Error !'
    )
);
// 404 text #2 field
Colorlib_Customizer::add_field(
    'carrentals_fof_text_two',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'carrentals' ),
        'section'           => 'carrentals_fof_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Either something went wrong or the page dosen\'t exist anymore.'
    )
);
// 404 text #1 color field
Colorlib_Customizer::add_field(
    'carrentals_fof_textonecolor_settings',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'carrentals' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'carrentals_fof_options_section',
        'default'     => '#404551', 
    )
);
// 404 text #2 color field
Colorlib_Customizer::add_field(
    'carrentals_fof_texttwocolor_settings',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'carrentals' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'carrentals_fof_options_section',
        'default'     => '#abadbe',
    )
);
// 404 background color field
Colorlib_Customizer::add_field(
    'carrentals_fof_bgcolor_settings',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'carrentals' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'carrentals_fof_options_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer widget toggle field
Colorlib_Customizer::add_field(
    'carrentals-widget-toggle-settings',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'carrentals' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'carrentals' ),
        'section'     => 'carrentals_footer_options_section',
        'default'     => false,
    )
);

// Footer copy right text add settings

// Copy right text
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s. Copyright &copy; %s  |  All rights reserved', 'carrentals' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );

Colorlib_Customizer::add_field(
    'carrentals-copyright-text-settings',
    array(
        'type'        => 'colorlib-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'carrentals' ),
        'section'     => 'carrentals_footer_options_section',
        'default'     => wp_kses_post( $copyText ),
    )
);
// Footer widget background color field
Colorlib_Customizer::add_field(
    'carrentals_footer_bgColor_settings',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Background Color', 'carrentals' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'carrentals_footer_options_section',
        'default'     => '#04091e',
    )
);
// Footer widget text color field
Colorlib_Customizer::add_field(
    'carrentals_footer_color_settings',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'carrentals' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'carrentals_footer_options_section',
        'default'     => '#777777',
    )
);
// Footer widget title color field
Colorlib_Customizer::add_field(
    'carrentals_footer_widgettitlecolor_settings',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Widgets Title Color', 'carrentals' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'carrentals_footer_options_section',
        'default'     => '#ffffff',
    )
);
// Footer widget anchor color field
Colorlib_Customizer::add_field(
    'carrentals_footer_anchorcolor_settings',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'carrentals' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'carrentals_footer_options_section',
        'default'     => '#777',
    )
);
// Footer widget anchor hover Color 
Colorlib_Customizer::add_field(
    'carrentals_footer_anchorhovcolor_settings',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'carrentals' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'carrentals_footer_options_section',
        'default'     => '#fab700',
    )
);
