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
    wp_enqueue_script( 'bxslider', get_stylesheet_directory_uri() . '/js/jquery.bxslider.min.js', [ 'jquery' ], SCS_VERSION, true );
    wp_enqueue_style( 'bxslider', get_stylesheet_directory_uri() . '/css/jquery.bxslider.css', [], SCS_VERSION );
    wp_enqueue_script( 'scs-slider', get_stylesheet_directory_uri() . '/js/slider.js', [ 'jquery', 'bxslider' ], SCS_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'scs_scripts' );
