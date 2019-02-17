<?php 
/**
 * @Packge     : CarRentals Companion
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

if( !defined( 'WPINC' ) ){
    die;
}

// demo import file
function carrentals_import_files() {
	
	$demoImg = '<img src="'.CARRENTALS_COMPANION_URL . 'inc/demo-data/screen-image.png' .'" alt="'.esc_attr__( 'Demo Preview Imgae', 'carrentals' ).'" />';
	
  return array(
    array(
      'import_file_name'             => 'CarRentals Demo',
      'local_import_file'            => CARRENTALS_COMPANION_DEMO_DIR_PATH .'carrentals-demo.xml',
      'local_import_widget_file'     => CARRENTALS_COMPANION_DEMO_DIR_PATH .'carrentals-widgets-demo.json',
      'import_customizer_file_url'   => CARRENTALS_COMPANION_URL . 'inc/demo-data/carrentals-customizer.dat',
      'import_notice' => $demoImg,
    ),
  );
}
add_filter( 'pt-ocdi/import_files', 'carrentals_import_files' );
	
// demo import setup
function carrentals_after_import_setup() {
	// Assign menus to their locations.
	$main_menu    = get_term_by( 'name', 'Primary Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
            'primary-menu' => $main_menu->term_id
		)
	);

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Home' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
	update_option( 'carrentals_demodata_import', 'yes' );

}
add_action( 'pt-ocdi/after_import', 'carrentals_after_import_setup' );

//disable the branding notice after successful demo import
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

//change the location, title and other parameters of the plugin page
function carrentals_import_plugin_page_setup( $default_settings ) {
	$default_settings['parent_slug'] = 'themes.php';
	$default_settings['page_title']  = esc_html__( 'One Click Demo Import' , 'carrentals' );
	$default_settings['menu_title']  = esc_html__( 'Import Demo Data' , 'carrentals' );
	$default_settings['capability']  = 'import';
	$default_settings['menu_slug']   = 'carrentals-demo-import';

	return $default_settings;
}
add_filter( 'pt-ocdi/plugin_page_setup', 'carrentals_import_plugin_page_setup' );

// Enqueue scripts
function carrentals_demo_import_custom_scripts(){
	
	
	if( isset( $_GET['page'] ) && $_GET['page'] == 'carrentals-demo-import' ){
		// style
		wp_enqueue_style( 'carrentals-demo-import', CARRENTALS_COMPANION_URL . 'inc/demo-data/css/demo-import.css', array(), '1.0', false );
	}
	
	
}
add_action( 'admin_enqueue_scripts', 'carrentals_demo_import_custom_scripts' );



?>