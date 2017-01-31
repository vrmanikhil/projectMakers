<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,400,400i,500,500i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
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
					<p class="header-bar__text header-bar__item"><?php echo $headerContent['headline']; ?></p>
					<a class="header-bar__email header-bar__item" href="mailto:<?php echo $headerContent['email']; ?>">
						<img src="/web-assets/image/email.png">
						<?php echo $headerContent['email']; ?>
					</a>
					<p class="header-bar__ph header-bar__item">
						<img src="/web-assets/image/ph.png">
						+91 <?php echo $headerContent['mobile']; ?>
					</p>
				</div>
			</div>
			<div class="container-fluid fixed-width-container flex header">
				<div class="header__company-logo">
					<a href="/">
						<img src="/web-assets/image/logo.png" class="img-responsive">
					</a>
				</div>
				<nav class="navbar navbar-default header__nav">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="javascript:">Menu</a>
						</div>
						<div class="collapse navbar-collapse" id="main-menu">
							<ul class="nav navbar-nav">
								<li <?php echo ($activePage === 'home') ? 'class="active"' : '' ?>><a href="/" class="header__nav-link"> Home </a></li>
								<li <?php echo ($activePage === 'about') ? 'class="active"' : '' ?>><a href="/about" class="header__nav-link"> About </a></li>
								<li <?php echo ($activePage === 'menu') ? 'class="active"' : '' ?>><a href="/menu" class="header__nav-link"> Order now </a></li>
								<li <?php echo ($activePage === 'team') ? 'class="active"' : '' ?>><a href="/team" class="header__nav-link"> Team </a></li>
								<li <?php echo ($activePage === 'contact') ? 'class="active"' : '' ?>><a href="/contact" class="header__nav-link"> Contact </a></li>
								<li><a href="javascript:" class="header__nav-link"> Blog </a></li>
							</ul>
						</div>
					</div>
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
					<div class="footer__about-us-content"><?php echo $footerContent['about']; ?></div>
				</div>
				<div class="text-center footer-section">
					<p class="footer-section__title">Know a little more</p>
					<div class="footer__quick-links text-center">
						<a class="footer__quick-link" href="/about">Who We Are</a>
						<a class="footer__quick-link" href="/menu">Menu For Order</a>
						<a class="footer__quick-link" href="/team">Team</a>
						<a class="footer__quick-link" href="javascript:">Blog</a>
						<a class="footer__quick-link" href="javascript:">T &amp; C</a>
						<a class="footer__quick-link" href="/contact">Contact Us</a>
					</div>
				</div>
				<div class="text-center footer-section">
					<p class="footer-section__title">Let's be friends!</p>
					<div class="footer__social-links flex">

						<a target="_blank" href="<?php echo $footerContent['facebook']; ?>" class="footer__social-link"><img src="/web-assets/image/fb.png"></a>
						<a target="_blank" href="<?php echo $footerContent['twitter']; ?>" class="footer__social-link"><img src="/web-assets/image/insta.png"></a>
						<a target="_blank" href="<?php echo $footerContent['instagram']; ?>" class="footer__social-link"><img src="/web-assets/image/twitter.png"></a>

					</div>
					<form class="subscribe-form" method="post" action="<?php echo base_url('/home/subscribeNewsletter') ?>">
						<div class="form-group">
							<input type="email" name="email" required class="form-control subscribe-form__email" placeholder="Enter Email Address :)">
							<input type="hidden" name="<?php echo $csrf_token_name; ?>" value="<?php echo $csrf_token; ?>">
							<?php
								if (isset($subScribeMsg)) {
								$cls = ($subScribeMsg['color'] === 'green') ? 'text-success' : '';
								$cls = ($subScribeMsg['color'] === 'red') ? 'text-danger' : $cls;
							?>
								<p class="<?php echo $cls ?> subscribe-form__msg text-center"><?php echo $subScribeMsg['content'] ?></p>
							<?php
								}
							?>
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
