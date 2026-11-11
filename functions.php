<?php
/**
 * Shari Lite — theme bootstrap.
 *
 * The free edition of Shari, made by tools/build-lite.mjs from the paid
 * build. Edit the generator, not this file.
 *
 * @package shari-lite
 */

defined( 'ABSPATH' ) || exit;

define( 'SHARI_LITE_VERSION', '1.0.0' );
define( 'SHARI_LITE_DIR', get_template_directory() );
define( 'SHARI_LITE_URI', get_template_directory_uri() );

require SHARI_LITE_DIR . '/inc/setup.php';
require SHARI_LITE_DIR . '/inc/media.php';
require SHARI_LITE_DIR . '/inc/food.php';
require SHARI_LITE_DIR . '/inc/lite.php';
require SHARI_LITE_DIR . '/inc/updater.php';
