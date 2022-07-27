<?php
//  ***********
//  TODO : Find a way to combine all active css files into 1 file, same with js
//  ***********

// function wpse_173601_enqueue_scripts() {
//     wp_scripts()->add_data( 'jquery', 'group', 1 );
//     wp_scripts()->add_data( 'jquery-core', 'group', 1 );
//     wp_scripts()->add_data( 'jquery-migrate', 'group', 1 );
// }
// add_action( 'wp_enqueue_scripts', 'wpse_173601_enqueue_scripts' );

//  ***********
//  Uncomment libraries you want to add
//  ***********

add_action( 'wp_enqueue_scripts', 'add_countup' );
add_action( 'wp_enqueue_scripts', 'add_gsap' );
add_action( 'wp_enqueue_scripts', 'add_tiny_slider' );
add_action( 'wp_enqueue_scripts', 'add_rellax' );
add_action( 'wp_enqueue_scripts', 'add_handy' );
add_action( 'wp_enqueue_scripts', 'add_modal' );
// add_action( 'wp_enqueue_scripts', 'add_modal2' );
add_action( 'wp_enqueue_scripts', 'add_bxslider' );

// Keep Last



//  ***********

function add_rellax() {
    wp_enqueue_script( 'rellax-script', get_template_directory_uri() . '/js/lib/rellax-master/rellax.min.js', '', '1.0.0', true );
}
function add_handy() {
    wp_enqueue_script( 'handy-script', get_template_directory_uri() . '/js/lib/handy-collapse-master/dist/standalone/handy-collapse.js', '', '1.0.0', true );
}
function add_countup() {
    // wp_enqueue_script( 'countup-script', 'https://cdn.jsdelivr.net/npm/countup@1.8.2/dist/countUp.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'count-up-script', get_template_directory_uri() . '/js/lib/countUp/dist/countUp.umd.js', array('jquery'), '1.0.0', true );
}
function add_gsap() {
    wp_enqueue_script( 'gsap-scrollView', get_template_directory_uri() . '/js/lib/gsap-member/minified/ScrollTrigger.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'gsap-script', get_template_directory_uri() . '/js/lib/gsap-member/minified/gsap.min.js', array('jquery'), '1.0.0', true );
}
function add_tiny_slider() {
    wp_enqueue_style( 'tiney-slider-style', get_template_directory_uri() . '/js/lib/tiny-slider-master/dist/tiny-slider.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'tiny-slider-script', get_template_directory_uri() . '/js/lib/tiny-slider-master/dist/min/tiny-slider.js', array('jquery'), '1.0.0', true );
}
function add_modal() {
    wp_enqueue_style( 'modal-style', get_template_directory_uri() . '/js/lib/Magnific-Popup-master/dist/magnific-popup.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'modal-script', get_template_directory_uri() . '/js/lib/Magnific-Popup-master/dist/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true );
}
function add_modal2() {
    wp_enqueue_style( 'modal-style2', get_template_directory_uri() . '/js/lib/micromodal/dist/micromodal.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'modal-script2', get_template_directory_uri() . '/js/lib/micromodal/dist/micromodal.js', array('jquery'), '1.0.0', true );
}
function add_bxslider() {
    wp_enqueue_style( 'bxslider-style', get_template_directory_uri() . '/js/lib/bx-slider/jquery.bxslider.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'bxslider-script', get_template_directory_uri() . '/js/lib/bx-slider/jquery.bxslider.min.js', array('jquery'), '1.0.0', true );
}

