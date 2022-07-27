<?php get_header(); ?>
	<main role="main">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
		<?php else: ?>
			<div>
				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			</div>
		<?php endif; ?>
	</main>
<?php get_footer(); ?>
