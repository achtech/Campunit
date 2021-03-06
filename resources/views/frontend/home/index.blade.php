
@extends('frontend.layout',['activePage' => 'home'])
@section('banner')
@include('frontend.slider')
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
<section class="fullwidth margin-top-65  padding-bottom-70" data-background-color="#fff">

	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-45">
					<strong class="headline-with-separator">{{trans('front.content_most_visited')}}</strong>
				</h3>
			</div>

			<div class="col-md-12">
				<div class="simple-slick-carousel dots-nav">
				<!-- Listing Item -->
				@foreach($campers as $camper)
					<div class="carousel-item">
						<a href="listings-single-page.html" class="listing-item-container">
							<div class="listing-item">
								<img src="{{asset('images')}}/campers/{{$camper->image}}" alt="">
								<div class="listing-item-content">
									<span class="tag">{{App\Http\Controllers\Controller::getLabel('camper_categories',$camper->id_camper_categories)}}</span>
									<h3>{{$camper->camper_name}} <i class="verified-icon"></i></h3>
									<span>{{$camper->description_camper}}</span>
								</div>
								<span class="like-icon"></span>
							</div>
							<div class="star-rating" data-rating="{{App\Http\Controllers\frontend\HomeController::getCamperRate($camper->id)}}">
							{{App\Http\Controllers\frontend\HomeController::getCamperRate($camper->id)}}<div class="rating-counter">({{App\Http\Controllers\frontend\HomeController::getReviewsCount($camper->id)}} {{__('front.Reviews')}})</div>
							</div>
						</a>
					</div>
				<!-- Listing Item / End -->
				@endforeach
				</div>

			</div>

		</div>
	</div>

</section>

<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline centered">
				<strong class="headline-with-separator">{{trans('front.title_categories')}}</strong>
			</h3>
		</div>

		<div class="col-md-12">
			<div class="row">

				@foreach($categories as $category)
					<!-- Box -->
					<div class="col-md-3 alternative-imagebox">
						<a href="listings-list-with-sidebar.html" >
						<img src="{{asset('images')}}/camper_categories/{{$category->image}}" alt="">
							<h4>{{App\Http\Controllers\Controller::getLabelFromObject($category)}}</h4>
							<span class="blog-item-tag">{{App\Http\Controllers\frontend\HomeController::getListings($category->id)}} Listings</span>
						</a>
					</div>

				@endforeach
			</div>
		</div>
	</div>
</div>
<!-- Category Boxes / End -->
<!-- Info Section -->
<section class="fullwidth padding-bottom-70 margin-top-section" data-background-color="#fff">
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="headline centered headline-extra-spacing">
				<strong class="headline-with-separator">{{trans('front.content_user_review')}}</strong>
			</h3>
		</div>
	</div>

	<div class="row icons-container">
		<!-- Stage -->
		<div class="col-md-4">
			<div class="icon-box-2 with-line">
				<i class="im im-icon-Map2"></i>
				<p>{{trans('front.content_text_find_place')}}</p>
			</div>
		</div>

		<!-- Stage -->
		<div class="col-md-4">
			<div class="icon-box-2 with-line">
				<i class="im im-icon-Mail-withAtSign"></i>
				<p>{{trans('front.choose_data_request')}}</p>
			</div>
		</div>

		<!-- Stage -->
		<div class="col-md-4">
			<div class="icon-box-2">
				<i class="im im-icon-Checked-User"></i>
				<p>{{trans('front.receive_request')}}</p>
			</div>
		</div>
	</div>
	<div class="col-md-12 centered-content">
		<a href="pages-blog.html" class="button border margin-top-10">{{trans('front.find_camper_now')}}</a>
	</div>
</div>
</section>
<!-- Info Section / End -->


<!-- Recent Blog Posts -->
<section class="fullwidth margin-top-0  padding-bottom-75" data-background-color="#fff">
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-55">
					<strong class="headline-with-separator">{{trans('front.our_bloc')}}</strong>
				</h3>
			</div>
		</div>

		<div class="row">
			<!-- Blog Post Item -->
			@foreach($blogs as $blog)
			<div class="col-md-4">
				<a href="pages-blog-post.html" class="blog-compact-item-container">
					<div class="blog-compact-item">
						<img src="{{asset('images')}}/blog/{{$blog->photo}}" alt="">
						<span class="blog-item-tag">Tips</span>
						<div class="blog-compact-item-content">
							<ul class="blog-post-tags">
								<li>{{$blog->created_at}}</li>
							</ul>
							<h3>{{$blog->title}}</h3>
							<p>{{$blog->article}}</p>
						</div>
					</div>
				</a>
			</div>
			@endforeach

			<div class="col-md-12 centered-content">
				<a href="{{route('blog')}}" class="button border margin-top-10">{{trans('front.find_blog')}}</a>
			</div>

		</div>

	</div>
</section>
<!-- Recent Blog Posts / End -->
@endsection
