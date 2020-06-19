@extends('layouts.master')

@push('head')

<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/product_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/product_responsive.css')}}">

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
<script src="{{asset('assets/plugins/easing/easing.js')}}"></script>
<script src="{{asset('assets/js/product_custom.js')}}"></script>

@endpush

@section('banner', $banner)

@section('content')
   
<div class="single_product">
    <div class="container">
        <div class="row">

            
            <div class="col-lg-2 order-lg-1 order-2">
                <ul class="image_list">
                    @foreach($product->images as $image)
                        <li data-image=""><img src="{{asset('assets/images/'.$image->product_image)}}" alt=""></li>
                    @endforeach
                </ul>
            </div>

            <!-- Selected Image -->
            <div class="col-md-4 order-md-2 order-1">
                <div class="image_selected"><img src="{{asset('assets/images/'.$product->image)}}" width="300" height="400" alt=""></div>
            </div>

            <!-- Description -->
            <div class="col-lg-6 order-3">
                <div class="product_description">
                    <div class="product_category">{{$product->category->name}}</div>
                    <div class="product_name">{{$product->name}}</div>
                    <div class="product_text"><p>{{$product->description}}</p></div>
                    <div class="order_info d-flex flex-row">
                        <form action="{{route('cart.create')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="clearfix" style="z-index: 1000;">

                                <!-- Product Quantity -->
                                <div class="product_quantity clearfix">
                                    <span>Quantity: </span>
                                    <input name="quantity" id="quantity_input" type="text" pattern="[1-9]*" value="1">
                                    <div class="quantity_buttons">
                                        <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
                                        <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
                                    </div>
                                </div>

                                <!-- Product Color -->
                                <ul class="product_color">
                                    <li>
                                        <span>Color: </span>
                                        <div class="color_mark_container"><div id="selected_color" class="color_mark"></div></div>
                                        <div class="color_dropdown_button"><i class="fas fa-chevron-down"></i></div>

                                        <ul class="color_list">
                                            @foreach($product->color as $color)
                                                
                                            <li> <input readonly name="product_color" type="password" value="{{$color->id}}" class="color_mark" style="background: {{$color->color}};"></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>

                            </div>

                            @if($product->discount == 0)
                                <div class="product_price">${{$product->price}}</div>
                            @else
                                <div class="product_price"><del>${{$product->price}}</del> <br>${{clcDiscount($product->price,$product->discount)}}</div>
                            @endif
                            <div class="button_container">
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                @if(auth()->user())
                                    <button type="submit" class="button cart_button">Add to Cart</button>
                                @else
                                    <a href="{{route('register')}}" class="button cart_button">Register Now</a>
                                @endif
                                
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
