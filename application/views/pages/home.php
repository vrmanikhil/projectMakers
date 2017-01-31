<section class="banner flex flex-col" style="background-image: url('<?php echo base_url().$images[0]['imageURL']; ?>')">
	<div class="container-fluid fixed-width-container">
		<h1 class="banner__title text-center"><?php echo $home['title1']; ?></h1>
		<div class="banner__description"><?php echo $home['content1']; ?></div>
	</div>
</section>
<section class="featured-links">
	<div class="container-fluid fixed-width-container flex">
		<a href="/about" class="featured-link__box flex" style="background-image: url('<?php echo base_url().$images[2]['imageURL']; ?>')">Who we are</a>
		<a href="/menu" class="featured-link__box flex" style="background-image: url('<?php echo base_url().$images[3]['imageURL']; ?>')">Our Menu</a>
		<a href="javascript:" class="featured-link__box flex" style="background-image: url('<?php echo base_url().$images[4]['imageURL']; ?>')">The Blog</a>
	</div>
</section>
<section class="banner flex flex-col" style="background-image: url('<?php echo base_url().$images[1]['imageURL']; ?>">
	<div class="container-fluid fixed-width-container">
		<h1 class="banner__title text-center"><?php echo $home['title2']; ?></h1>
		<div class="banner__description"><?php echo $home['content2']; ?></div>
	</div>
</section>
<section class="container-fluid fixed-width-container testimonials-section">
	<h1 class="testimonials__title text-center">THAT'S WHAT THEY SAID</h1>
	<div class="swiper-container">
			<div class="swiper-wrapper testimonials">

				<?php foreach ($testimonials as $key => $value) { ?>

					<div class="swiper-slide testimonial flex flex-col">
						<p class="testimonial__statement flex"><?php echo stripslashes($value['testimonial']); ?></p>
						<p class="testimonial__user flex"><?php echo $value['name']; ?></p>
					</div>

					<?php } ?>


			</div>
			<div class="swiper-pagination"></div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
	</div>
</section>
