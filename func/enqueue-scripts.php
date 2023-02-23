<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function enqueue_scripts() {
    if(is_singular('mieszkania')){
   
    wp_enqueue_script('go-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  array(), '20130456', true );
    wp_enqueue_script( 'go-isotope-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'go-fancybox-js', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'go-mieszkania-init',  get_template_directory_uri().'/src/js/go-mieszkania.js', array( 'jquery' ), '1.0.0', true );
    } 
    wp_enqueue_script('go-main', get_template_directory_uri().'/src/js/go-main.js', array( 'jquery' ),'3', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
