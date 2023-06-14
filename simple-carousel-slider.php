<?php
/**
 * Plugin Name: Simple Carousel Slider
 * Plugin URL: https://cv.nael.pro
 * Description: A simple carousel slider plugin for WordPress
 * Version: 1.0.0
 * Author: Nael Concescu
 * Author URL: https://cv.nael.pro
 * License: GPLv2 or later
 */

const SCS_VERSION = '1.0.0';

require_once __DIR__ . '/inc/cpt.php';
require_once __DIR__ . '/inc/slider.class.php';

new SCSlider();

/**
 * Enqueue scripts and styles.
 */
function scs_scripts() {
    wp_enqueue_script( 'bxslider', plugin_dir_url( __FILE__ ) . 'assets/js/jquery.bxslider.min.js', [ 'jquery' ], SCS_VERSION, true );
    wp_enqueue_style( 'bxslider', plugin_dir_url( __FILE__ ) . 'assets/css/jquery.bxslider.css', [], SCS_VERSION );
    wp_enqueue_script( 'scs-slider', plugin_dir_url( __FILE__ ) . 'assets/js/slider.js', [ 'jquery', 'bxslider' ], SCS_VERSION, true );
    wp_enqueue_style( 'scs-slider', plugin_dir_url( __FILE__ ) . 'assets/css/slider.css', [], SCS_VERSION );
}
add_action( 'wp_enqueue_scripts', 'scs_scripts' );
