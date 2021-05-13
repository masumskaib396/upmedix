<?php
/**
 * Plugin Name: upmedix
 * Plugin URI: 
 * Description: Advanced Elementor addon to extend page builder capabilities and add more advanced features.
 * Version: 1.0
 * Author: Omi
 * Author URI: 
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: upmedix
 * Domain Path: /languages
 */




 // Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/*
Constants
------------------------------------------ */

/* Set plugin version constant. */
define( 'UPMEDIX_VERSION', '0.1');

/* Set constant path to the plugin directory. */
define( 'UPMEDIX_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );

// Plugin Addons Folder Path
define( 'UPMEDIX_ADDONS_DIR', plugin_dir_path( __FILE__ ) . 'widget/' );

// Assets Folder URL
define( 'UPMEDIX_ASSETS', plugins_url( 'assets/', __FILE__ ) );
// define( 'UPMEDIX_ASSETS_ADMIN',  plugins_url( 'assets/admin/', __FILE__ ) );
// define( 'UPMEDIX_ASSETS_VENDOR', plugins_url( 'assets/vendor/', __FILE__ ) );


require_once(UPMEDIX_PATH. 'base.php' );