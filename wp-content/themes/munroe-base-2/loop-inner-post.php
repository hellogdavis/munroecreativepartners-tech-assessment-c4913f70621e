<div class="col-xs-12 col-md-6">
	<div class="post-card">
		<div class="image__sizer image__sizer--16x9">
			<div class="image__wrap">
				<?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'full'); ?>
			</div>
		</div>
		<div class="info">
			<h3 class="text--primary p-t-15 p-b-15"><?php the_title(); ?></h3>
			<a href="<?php echo get_the_permalink(); ?>" class="link text--orange">Read More</a>
		</div>
	</div>
</div>