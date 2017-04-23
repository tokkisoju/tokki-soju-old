<?php
/*
Define variables for development setup
*/

/**
 * MySQL configuration
 */
define( 'DB_NAME', 'database_name_here' );
define( 'DB_USER', 'username_here' );
define( 'DB_PASSWORD', 'password_here' );
define( 'DB_HOST', 'localhost' );

/**
 * Content directories
 */
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/site_name/content' );

/**
 * Database table prefix
 */
$table_prefix  = 'wp_';

/**
 * Misc. settings
 */
define( 'WP_POST_REVISIONS', 5 );

/**
 * Debugging stuff
 */
define( 'WP_DEBUG', true );
// define( 'WP_DEBUG_DISPLAY', false );
// define( 'WP_DEBUG_LOG', true );

/**
 * Load WordPress
 */
if ( !defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', dirname(__FILE__) . '/wp/' );
}
require_once( ABSPATH . 'wp-settings.php' );
