
@extends('layout',['activePage' => 'listyourcamper'])
@section('banner')
    @include('listYourCamper/sliderList')
@endsection
@section('content')
<!-- Content
================================================== -->
<div class="container">
	<div class="row">

	</div>
</div>
<!-- Content
================================================== -->

<!-- Fullwidth Section -->
<section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#fff">

	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-45">
					<strong class="headline-with-separator">{{trans('front.Renting out your camper & equipments online')}}</strong>
				</h3>
				<div style="color: #707070; text-align: center;">
					<h4>Rent out your camper/equipment easily and safely via CampUnite.</h4>
				</div>
			</div>
			<div class="col-md-12" style='text-align: center;'>
				<section class="fullwidth padding-top-75 padding-bottom-70" data-background-color="#fff">
					<div class="container">
						<div class="">
							<!-- Stage -->
							<div class="col-md-4" style="text-align: center;">
								<img src="{{ asset('images/rent_camp.png') }}"/>
								<h4><strong>1. {{trans('front.Create profile')}}</strong></h4>
								<div style="margin-top: 0px; padding-top: 0px;">
									Upload pictures of your vehicle and determine price and rental conditions
								</div>
							</div>

							<!-- Stage -->
							<div class="col-md-4" style="text-align: center;">
								<img src="{{ asset('images/rent_camp.png') }}"/>
								<h4><strong>2. {{trans('front.Define availabilty')}}</strong></h4>
								<div style="margin-top: 0px; padding-top: 0px;">
									Block your camper for the periods where it's not available
								</div>
							</div>

							<!-- Stage -->
							<div class="col-md-4" style="text-align: center;">
								<img src="{{ asset('images/rent_camp.png') }}"/>
								<h4><strong>3. {{trans('front.Reply to booking requests')}}</strong></h4>
								<div style="margin-top: 0px; padding-top: 0px;">
									Accept those requests where you want to rent out your vehicle.
								</div>
							</div>
						</div>

					</div>
				</section>
				<a href="" class="button large border">{{trans('front.Rent out Now')}}</a>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3 class="headline centered">
				<strong class="headline-with-separator">{{trans('front.advantages')}}</strong>
			</h3>
		</div>
		<div class="col-md-12"  style='text-align: center;'>
			<div class="row icons-container">
				<!-- Stage -->
				<div class="col-md-4">
					<div class="icon-box-2 with-line">
					<i class="im im-icon-Spell-Check"></i>
					<h4><strong>{{trans('front.Verify')}}</strong></h4>
						<p>{{trans('front.You decide who can hire your camper at what price')}}</p>
					</div>
				</div>

				<!-- Stage -->
				<div class="col-md-4">
					<div class="icon-box-2 with-line">
						<i class="im im-icon-Check"></i>
						<h4><strong>{{trans('front.Register for free')}}</strong></h4>
						<p>{{trans('front.Register your camper for free. We only receive a service fee after a successfil booking')}}</p>
					</div>
				</div>

				<!-- Stage -->
				<div class="col-md-4">
					<div class="icon-box-2">
						<i class="im im-icon-Firewall"></i>
						<h4><strong>{{trans('front.Insurance')}}</strong></h4>
						<p>{{trans('front.insurance_desc')}}</p>
					</div>
				</div>
			</div>
			<a href="" class="button large border">{{trans('front.Rent out Now')}}</a>
		</div>
	</div>
</div>
<!-- Category Boxes / End -->
<!-- Info Section -->

<!-- Info Section / End -->


<!-- Recent Blog Posts -->
<section class="fullwidth margin-top-0 padding-top-75 padding-bottom-75" data-background-color="#fff">
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-55">
					<strong class="headline-with-separator">{{trans('front.What our vehicle owners say')}}</strong>
				</h3>
			</div>
		</div>

		<div class="row">
		<div class="fullwidth-carousel-container margin-top-20 no-dots">
		<div class="testimonial-carousel testimonials">

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation is on the runway heading towards a streamlined cloud solution user generated content.</div>
				</div>
				<div class="testimonial-author">
					<img src="images/happy-client-01.jpg" alt="">
					<h4>Jennie Smith <span>Coffee Shop Owner</span></h4>
				</div>
			</div>

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop.</div>
				</div>
				<div class="testimonial-author">
					<img src="images/happy-client-02.jpg" alt="">
					<h4>Tom Baker <span>Clothing Store Owner</span></h4>
				</div>
			</div>

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view.</div>
				</div>
				<div class="testimonial-author">
					<img src="images/happy-client-03.jpg" alt="">
					<h4>Jack Paden <span>Restaurant Owner</span></h4>
				</div>
			</div>

		</div>
	</div>

		</div>

	</div>
</section>
<!-- Recent Blog Posts / End -->
@endsection
