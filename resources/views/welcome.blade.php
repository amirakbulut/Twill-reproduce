@extends('layouts.app')

@section('content')


	
	{!! $page->renderBlocks() !!}



	<!-- START SECTION FEATURED PROPERTIES -->
	<section class="featured portfolio">
		<div class="container">
			<div class="row">
				<div class="section-title col-md-5">
					<h3>Featured</h3>
					<h2>Properties</h2>
				</div>
			</div>
			<div class="row portfolio-items">
				<div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
					<div class="project-single">
						<div class="project-inner project-head">
							<div class="project-bottom">
								<h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
							</div>
							<div class="button-effect">
								<a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
								<a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
								<a class="img-poppu btn" href="{{ asset('findhouses/images/feature-properties/fp-1.jpg') }}" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
							</div>
							<div class="homes">
								<!-- homes img -->
								<a href="properties-details.html" class="homes-img">
									<div class="homes-tag button alt featured">Featured</div>
									<div class="homes-tag button alt sale">For Sale</div>
									<div class="homes-price">Family Home</div>
									<img src="{{ asset('findhouses/images/feature-properties/fp-1.jpg') }}" alt="home-1" class="img-responsive">
								</a>
							</div>
						</div>
						<!-- homes content -->
						<div class="homes-content">
							<!-- homes address -->
							<h3>Real House Luxury Villa</h3>
							<p class="homes-address mb-3">
								<a href="properties-details.html">
									<i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
								</a>
							</p>
							<!-- homes List -->
							<ul class="homes-list clearfix">
								<li>
									<i class="fa fa-bed" aria-hidden="true"></i>
									<span>6 Bedrooms</span>
								</li>
								<li>
									<i class="fa fa-bath" aria-hidden="true"></i>
									<span>3 Bathrooms</span>
								</li>
								<li>
									<i class="fa fa-object-group" aria-hidden="true"></i>
									<span>720 sq ft</span>
								</li>
								<li>
									<i class="fas fa-warehouse" aria-hidden="true"></i>
									<span>2 Garages</span>
								</li>
							</ul>
							<!-- Price -->
							<div class="price-properties">
								<h3 class="title mt-3">
                                <a href="properties-details.html">$ 230,000</a>
                                </h3>
								<div class="compare">
									<a href="#" title="Compare">
										<i class="fas fa-exchange-alt"></i>
									</a>
									<a href="#" title="Share">
										<i class="fas fa-share-alt"></i>
									</a>
									<a href="#" title="Favorites">
										<i class="fa fa-heart-o"></i>
									</a>
								</div>
							</div>
							<div class="footer">
								<a href="agent-details.html">
									<i class="fa fa-user"></i> Jhon Doe
								</a>
								<span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-lg-4 col-md-6 col-xs-12 people rent">
					<div class="project-single">
						<div class="project-inner project-head">
							<div class="project-bottom">
								<h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
							</div>
							<div class="button-effect">
								<a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
								<a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
								<a class="img-poppu btn" href="{{ asset('findhouses/images/feature-properties/fp-2.jpg') }}" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
							</div>
							<div class="homes">
								<!-- homes img -->
								<a href="properties-details.html" class="homes-img">
									<div class="homes-tag button alt featured">Featured</div>
									<div class="homes-tag button sale rent">For Rent</div>
									<div class="homes-price">Family Home</div>
									<img src="{{ asset('findhouses/images/feature-properties/fp-2.jpg') }}" alt="home-1" class="img-responsive">
								</a>
							</div>
						</div>
						<!-- homes content -->
						<div class="homes-content">
							<!-- homes address -->
							<h3>Real House Luxury Villa</h3>
							<p class="homes-address mb-3">
								<a href="properties-details.html">
									<i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
								</a>
							</p>
							<!-- homes List -->
							<ul class="homes-list clearfix">
								<li>
									<i class="fa fa-bed" aria-hidden="true"></i>
									<span>6 Bedrooms</span>
								</li>
								<li>
									<i class="fa fa-bath" aria-hidden="true"></i>
									<span>3 Bathrooms</span>
								</li>
								<li>
									<i class="fa fa-object-group" aria-hidden="true"></i>
									<span>720 sq ft</span>
								</li>
								<li>
									<i class="fas fa-warehouse" aria-hidden="true"></i>
									<span>2 Garages</span>
								</li>
							</ul>
							<!-- Price -->
							<div class="price-properties">
								<h3 class="title mt-3">
                                <a href="properties-details.html">$ 230,000</a>
                                </h3>
								<div class="compare">
									<a href="#" title="Compare">
										<i class="fas fa-exchange-alt"></i>
									</a>
									<a href="#" title="Share">
										<i class="fas fa-share-alt"></i>
									</a>
									<a href="#" title="Favorites">
										<i class="fa fa-heart-o"></i>
									</a>
								</div>
							</div>
							<div class="footer">
								<a href="agent-details.html">
									<i class="fa fa-user"></i> Jhon Doe
								</a>
								<span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-lg-4 col-md-6 col-xs-12 people landscapes sale">
					<div class="project-single">
						<div class="project-inner project-head">
							<div class="project-bottom">
								<h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
							</div>
							<div class="button-effect">
								<a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
								<a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
								<a class="img-poppu btn" href="{{ asset('findhouses/images/feature-properties/fp-3.jpg') }}" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
							</div>
							<div class="homes">
								<!-- homes img -->
								<a href="properties-details.html" class="homes-img">
									<div class="homes-tag button alt featured">Featured</div>
									<div class="homes-tag button alt sale">For Sale</div>
									<div class="homes-price">Family Home</div>
									<img src="{{ asset('findhouses/images/feature-properties/fp-3.jpg') }}" alt="home-1" class="img-responsive">
								</a>
							</div>
						</div>
						<!-- homes content -->
						<div class="homes-content">
							<!-- homes address -->
							<h3>Real House Luxury Villa</h3>
							<p class="homes-address mb-3">
								<a href="properties-details.html">
									<i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
								</a>
							</p>
							<!-- homes List -->
							<ul class="homes-list clearfix">
								<li>
									<i class="fa fa-bed" aria-hidden="true"></i>
									<span>6 Bedrooms</span>
								</li>
								<li>
									<i class="fa fa-bath" aria-hidden="true"></i>
									<span>3 Bathrooms</span>
								</li>
								<li>
									<i class="fa fa-object-group" aria-hidden="true"></i>
									<span>720 sq ft</span>
								</li>
								<li>
									<i class="fas fa-warehouse" aria-hidden="true"></i>
									<span>2 Garages</span>
								</li>
							</ul>
							<!-- Price -->
							<div class="price-properties">
								<h3 class="title mt-3">
                                <a href="properties-details.html">$ 230,000</a>
                                </h3>
								<div class="compare">
									<a href="#" title="Compare">
										<i class="fas fa-exchange-alt"></i>
									</a>
									<a href="#" title="Share">
										<i class="fas fa-share-alt"></i>
									</a>
									<a href="#" title="Favorites">
										<i class="fa fa-heart-o"></i>
									</a>
								</div>
							</div>
							<div class="footer">
								<a href="agent-details.html">
									<i class="fa fa-user"></i> Jhon Doe
								</a>
								<span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-lg-4 col-md-6 col-xs-12 people landscapes rent no-pb">
					<div class="project-single no-mb">
						<div class="project-inner project-head">
							<div class="project-bottom">
								<h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
							</div>
							<div class="button-effect">
								<a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
								<a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
								<a class="img-poppu btn" href="{{ asset('findhouses/images/feature-properties/fp-4.jpg') }}" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
							</div>
							<div class="homes">
								<!-- homes img -->
								<a href="properties-details.html" class="homes-img">
									<div class="homes-tag button alt featured">Featured</div>
									<div class="homes-tag button sale rent">For Rent</div>
									<div class="homes-price">Family Home</div>
									<img src="{{ asset('findhouses/images/feature-properties/fp-4.jpg') }}" alt="home-1" class="img-responsive">
								</a>
							</div>
						</div>
						<!-- homes content -->
						<div class="homes-content">
							<!-- homes address -->
							<h3>Real House Luxury Villa</h3>
							<p class="homes-address mb-3">
								<a href="properties-details.html">
									<i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
								</a>
							</p>
							<!-- homes List -->
							<ul class="homes-list clearfix">
								<li>
									<i class="fa fa-bed" aria-hidden="true"></i>
									<span>6 Bedrooms</span>
								</li>
								<li>
									<i class="fa fa-bath" aria-hidden="true"></i>
									<span>3 Bathrooms</span>
								</li>
								<li>
									<i class="fa fa-object-group" aria-hidden="true"></i>
									<span>720 sq ft</span>
								</li>
								<li>
									<i class="fas fa-warehouse" aria-hidden="true"></i>
									<span>2 Garages</span>
								</li>
							</ul>
							<!-- Price -->
							<div class="price-properties">
								<h3 class="title mt-3">
                                <a href="properties-details.html">$ 230,000</a>
                                </h3>
								<div class="compare">
									<a href="#" title="Compare">
										<i class="fas fa-exchange-alt"></i>
									</a>
									<a href="#" title="Share">
										<i class="fas fa-share-alt"></i>
									</a>
									<a href="#" title="Favorites">
										<i class="fa fa-heart-o"></i>
									</a>
								</div>
							</div>
							<div class="footer">
								<a href="agent-details.html">
									<i class="fa fa-user"></i> Jhon Doe
								</a>
								<span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-lg-4 col-md-6 col-xs-12 people sale no-pb">
					<div class="project-single no-mb">
						<div class="project-inner project-head">
							<div class="project-bottom">
								<h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
							</div>
							<div class="button-effect">
								<a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
								<a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
								<a class="img-poppu btn" href="{{ asset('findhouses/images/feature-properties/fp-5.jpg') }}" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
							</div>
							<div class="homes">
								<!-- homes img -->
								<a href="properties-details.html" class="homes-img">
									<div class="homes-tag button alt featured">Featured</div>
									<div class="homes-tag button alt sale">For Sale</div>
									<div class="homes-price">Family Home</div>
									<img src="{{ asset('findhouses/images/feature-properties/fp-5.jpg') }}" alt="home-1" class="img-responsive">
								</a>
							</div>
						</div>
						<!-- homes content -->
						<div class="homes-content">
							<!-- homes address -->
							<h3>Real House Luxury Villa</h3>
							<p class="homes-address mb-3">
								<a href="properties-details.html">
									<i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
								</a>
							</p>
							<!-- homes List -->
							<ul class="homes-list clearfix">
								<li>
									<i class="fa fa-bed" aria-hidden="true"></i>
									<span>6 Bedrooms</span>
								</li>
								<li>
									<i class="fa fa-bath" aria-hidden="true"></i>
									<span>3 Bathrooms</span>
								</li>
								<li>
									<i class="fa fa-object-group" aria-hidden="true"></i>
									<span>720 sq ft</span>
								</li>
								<li>
									<i class="fas fa-warehouse" aria-hidden="true"></i>
									<span>2 Garages</span>
								</li>
							</ul>
							<!-- Price -->
							<div class="price-properties">
								<h3 class="title mt-3">
                                <a href="properties-details.html">$ 230,000</a>
                                </h3>
								<div class="compare">
									<a href="#" title="Compare">
										<i class="fas fa-exchange-alt"></i>
									</a>
									<a href="#" title="Share">
										<i class="fas fa-share-alt"></i>
									</a>
									<a href="#" title="Favorites">
										<i class="fa fa-heart-o"></i>
									</a>
								</div>
							</div>
							<div class="footer">
								<a href="agent-details.html">
									<i class="fa fa-user"></i> Jhon Doe
								</a>
								<span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-lg-4 col-md-6 it2 col-xs-12 web rent no-pb">
					<div class="project-single no-mb last">
						<div class="project-inner project-head">
							<div class="project-bottom">
								<h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
							</div>
							<div class="button-effect">
								<a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
								<a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
								<a class="img-poppu btn" href="{{ asset('findhouses/images/feature-properties/fp-6.jpg') }}" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
							</div>
							<div class="homes">
								<!-- homes img -->
								<a href="properties-details.html" class="homes-img">
									<div class="homes-tag button alt featured">Featured</div>
									<div class="homes-tag button sale rent">For Rent</div>
									<div class="homes-price">Family Home</div>
									<img src="{{ asset('findhouses/images/feature-properties/fp-6.jpg') }}" alt="home-1" class="img-responsive">
								</a>
							</div>
						</div>
						<!-- homes content -->
						<div class="homes-content">
							<!-- homes address -->
							<h3>Real House Luxury Villa</h3>
							<p class="homes-address mb-3">
								<a href="properties-details.html">
									<i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
								</a>
							</p>
							<!-- homes List -->
							<ul class="homes-list clearfix">
								<li>
									<i class="fa fa-bed" aria-hidden="true"></i>
									<span>6 Bedrooms</span>
								</li>
								<li>
									<i class="fa fa-bath" aria-hidden="true"></i>
									<span>3 Bathrooms</span>
								</li>
								<li>
									<i class="fa fa-object-group" aria-hidden="true"></i>
									<span>720 sq ft</span>
								</li>
								<li>
									<i class="fas fa-warehouse" aria-hidden="true"></i>
									<span>2 Garages</span>
								</li>
							</ul>
							<!-- Price -->
							<div class="price-properties">
								<h3 class="title mt-3">
                                <a href="properties-details.html">$ 230,000</a>
                                </h3>
								<div class="compare">
									<a href="#" title="Compare">
										<i class="fas fa-exchange-alt"></i>
									</a>
									<a href="#" title="Share">
										<i class="fas fa-share-alt"></i>
									</a>
									<a href="#" title="Favorites">
										<i class="fa fa-heart-o"></i>
									</a>
								</div>
							</div>
							<div class="footer">
								<a href="agent-details.html">
									<i class="fa fa-user"></i> Jhon Doe
								</a>
								<span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION FEATURED PROPERTIES -->

	<!-- START SECTION POPULAR PLACES -->
	<section class="popular-places">
		<div class="container">
			<div class="section-title">
				<h3>Most Popular</h3>
				<h2>Places</h2>
			</div>
			<div class="row">
				<div class="col-md-12">
				</div>
				<div class="col-lg-4 col-md-6">
					<!-- Image Box -->
					<a href="properties-right-sidebar.html" class="img-box hover-effect">
						<img src="{{ asset('findhouses/images/popular-places/1.jpg') }}" class="img-responsive" alt="">
						<!-- Badge -->
						<div class="listing-badges">
							<span class="featured">Featured</span>
						</div>
						<div class="img-box-content visible">
							<h4>New York City </h4>
							<span>203 Properties</span>
						</div>
					</a>
				</div>
				<div class="col-lg-8 col-md-6">
					<!-- Image Box -->
					<a href="properties-right-sidebar.html" class="img-box hover-effect">
						<img src="{{ asset('findhouses/images/popular-places/2.jpg') }}" class="img-responsive" alt="">
						<div class="img-box-content visible">
							<h4>Los Angeles</h4>
							<span>307 Properties</span>
						</div>
					</a>
				</div>
				<div class="col-lg-8 col-md-6">
					<!-- Image Box -->
					<a href="properties-right-sidebar.html" class="img-box hover-effect no-mb">
						<img src="{{ asset('findhouses/images/popular-places/3.jpg') }}" class="img-responsive" alt="">
						<div class="img-box-content visible">
							<h4>San Francisco </h4>
							<span>409 Properties</span>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-6">
					<!-- Image Box -->
					<a href="properties-right-sidebar.html" class="img-box hover-effect no-mb x3">
						<img src="{{ asset('findhouses/images/popular-places/4.jpg') }}" class="img-responsive" alt="">
						<!-- Badge -->
						<div class="listing-badges">
							<span class="featured">Featured</span>
						</div>
						<div class="img-box-content visible">
							<h4>Miami</h4>
							<span>507 Properties</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION POPULAR PLACES -->

	<!-- START SECTION AGENTS -->
	<section class="team">
		<div class="container">
			<div class="section-title col-md-5">
				<h3>Meet Our</h3>
				<h2>Agents</h2>
			</div>
			<div class="row team-all">
				<div class="col-lg-3 col-md-6 team-pro hover-effect">
					<div class="team-wrap">
						<div class="team-img">
							<img src="{{ asset('findhouses/images/team/t-5.jpg') }}" alt="" />
						</div>
						<div class="team-content">
							<div class="team-info">
								<h3>Carls Jhons</h3>
								<p>Real Estate Agent</p>
								<div class="team-socials">
									<ul>
										<li>
											<a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											<a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											<a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
										</li>
									</ul>
								</div>
								<span><a href="agent-details.html">View Profile</a></span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 team-pro hover-effect">
					<div class="team-wrap">
						<div class="team-img">
							<img src="{{ asset('findhouses/images/team/t-6.jpg') }}" alt="" />
						</div>
						<div class="team-content">
							<div class="team-info">
								<h3>Arling Tracy</h3>
								<p>Real Estate Agent</p>
								<div class="team-socials">
									<ul>
										<li>
											<a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											<a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											<a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
										</li>
									</ul>
								</div>
								<span><a href="agent-details.html">View Profile</a></span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 team-pro pb-none hover-effect">
					<div class="team-wrap">
						<div class="team-img">
							<img src="{{ asset('findhouses/images/team/t-7.jpg') }}" alt="" />
						</div>
						<div class="team-content">
							<div class="team-info">
								<h3>Mark Web</h3>
								<p>Real Estate Agent</p>
								<div class="team-socials">
									<ul>
										<li>
											<a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											<a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											<a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
										</li>
									</ul>
								</div>
								<span><a href="agent-details.html">View Profile</a></span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 team-pro hover-effect">
					<div class="team-wrap">
						<div class="team-img">
							<img src="{{ asset('findhouses/images/team/t-8.jpg') }}" alt="" />
						</div>
						<div class="team-content">
							<div class="team-info">
								<h3>Katy Grace</h3>
								<p>Real Estate Agent</p>
								<div class="team-socials">
									<ul>
										<li>
											<a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											<a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											<a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
										</li>
									</ul>
								</div>
								<span><a href="agent-details.html">View Profile</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION AGENTS -->

	<!-- START SECTION BLOG -->
	<section class="blog-section">
		<div class="container">
			<div class="section-title">
				<h3>Latest</h3>
				<h2>News</h2>
			</div>
			<div class="news-wrap">
				<div class="row">
					<div class="col-xl-6 col-md-12 col-xs-12">
						<div class="news-item news-item-sm">
							<a href="blog-details.html" class="news-img-link">
								<div class="news-item-img">
									<img class="resp-img" src="{{ asset('findhouses/images/blog/b-1.jpg') }}" alt="blog image">
								</div>
							</a>
							<div class="news-item-text">
								<a href="blog-details.html"><h3>The Real Estate News</h3></a>
								<span class="date">Jun 23, 2018 &nbsp;/&nbsp; By Admin</span>
								<div class="news-item-descr">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
								</div>
								<div class="news-item-bottom">
									<a href="blog-details.html" class="news-link">Read more...</a>
									<ul class="action-list">
										<li class="action-item"><i class="fa fa-heart"></i> <span>306</span></li>
										<li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
										<li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="news-item news-item-sm mb">
							<a href="blog-details.html" class="news-img-link">
								<div class="news-item-img">
									<img class="resp-img" src="{{ asset('findhouses/images/blog/b-2.jpg') }}" alt="blog image">
								</div>
							</a>
							<div class="news-item-text">
								<a href="blog-details.html"><h3>The Real Estate News</h3></a>
								<span class="date">Jun 23, 2018 &nbsp;/&nbsp; By Admin</span>
								<div class="news-item-descr">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
								</div>
								<div class="news-item-bottom">
									<a href="blog-details.html" class="news-link">Read more...</a>
									<ul class="action-list">
										<li class="action-item"><i class="fa fa-heart"></i> <span>306</span></li>
										<li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
										<li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-md-12 col-xs-12">
						<div class="news-item news-item-sm">
							<a href="blog-details.html" class="news-img-link">
								<div class="news-item-img">
									<img class="resp-img" src="{{ asset('findhouses/images/blog/b-3.jpg') }}" alt="blog image">
								</div>
							</a>
							<div class="news-item-text">
								<a href="blog-details.html"><h3>The Real Estate News</h3></a>
								<span class="date">Jun 23, 2018 &nbsp;/&nbsp; By Admin</span>
								<div class="news-item-descr">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
								</div>
								<div class="news-item-bottom">
									<a href="blog-details.html" class="news-link">Read more...</a>
									<ul class="action-list">
										<li class="action-item"><i class="fa fa-heart"></i> <span>306</span></li>
										<li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
										<li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="news-item news-item-sm">
							<a href="blog-details.html" class="news-img-link">
								<div class="news-item-img">
									<img class="resp-img" src="{{ asset('findhouses/images/blog/b-4.jpg') }}" alt="blog image">
								</div>
							</a>
							<div class="news-item-text">
								<a href="blog-details.html"><h3>The Real Estate News</h3></a>
								<span class="date">Jun 23, 2018 &nbsp;/&nbsp; By Admin</span>
								<div class="news-item-descr">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
								</div>
								<div class="news-item-bottom">
									<a href="blog-details.html" class="news-link">Read more...</a>
									<ul class="action-list">
										<li class="action-item"><i class="fa fa-heart"></i> <span>306</span></li>
										<li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
										<li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION BLOG -->

	<!-- STAR SECTION PARTNERS -->
	<div class="partners">
		<div class="container">
			<div class="section-title">
				<h3>Our</h3>
				<h2>Partners</h2>
			</div>
			<div class="owl-carousel style2">
				<div class="owl-item"><img src="{{ asset('findhouses/images/partners/1.png') }}" alt=""></div>
				<div class="owl-item"><img src="{{ asset('findhouses/images/partners/2.png') }}" alt=""></div>
				<div class="owl-item"><img src="{{ asset('findhouses/images/partners/3.png') }}" alt=""></div>
				<div class="owl-item"><img src="{{ asset('findhouses/images/partners/4.png') }}" alt=""></div>
				<div class="owl-item"><img src="{{ asset('findhouses/images/partners/5.png') }}" alt=""></div>
				<div class="owl-item"><img src="{{ asset('findhouses/images/partners/6.png') }}" alt=""></div>
				<div class="owl-item"><img src="{{ asset('findhouses/images/partners/7.png') }}" alt=""></div>
				<div class="owl-item"><img src="{{ asset('findhouses/images/partners/8.png') }}" alt=""></div>
				<div class="owl-item"><img src="{{ asset('findhouses/images/partners/9.png') }}" alt=""></div>
				<div class="owl-item"><img src="{{ asset('findhouses/images/partners/10.png') }}" alt=""></div>
			</div>
		</div>
	</div>
	<!-- END SECTION PARTNERS -->

	<!-- START SECTION NEWSLETTER -->
	<section class="subscribe">
		<div class="realhome_subscribe">
			<div class="realhome container">
				<h2>Subscribe for Our Newsletter</h2>
				<div class="row align-center">
					<div class="col-lg-6 col-md-6">
						<form class="realhome_form_subscribe mailchimp form-inline" method="post">
							<input type="email" id="subscribeEmail" name="EMAIL" class="form_email" placeholder="Enter Your Email">
							<button type="submit" value="Subscribe">Submit</button>
							<label for="subscribeEmail" class="error"></label>
							<p class="subscription-success"></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION NEWSLETTER -->


@endsection
