<?php 

if (function_exists('acf_add_options_page')) {

    $acf_options_args = array(
        'page_title' => 'Theme Options',
        'capability' => 'edit_posts',
        'icon_url' => 'dashicons-editor-kitchensink',
        'redirect' => true,
        'post_id' => 'options',
        'autoload' => false,
        'update_button'     => __('Save Changes', 'acf'),
        'updated_message'   => __("Theme Options Updated", 'acf'),      
    );

    acf_add_options_page( $acf_options_args );
}

add_filter( 'block_categories', function( $categories, $post ) {
    return array_reverse(array_merge(
        $categories,
        array(
            array(
                'slug'  => 'munroe-blocks',
                'title' => 'Munroe Blocks',
            ),
        )
    ));
}, 10, 2 );

// $upload_dir = get_stylesheet_directory() . '/blocks';
// $files = list_files( $folder, 2 );
// foreach ( $files as $file ) {
//     if ( is_file( $file ) ) {
//         $filesize = size_format( filesize( $file ) );
//         $filename = basename( $file ); 
//     }
//     echo esc_html( $filename . "-" . $filesize );
// }

function register_acf_block_types() {

    acf_register_block_type(array(
        'name'              => 'locations-map',
        'title'             => __('locations-map'),
        'description'       => __('A custom locations-map block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/locations-map/locations-map.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'locations-map block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'card-icon-sections',
        'title'             => __('card-icon-sections'),
        'description'       => __('A custom card-icon-sections block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/card-icon-sections/card-icon-sections.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'card-icon-sections block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'hero-short',
        'title'             => __('hero-short'),
        'description'       => __('A custom hero-short block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/hero-short/hero-short.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'hero-short block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'text-image-bg-pattern',
        'title'             => __('text-image-bg-pattern'),
        'description'       => __('A custom text-image-bg-pattern block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/text-image-bg-pattern/text-image-bg-pattern.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'text-image-bg-pattern block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'hero-slider',
        'title'             => __('hero-slider'),
        'description'       => __('A custom hero-slider block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/hero-slider/hero-slider.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'hero-slider block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'card-downloads',
        'title'             => __('card-downloads'),
        'description'       => __('A custom card-downloads block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/card-downloads/card-downloads.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'card-downloads block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'donate-form',
        'title'             => __('donate-form'),
        'description'       => __('A custom donate-form block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/donate-form/donate-form.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'donate-form block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'image-full',
        'title'             => __('image-full'),
        'description'       => __('A custom image-full block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/image-full/image-full.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'image-full block' ),
    ));
	
	acf_register_block_type(array(
        'name'              => 'post-image-header',
        'title'             => __('post image header'),
        'description'       => __('A custom image header for posts.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/post-image-header/post-image-header.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'post-image-header block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'share-article',
        'title'             => __('share-article'),
        'description'       => __('A custom share-article block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/share-article/share-article.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'share-article block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'content',
        'title'             => __('content'),
        'description'       => __('A custom content block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/content/content.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'content block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'address-row',
        'title'             => __('address-row'),
        'description'       => __('A custom address-row block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/address-row/address-row.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'address-row block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'card-buttons',
        'title'             => __('card-buttons'),
        'description'       => __('A custom card-buttons block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/card-buttons/card-buttons.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'card-buttons block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'bar-charts',
        'title'             => __('bar-charts'),
        'description'       => __('A custom bar-charts block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/bar-charts/bar-charts.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'bar-charts block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'accordion',
        'title'             => __('accordion'),
        'description'       => __('A custom accordion block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/accordion/accordion.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'accordion block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'hero-text',
        'title'             => __('hero-text'),
        'description'       => __('A custom hero-text block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/hero-text/hero-text.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'hero-text block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'table',
        'title'             => __('table'),
        'description'       => __('A custom table block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/table/table.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'table block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'quote',
        'title'             => __('quote'),
        'description'       => __('A custom quote block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/quote/quote.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'quote block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'steps-line',
        'title'             => __('steps-line'),
        'description'       => __('A custom steps-line block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/steps-line/steps-line.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'steps-line block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'cards-icon-side',
        'title'             => __('cards-icon-side'),
        'description'       => __('A custom cards-icon-side block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/cards-icon-side/cards-icon-side.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'cards-icon-side block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'fellows-slider',
        'title'             => __('fellows-slider'),
        'description'       => __('A custom fellows-slider block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/fellows-slider/fellows-slider.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'fellows-slider block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'cards-icon-repeater',
        'title'             => __('cards-icon-repeater'),
        'description'       => __('A custom cards-icon-repeater block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/cards-icon-repeater/cards-icon-repeater.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'cards-icon-repeater block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'cards-icon-row',
        'title'             => __('cards-icon-row'),
        'description'       => __('A custom cards-icon-row block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/cards-icon-row/cards-icon-row.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'cards-icon-row block' ),
    ));
	
	acf_register_block_type(array(
        'name'              => 'cards-image-row',
        'title'             => __('cards-image-row'),
        'description'       => __('A custom cards-image-row block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/cards-image-row/cards-image-row.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'cards-image-row block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'cards',
        'title'             => __('cards'),
        'description'       => __('A custom cards block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/cards/cards.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'cards block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'posts-index-cards-2',
        'title'             => __('posts-index-cards-2'),
        'description'       => __('A custom posts-index-cards-2 block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/posts-index-cards-2/posts-index-cards-2.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'posts-index-cards-2 block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'posts-index-cards',
        'title'             => __('posts-index-cards'),
        'description'       => __('A custom posts-index-cards block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/posts-index-cards/posts-index-cards.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'posts-index-cards block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'contact',
        'title'             => __('contact'),
        'description'       => __('A custom contact block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/contact/contact.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'contact block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'posts-slider',
        'title'             => __('posts-slider'),
        'description'       => __('A custom posts-slider block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/posts-slider/posts-slider.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'posts-slider block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'text-image-offset',
        'title'             => __('text-image-offset'),
        'description'       => __('A custom text-image-offset block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/text-image-offset/text-image-offset.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'text-image-offset block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'text-image',
        'title'             => __('text-image'),
        'description'       => __('A custom text-image block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/text-image/text-image.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'text-image block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'stats',
        'title'             => __('stats'),
        'description'       => __('A custom stats block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/stats/stats.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'stats block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'paragraph',
        'title'             => __('paragraph'),
        'description'       => __('A custom paragraph block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/paragraph/paragraph.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'paragraph block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'hero',
        'title'             => __('hero'),
        'description'       => __('A custom hero block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/hero/hero.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'hero block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'logo-grid',
        'title'             => __('logo-grid'),
        'description'       => __('A custom logo grid block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/logo-grid/logo-grid.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'logo grid block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'text-grid',
        'title'             => __('text-grid'),
        'description'       => __('A custom text grid block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/text-grid/text-grid.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'text grid block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'partners-grid',
        'title'             => __('partners-grid'),
        'description'       => __('A custom card grid block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/partners-grid/partners-grid.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'card grid block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'team-grid',
        'title'             => __('team-grid'),
        'description'       => __('A custom team grid block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/team-grid/team-grid.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'team grid block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'text-bg-pattern',
        'title'             => __('text-bg-pattern'),
        'description'       => __('A custom team grid block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/text-bg-pattern/text-bg-pattern.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'text background pattern block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'image-list',
        'title'             => __('image-list'),
        'description'       => __('A custom image list block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/image-list/image-list.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'image list block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'subscribe',
        'title'             => __('subscribe'),
        'description'       => __('A custom subscribe block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/subscribe/subscribe.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'subscribe block' ),
    ));

    acf_register_block_type(array(
        'name'              => 'two-column-content',
        'title'             => __('two-column-content'),
        'description'       => __('A custom two column content block.'),
        'mode'              => 'edit',
        'render_template'   => 'blocks/two-column-content/two-column-content.php',
        'category'          => 'munroe-blocks',
        'icon'              => 'star-empty',
        'keywords'          => array( 'two column content block' ),
    ));

}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {    
    $path = get_stylesheet_directory() . '/acf-json';    
    return $path;
}

// add_action( 'admin_enqueue_scripts', 'wpse44753_admin_enqueue' );
function wpse44753_admin_enqueue() {
    wp_enqueue_style( 'wpse44753_style', get_template_directory_uri() . '/styles/admin-editor.css', array(), '1.0.0', 'all' );
}

function my_acf_admin_footer() {
	?>
	<script type="text/javascript">
    (function($) {
        
        $(document).ready(function(){
				jQuery(function($){$('.acf-repeater .acf-row').addClass('-collapsed');$('#wpster-acf-repeater-collapse').detach();});
				
				//Hero Slider
				$('.acf-field-608c50fa62ab2 .acf-row').addClass( "-collapsed" );
				$('.acf-field-608c50fa62ab2 .acf-field-6272cddab59a6').addClass( "-collapsed-target" );
				$('.acf-field-608c50fa62ab2 .acf-field-6272cddab59a6').attr( "colspan", "2" );
			
				//Card Icon Section
				$('.acf-field-62796afdb1965 .acf-row').addClass( "-collapsed" );
				$('.acf-field-62796afdb19652 .acf-field-627980b7fdfae').addClass( "-collapsed-target" );
				$('.acf-field-62796afdb1965 .acf-field-627980b7fdfae').attr( "colspan", "2" );
			
				//Card Icon Section Cards (Sub Repeater of Card Icon Section)
				$('.acf-field-62796abe7790b .acf-row').addClass( "-collapsed" );
				$('.acf-field-62796abe7790b .acf-field-62796abe8c2de').addClass( "-collapsed-target" );
				$('.acf-field-62796abe7790b .acf-field-62796abe8c2de').attr( "colspan", "2" );
			
				/*
			 	// Accordion Block
				$('.acf-field-6202d196a70c8 .acf-row').addClass( "-collapsed" );
				$('.acf-field-6202d196a70c8 .acf-field-6202d1d8a70c9').addClass( "-collapsed-target" );
				$('.acf-field-6202d196a70c8 .acf-field-6202d1d8a70c9').attr( "colspan", "2" );

                 // Quote Block
				$('.acf-field-6202afb56eb47 .acf-row').addClass( "-collapsed" );
				$('.acf-field-6202afb56eb47 .acf-field-6202a2ebe2af6').addClass( "-collapsed-target" );
				$('.acf-field-6202afb56eb47 .acf-field-6202a2ebe2af6').attr( "colspan", "2" );
				 
				 // Team Grid
				$('.acf-field-6219592368a10 .acf-row').addClass( "-collapsed" );
				$('.acf-field_6219592368a10 .acf-field-6219596368a12').addClass( "-collapsed-target" );
				$('.acf-field_6219592368a10 .acf-field-6219596368a12').attr( "colspan", "2" );
				 
				  //Card Downloads
				$('.acf-field-62290b7954bed .acf-row').addClass( "-collapsed" );
				$('.acf-field-62290b7954bed .acf-field-62290b9754bef').addClass( "-collapsed-target" );
				$('.acf-field-62290b7954bed .acf-field-62290b9754bef').attr( "colspan", "2" );
				*/
			
           
            
        });
        
    })(jQuery);    
    </script>
	<?php
}
add_action('acf/input/admin_footer', 'my_acf_admin_footer');


function my_acf_admin_head() {
    ?>
    <style type="text/css">

		.msg--label{
			background: #F9F9F9;
			border-bottom: 1px solid #cccccc;
			
		}
		.msg--label p{
			font-weight: bold;
			font-size: 18px!important;
			margin: 0 0 5px;
		}
		.msg--label label{
			display: none!important;
		}

    </style>
    <?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');