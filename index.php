<?php get_header(); ?>


<section class="hero-area">
	<div class="hero-slides owl-carousel">
		<!-- Single Hero Slide -->
		<div class="single-hero-slide bg-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/headerbg/harper.jpg);">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col-12">
						<div class="hero-slides-content">
							<h2 data-animation="fadeInUp" data-delay="100ms">Harper</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Single Hero Slide -->
		<div class="single-hero-slide bg-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/headerbg/ivy.jpg);">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col-12">
						<div class="hero-slides-content">
							<h2 data-animation="fadeInUp" data-delay="100ms">Ivy</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Single Hero Slide -->
		<div class="single-hero-slide bg-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/headerbg/sage.jpg);">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col-12">
						<div class="hero-slides-content">
							<h2 data-animation="fadeInUp" data-delay="100ms">Sage</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Single Hero Slide -->
		<div class="single-hero-slide bg-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/headerbg/stella.jpg);">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col-12">
						<div class="hero-slides-content">
							<h2 data-animation="fadeInUp" data-delay="100ms">Stella</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="featured-properties-area section-padding-100-50">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-heading wow fadeInUp">
					<h2>Southern Plains</h2>
					<!-- <p>Suspendisse dictum enim sit amet libero malesuada feugiat.</p> -->
				</div>
			</div>
		</div>

		<div class="row">

			<!-- Single Featured Property -->
			<div class="col-12 col-md-6 col-xl-6">
				<a href="<?php echo get_permalink(get_page_by_path('harper-villa')); ?>">
					<div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
						<!-- Property Thumbnail -->
						<div class="property-thumb">
							<img src="<?php bloginfo('template_directory'); ?>/assets/img/forsale-img/harper.jpg" alt="">

							<div class="tag">
								<span>For Sale</span>
							</div>
							<div class="list-price">
								<p>₱48,931,000 - ₱77,282,000</p>
							</div>
						</div>
						<!-- Property Content -->
						<div class="property-content">
							<h5>Harper</h5>
							<p class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> Calamba, Philippines</p>
							<p>A luxury estate. A multigenerational villa. A grand home for a grand life. Harper Villa is the ultimate upgrade in space.</p>
							<div class="property-meta-data d-flex align-items-end justify-content-between">
								<div class="bathroom">
									<i class="fa fa-bath"></i>
									<span>9.5</span>
								</div>
								<div class="garage">
									<i class="fa fa-bed"></i>
									<span>9</span>
								</div>
								<div class="space">
									<i class="fa fa-map-o" aria-hidden="true"></i>
									<span>460 - 792 sqm.</span>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>

			<!-- Single Featured Property -->
			<div class="col-12 col-md-6 col-xl-6">
				<a href="<?php echo get_permalink(get_page_by_path('ivy-house')); ?>">
					<div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="200ms">
						<!-- Property Thumbnail -->
						<div class="property-thumb">
							<img src="<?php bloginfo('template_directory'); ?>/assets/img/forsale-img/ivy.jpg" alt="">

							<div class="tag">
								<span>For Sale</span>
							</div>
							<div class="list-price">
								<p>₱35,210,000</p>
							</div>
						</div>
						<!-- Property Content -->
						<div class="property-content">
							<h5>Ivy</h5>
							<p class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> Calamba, Philippines</p>
							<p>A balance of space and style. A serious upgrade in comfort. A bold step into big heights.</p>
							<div class="property-meta-data d-flex align-items-end justify-content-between">
								<div class="bathroom">
									<i class="fa fa-bath"></i>
									<span>7</span>
								</div>
								<div class="garage">
									<i class="fa fa-bed"></i>
									<span>7.5</span>
								</div>
								<div class="space">
									<i class="fa fa-map-o" aria-hidden="true"></i>
									<span>345 sqm.</span>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>

			<!-- Single Featured Property -->
			<div class="col-12 col-md-6 col-xl-6">
				<a href="<?php echo get_permalink(get_page_by_path('sage-house')); ?>">
					<div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="300ms">
						<div class="property-thumb">
							<img src="<?php bloginfo('template_directory'); ?>/assets/img/forsale-img/sage.jpg" alt="">

							<div class="tag">
								<span>For Sale</span>
							</div>
							<div class="list-price">
								<p>₱51,639,000</p>
							</div>
						</div>
						<div class="property-content">
							<h5>Sage</h5>
							<p class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> Calamba, Philippines</p>
							<p>Big in comfort for a nuclear family with staff. Designed to create great memories together.</p>
							<div class="property-meta-data d-flex align-items-end justify-content-between">
								<div class="bathroom">
									<i class="fa fa-bath"></i>
									<span>7.5</span>
								</div>
								<div class="garage">
									<i class="fa fa-bed"></i>
									<span>7</span>
								</div>
								<div class="space">
									<i class="fa fa-map-o" aria-hidden="true"></i>
									<span>535 sqm.</span>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>

			<!-- Single Featured Property -->
			<div class="col-12 col-md-6 col-xl-6">
				<a href="<?php echo get_permalink(get_page_by_path('stella-villa')); ?>">
					<div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="400ms">
						<div class="property-thumb">
							<img src="<?php bloginfo('template_directory'); ?>/assets/img/forsale-img/stella.jpg" alt="">

							<div class="tag">
								<span>For Sale</span>
							</div>
							<div class="list-price">
								<p>₱55,352,000</p>
							</div>
						</div>
						<div class="property-content">
							<h5>Stella</h5>
							<p class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> Calamba, Philippines</p>
							<p>A spacious abode with beautiful touches. An asset with excellent potential. A great villa of expanding spaces for you to thrive.</p>
							<div class="property-meta-data d-flex align-items-end justify-content-between">
								<div class="bathroom">
									<i class="fa fa-bath"></i>
									<span>10.5</span>
								</div>
								<div class="garage">
									<i class="fa fa-bed"></i>
									<span>10</span>
								</div>
								<div class="space">
									<i class="fa fa-map-o" aria-hidden="true"></i>
									<span>536 sqm.</span>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/stella-img/3.jpg)">
	<div class="container h-100">
		<div class="row align-items-center h-100">
			<div class="col-12">
				<div class="cta-content text-center">
					<h2 class="wow fadeInUp" data-wow-delay="300ms">Are you looking for a place to live?</h2>
					<h6 class="wow fadeInUp" data-wow-delay="400ms">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sed illum explicabo fugit eaque eveniet quisquam totam non nobis, maxime iste. Incidunt aut consectetur, illum tempore reiciendis at assumenda asperiores.</h6>
					<a href="#" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Search</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>