<header>
	<div class="row">
		<div class="col-md-3 top-info text-left mt-lg-4">
			<h6>Need Help</h6>
			<ul>
				<li>
					<i class="fas fa-phone"></i> Call</li>
				<li class="number-phone mt-3">12345678099</li>
			</ul>
		</div>
		<div class="col-md-6 logo-w3layouts text-center">
			<h1 class="logo-w3layouts">
				<a class="navbar-brand" href="{{ url('/') }}">
					<img src="{{ asset('frontend/images/logo.png') }}" alt="" class="img-fluid">
				</a>
			</h1>
		</div>

		<div class="col-md-3 top-info-cart text-right mt-lg-4">
			<ul class="cart-inner-info">
				@guest
					<li class="button-log">
						<a class="btn-open" href="#">
							<span class="fa fa-user" aria-hidden="true"></span>
						</a>
					</li>
				@else
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="{{ url('account/orders') }}" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							<span class="fa fa-user" aria-hidden="true"></span>
						</a>
						<ul class="dropdown-menu mega-menu ">
							<li>
								<div class="row">
									<div class="">
										<p class="mt-3"> {{ auth()->user()->getFullNameAttribute() }} </p>
										<ul>
											<li class="pt-3 pb-3 m-0" style="display: block;">
												<a href="{{ url('account/orders') }}">My Orders</a>
											</li>
											<li class="pt-3 pb-3 m-0" style="display: block;">
												<a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
											</li>

											<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
											</form>
										</ul>
									</div>
									
								</div>
								<hr>
							</li>
						</ul>
					</li>
					<!-- <li class="">
						<a class="btn-open" href="{{ url('account/orders') }}">
							<span class="fa fa-user" aria-hidden="true"></span>
						</a>
					</li> -->
				@endguest
				<li class="galssescart galssescart2 cart cart box_1">
					<form action="#" method="post" class="last">
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="top_googles_cart" type="submit" name="submit" value="">
							My Cart
							<i class="fas fa-cart-arrow-down"></i>
						</button>
					</form>
				</li>
			</ul>
			<!---->
			<div class="overlay-login text-left">
				<button type="button" class="overlay-close1">
					<i class="fa fa-times" aria-hidden="true"></i>
				</button>
				<div class="wrap">
					<h5 class="text-center mb-4">Login </h5>
					<div class="login p-5 bg-dark mx-auto mw-100">
						<form action="{{ route('login') }}" method="POST" role="form">
							@csrf
							<div class="form-group">
								<label class="mb-2">Email address</label>
								<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<label class="mb-2">Password</label>
								<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
							</div>
							<div class="form-check mb-2">
								<input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Remember Me</label>
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Sign In</button>

						</form>
					</div>
					<!---->
				</div>
			</div>
			<!---->
		</div>
	</div>
	<label class="top-log mx-auto"></label>
	<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

		<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">
				
			</span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav nav-mega mx-auto">
				<li class="nav-item active">
					<a class="nav-link ml-lg-0" href="{{ url('/') }}">Home
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/new-items') }}">New In</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/about') }}">Holiday Edit</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="{{ url('/shop') }}" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">
						Shop
					</a>
					<ul class="dropdown-menu mega-menu ">
						<li>

							<div class="row">
								<div class="col-md-4 media-list span4 text-left">
									<h5 class="tittle-w3layouts-sub"> All Products </h5>
									<ul>
										<li class="media-mini mt-3">
											<a href="{{ url('/category/dresses') }}">Dresses</a>
										</li>
										<li class="">
											<a href="{{ url('/category/sets') }}">Sets</a>
										</li>
										<li class="">
											<a href="{{ url('/category/tops') }}">Tops</a>
										</li>
										<li class="">
											<a href="{{ url('/category/bottoms') }}">Bottoms(Skirts & Trousers)</a>
										</li>
										<li class="">
											<a href="{{ url('/category/jumpsuits') }}">Jumpsuits</a>
										</li>
										<li class="">
											<a href="{{ url('/category/kaftans') }}">Kaftans</a>
										</li>
										<li class="">
											<a href="{{ url('/category/outer-wear') }}">Outer Wear</a>
										</li>
									</ul>
								</div>
								
							</div>
							<hr>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/about') }}">Our Story</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/contact') }}">Contact</a>
				</li>
			</ul>

		</div>
	</nav>
</header>