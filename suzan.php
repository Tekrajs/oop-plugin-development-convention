<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the
 * plugin admin area. This file also includes all of the dependencies used by
 * the plugin, registers the activation and deactivation functions, and defines
 * a function that starts the plugin.
 *
 * @link              https://github.com/Tekrajs
 * @since             0.1.0
 * @package           demo
 *
 * @wordpress-plugin
 * Plugin Name:       Tuts + Namespace Demo
 * Plugin URI:        https://github.com/Tekrajs/oop-plugin-development-convention
 * Description:       Learn how to use Namespaces and Autoloading in WordPress.
 * Version:           0.1.0
 * Author:            Tom McFarlin
 * Author URI:        https://github.com/Tekrajs
 * License:           GPL-2.0+
 * License URI:       https://github.com/Tekrajs
 */
 
// If this file is accessed directory, then abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}
 
// Include the files for rendering the display.
include_once( 'admin/class-meta-box.php' );
include_once( 'admin/class-meta-box-display.php' );
include_once( 'admin/util/class-question-reader.php' );
 
add_action( 'plugins_loaded', 'tutsplus_namespace_demo' );
/**
 * Starts the plugin by initializing the meta box, its display, and then
 * sets the plugin in motion.
 */

function tutsplus_namespace_demo() {
 
    $meta_box = new Meta_Box(
        new Meta_Box_Display(
            new Question_Reader()
        )
    );
 
    $meta_box->init();
}