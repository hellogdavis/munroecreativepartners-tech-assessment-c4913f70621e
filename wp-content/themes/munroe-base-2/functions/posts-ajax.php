<?php
function my_enqueue() {
	if ( is_page(113) || is_page(138) ) {
		wp_enqueue_script( 'ajax-script', get_stylesheet_directory_uri() . '/js/posts-ajax.js', array('jquery') );
		wp_localize_script( 'ajax-script', 'my_ajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
	}
}

add_action( 'wp_enqueue_scripts', 'my_enqueue' );

function ajax_filterposts_handler() {
	$post_type = $_POST['posttype'];
	$page = json_decode(stripslashes( $_POST['page_number'] ));

	$args = array(
		'post_type' => $post_type,
		'post_status' => 'publish',
		'posts_per_page' => 8,
		"order" => "DESC",
		'paged' => (int)$page + 1,
	);


	$posts = 'No posts found.';

	$the_query = new WP_Query( $args );
 
	if ( $the_query->have_posts() ) :
		ob_start();

		while ( $the_query->have_posts() ) : $the_query->the_post();
			if($post_type === 'fellow') {
				get_template_part('loop-inner');	
			} elseif($post_type === 'post') {
				get_template_part('loop-inner-post');
			}
			
		endwhile;

		$posts = ob_get_clean();
	endif;

	$return = array(
		'post' => json_decode(stripslashes($post_type)),
    	'posts' => $posts,
    	'page' => (int)$page + 1,
    	'last_page' => $the_query->max_num_pages,
    	'args' => $args,
	);

	wp_send_json($return);
}
add_action( 'wp_ajax_filterposts', 'ajax_filterposts_handler' );
add_action( 'wp_ajax_nopriv_filterposts', 'ajax_filterposts_handler' );