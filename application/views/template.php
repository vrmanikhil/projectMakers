<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,400,400i,500,500i" rel="stylesheet">
		<title><?php echo $title ?></title>
		<?php //loading css assets ?>
		<?php $css = isset($assets['css']) ? $assets['css'] : [] ?>
		<?php foreach ($css as $item):?>
			<link href="<?php echo $item ?>" rel="stylesheet">
		<?php endforeach;?>
		<?php //************ ?>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="flex flex-col">
		<header>
			<div class="red-bg">
				<div class="container-fluid fixed-width-container flex header-bar">
					<p class="header-bar__text">Premium Delights for You. By the Special Ones.</p>
					<a class="header-bar__email" href="mailto:hello@specialmakers.com">
						<img src="/web-assets/image/email.png">
						hello@specialmakers.com
					</a>
					<p class="header-bar__ph">
						<img src="/web-assets/image/ph.png">
						+91 9876543210
					</p>
				</div>
			</div>
			<div class="container-fluid fixed-width-container flex header">
				<div class="header__company-logo">
					<a href="/">
						<img src="/web-assets/image/logo.png" class="img-responsive">
					</a>
				</div>
				<nav class="flex header__nav">
					<a href="/" class="header__nav-link active"> Home </a>
					<a href="javascript:" class="header__nav-link"> About </a>
					<a href="javascript:" class="header__nav-link"> Order now </a>
					<a href="javascript:" class="header__nav-link"> Team </a>
					<a href="javascript:" class="header__nav-link"> Contact </a>
					<a href="javascript:" class="header__nav-link"> Blog </a>
				</nav>
			</div>
		</header>
		<main>
			<?php //body content ?>
			<?php echo $body ?>
			<?php //************ ?>
		</main>
		<footer>
			<div class="container-fluid fixed-width-container flex footer">
				<div class="footer__about-us footer-section text-center">
					<p class="footer-section__title">About us</p>
					<p class="footer__about-us-content">We are a social initiative based out of Delhi NCR offering Bakery &amp; Confectionary items made by people with special needs. The team is highly trained to create magic to add that extra spark to your day, and a big smile to your face.</p>
					<p class="footer__about-us-content">We make classic cookies, fresh breads, best cakes in Delhi, and also take orders for gifting and events.</p>
				</div>
				<div class="text-center footer-section">
					<p class="footer-section__title">Know a little more</p>
					<div class="footer__quick-links text-center">
						<a class="footer__quick-link" href="javascript:">Who We Are</a>
						<a class="footer__quick-link" href="javascript:">Menu For Order</a>
						<a class="footer__quick-link" href="javascript:">Team</a>
						<a class="footer__quick-link" href="javascript:">Blog</a>
						<a class="footer__quick-link" href="javascript:">T &amp; C</a>
						<a class="footer__quick-link" href="javascript:">Contact Us</a>
					</div>
				</div>
				<div class="text-center footer-section">
					<p class="footer-section__title">Let's be friends!</p>
					<div class="footer__social-links flex">
						<a href="javascript:" class="footer__social-link"><img src="/web-assets/image/fb.png"></a>
						<a href="javascript:" class="footer__social-link"><img src="/web-assets/image/insta.png"></a>
						<a href="javascript:" class="footer__social-link"><img src="/web-assets/image/twitter.png"></a>
					</div>
					<form class="subscribe-form">
						<div class="form-group">
							<input type="email" name="email" required class="form-control subscribe-form__email" placeholder="Enter Email Address :)">
							<input type="submit" name="submit" class="btn btn-primary subscribe-form__btn" value="Subscribe to Newsletter">
						</div>
					</form>
				</div>
			</div>
		</footer>
		<?php //loading js assets ?>
		<?php $js = isset($assets['js']) ? $assets['js'] : [] ?>
		<?php foreach ($js as $item):?>
			<script src="<?php echo $item ?>"></script>
		<?php endforeach;?>
		<?php //************ ?>
	</body>
</html>
