			<footer class="footer" role="contentinfo">
				<div class="row row-wrapper">
					<div class="col-xs-12 col-md-3">
						<div class="logo">
							<?php echo wp_get_attachment_image(get_field('footer_logo', 'options')['id'], 'full'); ?>
						</div>
					</div>
					<div class="col-xs-12 col-md-9">
						<div class="footer-nav">
							<?php echo wp_nav_menu(array('menu' => 'Footer Menu')); ?>
							<div class="social__links">
								<?php 
								$social_links = get_field('social_links', 'options');
								foreach($social_links as $social) :
								?>
									<div class="social__item">
										<a href="<?php echo $social['link']['url']; ?>"><img src="<?php echo wp_get_attachment_url($social['icon']['id']); ?>" alt="social icon" rel="noreferrer" /></a>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-wrapper m-t-30 desktop--right">
					<div class="col-xs-12 small-text">
						<span>© <?php echo date('Y'); ?> The Munroe Agency. All Rights Reserved.</span><span class="bar">&ensp;|&ensp;</span><span>ADDRESS</span><span class="bar">&ensp;|&ensp;</span><a href="/privacy-policy">Privacy Policy</a>
					</div>
				</div>
			</footer>
		<?php wp_footer(); ?>
	</body>
</html>
