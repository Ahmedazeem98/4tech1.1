<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">

@stack('head')


</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{asset('/assets/images/phone.png')}}" alt=""></div>+38 068 005 3570</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{asset('/assets/images/mail.png')}}" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
						<div class="top_bar_content ml-auto">

							@if(!auth()->user())
								<div class="top_bar_user">
								
									<div><a href="{{route('register')}}">Register | </a></div>
									<div><a href="{{route('login')}}">Sign in</a></div>
								</div>
							@else
								<div class="top_bar_user">
									Hi, {{auth()->user()->name}} <a href="{{ route('logout')}}">  | Logout</a>
								</div>
							@endif
							</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="{{route('main')}}">OneTech</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="{{route('shop.index')}}" method="GET" class="header_search_form clearfix">
										<input type="search" name="search" required="required" class="header_search_input" placeholder="Search for products...">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													@foreach($categories as $category)
														<li><a class="clc" href="#">{{$category->name}}</a></li>
													@endforeach
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{asset('assets/images/search.png')}}" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist_icon"><img src="{{asset('/assets/images/heart.png')}}" alt=""></div>
								<div class="wishlist_content">
									<div class="wishlist_text"><a href="#">Wishlist</a></div>
									<div class="wishlist_count">115</div>
								</div>
							</div>

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="{{asset('/assets/images/cart.png')}}" alt="">
										<div class="cart_count"><span>{{count(itemsInCart())}}</span></div>
									</div>
									<div class="cart_content">
										@if(auth()->user())
											<div class="cart_text"><a href="{{route('cart.index',['user' => auth()->user()->name])}}">Cart</a></div>
										@endif
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">

						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">categories</div>
								</div>

								<ul class="cat_menu">
									@foreach($categories as $category)

										<li><a href="{{route('shop.categories',['id' => $category])}}?key=cat_id#cat">{{$category->name}}<i class="fas fa-chevron-right"></i></a></li>
										
									@endforeach
								</ul>
							</div>

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="{{route('main')}}">Home<i class="fas fa-chevron-down"></i></a></li>
									<li class="">
										<a href="{{route('shop.index')}}">Shop<i class="fas fa-chevron-down"></i></a>
									</li>
									<li class="hassubs">
										<a href="#">Brands<i class="fas fa-chevron-down"></i></a>
										<ul>
											@foreach($brands as $brand)
												
											<li><a href="{{route('shop.brands',['id' => $brand])}}?key=brand_id#cat">{{$brand->name}}<i class="fas fa-chevron-down"></i></a></li>
											@endforeach
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Pages<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="{{route('shop.index')}}">Shop<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="{{route('blog.index')}}">Blog<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="">Blog Post<i class="fas fa-chevron-down"></i></a></li>
											
											@if(auth()->user())
												<li><a href="{{route('cart.index',['user' => auth()->user()->name])}}">Cart<i class="fas fa-chevron-down"></i></a></li>
											@endif
											<li><a href="{{route('contact')}}">Contact<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li><a href="{{route('blog.index')}}">Blog<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="{{route('contact')}}">Contact<i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>


	</header>