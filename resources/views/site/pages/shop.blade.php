@extends('site.app')
@section('title', 'Shop')

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
					<li>Shop</li>
				</ul>
			</div>
		</div>

	</div>
	<!--//banner -->

	<!--/shop-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 mt-3">New Arrivals for you </h3>
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
							<ul class="dropdown-menu6" style="display: inline;">
								<li>
									<div class="row" style="justify-content:space-around;">
										<div class="col-md-5">
											<input type="text" id="amount_min" name="amount_min" style="width:100%;" />
										</div>
										<div class="col-md-2">
											<span class="text-center">-</span>
										</div>
										<div class="col-md-5">
											<input type="text" id="amount_max" name="amount_max" style="width:100%;" />
										</div>
									</div>
									<div id="slider-range"></div>
								</li>
							</ul>
							<div style="display:block;height:30px;"></div>
							<form id="price-filter-form" method="POST" action="/search/price" style="display:none;">
								@csrf
								<input type="text" id="price_min" name="price_min" />
								<input type="text" id="price_max" name="price_max" />
							</form>
							<button id="slider-range-btn" class="btn btn-warning">Filter</button>
						</div>
						<!-- //price range -->
						
						<!-- // preference -->
						<!-- discounts -->
						
						<!-- //discounts -->
						<!-- reviews -->

						<!-- //reviews -->
						<!-- deals -->
						<!-- <div class="deal-leftmk left-side">
							<h3 class="agileits-sear-head">Special Deals</h3>
							<div class="special-sec1">
								<div class="img-deals">
									<img src="{{ 'frontend/images/s1.jpeg' }}" alt="">
								</div>
								<div class="img-deal1">
									<h3>Farenheit (Grey)</h3>
									<a href="single.php">NGN575.00</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="special-sec1">
								<div class="col-xs-4 img-deals">
									<img src="{{ 'frontend/images/s2.jpeg' }}" alt="">
								</div>
								<div class="col-xs-8 img-deal1">
									<h3>Opium (Grey)</h3>
									<a href="single.php">NGN325.00</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="special-sec1">
									<div class="col-xs-4 img-deals">
										<img src="{{ 'frontend/images/m2.jpg' }}" alt="">
									</div>
									<div class="col-xs-8 img-deal1">
										<h3>Azmani Round</h3>
										<a href="single.php">NGN725.00</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="special-sec1">
										<div class="col-xs-4 img-deals">
											<img src="{{ 'frontend/images/m4.jpg' }}" alt="">
										</div>
										<div class="col-xs-8 img-deal1">
											<h3>Farenheit Oval</h3>
											<a href="single.html">NGN325.00</a>
										</div>
										<div class="clearfix"></div>
									</div>
						</div> -->
						<!-- //deals -->
					</div>
					<!-- //product left -->
					<!--/product right-->
					<div class="left-ads-display col-lg-9">
						<div class="wrapper_top_shop">
							<!-- <div class="row">
								<div class="col-md-6 shop_left">
									<img src="{{ 'frontend/images/banner3.jpeg' }}" alt="">
									<h6>40% off</h6>
								</div>
								<div class="col-md-6 shop_right">
									<img src="{{ 'frontend/images/banner4.jpeg' }}" alt="">
									<h6>50% off</h6>
								</div>
					
							</div> -->
							
							
								<div class="row">
									<!-- /womens -->
									@foreach ($products as $product)
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
									@endforeach
								</div>
						</div>
					</div>
					<!--//product right-->
				</div>
				<!--/slide-->
			<div class="slider-img mid-sec mt-lg-5 mt-2">
					<!--//banner-sec-->
					<h3 class="tittle-w3layouts text-left my-lg-4 my-3">Popular Items</h3>
					<div class="mid-slider">
						<div class="owl-carousel owl-theme row">
							@for ($i = 0; $i < 6; $i++)
								@if ($i >= count($featured))
									@break
								@else
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
													@if ($featured[$i]->main == NULL)
														<img src="{{ asset('default/product.png') }}" class="img-fluid" alt="">
													@else
														<img src="{{ asset('storage/'.$featured[$i]->main) }}" class="img-fluid" alt="">
													@endif
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ 'product/'.$featured[$i]->slug }}" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ 'product/'.$featured[$i]->slug }}">{{ $featured[$i]->name }} </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">{{ config('settings.currency_symbol') }}{{ $featured[$i]->price }}</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="{{ $featured[$i]->name }}">
																	<input type="hidden" name="amount" value="{{ $featured[$i]->price }}">
																	<input type="hidden" name="id" value="{{ $featured[$i]->id }}">
																	<input type="hidden" name="slug" value="{{ $featured[$i]->slug }}">
																	<input type="hidden" name="currency_code" value="{{ config('settings.currency_code') }}">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>

																</form>

															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endif
							@endfor
						</div>
					</div>
				</div>
				<!--//slider-->
			</div>
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
					document.querySelector("#amount_min").value = "₦" + ui.values[0];
					document.querySelector("#amount_max").value = "₦" + ui.values[1];
					document.querySelector("#price_min").value = ui.values[0];
					document.querySelector("#price_max").value = ui.values[1];
					// console.log("₦" + ui.values[1]);
				}
			});
			$("#slider-range-btn").click(function () {
				$("#price-filter-form").submit();
			});
			$("#amount_min").change(function () {
				console.log($(this).val());
				document.querySelector("#price_min").value = $(this).val();
			});
			$("#amount_max").change(function () {
				console.log($(this).val());
				document.querySelector("#price_max").value = $(this).val();
			});
			$("#amount").val("₦" + $("#slider-range").slider("values", 0) + " - ₦" + $("#slider-range").slider("values", 1));

		}); //]]>

	</script>
	<!-- //price range (top products) -->
@endpush