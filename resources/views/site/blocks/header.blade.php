	<!-- STAR HEADER SEARCH -->
	<section id="hero-area" class="parallax-search overlay" data-stellar-background-ratio="0.5">
		<div class="hero-main">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="hero-inner">
							<!-- Welcome Text -->
							<div class="welcome-text">
								<h1>{{ $block->translatedinput('title') }}</h1>
								<p>{{ $block->translatedinput('subtitle') }}</p>
							</div>
							<!--/ End Welcome Text -->
							<!-- Search Form -->
							<div class="trip-search">
								<form class="form">
									<!-- Form Location -->
									<div class="form-group location">
										<div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-map-marker"></i>{{ __('index.header.location') }}</span>
											<ul class="list">
												<li data-value="1" class="option selected ">{{ __('index.coutries.nl') }}</li>
												<li data-value="2" class="option">{{ __('index.coutries.tr') }}</li>
											</ul>
										</div>
									</div>
									<!--/ End Form Location -->
									<!-- Form Property Type -->
									<div class="form-group">
										<div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>{{ __('index.header.property_type.title') }}</span>
											<ul class="list">
												<li data-value="1" class="option selected ">{{ __('index.header.property_type.submenu.item1') }}</li>
												<li data-value="2" class="option">{{ __('index.header.property_type.submenu.item2') }}</li>
												<li data-value="3" class="option">{{ __('index.header.property_type.submenu.item3') }}</li>
												<li data-value="3" class="option">{{ __('index.header.property_type.submenu.item4') }}</li>
												<li data-value="3" class="option">{{ __('index.header.property_type.submenu.item5') }}</li>
											</ul>
										</div>
									</div>
									<!--/ End Form Property Type -->
									<!-- Form Property Status -->
									<div class="form-group duration">
										<div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>{{ __('index.header.property_status.title') }}</span>
											<ul class="list">
												<li data-value="1" class="option selected ">{{ __('index.header.property_status.submenu.item1') }}</li>
												<li data-value="2" class="option">{{ __('index.header.property_status.submenu.item2') }}</li>
											</ul>
										</div>
									</div>
									<!--/ End Form Property Status -->
									<!-- Form Bedrooms -->
									<div class="form-group">
										<div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bed" aria-hidden="true"></i>{{ __('index.header.bedrooms') }}</span>
											<ul class="list">
												<li data-value="1" class="option selected">1</li>
												<li data-value="2" class="option">2</li>
												<li data-value="3" class="option">3</li>
												<li data-value="3" class="option">4</li>
												<li data-value="3" class="option">5</li>
												<li data-value="3" class="option">6</li>
												<li data-value="3" class="option">7</li>
												<li data-value="3" class="option">8</li>
												<li data-value="3" class="option">9</li>
												<li data-value="3" class="option">10</li>
											</ul>
										</div>
									</div>
									<!--/ End Form Bedrooms -->
									<!-- Form Bathrooms -->
									<div class="form-group">
										<div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bath" aria-hidden="true"></i>{{ __('index.header.bathrooms') }}</span>
											<ul class="list">
												<li data-value="1" class="option selected">1</li>
												<li data-value="2" class="option">2</li>
												<li data-value="3" class="option">3</li>
												<li data-value="3" class="option">4</li>
												<li data-value="3" class="option">5</li>
												<li data-value="3" class="option">6</li>
												<li data-value="3" class="option">7</li>
												<li data-value="3" class="option">8</li>
												<li data-value="3" class="option">9</li>
												<li data-value="3" class="option">10</li>
											</ul>
										</div>
									</div>
									<!--/ End Form Bathrooms -->
									<!-- Form Button -->
									<div class="form-group button">
										<button type="submit" class="btn">{{ __('index.header.search') }}</button>
									</div>
									<!--/ End Form Button -->
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END HEADER SEARCH -->