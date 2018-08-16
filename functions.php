<?php

// Dependencies
require_once ('lib/default.php');
require_once ('lib/advanced-custom-fields-pro/acf.php' );
require_once ('lib/soil/soil.php' );
require_once ('lib/roots-rewrites-master/roots-rewrites.php' );

// Includes
function my_acf_settings_path( $path ) {
  $path = get_stylesheet_directory() . '/lib/advanced-custom-fields-pro/';
  return $path;
}
add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_dir( $dir ) {
 $dir = get_stylesheet_directory_uri() . '/lib/advanced-custom-fields-pro/';
 return $dir;
}
add_filter('acf/settings/dir', 'my_acf_settings_dir');

add_theme_support('soil-relative-urls');
add_theme_support('soil-nice-search');
add_theme_support('soil-clean-up');
add_theme_support('soil-google-analytics', 'UA-XXXXX-Y');
add_theme_support('soil-disable-trackbacks');
add_theme_support('soil-disable-asset-versioning');
add_theme_support('soil-nav-walker');
add_filter('show_admin_bar', '__return_false');

// Remove Stupid Emojis
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

define( 'THEME_ROOT', get_template_directory_uri() . '/' );
define( 'PUBLIC_DIR', THEME_ROOT . 'assets/' );
define( 'STYLES_DIR', PUBLIC_DIR . '' );
define( 'SCRIPTS_DIR', PUBLIC_DIR . '' );
define( 'IMAGES_DIR', PUBLIC_DIR . 'images/' );
define( 'VENDOR_SCRIPTS_DIR', THEME_ROOT . 'assets/' );

add_action( 'wp_print_scripts', 'my_deregister_javascript', 100 );
function my_deregister_javascript() {
  wp_deregister_script( 'contact-form-7' );
}