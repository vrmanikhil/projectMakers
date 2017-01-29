<div class="jumbotron jumbotron-main jumbotron-fluid flex" style="background-image: url('/web-assets/image/banner-3.png')">
	<div class="container-fluid fixed-width-container">
		<h1 class="text-center">The Menu</h1>
	</div>
</div>
<section>
	<div class="container-fluid fixed-width-container">
		<nav class="products-menu flex">
			<?php foreach ($products as $key => $value) {
				$href = strtolower($key);
				$href = preg_replace('/\s+/','-', $href);
				 ?>
				<a class="products-menu__item js-products-menu__item" href="<?php echo "#".$href; ?>"><?php echo $key; ?></a>
			<?php } ?>


		</nav>

		<?php foreach ($products as $key => $value) {
			$href = strtolower($key);
			$href = preg_replace('/\s+/','-', $href);
			?>
		<div class="products-category" id="<?php echo $href; ?>">
			<h2 class="products-category__title text-center"><?php echo $key; ?></h2>
			<div class="products-category__desc text-center"><?php echo $value['description']; ?></div>
			<div class="products flex">
				<?php foreach ($value['items'] as $key2 => $value2) {  ?>

				<div class="product flex flex-col">
					<img class="product__image product__info" src="<?php echo $value2['imageURL']; ?>">
					<p class="product__name product__info"><?php echo $value2['itemName']; ?></p>
					<div class="product__desc product__info"><?php echo $value2['itemDescription']; ?></div>
					<p class="product__price product__info">Starts from Rs. <?php echo $value2['startsFrom']; ?></p>
					<p class="product__contact-info">Call  +91 <?php echo $mobileNumber; ?> to know more</p>
				</div>

				<?php	} ?>

			</div>
		</div>


		<?php } ?>





	</div>
</section>
