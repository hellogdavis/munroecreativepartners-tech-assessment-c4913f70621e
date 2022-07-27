<?php

include_once "functions/acf-functions.php";
include_once "functions/enqueue-js.php";
include_once "functions/custom-post-types.php";
include_once "functions/posts-ajax.php";
// include_once "functions/munroe-nav-walker.php";

function my_acf_init() {
    
    acf_update_setting('google_api_key', 'AIzaSyDDCp2f_ktcjD9Q2oIZidu557eT0aoLGmU');
}

add_action('acf/init', 'my_acf_init');

function enqueue_main_css() {
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/styles/main.css', array(), '1.1', 'all' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_main_css' );

function add_mainjs() {
    wp_enqueue_script( 'main-js-script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '2.135', true );
}
add_action( 'wp_enqueue_scripts', 'add_mainjs' );


// add_action( 'after_setup_theme', 'blankslate_setup' );
// function blankslate_setup() {
// load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
// add_theme_support( 'title-tag' );
// add_theme_support( 'post-thumbnails' );
// add_theme_support( 'responsive-embeds' );
// add_theme_support( 'automatic-feed-links' );
// add_theme_support( 'html5', array( 'search-form' ) );
// global $content_width;
// if ( !isset( $content_width ) ) { $content_width = 1920; }
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'blankslate' ) ) );
// }

add_action( 'wp_enqueue_scripts', 'blankslate_enqueue' );
function blankslate_enqueue() {
wp_enqueue_style( 'blankslate-style', get_stylesheet_uri() );
wp_enqueue_script( 'jquery' );
}

// add_filter( 'nav_menu_link_attributes', 'blankslate_schema_url', 10 );
// function blankslate_schema_url( $atts ) {
// $atts['itemprop'] = 'url';
// return $atts;
// }
// if ( !function_exists( 'blankslate_wp_body_open' ) ) {
// function blankslate_wp_body_open() {
// do_action( 'wp_body_open' );
// }
// }
// add_action( 'wp_body_open', 'blankslate_skip_link', 5 );
// function blankslate_skip_link() {
// echo '<a href="#content" class="skip-link screen-reader-text">' . esc_html__( 'Skip to the content', 'blankslate' ) . '</a>';
// }
// add_filter( 'the_content_more_link', 'blankslate_read_more_link' );
// function blankslate_read_more_link() {
// if ( !is_admin() ) {
// return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">' . sprintf( __( '...%s', 'blankslate' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
// }
// }
// add_filter( 'excerpt_more', 'blankslate_excerpt_read_more_link' );
// function blankslate_excerpt_read_more_link( $more ) {
// if ( !is_admin() ) {
// global $post;
// return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">' . sprintf( __( '...%s', 'blankslate' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
// }
// }
add_filter( 'big_image_size_threshold', '__return_false' );
add_filter( 'intermediate_image_sizes_advanced', 'blankslate_image_insert_override' );
function blankslate_image_insert_override( $sizes ) {
unset( $sizes['medium_large'] );
unset( $sizes['1536x1536'] );
unset( $sizes['2048x2048'] );
return $sizes;
}
// add_action( 'widgets_init', 'blankslate_widgets_init' );
// function blankslate_widgets_init() {
// register_sidebar( array(
// 'name' => esc_html__( 'Sidebar Widget Area', 'blankslate' ),
// 'id' => 'primary-widget-area',
// 'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
// 'after_widget' => '</li>',
// 'before_title' => '<h3 class="widget-title">',
// 'after_title' => '</h3>',
// ) );
// }
// add_action( 'wp_head', 'blankslate_pingback_header' );
// function blankslate_pingback_header() {
// if ( is_singular() && pings_open() ) {
// printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
// }
// }

// First, this will disable support for comments and trackbacks in post types
function df_disable_comments_post_types_support() {
   $post_types = get_post_types();
   foreach ($post_types as $post_type) {
      if(post_type_supports($post_type, 'comments')) {
         remove_post_type_support($post_type, 'comments');
         remove_post_type_support($post_type, 'trackbacks');
      }
   }
}
# https://keithgreer.uk/wordpress-code-completely-disable-comments-using-functions-php

add_action('admin_init', 'df_disable_comments_post_types_support');

// Then close any comments open comments on the front-end just in case
function df_disable_comments_status() {
   return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);

// Finally, hide any existing comments that are on the site. 
function df_disable_comments_hide_existing_comments($comments) {
   $comments = array();
   return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );


// function be_post_block_template() {

//   $post_type_object = get_post_type_object( 'post' );
//   $post_type_object->template = array(
//     array( 'acf/hero-text' ),
//     array( 'acf/image-full' ),
// 	array( 'acf/content' ),
//     array( 'acf/share-article' ),
// 	array( 'acf/posts-slider' ),
// 	array( 'acf/contact' ),
//   );
	
//   $post_type_object2 = get_post_type_object( 'fellow' );
//   $post_type_object2->template = array(
//     array( 'acf/hero-text' ),
// 	array( 'acf/post-image-header' ),
// 	array( 'acf/content' ),
//     array( 'acf/share-article' ),
// 	array( 'acf/posts-slider' ),
// 	array( 'acf/contact' ),
//   );
// }
// add_action( 'init', 'be_post_block_template' );
//REMOVE CATEGORIES AND TAGS
// function wpsnipp_remove_default_taxonomies(){
//     global $pagenow;
 
//     register_taxonomy( 'post_tag', array() );
//     register_taxonomy( 'category', array() );
 
//     $tax = array('post_tag','category');
 
//     if($pagenow == 'edit-tags.php' && in_array($_GET['taxonomy'],$tax) ){
//     wp_die('Invalid taxonomy');
//     }
// }
// add_action('init', 'wpsnipp_remove_default_taxonomies');