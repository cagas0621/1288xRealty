<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Home</title>
	<!-- <link rel="icon" href="img/core-img/favicon.ico"> -->

	<?php wp_head(); ?>

</head>

<body>
	<!-- Preloader -->
	<!-- <div id="preloader">
		<div class="south-load"></div>
	</div> -->

	<!-- ##### Header Area Start ##### -->
	<header class="header-area">

		<!-- Top Header Area -->
		<div class="top-header-area">
			<div class="h-100 d-md-flex justify-content-between align-items-center">
				<div class="email-address">
					<a href="mailto:contact@1288xrealty.com">contact@1288xrealty.com</a>
				</div>
				<div class="phone-number d-flex">
					<div class="icon">
						<img src="img/icons/phone-call.png" alt="">
					</div>
					<div class="number">
						<a href="tel:+45 677 8993000 223">+45 677 8993000 223</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Header Area -->
		<div class="main-header-area" id="stickyHeader">
			<div class="classy-nav-container breakpoint-off">
				<!-- Classy Menu -->
				<nav class="classy-navbar justify-content-between" id="southNav">

					<!-- Logo -->
					<a class="nav-brand" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.svg" alt=""></a>

					<!-- Navbar Toggler -->
					<div class="classy-navbar-toggler">
						<span class="navbarToggler"><span></span><span></span><span></span></span>
					</div>

					<!-- Menu -->
					<div class="classy-menu">

						<!-- close btn -->
						<div class="classycloseIcon">
							<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
						</div>

						<!-- Nav Start -->
						<div class="classynav">
							<ul>
								<li><a href="<?php echo home_url(); ?>">Home</a></li>
								<li><a href="<?php echo get_permalink(get_page_by_path('model')); ?>">Models</a></li>
								<li><a href="about-us.html">About Us</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>

							<!-- Search Form -->
							<div class="south-search-form">
								<form action="#" method="post">
									<input type="search" name="search" id="search" placeholder="Search Anything ...">
									<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
								</form>
							</div>

							<!-- Search Button -->
							<a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a>
						</div>
						<!-- Nav End -->
					</div>
				</nav>
			</div>
		</div>
	</header>