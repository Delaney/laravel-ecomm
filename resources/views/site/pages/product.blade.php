@extends('site.app')
@section('title', $product->name)
@section('content')
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">{{ $product->name }}</h2>
        </div>
    </section>
    <!-- <section class="section-content bg padding-y border-top" id="site">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row no-gutters">
                            <aside class="col-sm-5 border-right">
                                <article class="gallery-wrap">
                                    @if ($product->images->count() > 0)
                                        <div class="img-big-wrap">
                                            <div class="padding-y">
                                                <a href="{{ asset('storage/'.$product->images->first()->full) }}" data-fancybox="">
                                                    <img src="{{ asset('storage/'.$product->images->first()->full) }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    @else
                                        <div class="img-big-wrap">
                                            <div>
                                                <a href="https://via.placeholder.com/176" data-fancybox=""><img src="https://via.placeholder.com/176"></a>
                                            </div>
                                        </div>
                                    @endif
                                     @if ($product->images->count() > 0)
                                        <div class="img-small-wrap">
                                            @foreach($product->images as $image)
                                                <div class="item-gallery">
                                                    <img src="{{ asset('storage/'.$image->full) }}" alt="">
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </article>
                            </aside>
                            <aside class="col-sm-7">
                                <article class="p-5">
                                    <h3 class="title mb-3">{{ $product->name }}</h3>
                                    <dl class="row">
                                        <dt class="col-sm-3">SKU</dt>
                                        <dd class="col-sm-9">{{ $product->sku }}</dd>
                                        <dt class="col-sm-3">Weight</dt>
                                        <dd class="col-sm-9">{{ $product->weight }}</dd>
                                    </dl>
                                    <div class="mb-3">
                                        @if ($product->sale_price > 0)
                                            <var class="price h3 text-danger">
                                                <span class="currency">{{ config('settings.currency_symbol') }}</span><span class="num" id="productPrice">{{ $product->sale_price }}</span>
                                                <del class="price-old"> {{ config('settings.currency_symbol') }}{{ $product->price }}</del>
                                            </var>
                                        @else
                                            <var class="price h3 text-success">
                                                <span class="currency">{{ config('settings.currency_symbol') }}</span><span class="num" id="productPrice">{{ $product->price }}</span>
                                            </var>
                                        @endif
                                    </div>
                                    <hr>
                                    <form action="{{ route('product.add.cart') }}" method="POST" role="form" id="addToCart">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <dl class="dlist-inline">
                                                    @foreach($attributes as $attribute)
                                                        @php $attributeCheck = in_array($attribute->id, $product->attributes->pluck('attribute_id')->toArray()) @endphp
                                                        @if ($attributeCheck)
                                                            <dt>{{ $attribute->name }}: </dt>
                                                            <dd>
                                                                <select class="form-control form-control-sm option" style="width:180px;" name="{{ strtolower($attribute->name ) }}">
                                                                    <option data-price="0" value="0"> Select a {{ $attribute->name }}</option>
                                                                    @foreach($product->attributes as $attributeValue)
                                                                        @if ($attributeValue->attribute_id == $attribute->id)
                                                                            <option
                                                                                data-price="{{ $attributeValue->price }}"
                                                                                value="{{ $attributeValue->value }}"> {{ ucwords($attributeValue->value . ' +'. $attributeValue->price) }}
                                                                            </option>
                                                                        @endif
                                                                    @endforeach
                                                                </select>
                                                            </dd>
                                                        @endif
                                                    @endforeach
                                                </dl>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <dl class="dlist-inline">
                                                    <dt>Quantity: </dt>
                                                    <dd>
                                                        <input class="form-control" type="number" min="1" value="1" max="{{ $product->quantity }}" name="qty" style="width:70px;">
                                                        <input type="hidden" name="productId" value="{{ $product->id }}">
                                                        <input type="hidden" name="price" id="finalPrice" value="{{ $product->sale_price != '' ? $product->sale_price : $product->price }}">
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-success"><i class="fas fa-shopping-cart"></i> Add To Cart</button>
                                    </form>
                                </article>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <article class="card mt-4">
                        <div class="card-body">
                            {!! $product->description !!}
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section> -->

	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<div class="inner-sec-shop pt-lg-4 pt-3">
				<div class="row">
						<div class="col-lg-4 single-right-left ">
							<div class="grid images_3_of_2">
								<div class="flexslider1">
			
									<ul class="slides">
										<li data-thumb="{{ asset('storage/'.$product->main) }}">
											<div class="thumb-image"> <img src="{{ asset('storage/'.$product->main) }}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-8 single-right-left simpleCart_shelfItem">
							<h3>{{ $product->name }}</h3>
							<p><span class="item_price">{{ config('settings.currency_symbol') }}{{ $product->price }}</span>
								
							</p>
							<div class="description">
								<h5>{{ $product->description }}</h5>
							
							</div>
							
							<div class="color-quality">
								<div class="color-quality-right">
									<h5>Quantity :</h5>
									<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
																		
										</select>
								</div>
							</div>
							<div class="occasional">
								<h5>Types :</h5>
								@foreach($attributes as $attribute)
									@php $attributeCheck = in_array($attribute->id, $product->attributes->pluck('attribute_id')->toArray()) @endphp
									@if ($attributeCheck)
										<dt>{{ $attribute->name }}: </dt>
										<dd>
											<select class="form-control form-control-sm option" style="width:180px;" name="{{ strtolower($attribute->name ) }}">
												<option data-price="0" value="0"> Select a {{ $attribute->name }}</option>
												@foreach($product->attributes as $attributeValue)
													@if ($attributeValue->attribute_id == $attribute->id)
														<option
															data-price="{{ $attributeValue->price }}"
															value="{{ $attributeValue->value }}"> {{ ucwords($attributeValue->value . ' +'. $attributeValue->price) }}
														</option>
													@endif
												@endforeach
											</select>
										</dd>
									@endif
								@endforeach
								<!-- <div class="colr ert">
									<label class="radio"><input type="radio" name="radio" checked=""><i></i> Irayz Butterfly(Black)</label>
								</div>
								<div class="colr">
									<label class="radio"><input type="radio" name="radio"><i></i> Irayz Butterfly (Grey)</label>
								</div>
								<div class="colr">
									<label class="radio"><input type="radio" name="radio"><i></i> Irayz Butterfly (white)</label>
								</div>
								<div class="clearfix"> </div> -->
							</div>
							<div class="occasion-cart">
								<div class="googles single-item singlepage">
									<form action="#" method="post" class="add-to-cart-form">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1">
										<input type="hidden" name="googles_item" value="{{ $product->name }}">
										<input type="hidden" name="amount" value="{{ $product->price }}">
										<input type="hidden" name="id" value="{{ $product->id }}">
										<input type="hidden" name="currency_code" value="{{ config('settings.currency_code') }}">
										<button type="submit" class="googles-cart pgoogles-cart">
											Add to Cart
										</button>
									</form>

								</div>
							</div>
							
						</div>
						<div class="clearfix"> </div>
						<!--/tabs-->
						
						<!--//tabs-->
				
				</div>
			</div>
		</div>
			<div class="container-fluid">
				<!--/slide-->
				<div class="slider-img mid-sec mt-lg-5 mt-2 px-lg-5 px-3">
					<!--//banner-sec-->
					<h3 class="tittle-w3layouts text-left my-lg-4 my-3">Featured Products</h3>
					<div class="mid-slider">
						<div class="owl-carousel owl-theme row">
							<div class="item">
								<div class="gd-box-info text-center">
									<div class="product-men women_two bot-gd">
										<div class="product-googles-info slide-img googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="images/s5.jpg" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="single.html" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product">

													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="single.html">Fastrack Aviator </a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">$325.00</span>
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
																<input type="hidden" name="googles_item" value="Fastrack Aviator">
																<input type="hidden" name="amount" value="325.00">
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
							<div class="item">
								<div class="gd-box-info text-center">
									<div class="product-men women_two bot-gd">
										<div class="product-googles-info slide-img googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="images/s6.jpg" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="single.html" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product">

													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="single.html">MARTIN Aviator </a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">$425.00</span>
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
																<input type="hidden" name="googles_item" value="MARTIN Aviator">
																<input type="hidden" name="amount" value="425.00">
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
							<div class="item">
								<div class="gd-box-info text-center">
									<div class="product-men women_two bot-gd">
										<div class="product-googles-info slide-img googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="images/s7.jpg" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="single.html" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product">

													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="single.html">Royal Son Aviator </a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">$425.00</span>
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
																<input type="hidden" name="googles_item" value="Royal Son Aviator">
																<input type="hidden" name="amount" value="425.00">
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
							<div class="item">
								<div class="gd-box-info text-center">
									<div class="product-men women_two bot-gd">
										<div class="product-googles-info slide-img googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="images/s8.jpg" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="single.html" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product">

													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="single.html">Irayz Butterfly </a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">$281.00</span>
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
																<input type="hidden" name="googles_item" value="Irayz Butterfly">
																<input type="hidden" name="amount" value="281.00">
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
							<div class="item">
								<div class="gd-box-info text-center">
									<div class="product-men women_two bot-gd">
										<div class="product-googles-info slide-img googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="images/s9.jpg" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="single.html" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product">

													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="single.html">Jerry Rectangular </a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">$525.00</span>
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
																<input type="hidden" name="googles_item" value="Jerry Rectangular ">
																<input type="hidden" name="amount" value="525.00">
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
							<div class="item">
								<div class="gd-box-info text-center">
									<div class="product-men women_two bot-gd">
										<div class="product-googles-info slide-img googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="images/s10.jpg" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="single.html" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product">

													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="single.html">Herdy Wayfarer </a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">$325.00</span>
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
																	<input type="hidden" name="googles_item" value="Royal Son Aviator">
																	<input type="hidden" name="amount" value="425.00">
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
						</div>
					</div>
				</div>
				<!--//slider-->
			</div>
	</section>
@stop
@push('scripts')
    <script>
        $(document).ready(function () {
            $('#addToCart').submit(function (e) {
                if ($('.option').val() == 0) {
                    e.preventDefault();
                    alert('Please select an option');
                }
            });
            $('.option').change(function () {
                $('#productPrice').html("{{ $product->sale_price != '' ? $product->sale_price : $product->price }}");
                let extraPrice = $(this).find(':selected').data('price');
                let price = parseFloat($('#productPrice').html());
                let finalPrice = (Number(extraPrice) + price).toFixed(2);
                $('#finalPrice').val(finalPrice);
                $('#productPrice').html(finalPrice);
            });
        });
    </script>
@endpush