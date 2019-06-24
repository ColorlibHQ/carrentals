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
 * Define constant
 *
 */
 
// Base URI
if( ! defined( 'CARRENTALS_DIR_URI' ) ) {
	define( 'CARRENTALS_DIR_URI', get_template_directory_uri().'/' );
}

// assets URI
if( ! defined( 'CARRENTALS_DIR_ASSETS_URI' ) ) {
	define( 'CARRENTALS_DIR_ASSETS_URI', CARRENTALS_DIR_URI.'assets/' );
}

// Css File URI
if( ! defined( 'CARRENTALS_DIR_CSS_URI' ) ) {
	define( 'CARRENTALS_DIR_CSS_URI', CARRENTALS_DIR_ASSETS_URI .'css/' );
}

// Js File URI
if( ! defined( 'CARRENTALS_DIR_JS_URI' ) ) {
	define( 'CARRENTALS_DIR_JS_URI', CARRENTALS_DIR_ASSETS_URI .'js/' );
}

// Base Directory
if( ! defined( 'CARRENTALS_DIR_PATH' ) ) {
	define( 'CARRENTALS_DIR_PATH', get_parent_theme_file_path().'/' );
}

//Inc Folder Directory
if( ! defined( 'CARRENTALS_DIR_PATH_INC' ) ) {
	define( 'CARRENTALS_DIR_PATH_INC', CARRENTALS_DIR_PATH.'inc/' );
}

//CarRentals libraries Folder Directory
if( ! defined( 'CARRENTALS_DIR_PATH_LIBS' ) ) {
	define( 'CARRENTALS_DIR_PATH_LIBS', CARRENTALS_DIR_PATH_INC.'libraries/' );
}

//Classes Folder Directory
if( ! defined( 'CARRENTALS_DIR_PATH_CLASSES' ) ) {
	define( 'CARRENTALS_DIR_PATH_CLASSES', CARRENTALS_DIR_PATH_INC.'classes/' );
}

//Hooks Folder Directory
if( ! defined( 'CARRENTALS_DIR_PATH_HOOKS' ) ) {
	define( 'CARRENTALS_DIR_PATH_HOOKS', CARRENTALS_DIR_PATH_INC.'hooks/' );
}

//Widgets Folder Directory
if( ! defined( 'CARRENTALS_DIR_PATH_WIDGET' ) ) {
	define( 'CARRENTALS_DIR_PATH_WIDGET', CARRENTALS_DIR_PATH_INC.'widgets/' );
}

//Widgets Folder Directory
if( ! defined( 'CARRENTALS_DIR_PATH_COMPANION' ) ) {
	define( 'CARRENTALS_DIR_PATH_COMPANION', CARRENTALS_DIR_PATH_INC.'carrentals-companion/' );
}



// Admin Enqueue script
function carrentals_admin_script(){
    wp_enqueue_style( 'carrentals-admin', get_template_directory_uri().'/assets/css/carrentals_admin.css', false, '1.0.0' );
    wp_enqueue_script( 'carrentals_admin', get_template_directory_uri().'/assets/js/carrentals_admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'carrentals_admin_script' );


/**
 * Include File
 *
 */

require_once( CARRENTALS_DIR_PATH_INC . 'breadcrumbs.php' );
require_once( CARRENTALS_DIR_PATH_INC . 'widgets-reg.php' );
require_once( CARRENTALS_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( CARRENTALS_DIR_PATH_INC . 'carrentals-functions.php' );
require_once( CARRENTALS_DIR_PATH_INC . 'commoncss.php' );
require_once( CARRENTALS_DIR_PATH_INC . 'support-functions.php' );
require_once( CARRENTALS_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( CARRENTALS_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( CARRENTALS_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( CARRENTALS_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( CARRENTALS_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( CARRENTALS_DIR_PATH_HOOKS . 'hooks.php' );
require_once( CARRENTALS_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( CARRENTALS_DIR_PATH_COMPANION . 'carrentals-companion.php' );
require_once( CARRENTALS_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( CARRENTALS_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );

/**
 * Instantiate CarRentals object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$obj = new CarRentals();
