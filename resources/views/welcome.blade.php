@extends('layouts.master')

@push('head')
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/slick-1.8.0/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/blog_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/responsive.css')}}">

@endpush

@push('footer')

<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('assets/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('assets/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('assets/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('assets/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('assets/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('assets/plugins/slick-1.8.0/slick.js')}}"></script>
<script src="{{asset('assets/plugins/easing/easing.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
@endpush

@section('banner', $banner)

@section('content')
    <!-- Deals -->
	@include('frontend.products.deals.index') <br>
	<!-- Laptop Banner -->
	@include('frontend.products.banners.laptop-banner')

	<!-- Hot New Arrivals -->
	@include('frontend.products.new-arrivals.index')
	

	<!-- Best Sellers -->

	@include('frontend.products.best-seller.index')

	<!-- Recent viewed -->
	@include('frontend.products.recent-viewed.index')
	

@endsection