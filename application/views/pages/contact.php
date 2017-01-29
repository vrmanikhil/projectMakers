<div class="jumbotron jumbotron-main jumbotron-fluid flex" style="background-image: url('/web-assets/image/contact-banner.png')">
	<div class="container-fluid fixed-width-container">
		<section class="contact">
			<h1 class="text-center">HEY THERE!</h1>
			<p class="text-center">Write to us!</p>
			<p class="text-center">And we'll get back to you as soon as possible</p>
			<form class="contact-us" method="POST" action="">
				<div class="form-group">
					<input type="text" class="form-control" required name="name" placeholder="Name" autocomplete="name">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" required name="email" placeholder="Email Id" autocomplete="email">
				</div>
				<div class="form-group">
					<input type="tel" name="phone" autocomplete="tel" pattern="[0-9]{10}" maxlength="10" class="form-control" placeholder="Contact No.">
				</div>
				<div class="form-group">
					<textarea rows="7" required name="message" class="form-control" placeholder="Your Message"></textarea>
				</div>
				<input type="submit" name="Submit" class="btn btn-primary">
			</form>
		</section>
	</div>
</div>
