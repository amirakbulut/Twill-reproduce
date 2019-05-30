<!-- STAR SECTION WELCOME -->

<section class="welcome">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-xs-12">
					<div class="welcome-title">
						<h2>{{ $block->translatedinput('title') }}</h2>
						<h4>{{ $block->translatedinput('subtitle') }}</h4>
					</div>
					<div class="welcome-content">
						<p>{!! $block->translatedinput('content') !!}</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-xs-12">
					<div class="wprt-image-video w50">
						<img alt="image" src="{{ asset('findhouses/images/blog/b-1.jpg') }}">
						<a class="icon-wrap popup-video popup-youtube" href="https://www.youtube.com/watch?v=2xHQqYRcrx4">
							<i class="fa fa-play"></i>
						</a>
						<div class="iq-waves">
							<div class="waves wave-1"></div>
							<div class="waves wave-2"></div>
							<div class="waves wave-3"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- END SECTION WELCOME -->