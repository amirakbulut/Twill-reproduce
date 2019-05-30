<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="html 5 template">
	<meta name="author" content="">
	<title>Find Houses - HTML5 Template</title>
	<!-- FAVICON -->
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" href="{{ asset('findhouses/css/jquery-ui.css') }}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="{{ asset('findhouses/css/fontawesome-all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('findhouses/css/font-awesome.min.css') }}">
	<!-- Slider Revolution CSS Files -->
	<link rel="stylesheet" href="{{ asset('findhouses/revolution/css/settings.css') }}">
	<link rel="stylesheet" href="{{ asset('findhouses/revolution/css/layers.css') }}">
	<link rel="stylesheet" href="{{ asset('findhouses/revolution/css/navigation.css') }}">
	<!-- ARCHIVES CSS -->
	<link rel="stylesheet" href="{{ asset('findhouses/css/search.css') }}">
	<link rel="stylesheet" href="{{ asset('findhouses/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('findhouses/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('findhouses/css/lightcase.css') }}">
	<link rel="stylesheet" href="{{ asset('findhouses/css/owl-carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('findhouses/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('findhouses/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('findhouses/css/styles.css') }}">
	<link rel="stylesheet" id="color" href="{{ asset('findhouses/css/default.css') }}">
</head>

<body>
	<!-- START SECTION HEADINGS -->
	<div class="header">
		<div class="header-top">
			<div class="container">
				<div class="top-info hidden-sm-down">
					<div class="call-header">
						<p><i class="fa fa-phone" aria-hidden="true"></i> (234) 0200 17813</p>
					</div>
					<div class="address-header">
						<p><i class="fa fa-map-marker" aria-hidden="true"></i> 95 South Park Ave, USA</p>
					</div>
					<div class="mail-header">
						<p><i class="fa fa-envelope" aria-hidden="true"></i> info@findhouses.com</p>
					</div>
				</div>
				<div class="top-social hidden-sm-down">
					<div class="social-icons-header">
						<div class="social-icons">
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="dropdown">
						<button class="btn-dropdown dropdown-toggle" type="button" id="dropdownlang" data-toggle="dropdown" aria-haspopup="true">
							<img src="{{ asset('findhouses/images/en.png') }}" alt="lang" /> English
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownlang">
							<li><img src="{{ asset('findhouses/images/fr.png') }}" alt="lang" />France</li>
							<li><img src="{{ asset('findhouses/images/de.png') }}" alt="lang" /> German</li>
							<li><img src="{{ asset('findhouses/images/it.png') }}" alt="lang" />Italy</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="header-bottom heading sticky-header" id="heading">
			<div class="container">
				<a href="index.html" class="logo">
					<img src="{{ asset('findhouses/images/logo.png') }}" alt="realhome">
				</a>
				<button type="button" class="search-button" data-toggle="collapse" data-target="#bloq-search" aria-expanded="false">
					<i class="fa fa-search" aria-hidden="true"></i>
				</button>
				<button type="button" class="button-menu hidden-lg-up" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</button>

				<form action="#" id="bloq-search" class="collapse">
					<div class="bloq-search">
						<input type="text" placeholder="search...">
						<input type="submit" value="Search">
					</div>
				</form>

				<nav id="main-menu" class="collapse">
					<ul>
                        <li><a href="/">Home</a></li>
						<!-- STAR COLLAPSE MOBILE MENU -->
						<li class="hidden-lg-up">
							<div class="po">
								<a data-toggle="collapse" href="#listing" aria-expanded="false">Vastgoed</a>
							</div>
							<div class="collapse" id="listing">
								<div class="card card-block">
									<a class="dropdown-item" href="#">Nederland</a>
									<a class="dropdown-item" href="#">Turkije</a>
								</div>
							</div>
						</li>
						<!-- END COLLAPSE MOBILE MENU -->
						<li class="dropdown hidden-md-down">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Vastgoed</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Nederland</a>
								<a class="dropdown-item" href="#">Turkije</a>
							</div>
						</li>
						<!-- STAR COLLAPSE MOBILE MENU -->
						<li class="hidden-lg-up">
							<div class="po">
								<a data-toggle="collapse" href="#services" aria-expanded="false">Agents</a>
							</div>
							<div class="collapse" id="services">
								<div class="card card-block">
									<a class="dropdown-item" href="agents-listing-grid.html">Agents Listing Grid</a>
									<a class="dropdown-item" href="agents-listing-row.html">Agents Listing Row</a>
									<a class="dropdown-item" href="agent-details.html">Agent Details</a>
								</div>
							</div>
						</li>
						<!-- END COLLAPSE MOBILE MENU -->
						<li class="dropdown hidden-md-down">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Agents</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="agents-listing-grid.html">Agents Listing Grid</a>
								<a class="dropdown-item" href="agents-listing-row.html">Agents Listing Row</a>
								<a class="dropdown-item" href="agent-details.html">Agent Details</a>
							</div>
						</li>
						<!-- STAR COLLAPSE MOBILE MENU -->
						<li class="hidden-lg-up">
							<div class="po">
								<a data-toggle="collapse" href="#about" aria-expanded="false">Pages</a>
							</div>
							<div class="collapse" id="about">
								<div class="card card-block">
									<a class="dropdown-item" href="about.html">About Us</a>
									<a class="dropdown-item" href="faq.html">Faq</a>
									<a class="dropdown-item" href="pricing-table.html">Pricing</a>
									<a class="dropdown-item" href="404.html">404</a>
									<a class="dropdown-item" href="login.html">Login</a>
								    <a class="dropdown-item" href="register.html">Register</a>
									<a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
									<a class="dropdown-item" href="under-construction.html">Under Construction</a>
								</div>
							</div>
						</li>
						<!-- END COLLAPSE MOBILE MENU -->
						<li class="dropdown hidden-md-down">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Pages</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="about.html">About Us</a>
								<a class="dropdown-item" href="faq.html">Faq</a>
								<a class="dropdown-item" href="pricing-table.html">Pricing</a>
								<a class="dropdown-item" href="404.html">404</a>
								<a class="dropdown-item" href="login.html">Login</a>
								<a class="dropdown-item" href="register.html">Register</a>
								<a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
								<a class="dropdown-item" href="under-construction.html">Under Construction</a>
							</div>
						</li>
						<!-- STAR COLLAPSE MOBILE MENU -->
						<li class="hidden-lg-up">
							<div class="po">
								<a data-toggle="collapse" href="#blog" aria-expanded="false">Blog</a>
							</div>
							<div class="collapse" id="blog">
								<div class="card card-block">
									<a class="dropdown-item" href="blog.html">Blog Default</a>
									<a class="dropdown-item" href="blog-rightsidebar.html">Blog Right Sidebar</a>
									<a class="dropdown-item" href="blog-details.html">Blog Details</a>
								</div>
							</div>
						</li>
						<!-- END COLLAPSE MOBILE MENU -->
						<li class="dropdown hidden-md-down">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Blog</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="blog.html">Blog Default</a>
								<a class="dropdown-item" href="blog-rightsidebar.html">Blog Right Sidebar</a>
								<a class="dropdown-item" href="blog-details.html">Blog Details</a>
							</div>
						</li>
						<li><a href="contact-us.html">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
    </div>
    
    @yield('content')

	<!-- START FOOTER -->
	<footer class="first-footer">
		<div class="top-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="netabout">
							<a href="index.html" class="logo">
								<img src="{{ asset('findhouses/images/logo-footer.svg') }}" alt="netcom">
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus impedit perferendis, laudantium molestiae ipsam rem veniam facere quos! Temporibus, minima culpa deleniti magnam.</p>
							<a href="about.html" class="btn btn-secondary">Read More...</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="navigation">
							<h3>Navigation</h3>
							<div class="nav-footer">
								<ul>
									<li><a href="index.html">Home One</a></li>
									<li><a href="properties-right-sidebar.html">Properties Right</a></li>
									<li><a href="properties-full-list.html">Properties List</a></li>
									<li><a href="properties-details.html">Property Details</a></li>
									<li class="no-mgb"><a href="agents-listing-grid.html">Agents Listing</a></li>
								</ul>
								<ul class="nav-right">
									<li><a href="agent-details.html">Agents Details</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="blog.html">Blog Default</a></li>
									<li><a href="blog-details.html">Blog Details</a></li>
									<li class="no-mgb"><a href="contact-us.html">Contact Us</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="widget">
							<h3>Twitter Feeds</h3>
							<div class="twitter-widget contuct">
								<div class="twitter-area">
									<div class="single-item">
										<div class="icon-holder">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</div>
										<div class="text">
											<h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
											<h4>about 5 days ago</h4>
										</div>
									</div>
									<div class="single-item">
										<div class="icon-holder">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</div>
										<div class="text">
											<h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
											<h4>about 5 days ago</h4>
										</div>
									</div>
									<div class="single-item">
										<div class="icon-holder">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</div>
										<div class="text">
											<h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
											<h4>about 5 days ago</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="contactus">
							<h3>Contact Us</h3>
							<ul>
								<li>
									<div class="info">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<p class="in-p">95 South Park Ave, USA</p>
									</div>
								</li>
								<li>
									<div class="info">
										<i class="fa fa-phone" aria-hidden="true"></i>
										<p class="in-p">+456 875 369 208</p>
									</div>
								</li>
								<li>
									<div class="info">
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<p class="in-p ti">support@findhouses.com</p>
									</div>
								</li>
							</ul>
						</div>
						<ul class="netsocials">
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="second-footer">
			<div class="container">
				<p>2018 © Copyright - All Rights Reserved.</p>
				<p>Made With <i class="fa fa-heart" aria-hidden="true"></i> By Code-Theme</p>
			</div>
		</div>
	</footer>

	<a data-scroll href="#heading" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
	<!-- END FOOTER -->

	<!-- START PRELOADER -->
	<div id="preloader">
		<div id="status">
			<div class="status-mes"></div>
		</div>
	</div>
	<!-- END PRELOADER -->

	<!-- ARCHIVES JS -->
	<script src="{{ asset('findhouses/js/jquery.min.js') }}"></script>
	<script src="{{ asset('findhouses/js/jquery-ui.js') }}"></script>
	<script src="{{ asset('findhouses/js/tether.min.js') }}"></script>
	<script src="{{ asset('findhouses/js/moment.js') }}"></script>
	<script src="{{ asset('findhouses/js/transition.min.js') }}"></script>
	<script src="{{ asset('findhouses/js/transition.min.js') }}"></script>
	<script src="{{ asset('findhouses/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('findhouses/js/fitvids.js') }}"></script>
	<script src="{{ asset('findhouses/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('findhouses/js/jquery.counterup.min.js') }}"></script>
	<script src="{{ asset('findhouses/js/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('findhouses/js/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('findhouses/js/smooth-scroll.min.js') }}"></script>
	<script src="{{ asset('findhouses/js/lightcase.js') }}"></script>
	<script src="{{ asset('findhouses/js/search.js') }}"></script>
	<script src="{{ asset('findhouses/js/owl.carousel.js') }}"></script>
	<script src="{{ asset('findhouses/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('findhouses/js/ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('findhouses/js/newsletter.js') }}"></script>
	<script src="{{ asset('findhouses/js/jquery.form.js') }}"></script>
	<script src="{{ asset('findhouses/js/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('findhouses/js/searched.js') }}"></script>
	<script src="{{ asset('findhouses/js/forms-2.js') }}"></script>

	<!-- Slider Revolution scripts -->
	<script src="{{ asset('findhouses/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('findhouses/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
	<script src="{{ asset('findhouses/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script src="{{ asset('findhouses/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
	<script src="{{ asset('findhouses/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
	<script src="{{ asset('findhouses/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script src="{{ asset('findhouses/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
	<script src="{{ asset('findhouses/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script src="{{ asset('findhouses/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
	<script src="{{ asset('findhouses/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script src="{{ asset('findhouses/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

	<!-- MAIN JS -->
	<script src="{{ asset('findhouses/js/script.js') }}"></script>

</body>

</html>
