<?php
/**
 * Plugin Name: HT Form Widget for Elementor and WPForms
 * Description: HT Form Widget for Elementor and WPForms allows you to easily display WPForms forms using Elementor.
 * Plugin URI:  https://hasthemes.com/
 * Author:      HasTheme
 * Author URI:  https://profiles.wordpress.org/htplugins/#content-plugins
 * Version:     1.1.6
 * License:     GPL2
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: ht-wpform
 * Domain Path: /languages
 * Elementor tested up to: 3.33.2
 * Elementor Pro tested up to: 3.33.2
*/

if( ! defined( 'ABSPATH' ) ) exit(); // Exit if accessed directly

define( 'HTWPFORM_VERSION', '1.1.6' );
define( 'HTWPFORM_ROOT', __FILE__ );
define( 'HTWPFORM_PL_URL', plugins_url( '/', HTWPFORM_ROOT ) );
define( 'HTWPFORM_PL_PATH', plugin_dir_path( HTWPFORM_ROOT ) );
define( 'HTWPFORM_PL_BASE', plugin_basename( HTWPFORM_ROOT ) );
define( 'HTWPFORM_PL_NAME', 'HT Form Widget for Elementor and WPForms' );

require ( HTWPFORM_PL_PATH . 'include/base.php' );
\HTWPForm\Elementor\Base::instance();