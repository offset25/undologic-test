<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		//echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');

		//echo $this->fetch('meta');
		//echo $this->fetch('css');
		//echo $this->fetch('script');
	?>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="author" content="ChitrakootWeb">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />

	<!-- favicons -->
	<link rel="shortcut icon" href="<?= $baseLayout; ?>assets/favicon/favicon.ico">
	<link rel="apple-touch-icon" href="<?= $baseLayout; ?>assets/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= $baseLayout; ?>assets/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= $baseLayout; ?>assets/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?= $baseLayout; ?>assets/favicon/apple-icon-144x144.png">

	<!-- load google font -->
	<link href="https://fonts.googleapis.com/css?family=Barlow:300,400,400i,500,700,700i" rel="stylesheet">

	<!-- all stylesheets include start -->
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="<?= $baseLayout; ?>assets/bootstrap/css/bootstrap.min.css">
	<!-- revolution slider css -->
	<link rel="stylesheet" href="<?= $baseLayout; ?>assets/css/rev_slider/settings.css">
	<link rel="stylesheet" href="<?= $baseLayout; ?>assets/css/rev_slider/layers.css">
	<link rel="stylesheet" href="<?= $baseLayout; ?>assets/css/rev_slider/navigation.css">
	<!-- fontawesome css -->
	<link rel="stylesheet" href="<?= $baseLayout; ?>assets/css/font-awesome.min.css">
	<!-- ET Lineicon CSS -->
	<link rel="stylesheet" href="<?= $baseLayout; ?>assets/css/lineicon.css">
	<!-- Light Box CSS -->
	<link rel="stylesheet" href="<?= $baseLayout; ?>assets/css/lightbox.css">
	<link rel="stylesheet" href="<?= $baseLayout; ?>assets/css/animations.css">

	<!-- Accordions CSS -->
	<link rel="stylesheet" href="<?= $baseLayout; ?>assets/css/accordions.css">

	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="<?= $baseLayout; ?>assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?= $baseLayout; ?>assets/css/owl.theme.css">
	<link rel="stylesheet" href="<?= $baseLayout; ?>assets/css/owl.transitions.css">

	<!-- Tab and Accordian CSS -->
	<link rel="stylesheet" href="<?= $baseLayout; ?>assets/css/tabs.css">

	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="<?= $baseLayout; ?>assets/css/datepicker.css">

	<!-- xzoom CSS -->
	<link rel="stylesheet" href="<?= $baseLayout; ?>assets/css/xzoom.css">
	<link type="text/css" rel="stylesheet" media="all" href="<?= $baseLayout; ?>assets/css/jquery.fancybox.css" />

	<!-- theme style css -->
	<link rel="stylesheet" href="<?= $baseLayout; ?>assets/css/style.css">
	<!-- responsive css -->
	<link rel="stylesheet" href="<?= $baseLayout; ?>assets/css/responsive.css">
	<!-- all stylesheets include end -->

	<!-- Color Scheme css -->
	<?php
	/*
        <link rel="alternate stylesheet" type="text/css" href="<?= $baseLayout; ?>assets/css/switcher/color-one.css" title="color-one" media="screen" disabled/>
	<link rel="alternate stylesheet" type="text/css" href="<?= $baseLayout; ?>assets/css/switcher/color-two.css" title="color-two" media="screen" disabled/>
	<link rel="alternate stylesheet" type="text/css" href="<?= $baseLayout; ?>assets/css/switcher/color-three.css" title="color-three" media="screen" disabled/>
	<link rel="alternate stylesheet" type="text/css" href="<?= $baseLayout; ?>assets/css/switcher/color-four.css" title="color-four" media="screen" disabled/>
	<link rel="alternate stylesheet" type="text/css" href="<?= $baseLayout; ?>assets/css/switcher/color-five.css" title="color-five" media="screen" disabled/>
	<link rel="alternate stylesheet" type="text/css" href="<?= $baseLayout; ?>assets/css/switcher/color-six.css" title="color-six" media="screen" disabled/>
	<link rel="alternate stylesheet" type="text/css" href="<?= $baseLayout; ?>assets/css/switcher/color-seven.css" title="color-seven" media="screen" disabled/>
	<link rel="alternate stylesheet" type="text/css" href="<?= $baseLayout; ?>assets/css/switcher/color-eight.css" title="color-eight" media="screen" disabled/>
	<link rel="alternate stylesheet" type="text/css" href="<?= $baseLayout; ?>assets/css/switcher/color-nine.css" title="color-nine" media="screen" disabled/>
	<link rel="alternate stylesheet" type="text/css" href="<?= $baseLayout; ?>assets/css/switcher/color-ten.css" title="color-ten" media="screen" disabled/> 
	*/
	?>

	<!-- jquery latest version -->
	<script src="<?= $baseLayout; ?>assets/js/jquery-3.1.1.min.js"></script>

	<!-- revolution slider js files start -->
	<script src="<?= $baseLayout; ?>assets/js/rev_slider/jquery.themepunch.tools.min.js"></script>
	<script src="<?= $baseLayout; ?>assets/js/rev_slider/jquery.themepunch.revolution.min.js"></script>

	<script src="<?= $baseLayout; ?>assets/js/rev_slider/extensions/revolution.extension.actions.min.js"></script>
	<script src="<?= $baseLayout; ?>assets/js/rev_slider/extensions/revolution.extension.carousel.min.js"></script>
	<script src="<?= $baseLayout; ?>assets/js/rev_slider/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="<?= $baseLayout; ?>assets/js/rev_slider/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="<?= $baseLayout; ?>assets/js/rev_slider/extensions/revolution.extension.migration.min.js"></script>
	<script src="<?= $baseLayout; ?>assets/js/rev_slider/extensions/revolution.extension.navigation.min.js"></script>
	<script src="<?= $baseLayout; ?>assets/js/rev_slider/extensions/revolution.extension.parallax.min.js"></script>
	<script src="<?= $baseLayout; ?>assets/js/rev_slider/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="<?= $baseLayout; ?>assets/js/rev_slider/extensions/revolution.extension.video.min.js"></script>
	<!-- revolution slider js files end -->
</head>
<body>
	<div class="loader"></div>
	<div id="container">
		<div id="header">
			<!-- Start Top Header Section -->
			<div class="topbar">
			    <div class="container">
				<div class="row">
				    <div class="col-md-7 col-sm-7">
					<div class="contact-info">
					    <ul>
						<li>
						    <i class="fa fa-phone"></i>
						    <a href="tel:1234567890">+1 23-456-7890</a>
						</li>
						<li>
						    <i class="fa fa-envelope"></i>
						    <a href="mailto:mail@example.com">mail@example.com</a>
						</li>
					    </ul>
					</div>
				    </div>
				    <div class="col-md-5 col-sm-5 text-right">
					<ul class="social-icons">
					    <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
					    <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
					    <li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
					    <li><a href="javascript:void(0);"><i class="fa fa-youtube"></i></a></li>
					    <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
					    <li><a href="javascript:void(0);"><i class="fa fa-dribbble"></i></a></li>
					</ul>
				    </div>
				</div>
			    </div>
			</div>
			<!-- End Top Header Section -->
		</div>
		<div id="content">
			<!-- Start Header & Navigation Section -->
			<header class="clearfix" id="header">
			    <!-- Static navbar -->
			    <nav class="navbar navbar-default">
				<div class="container">
				    <div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					</button>
					<a class="logo" href="<?php echo $this->webroot?>"><span class="fa fa-angle-left"></span><span class="circle">C</span> <span class="name">HEAD</span><span class="fa fa-angle-right"></span></a>
				    </div>
				    <div class="search-cart-header pull-right">
					<div id="top-search" class="pull-right">
					    <!-- nav search -->
					    <a href="javascript:void(0);" class="header-search-form"><i class="fa fa-search"></i></a>
					    <!-- end nav search -->
					    <!-- search input-->
					    <form action="#" name="search-header" class="search-form-result">
						<div class="search-form position-relative">
						    <button type="submit" class="fa fa-search search-button white bg-theme"></button>
						    <input type="text" name="search" class="search-input" placeholder="Enter your keywords..." autocomplete="off">
						</div>
					    </form>
					    <!-- end search input -->
					</div>

					<div class="top-cart">
					    <!-- nav shopping bag -->
					    <a href="javascript:void(0);" class="shopping-cart">
						<i class="fa fa-shopping-cart"></i>
						<div class="subtitle">(2) Items</div>
					    </a>
					    <!-- end nav shopping bag -->
					    <!-- shopping bag content -->
					    <div class="cart-content bg-gray-dark">
						<ul class="cart-list">
						    <li>
							<a title="Remove item" class="remove" href="javascript:void(0);">×</a>
							<a href="shop-product-detail.html">
							    <img width="90" height="90" alt="" src="assets/images/shop/product-01.jpg">Red Leather bag
							</a>
							<span class="quantity">1 × <span class="amount">$140</span></span>
							<a href="javascript:void(0);">Edit</a>
						    </li>
						    <li>
							<a title="Remove item" class="remove" href="javascript:void(0);">×</a>
							<a href="shop-product-detail.html">
							    <img width="90" height="90" alt="" src="assets/images/shop/product-02.jpg">Brown island shoes
							</a>
							<span class="quantity">1 × <span class="amount">$140</span></span>
							<a href="javascript:void(0);">Edit</a>
						    </li>
						</ul>
						<p class="total">Subtotal: <span class="amount theme-color">$280</span></p>
						<p class="buttons">
						    <a href="shop-cart.html" class="btn btn-primary small bordered border-theme mr-10">View Cart</a>
						    <a href="shop-checkout.html" class="btn btn-secondary small bordered">Checkout</a>
						</p>
					    </div>
					    <!-- end shopping bag content -->
					</div>
				    </div>
				    <div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right"> 
					    <li class="drop"><a href="javascript:void(0);">Homepage</a>
						<ul class="drop-down">
						    <li><a href="<?php echo $this->webroot?>pages/main-demo" class="theme-1 styleswitch" data-rel="color-one">Homepage Main Demo</a></li>
						    <li><a href="javascript:void(0);" class="theme-2 styleswitch" data-rel="color-two">Homepage construction</a></li>
						    <li><a href="javascript:void(0);" class="theme-3 styleswitch" data-rel="color-three">Homepage medical</a></li>
						    <li><a href="javascript:void(0);" class="theme-4 styleswitch" data-rel="color-four">Homepage interior</a></li>
						    <li><a href="javascript:void(0);" class="theme-5 styleswitch" data-rel="color-five">Homepage travel</a></li>
						    <li><a href="javascript:void(0);" class="theme-6 styleswitch" data-rel="color-six">Homepage Shop</a></li>
						    <li><a href="javascript:void(0);" class="theme-7 styleswitch" data-rel="color-seven">Homepage Onepage</a></li>
						    <li><a href="coming-soon.html">Coming Soon</a></li>
						    <li><a href="/chead-theme">View all Demos</a></li>
						</ul>
					    </li>
					    <li class="drop"><a href="javascript:void(0);">Features</a>
						<ul class="drop-down">
						    <li><a href="javascript:void(0);">Header<i class="fa fa-angle-right"></i></a>
							<ul class="drop-down level3">
							    <li><a href="header-1.html">Header 1</a></li>
							    <li><a href="header-2.html">Header 2</a></li>
							    <li><a href="header-3.html">Header 3</a></li>
							    <li><a href="header-4.html">Header 4</a></li>
							    <li><a href="header-5.html">Header 5</a></li>
							    <li><a href="header-6.html">Header 6</a></li>
							    <li><a href="header-7.html">Header 7</a></li>
							    <li><a href="header-8.html">Header 8</a></li>
							</ul>
						    </li>
						    <li><a href="javascript:void(0);">Slideshow<i class="fa fa-angle-right"></i></a>
							<ul class="drop-down level3">
							    <li><a href="slider-revolution-1.html">Revolution Slider 1</a></li>
							    <li><a href="slider-revolution-2.html">Revolution Slider 2</a></li>
							    <li><a href="slider-revolution-3.html">Revolution Slider 3</a></li>
							    <li><a href="slider-bootstrap.html">Bootstrap Slider</a></li>
							</ul>
						    </li>
						    <li><a href="javascript:void(0);">Banner Style<i class="fa fa-angle-right"></i></a>
							<ul class="drop-down level3">
							    <li><a href="banner-1.html">Parallax</a></li>
							    <li><a href="banner-2.html">Static Banner</a></li>
							    <li><a href="banner-3.html">Video</a></li>
							</ul>
						    </li>
						    <li><a href="banner-video-bg.html">Video Background</a></li>
						</ul>
					    </li>
					    <li class="drop"><a href="javascript:void(0);">Pages</a>
						<ul class="drop-down">
						    <li><a href="javascript:void(0);">About Us <i class="fa fa-angle-right"></i></a>
							<ul class="drop-down level3">
							    <li><a href="<?php echo $this->webroot?>pages/about">About Us Style 1</a></li>
							    <li><a href="about-2.html">About Us Style 2</a></li>
							</ul>
						    </li>
						    <li><a href="<?php echo $this->webroot?>pages/services">Service Page</a></li>
						    <li><a href="<?php echo $this->webroot?>pages/career">Career</a></li>
						    <li><a href="<?php echo $this->webroot?>pages/team-member">Team Member</a></li>
						    <li><a href="<?php echo $this->webroot?>pages/faq">F.A.Q</a></li>
						    <li><a href="javascript:void(0);">Login</a></li>
						    <li><a href="javascript:void(0);">Registration</a></li>
						    <li><a href="javascript:void(0);">Contact Us <i class="fa fa-angle-right"></i></a>
							<ul class="drop-down level3">
							    <li><a href="contact.html">Contact style 1</a></li>
							    <li><a href="contact-style-2.html">Contact style 2</a></li>
							    <li><a href="contact-style-3.html">Contact style 3</a></li>
							</ul>
						    </li>
						</ul>
					    </li>
					    <li class="megadrop"><a href="javascript:void(0);">Portfolio</a>
						<div class="megadrop-down">
						    <div class="container">
							<div class="dropdown">
							    <div class="row">
								<div class="col-md-3 col-sm-6">
								    <ul>
									<li><a href="port-2-col-style-1.html">2 columns Style 1</a></li>
									<li><a href="port-2-col-style-2.html">2 columns Style 2</a></li>
									<li><a href="port-2-col-style-3.html">2 columns Style 3</a></li>
									<li><a href="port-2-col-style-4.html">2 columns Style 4</a></li>
								    </ul>
								</div>
								<div class="col-md-3 col-sm-6">
								    <ul>
									<li><a href="port-3-col-style-1.html">3 columns Style 1</a></li>
									<li><a href="port-3-col-style-2.html">3 columns Style 2</a></li>
									<li><a href="port-3-col-style-3.html">3 columns Style 3</a></li>
									<li><a href="port-3-col-style-4.html">3 columns Style 4</a></li>
								    </ul>
								</div>
								<div class="col-md-3 col-sm-6">
								    <ul>
									<li><a href="port-4-col-style-1.html">4 columns Style 1</a></li>
									<li><a href="port-4-col-style-2.html">4 columns Style 2</a></li>
									<li><a href="port-4-col-style-3.html">4 columns Style 3</a></li>
									<li><a href="port-4-col-style-4.html">4 columns Style 4</a></li>
								    </ul>
								</div>
								<div class="col-md-3 col-sm-6">
								    <ul class="last-child">
									<li><a href="port-masonry-style-1.html">Masonry Style 1</a></li>
									<li><a href="port-masonry-style-2.html">Masonry Style 2</a></li>
									<li><a href="port-masonry-style-3.html">Masonry Style 3</a></li>
									<li><a href="port-masonry-style-4.html">Masonry Style 4</a></li>
								    </ul>
								</div>
							    </div>
							</div>
						    </div>
						</div>
					    </li>
					    <li class="megadrop"><a href="javascript:void(0);">Shortcodes</a>
						<div class="megadrop-down">
						    <div class="container">
							<div class="dropdown">
							    <div class="row">
								<div class="col-md-3 col-sm-6">
								    <ul>
									<li><a href="alert.html"><i class="fa fa-plus-circle"></i> Alert</a></li>
									<li><a href="accordion.html"><i class="fa fa-sort-alpha-desc"></i>Accordion</a></li>
									<li><a href="audio-video.html"><i class="fa fa-soundcloud"></i>Audio &amp; Video</a></li>
									<li><a href="animated-counter.html"><i class="fa fa-bolt"></i>Animated Counter</a></li>
									<li><a href="blockquote.html"><i class="fa fa-quote-right"></i>Block Quote</a></li>
									<li><a href="blog-content.html"><i class="fa fa-newspaper-o"></i>Blog Content</a></li>
								    </ul>
								</div>
								<div class="col-md-3 col-sm-6">
								    <ul>
									<li><a href="bootstrap-grid.html"><i class="fa fa-th"></i>Bootstrap Grid</a></li>
									<li><a href="slider-bootstrap.html"><i class="fa fa-sliders"></i>Carousel</a></li>
									<li><a href="call-to-action.html"><i class="fa fa-file-text-o"></i>Call to Action</a></li>
									<li><a href="client.html"><i class="fa fa-angellist"></i>Clients</a></li>
									<li><a href="divider.html"><i class="fa fa-align-justify"></i>Divider</a></li>
									<li><a href="dropcap.html"><i class="fa fa-header"></i>Dropcap</a></li>
								    </ul>
								</div>
								<div class="col-md-3 col-sm-6">
								    <ul>
									<li><a href="error-404.html"><i class="fa fa-exclamation-triangle"></i>Error</a></li>
									<li><a href="faq.html"><i class="fa fa-question"></i>F.A.Q</a></li>
									<li><a href="feature-page.html"><i class="fa fa-codepen"></i>Feature Box</a></li>
									<li><a href="page-title.html"><i class="icon-document"></i>Page Title</a></li>
									<li><a href="piechart.html"><i class="fa fa-pie-chart"></i>Pie Chart</a></li>
									<li><a href="popup.html"><i class="fa fa-line-chart"></i>Pop Up</a></li>
								    </ul>
								</div>
								<div class="col-md-3 col-sm-6">
								    <ul class="last-child">
									<li><a href="progress-bar.html"><i class="fa fa-bar-chart"></i>Progress Bar</a></li>
									<li><a href="pricing-table.html"><i class="fa fa-usd"></i>Pricing Table</a></li>
									<li><a href="tab.html"><i class="fa fa-columns"></i>Tab</a></li>
									<li><a href="team.html"><i class="fa fa-user"></i>Team</a></li>
									<li><a href="testimonial.html"><i class="fa fa-pagelines"></i>Testimonial</a></li>
									<li><a href="typography.html"><i class="fa fa-font"></i>Typography</a></li>
								    </ul>
								</div>
							    </div>
							</div>
						    </div>
						</div>
					    </li>
					    <li class="drop"><a href="javascript:void(0);">Blog</a>
						<ul class="drop-down right">
						    <li><a href="<?php echo $this->webroot?>pages/blog-full-width">Blog Full Width</a></li>
						    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
						    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
						    <li><a href="blog-2-sidebar.html">Blog 2 Sidebar</a></li>
						    <li><a href="single-post-full-width.html">Blog Single Post</a></li>
						    <li><a href="single-post-left-sidebar.html">Single Left Sidebar</a></li>
						    <li><a href="single-post-right-sidebar.html">Single Right Sidebar</a></li>
						    <li><a href="single-post-2-sidebar.html">Single 2 Sidebar</a></li>
						</ul>
					    </li>
					    <li class="drop"><a href="javascript:void(0);">Shop</a>
						<ul class="drop-down right">
						    <li><a href="<?php echo $this->webroot?>pages/home-shop">Home Page Shop</a></li>
						    <li><a href="shop-product-grid.html">Product - Grid View</a></li>
						    <li><a href="shop-product-list.html">Product - List View</a></li>
						    <li><a href="shop-product-full-width.html">Product Full Width</a></li>
						    <li><a href="shop-product-detail.html">Product Detail</a></li>
						    <li><a href="shop-cart.html">Shop Cart</a></li>
						    <li><a href="shop-checkout.html">Shop Checkout</a></li>
						</ul>
					    </li>
					</ul>
				    </div>
				</div>
			    </nav>
			</header>
			<!-- End Header -->

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<!-- Start Footer & Copyright Section -->
			<section class="footer-section pad-t70 pad-b50 bg-gray-dark">
			    <div class="container">
				<div class="row">
				    <div class="col-md-3 col-sm-6 mb-md-20">
					<div class="section-title-2">
					    <h3>Address</h3>
					</div>
					<div class="footer-address">
					    <p><span>C-HEAD</span> is a best theme for your business.create your own unique site with C-HEAD theme.It is easy to implement in your website.</p> <a href="javascript:void(0);" class="green">read more...</a>
					</div>
				    </div>
				    <div class="col-md-3 col-sm-6 mb-md-20">
					<div class="section-title-2">
					    <h3>How to reach us!</h3>
					</div>
					<div class="footer-address">
					    <p><span class="icon-map mr-10"></span>
						<label>Address:</label> Metsarentsi,Yerevan-374</p>
					    <p><span class="icon-envelope mr-10"></span>
						<label>Email:</label> email@example.com</p>
					    <p><span class=" icon-mobile mr-10"></span>
						<label>Phone:</label> +123 456 7890</p>
					</div>
					<div class="footer-social">
					    <ul class="top-social">
						<li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
						<li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
						<li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="javascript:void(0);"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
					    </ul>
					</div>
				    </div>
				    <div class="col-md-3 col-sm-6 mb-md-20">
					<div class="section-title-2">
					    <h3>Latest Post</h3>
					</div>
					<div class="sidebar-post">
					    <ul>
						<li>
						    <img src="<?= $baseLayout; ?>assets/images/blog/blog8.jpg" alt="">
						    <a href="javascript:void(0);">Things go better with Health.</a>
						</li>
						<li>
						    <img src="<?= $baseLayout; ?>assets/images/blog/blog18.jpg" alt="">
						    <a href="javascript:void(0);">Makes your dream.</a>
						</li>
						<li>
						    <img src="<?= $baseLayout; ?>assets/images/blog/blog19.jpg" alt="">
						    <a href="javascript:void(0);">Tour is crazy good.</a>
						</li>
					    </ul>
					</div>
				    </div>
				    <div class="col-md-3 col-sm-6 mb-md-20">
					<div class="section-title-2">
					    <h3>Newsletter</h3>
					</div>
					<p>Join with our newsletter to receive our upcoming technologies and feature products.</p>
					<form>
					    <div class="form-group footer-subscribe">
						<input type="email" class="form-control" id="Email1" placeholder="Subscribe with us">
						<button type="submit" class="btn btn-primary">Join</button>
					    </div>
					</form>
				    </div>
				</div>
			    </div>
			</section>
			<!-- End Footer & Copyright Section -->

			<!-- Start  Copyright Section -->
			<div class="copyright-section">
			    <div class="container">
				<div class="row">
				    <div class="col-md-12">
					<div class="copyright-text text-center">
					    <p>&copy; 2018 C-HEAD is Powered by Chitrakoot Web</p>
					</div>
				    </div>
				</div>
			    </div>
			</div>
			<!-- End Copyright Section -->

			<div id="back-to-top" class="back-to-top reveal">
			    <i class="fa fa-angle-up"></i>
			</div>

			<!-- Start Switcher Section -->
			<!-- <div class="switcher">
			    <a href="javascript:void(0);" class="open-switcher show-switcher"><i class="fa fa-cog fa-spin fa-2x"></i></a>
			    <h4>Style Switcher</h4>
			    <span>Choose Theme Color:</span> -->

			    <!-- Color Switcher -->
			    <!--<ul class="switcher-color">
				<li>
				    <a href="javascript:void(0);" class="color-1 styleswitch" data-rel="color-one"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="color-2 styleswitch" data-rel="color-two"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="color-3 styleswitch" data-rel="color-three"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="color-4 styleswitch" data-rel="color-four"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="color-5 styleswitch" data-rel="color-five"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="color-6 styleswitch" data-rel="color-six"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="color-7 styleswitch" data-rel="color-seven"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="color-8 styleswitch" data-rel="color-eight"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="color-9 styleswitch" data-rel="color-nine"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="color-10 styleswitch" data-rel="color-ten"></a>
				</li>
			    </ul> -->
			    <!-- Color Switcher end -->

			    <!--<span>Layout Style</span>
			    <select id="layout-style" class="layout-style">
				<option value="1">Wide</option>
				<option value="2">Boxed</option>
			    </select>
			    <span>Patterns for Boxed Version</span> -->
			    <!-- <ul class="bg-list">
				<li>
				    <a href="javascript:void(0);" class="bg1"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="bg2"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="bg3"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="bg4"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="bg5"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="bg6"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="bg7"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="bg8"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="bg9"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="bg10"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="bg11"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="bg12"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="bg13"></a>
				</li>
				<li>
				    <a href="javascript:void(0);" class="bg14"></a>
				</li>
			    </ul> -->
			    <!-- <a href="/chead-theme" class="btn btn-primary mb20">View all Demos</a>
			</div> -->
			<!-- End Switcher Section -->

		    </div>

		    <!-- all js include start -->

		    <!-- bootstrap latest version -->
		    <script src="<?= $baseLayout; ?>assets/bootstrap/js/bootstrap.min.js"></script>

		    <!-- Other jQuery library -->
		    <script src="<?= $baseLayout; ?>assets/js/animation.js"></script>
		    <script src="<?= $baseLayout; ?>assets/js/jquery.appear.js"></script>
		    <script src="<?= $baseLayout; ?>assets/js/jquery.countTo.js"></script>
		    <script src="<?= $baseLayout; ?>assets/js/jquery.isotope.min.js"></script>
		    <script src="<?= $baseLayout; ?>assets/js/lightbox.js"></script>
		    <script src="<?= $baseLayout; ?>assets/js/owl.carousel.js"></script>
		    <script src="<?= $baseLayout; ?>assets/js/jquery.easypiechart.js"></script>
		    <script src="<?= $baseLayout; ?>assets/js/jquery.mb.YTPlayer.js"></script>
		    <script src="<?= $baseLayout; ?>assets/js/countdown.js"></script>
		    <script src="<?= $baseLayout; ?>assets/js/jquery.fitvids.js"></script>
		    <script src="<?= $baseLayout; ?>assets/js/easyResponsiveTabs.js"></script>
		    <script src="<?= $baseLayout; ?>assets/js/bootstrap-datepicker.min.js"></script>
		    <?php /*<script src="<?= $baseLayout; ?>assets/js/stylesheetToggle.js"></script>*/?>
		    <script src="<?= $baseLayout; ?>assets/js/xzoom.js"></script>
		    <script src="<?= $baseLayout; ?>assets/js/jquery.fancybox.js"></script>
		    <script src="<?= $baseLayout; ?>assets/js/setup.js"></script>

		    <!-- template main js file -->
		    <script src="<?= $baseLayout; ?>assets/js/main.js"></script>
		    <!-- all js include end -->
		</div>
	</div>
	<link rel="stylesheet" type="text/css" href="<?= $baseLayout; ?>../../css/<?= $versionLetter?>/custom.css" title="color-ten" media="screen" />
	
	<script>
	        console.info('stylesheets:: ', document.styleSheets);
	</script>
</body>
</html>
