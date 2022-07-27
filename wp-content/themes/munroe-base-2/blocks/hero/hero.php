<section class="hero bg-color">
	<div class="image-hero__wrap">
		<?php echo wp_get_attachment_image(get_field('image')['id'], 'full'); ?>
	</div>
	<div class="info ">
		<?php if(!empty(get_field('super_title'))) : ?>
			<div class="title__super text--primary"><?php the_field('super_title'); ?></div>
		<?php endif; ?>
		<?php if(!empty(get_field('title'))) : ?>
			<h1 class="title m-b-20"><?php the_field('title'); ?></h1>
		<?php endif; ?>
		<div class="text text--large"><?php the_field('text'); ?></div>
		<?php if(!empty(get_field('button'))) : ?>
			<a class="button m-t-30" href="<?php echo get_field('button')['url']; ?>"><?php echo get_field('button')['title']; ?></a>
		<?php endif; ?>
	</div>
</section>