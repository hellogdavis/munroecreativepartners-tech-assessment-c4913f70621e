<section class="section-pad locations-map">
	<div class="row row-wrapper">
		<div class="col-xs-12 col-md-4">
			<form>
				<input placeholder="Search" type="text" />
				<button type="submit">Search</button>
			</form>
		</div>
		<div class="col-xs-12 col-md-8">
			checkboxes
		</div>
	</div>
	<hr />
	<div class="row row-wrapper">
		<div class="col-xs-12 col-md-4">
			<?php 
				$posts = get_posts(array(
					'posts_per_page'	=> -1,
					'post_type'			=> 'store_location'
				));
				if( $posts ): ?>
					<?php foreach( $posts as $post ): 
						setup_postdata( $post );
					?>
						<div>
							<h2 class="h4"><?php the_field('title', $post->ID); ?></h2>
							<div>
								<?php the_field('address', $post->ID); ?>
							</div>
							<div>
								<?php the_field('phone_number', $post->ID); ?>
							</div>
						</div>
					<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
		<div class="col-xs-12 col-md-8">
			<div id="map"></div>
		</div>
	</div>

	<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDCp2f_ktcjD9Q2oIZidu557eT0aoLGmU&callback=initMap&v=weekly"
      defer
    ></script>
	<script type="text/javascript">
		// Initialize and add the map
		function initMap() {
			// The location of nashville
			const nashville = { lat: 36.1865589, lng: -86.925328 };
			// The map, centered at nashville
			const map = new google.maps.Map(document.getElementById("map"), {
				zoom: 10,
				center: nashville,
			});
			// The marker, positioned at nashville
			const marker = new google.maps.Marker({
				position: nashville,
				map: map,
			});
		}

		window.initMap = initMap;
	</script>
</section>