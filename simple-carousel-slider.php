<?php
/**
 * Plugin Name: Simple Carousel Slider
 * Plugin URL: https://cv.nael.pro
 * Description: A simple carousel slider plugin for WordPress
 * Version: 1.0.0
 * Author: CodeAndMore
 * Author URL: https://cv.nael.pro
 * License: GPLv2 or later
 */


/**
 * Enqueue scripts and styles.
 */
function cjb_scripts() {
    wp_enqueue_style( 'cjb', CC__PLUGIN_URL . '/css/cjb.css' );
    wp_register_script( 'jquery-validate', CC__PLUGIN_URL . 'js/jquery.validate.min.js', [ 'jquery' ] );
    wp_enqueue_script( 'jquery-validate' );
    wp_enqueue_script( 'autocomplete', CC__PLUGIN_URL . '/js/autoComplete.min.js', [], null, true );
    wp_enqueue_style( 'autocomplete', CC__PLUGIN_URL . '/css/autoComplete.min.css' );
    wp_enqueue_script( 'camjobboard-main', CC__PLUGIN_URL . '/js/cam-job-board.js', [ 'jquery', 'autocomplete' ], null, true );
    wp_localize_script( 'camjobboard-main', 'CJB',
        array(
            'ajax_url'                 => admin_url( 'admin-ajax.php' ),
            'ajax_get_countries_nonce' => wp_create_nonce( 'get_countries' ),
            'ajax_get_regions_nonce'   => wp_create_nonce( 'get_regions' ),
            'ajax_get_cities_nonce'    => wp_create_nonce( 'get_cities' )
        )
    );
}
add_action( 'wp_enqueue_scripts', 'cjb_scripts' );
