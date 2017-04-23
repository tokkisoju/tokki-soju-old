<?php
/**
 * core-functions.php
 */

/*
Flush rewrite rules on theme activation
 */
function _ts_flush_rewrite_rules() {
  flush_rewrite_rules();
}
add_action( 'after_switch_theme', '_ts_flush_rewrite_rules' );

/*
Force category & postname permalink structure
 */
function _ts_custom_permalinks() {
  global $wp_rewrite;
  $wp_rewrite->set_permalink_structure( '/%postname%/' );
}
add_action( 'init', '_ts_custom_permalinks' );

/*
Disable public user registration page
 */
add_action( 'login_init', function() {
  add_filter( 'pre_option_users_can_register', '__return_null' );
} );

/*
Remove SEO Framework plugin credit
 */
add_filter( 'the_seo_framework_indicator', '__return_false' );

/*
Remove dashboard widgets
 */
function _ts_remove_dash_widgets() {
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
}
add_action( 'wp_dashboard_setup', '_ts_remove_dash_widgets' );

/*
Custom welcome panel
 */
function _ts_custom_welcome_panel() {
  $html =  '<div class="welcome-panel-content" style="padding-bottom: 23px;">';
  $html .= '<h2 style="margin-bottom: 5px;">Welcome to your site!</h2>';
  $html .= '<p style="font-size: 16px; margin: 0;">Click anywhere on the left-hand side to get started. Just for reference, your IP address is <code>' . $_SERVER['SERVER_ADDR'] . '</code>. Good luck!</p>';
  $html .= '</div>';
  echo $html;
}
remove_action( 'welcome_panel', 'wp_welcome_panel' );
add_action( 'welcome_panel', '_ts_custom_welcome_panel' );

/*
Add and update image sizes
 */
function _ts_custom_image_sizes() {
  update_option( 'large_size_w', 800 );
  update_option( 'large_size_h', 600 );
  update_option( 'large_crop', 1 );

  update_option( 'medium_size_w', 600 );
  update_option( 'medium_size_h', 475 );
  update_option( 'medium_crop', 1 );

  update_option( 'thumbnail_size_w', 200 );
  update_option( 'thumbnail_size_h', 200 );
  update_option( 'thumbnail_crop', 1 );

  // hero size
  add_image_size( 'hero', 1600, 640, true );
}
add_action( 'init', '_ts_custom_image_sizes' );

/*
Add ACF options page
 */
if ( function_exists( 'acf_add_options_page' ) ) {
  acf_add_options_page();
  // acf_add_options_sub_page( 'Header' );
  // acf_add_options_sub_page( 'Footer' );
}
