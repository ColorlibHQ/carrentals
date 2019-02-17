<?php

if( !defined( 'WPINC' ) ){
    die;
}

/*************************
    Define Constant
*************************/

// Define version constant
if( ! defined( 'CARRENTALS_COMPANION_VERSION' ) ) {
    define( 'CARRENTALS_COMPANION_VERSION', '1.0' );
}

// Define dir path constant
if( ! defined( 'CARRENTALS_COMPANION_DIR_PATH' ) ) {
    define( 'CARRENTALS_COMPANION_DIR_PATH', CARRENTALS_DIR_PATH_COMPANION );
}

// Define inc dir path constant
if( ! defined( 'CARRENTALS_COMPANION_INC_DIR_PATH' ) ) {
    define( 'CARRENTALS_COMPANION_INC_DIR_PATH', CARRENTALS_COMPANION_DIR_PATH . 'inc/' );
}

// Define sidebar widgets dir path constant
if( ! defined( 'CARRENTALS_COMPANION_SW_DIR_PATH' ) ) {
    define( 'CARRENTALS_COMPANION_SW_DIR_PATH', CARRENTALS_COMPANION_INC_DIR_PATH . 'sidebar-widgets/' );
}

// Define elementor widgets dir path constant
if( ! defined( 'CARRENTALS_COMPANION_EW_DIR_PATH' ) ) {
    define( 'CARRENTALS_COMPANION_EW_DIR_PATH', CARRENTALS_COMPANION_INC_DIR_PATH . 'elementor-widgets/' );
}

// Define demo data dir path constant
if( ! defined( 'CARRENTALS_COMPANION_DEMO_DIR_PATH' ) ) {
    define( 'CARRENTALS_COMPANION_DEMO_DIR_PATH', CARRENTALS_COMPANION_INC_DIR_PATH . 'demo-data/' );
}

// Define companion url constant
if( ! defined( 'CARRENTALS_COMPANION_URL' ) ) {
    define( 'CARRENTALS_COMPANION_URL', CARRENTALS_DIR_URI . 'inc/carrentals-companion/' );
}

// Define companion Elemento Widget url constant
if( ! defined( 'CARRENTALS_COMPANION_EL_URL' ) ) {
    define( 'CARRENTALS_COMPANION_EL_URL', CARRENTALS_DIR_URI . 'inc/carrentals-companion/inc/elementor-widgets/' );
}


require_once CARRENTALS_COMPANION_DIR_PATH . 'carrentals-init.php';