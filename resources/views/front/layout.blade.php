<!DOCTYPE html>
<html lang="en">

	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>AMAAC - American Muslim and Arab
			Affairs Council</title>

		<meta name="keywords" content="AMAAC WebSite" />
		<meta name="description" content="AMAAC - American Muslim and Arab Affairs Council ">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('front/img/logos/amaac_logo.jpg') }}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{ asset('front/img/apple-touch-icon.png') }}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts"
			href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap"
			rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/vendor/fontawesome-free/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/vendor/animate/animate.compat.css') }}">
		<link rel="stylesheet" href="{{ asset('front/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/vendor/magnific-popup/magnific-popup.min.css') }}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('front/css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('front/css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('front/css/theme-blog.css') }}">
		<link rel="stylesheet" href="{{ asset('front/css/theme-shop.css') }}">
		<link rel="stylesheet" href="{{ asset('front/css/my-style.css') }}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{ asset('front/css/skins/default.css') }}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">
        @yield('css')
	</head>

	<body data-plugin-page-transition>
		<div class="body">
			<header id="header" class="header-effect-shrink"
				data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="{{ route('front.home') }}">
											<img alt="Porto" width="250" height="80" data-sticky-width="200"
												data-sticky-height="70" src="{{ asset('front/img/logos/amaac_logo.jpg') }}">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div
										class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
										<div
											class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse ">
												<ul class="nav nav-pills " id="mainNav">
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle   {{ $home ? 'active' : '' }}"
															href="{{ route('front.home') }}">
															Home
														</a>

													</li>
													<li class="dropdown dropdown-mega">
														<a class="dropdown-item dropdown-toggle {{ $about ? 'active' : '' }}" href="{{ route('front.about') }}">
															About Us
														</a>

													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle {{ $goals ? 'active' : '' }}" href="{{ route('front.goals') }}">
															Our goals
														</a>

													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle {{ $team ? 'active' : '' }}" href="{{ route('front.team') }}">
															Our Team
														</a>

													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle {{ $work ? 'active' : '' }}" href="{{ route('front.works') }}">
															Our Work
														</a>

													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="#">
															Get Involved
														</a>

													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="#">
															Contact Us
														</a>

													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
											data-bs-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
									<div class="header-nav-features order-1 order-lg-2">
										<div class="header-nav-feature header-nav-features-social-icons d-inline-flex">
											<ul
												class="header-social-icons social-icons d-none d-sm-block social-icons-clean ms-0">
												<li class="social-icons-facebook"><a href="http://www.facebook.com/"
														target="_blank" title="Facebook"><i
															class="fab fa-facebook-f"></i></a></li>
												<li class="social-icons-x"><a href="http://www.x.com/" target="_blank"
														title="X"><i class="fab fa-x-twitter"></i></a></li>
												<li class="social-icons-linkedin"><a href="http://www.linkedin.com/"
														target="_blank" title="Linkedin"><i
															class="fab fa-linkedin-in"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">

                @yield('content')

			</div>

			<footer id="footer" class="border-0" style="background : white">
				<div class="container py-4">
					<div class="row justify-content-md-center py-5 mt-3">
						<div
							class="col-md-12 col-lg-3 d-flex align-items-center justify-content-center justify-content-lg-start mb-5 mb-lg-0">
							<a href="{{ route('front.home') }}"><img src="{{ asset('front/img/logos/amaac_logo.jpg') }}" alt="Logo" class="img-fluid"
									style="max-width: 210px;"></a>
						</div>
						<div class="col-md-6 col-lg-2 text-center text-lg-start mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-primary mb-4">Pages</h5>
							<ul class="list list-unstyled">
								<li class="mb-1"><a href="page-services.html" class="link-hover-style-1"> Our
										Services</a></li>
								<li class="mb-1"><a href="about-us.html" class="link-hover-style-1"> About Us</a></li>
								<li class="mb-1"><a href="contact-us.html" class="link-hover-style-1"> Contact Us</a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-2 text-center text-lg-start mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-primary mb-4">Links</h5>
							<ul class="list list-unstyled">
								<li class="mb-1"><a href="page-faq.html" class="link-hover-style-1"> FAQ's</a></li>
								<li class="mb-1"><a href="sitemap.html" class="link-hover-style-1"> Sitemap</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-5 text-center text-lg-start">
							<h5 class="text-5 text-transform-none font-weight-semibold text-primary mb-4">Newsletter
							</h5>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST"
								class="mb-3 mb-md-0">
								<div class="input-group input-group-rounded">
									<input class="form-control form-control-sm bg-primary" placeholder="Email Address"
										name="newsletterEmail" id="newsletterEmail" type="email">
									<button class="btn btn-primary text-color-light"
										type="submit"><strong>GO!</strong></button>
								</div>
							</form>
							<p class="mt-3 mb-0 text-center text-lg-start">
								<i class="fab fa-whatsapp text-color-primary"></i><span class=" opacity-7 ps-2">(800)
									123-4567</span>
								<i class="far fa-envelope text-color-primary ms-4"></i><a href="mailto:mail@example.com"
									class="opacity-7 ps-2">mail@example.com</a>
							</p>
						</div>
					</div>
				</div>
				<div class="footer-copyright footer-copyright-style-2 bg-transparent footer-top-light-border">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
								<p>© Copyright 2025. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="{{ asset('front/vendor/plugins/js/plugins.min.js') }}"></script>
		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('front/js/theme.js') }}"></script>
		<!-- Theme Custom -->
		<script src="{{ asset('front/js/custom.js') }}"></script>
		<!-- Theme Initialization Files -->
		<script src="{{ asset('front/js/theme.init.js') }}"></script>
         @yield('js')
	</body>

</html>
