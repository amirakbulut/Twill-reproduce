	<!-- START SECTION SERVICES -->
	<section class="services-home bg-white">
		<div class="container">
			<div class="section-title">
				<h3>{{ __('index.services.subtitle') }}</h3>
                <h2>{{ __('index.services.title') }}</h2>
			</div>
			<div class="row">
                @php
                    $ids = $block->browserIds('services');
                    $services = app(\App\Models\Service::class)->find($ids);
                @endphp

                @foreach ($services as $service)
                    <div class="col-lg-3 col-md-12 m-top-0 m-bottom-40">
                        <div class="service bg-light-2 border-1 border-light box-shadow-1 box-shadow-2-hover">
                            <div class="media">
                                <i class="fa fa-home bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                            </div>
                            <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                                <h4 class="m-bottom-15 text-bold-700">{{ $service->title }}</h4>
                                <p>{{ $service->description }}</p>
                                <a class="text-base text-base-dark-hover text-size-13" href="properties-full-list.html">{{ __('index.services.readmore') }} <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

			</div>
		</div>
	</section>
	<!-- END SECTION SERVICES -->