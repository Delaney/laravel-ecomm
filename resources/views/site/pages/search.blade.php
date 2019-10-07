@extends('site.app')
@section('title', "Search Results For ". $search)
@section('content')
    <!-- banner -->
	<div class="banner_inner">
		<div class="services-breadcrumb">
			<div class="inner_breadcrumb">

				<ul class="short">
					<li>
						<a href="{{ '/' }}">Home</a>
						<i>|</i>
					</li>
					<li>Search Results for {{ $search }}</li>
				</ul>
			</div>
		</div>

	</div>
	<!--//banner -->

	<!--/shop-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="inner-sec-shop px-lg-4 px-3">
				<div class="row">
					<!-- product left -->
					<div class="side-bar col-lg-3">
						<div class="search-hotel">
							<h3 class="agileits-sear-head">Search Here..</h3>
							<form action="{{ url('/search') }}" method="post">
								@csrf
								<input class="form-control" type="search" name="search" placeholder="Search here..." required="">
								<button class="btn1">
										<i class="fas fa-search"></i>
								</button>
								<div class="clearfix"> </div>
							</form>
						</div>
						<!-- price range -->
						<div class="range">
							<h3 class="agileits-sear-head">Price range</h3>
							<ul class="dropdown-menu6">
								<li>

									<div id="slider-range"></div>
									<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
								</li>
							</ul>
						</div>
						<!-- //price range -->
						<!--preference -->
						<div class="left-side">
							<h3 class="agileits-sear-head">Deal Offer On</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Backpack</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Phone Pocket</span>
								</li>

							</ul>
						</div>
					</div>
					<!-- //product left -->
					<!--/product right-->
					<div class="left-ads-display col-lg-9">
						<div class="wrapper_top_shop">
							
								<div class="row">
									<!-- /womens -->
									@forelse($results as $product)
									<div class="col-md-3 product-men women_two shop-gd">
										<div class="product-googles-info googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
												@if ($product->main == NULL)
													<img src="{{ asset('default/product.png') }}" class="img-fluid" alt="">
												@else
													<img src="{{ asset('storage/'.$product->main) }}" class="img-fluid" alt="">
												@endif
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="{{ 'product/'.$product->slug }}" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product">
													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="{{ 'product/'.$product->slug }}">{{ $product->name }}</a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">{{ config('settings.currency_symbol') }}{{ $product->price }}</span>
																</div>
															</div>
															
														</div>
														<div class="googles single-item hvr-outline-out">
															<form action="#" method="post">
																<input type="hidden" name="cmd" value="_cart">
																<input type="hidden" name="add" value="1">
																<input type="hidden" name="googles_item" value="{{ $product->name }}">
																<input type="hidden" name="amount" value="{{ $product->price }}">
																<input type="hidden" name="id" value="{{ $product->id }}">
																<input type="hidden" name="uid" value="{{ uniqid() }}">
																<input type="hidden" name="slug" value="{{ $product->slug }}">
																<input type="hidden" name="currency_code" value="{{ config('settings.currency_code') }}">
																<button type="submit" class="googles-cart pgoogles-cart">
																	<i class="fas fa-cart-plus"></i>
																</button>
															</form>

														</div>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>
									@empty
										<p>No Products found.</p>
									@endforelse
								</div>
						</div>
					</div>
					<!--//product right-->
				</div>
				<!--/slide-->
	
		</div>
	</section>
	<!--footer -->

@endsection
@push('styles')
	<link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui1.css') }}">
	<link href="{{ asset('frontend/css/shop.css') }}" rel='stylesheet' type='text/css' />
@endpush

@push('scripts')
	<!-- price range (top products) -->
	<script src="{{ asset('frontend/js/jquery-ui.js') }}"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 1000,
				max: 900000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("₦" + ui.values[0] + " - ₦" + ui.values[1]);
				}
			});
			$("#amount").val("₦" + $("#slider-range").slider("values", 0) + " - ₦" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->
@endpush