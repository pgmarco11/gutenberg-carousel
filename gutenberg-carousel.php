<?php 

/*
 * The file responsible for starting the Gutneberg Carouel
 *
 * 
 * 
 * 
 *
 * 
 *
 * @wordpress-plugin
 * Plugin Name:		Gutenberg Carousel
 * Plugin URI:		http://github.com/pgmarco11/gutenberg-carousel
 * Description:		A carousel of posts using slick.
 * Version:			0.1.0
 * Author:			Peter Giammarco
 * Author URI:		http://www.pgiammarco.com
 * Text Domain:		gutenberg-carousel
 * License:			GPL-2.0+
 * License URI:		http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: 	/languages
*/

//If this file is called directly, the abort execution.
if ( ! defined('WPINC') ){
	die;
}

add_action('wp_enqueue_scripts', 'carousel_script');

function carousel_script(){
	wp_enqueue_script('slickjs', plugin_dir_url( __FILE__ ) . '/includes/js/slick.min.js', array('jquery'), false, true);
	wp_enqueue_script('slickjs-init', plugin_dir_url( __FILE__ ) . '/includes/js/slick-init.js', array('slickjs'), false, true);

	wp_enqueue_style('slickcss', plugin_dir_url( __FILE__ ) . '/includes/css/slick.css', false, 'all');
	wp_enqueue_style('slickcsstheme', plugin_dir_url( __FILE__ ) . '/includes/css/slick-theme.css', false, 'all');

}


add_theme_support( 'post-thumbnails' );


//shortcodes
include( plugin_dir_path( __FILE__ ) . 'includes/shortcodes.php');	