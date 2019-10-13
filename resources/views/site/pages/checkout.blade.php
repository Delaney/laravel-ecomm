@extends('site.app')
@section('title', 'Checkout')
@push('styles')
	<link href="{{ asset('frontend/css/checkout.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('frontend/css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css' />
@endpush

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
					<li>Checkout </li>
				</ul>
			</div>
		</div>

	</div>
	<!--//banner -->

	<section class="banner-bottom-wthreelayouts py-lg-5 py-3" id="app">
		<div class="container">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 mt-3">Checkout </h3>
				<div class="checkout-right">
					<checkout-cart></checkout-cart>
					<!-- <div>
						<h4>Your shopping cart contains:
							<span>{{ \Cart::getTotalQuantity() }} Products</span>
						</h4>
						<table class="timetable_sub">
							<thead>
								<tr>
									<th>SL No.</th>
									<th>Quantity</th>
									<th>Product Name</th>

									<th>Price</th>
									<th>Remove</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($cartCollection as $key => $item)
								<tr class="rem1">
									<td class="invert">1</td>
									<td class="invert">
										<div class="quantity">
											<div class="quantity-select">
												<div class="entry value-minus">&nbsp;</div>
												<div class="entry value">
													<span>{{ $item->quantity }}</span>
												</div>
												<div class="entry value-plus active">&nbsp;</div>
											</div>
										</div>
									</td>
									<td class="invert">{{ $item->name }} </td>

									<td class="invert">{{ config('settings.currency_symbol') }}{{ $item->price }}</td>
									<td class="invert">
										<div class="rem">
											<div class="close1"> </div>
										</div>

									</td>
								</tr>
								@endforeach

							</tbody>
						</table>
					</div> -->
				</div>
				<div class="checkout-left row">
					<div class="col-md-4 checkout-left-basket">
						
					</div>
					<div class="col-md-8 address_form">
						<h4>Add new Details</h4>
						<form action="{{ route('checkout.place.order') }}" method="POST" role="form" class="creditly-card-form agileinfo_form" id="checkout-form">
                			@csrf
							<section class="creditly-wrapper wrapper">
								<div class="information-wrapper">
									<div class="first-row form-group">
										<div class="controls">
											<label class="control-label">First Name: </label>
											<input class="billing-address-name form-control" type="text" name="first_name" value="{{ auth()->user()->first_name }}"  required placeholder="First Name">
										</div>
										<div class="controls">
											<label class="control-label">Last Name: </label>
											<input class="billing-address-name form-control" type="text" name="last_name" value="{{ auth()->user()->last_name }}"  required placeholder="Last Name">
										</div>

										<div class="card_number_grids">
											<div class="card_number_grid_left">
												<div class="controls">
													<label class="control-label">Mobile number:</label>
													<input class="form-control" type="text" name="phone_number" required placeholder="Mobile number">
												</div>
											</div>
											<div class="card_number_grid_right">
												<div class="controls">
													<label class="control-label">Email Address: </label>
													<input class="form-control" type="email" name="email" value="{{ auth()->user()->email }}" disabled>
												</div>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="controls">
											<label class="control-label">Address: </label>
											<input class="form-control" type="text" name="address" value="{{ auth()->user()->address }}"  required placeholder="Address">
										</div>
										<div class="controls">
											<label class="control-label">Town/City: </label>
											<input class="form-control" type="text" name="city" value="{{ auth()->user()->city }}"  required placeholder="Town/City">
										</div>
										<div class="controls">
											<label class="control-label">Country: </label>
											<input class="form-control" type="text" name="country" value="{{ auth()->user()->country }}"  required placeholder="Country">
										</div>
										<div class="controls">
											<label class="control-label">Post Code: </label>
											<input class="form-control" type="text" name="post_code" placeholder="Post Code">
										</div>
										
										<div class="controls">
											<label class="control-label">Address type: </label>
											<select class="form-control option-w3ls">
												<option>Office</option>
												<option>Home</option>
												<option>Commercial</option>

											</select>
										</div>

										<div class="controls">
											<label class="control-label">Order Notes: </label>
											<textarea class="form-control" type="text" name="notes" placeholder="Order Notes" rows="6"></textarea>
										</div>

										<input type="hidden" name="email" value="{{ auth()->user()->email }}">
										<input type="hidden" id="orderID" name="orderID" value="">
										<input type="hidden" id="amount" name="amount" value="{{ \Cart::getSubTotal() * 100 }}">
										<input type="hidden" name="quantity" value="1">
										<input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
										<input type="hidden" name="key" value="{{ config('paystack.secretKey') }}">
									</div>
									<button class="submit check_out">Proceed to Payment</button>
								</div>
							</section>
						</form>
					</div>

					<div class="clearfix"> </div>

				</div>

			</div>

		</div>
	</section>
	<!--//checkout-->
	<!--footer -->
@stop

@push('scripts')

<script type="text/javascript" src="{{ asset('frontend/js/front.js') }}"></script>
@endpush