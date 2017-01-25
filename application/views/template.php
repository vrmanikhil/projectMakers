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
		<footer></footer>
		<?php //loading js assets ?>
		<?php $js = isset($assets['js']) ? $assets['js'] : [] ?>
		<?php foreach ($js as $item):?>
			<script src="<?php echo $item ?>"></script>
		<?php endforeach;?>
		<?php //************ ?>
	</body>
</html>
