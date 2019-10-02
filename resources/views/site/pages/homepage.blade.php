@extends('site.app')
@section('title', 'Home')

@section('content')
<div class="banner">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div class="carousel-caption text-center">
					<h3>Tops & Bottoms
						<span>Cool summer sale 50% off</span>
					</h3>
					<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="carousel-caption text-center">
					<h3>Dresses
						<span>Want to Look Your Best?</span>
					</h3>
					<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

				</div>
			</div>
			<div class="carousel-item item3">
				<div class="carousel-caption text-center">
					<h3>Colors for every mood
						<span>Cool summer sale 50% off</span>
					</h3>
					<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

				</div>
			</div>
			<div class="carousel-item item4">
				<div class="carousel-caption text-center">
					<h3>New In
						<span>Want to Look Your Best?</span>
					</h3>
					<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!--//banner -->
</div>
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
	<div class="container-fluid">
		<div class="inner-sec-shop px-lg-4 px-3">
			<h3 class="tittle-w3layouts my-lg-4 my-4">New Arrivals for you </h3>
			<div class="row">
				<!-- /womens -->
				<!-- <div class="col-md-3 product-men women_two">
					<div class="product-googles-info googles">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src="{{ asset('frontend/images/s4.jpeg') }}" class="img-fluid" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.php" class="link-product-add-cart">Details</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
							</div>
							<div class="item-info-product">
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<h4>
												<a href="single.php">Sayo Pants</a>
											</h4>
											<div class="grid-price mt-2">
												<span class="money ">NGN575.00</span>
											</div>
										</div>
										
									</div>
									<div class="googles single-item hvr-outline-out">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="googles_item" value="Farenheit">
											<input type="hidden" name="amount" value="575.00">
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
				<div class="col-md-3 product-men women_two">
					<div class="product-googles-info googles">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src="{{ asset('frontend/images/s2.jpeg') }}" class="img-fluid" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.php" class="link-product-add-cart">Details</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
							</div>
							<div class="item-info-product">

								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<h4>
												<a href="single.php">Sola  Pants</a>
											</h4>
											<div class="grid-price mt-2">
												<span class="money ">NGN325.00</span>
											</div>
										</div>
									
									</div>
									<div class="googles single-item hvr-outline-out">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="googles_item" value="Opium (Grey)">
											<input type="hidden" name="amount" value="325.00">
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
				<div class="col-md-3 product-men women_two">
					<div class="product-googles-info googles">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src="{{ asset('frontend/images/s2.jpeg') }}" class="img-fluid" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.php" class="link-product-add-cart">Details</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
							</div>
							<div class="item-info-product">

								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<h4>
												<a href="single.php">Ola Dress</a>
											</h4>
											<div class="grid-price mt-2">
												<span class="money ">NGN575.00</span>
											</div>
										</div>
										
									</div>
									<div class="googles single-item hvr-outline-out">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="googles_item" value="Kenneth Cole">
											<input type="hidden" name="amount" value="575.00">
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
				</div>				 -->

				@for ($i = 0; $i < 4; $i++)
					<div class="col-md-3 product-men women_two">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									@if ($products[$i]->main == NULL)
									<img src="{{ asset('default/product.png') }}" class="img-fluid" alt="">
									@else
									<img src="{{ asset('storage/'.$products[$i]->main) }}" class="img-fluid" alt="">
									@endif
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{ 'product/'.$products[$i]->slug }}" class="link-product-add-cart">Details</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product">

									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4>
													<a href="{{ 'product/'.$products[$i]->slug }}">{{ $products[$i]->name }}</a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money ">{{ config('settings.currency_symbol') }}{{ $products[$i]->price }}</span>
												</div>
											</div>
											
										</div>
										<div class="googles single-item hvr-outline-out">
											
											<form action="#" method="post" class="add-to-cart-form">
												<input type="hidden" name="cmd" value="_cart">
												<input type="hidden" name="add" value="1">
												<input type="hidden" name="googles_item" value="{{ $products[$i]->name }}">
												<input type="hidden" name="amount" value="{{ $products[$i]->price }}">
												<input type="hidden" name="id" value="{{ $products[$i]->id }}">
												<input type="hidden" name="slug" value="{{ $products[$i]->slug }}">
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
				@endfor
			</div>
			<!-- //womens -->
			<!-- /mens -->
			<div class="row mt-lg-3 mt-0">
				<!-- /womens -->
						</div>
					</div>
				</div>
				<!-- /mens -->
			</div>
			<!--//row-->
			<!--/meddle-->
			<div class="row">
				<div class="col-md-12 middle-slider my-4">
					<div class="middle-text-info ">

						<h3 class="tittle-w3layouts two text-center my-lg-4 mt-3">Summer Flash sale</h3>
						<div class="simply-countdown-custom" id="simply-countdown-custom"></div>

					</div>
				</div>
			</div>
			<!--//meddle-->
			<!--/slide-->
			
			<!-- /testimonials -->
			<div class="testimonials py-lg-4 py-3 mt-4">
				<div class="testimonials-inner py-lg-4 py-3">
					<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Tesimonials</h3>
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<div class="testimonials_grid text-center">
									<h3>Anamaria
										<span>Customer</span>
									</h3>
									<label>United States</label>
									<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
										Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
								</div>
							</div>
							<div class="carousel-item">
								<div class="testimonials_grid text-center">
									<h3>Esmeralda
										<span>Customer</span>
									</h3>
									<label>United States</label>
									<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
										Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
								</div>
							</div>
							<div class="carousel-item">
								<div class="testimonials_grid text-center">
									<h3>Gretchen
										<span>Customer</span>
									</h3>
									<label>United States</label>
									<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
										Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
								</div>
							</div>
							<a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
								<span class="fas fa-long-arrow-alt-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
								<span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>

							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- //testimonials -->
			<!-- <div class="row galsses-grids pt-lg-5 pt-3">
				<div class="col-lg-6 galsses-grid-left">
					<figure class="effect-lexi">
						<img src="{{ asset('frontend/images/banner4.jpeg') }}" alt="" class="img-fluid">
						<figcaption>
							<h3>Editor's
								<span>Pick</span>
							</h3>
							<p> Express your style now.</p>
						</figcaption>
					</figure>
				</div>
				<div class="col-lg-6 galsses-grid-left">
					<figure class="effect-lexi">
						<img src="{{ asset('frontend/images/banner1.jpeg') }}" alt="" class="img-fluid">
						<figcaption>
							<h3>Editor's
								<span>Pick</span>
							</h3>
							<p>Express your style now.</p>
						</figcaption>
					</figure>
				</div>
			</div> -->
			<!-- /grids -->
			
			<!-- //grids -->
			<!-- //clients-sec -->
		</div>
	</div>
</section>
@stop

@push('scripts')
	<!-- newsletter modal -->
	<!-- Modal -->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center p-5 mx-auto mw-100">
					<h6>Join our newsletter and get</h6>
					<h3>50% Off for your first Pair of Eye wear</h3>
					<div class="login newsletter">
						<form action="#" method="post">
							<div class="form-group">
								<label class="mb-2">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="" required="">
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Get 50% Off</button>
						</form>
						<p class="text-center">
							<a href="#">No thanks I want to pay full Price</a>
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	<script>
		$(document).ready(function () {
			$("#myModal").modal();
		});
	</script>
	<!-- // modal -->
	<!-- Count-down -->
	<script src="{{ asset('frontend/js/simplyCountdown.js') }}"></script>
	<link href="{{ asset('frontend/css/simplyCountdown.css') }}" rel='stylesheet' type='text/css' />
	<script>
		var d = new Date();
		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
	</script>
	<!--// Count-down -->
@endpush