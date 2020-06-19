@extends('layouts.master')

@push('head')

<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/contact_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/blog_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/contact_responsive.css')}}">

@endpush

@push('footer')
<script src="{{asset('assets/js/contact_custom.js')}}"></script>
@endpush
@section('banner', $banner)
@section('content')
    
    @include('frontend.pages.contact.contact-info')
    @include('frontend.pages.contact.contact-form')

@endsection