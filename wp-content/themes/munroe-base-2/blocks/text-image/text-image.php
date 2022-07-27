<section class="section-pad text-image <?php echo $block['className'] ?>">
	<div class="row row-wrapper">
		<div class="col-xs-12 col-md-6 mobile-2 <?php echo get_field('text_side') === 'right' ? 'order-2' : ''; ?>">
			<div class="info">
				<div>
					<?php if(!empty(get_field('super_title'))) : ?>
						<div class="title__super text--primary"><?php the_field('super_title'); ?></div>
					<?php endif; ?>
					<?php if(!empty(get_field('title'))) : ?>
						<h2 class="title m-b-20"><?php the_field('title'); ?></h2>
					<?php endif; ?>
					<div class="text"><?php the_field('text'); ?></div>
					<?php if(!empty(get_field('button'))) : ?>
						<a class="button m-t-30" href="<?php echo get_field('button')['url']; ?>"><?php echo get_field('button')['title']; ?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6 mobile-0">
			<div class="image__shrink">
				<div class="image__sizer image__sizer--4x4">
					<div class="image__wrap">
						<?php echo wp_get_attachment_image(get_field('image')['id'], 'full', '', ['data-object-fit' => 'cover']); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>