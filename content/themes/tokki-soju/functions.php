<?php
/**
 * functions.php
 */

/*
Composer autoload
 */
require_once( __DIR__ . '/vendor/autoload.php' );

/*
Core Setup
 */
require get_template_directory() . '/inc/core-setup.php';

/*
Core Functions
 */
require get_template_directory() . '/inc/core-functions.php';

/**
 * Soil setup
 */
require get_template_directory() . '/inc/plugins/soil-setup.php';

/**
 * TGM setup
 */
require get_template_directory() . '/inc/plugins/tgm-setup.php';

/**
 * Advanced Custom Fields
 */
require get_template_directory() . '/inc/plugins/acf-setup.php';
