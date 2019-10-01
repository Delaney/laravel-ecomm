<!-- <header class="section-header">
    <section class="header-main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="brand-wrap">
                        <a href="{{ url('/') }}">
                            <img class="logo" src="{{ asset('frontend/images/logo-dark.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <form action="#" class="search-wrap">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widgets-wrap d-flex justify-content-end">
                        <div class="widget-header">
                            <a href="#" class="icontext">
                                <div class="icon-wrap icon-xs bg2 round text-secondary"><i
                                        class="fa fa-shopping-cart"></i></div>
                                <div class="text-wrap">
								<small>{{ $cartCount }} items</small>
                                </div>
                            </a>
                        </div>
                        @guest
                            <div class="widget-header">
                                <a href="{{ route('login') }}" class="ml-3 icontext">
                                    <div class="icon-wrap icon-xs bg-primary round text-white"><i class="fa fa-user"></i></div>
                                    <div class="text-wrap"><span>Login</span></div>
                                </a>
                            </div>
                            <div class="widget-header">
                                <a href="{{ route('register') }}" class="ml-3 icontext">
                                    <div class="icon-wrap icon-xs bg-success round text-white"><i class="fa fa-user"></i></div>
                                    <div class="text-wrap"><span>Register</span></div>
                                </a>
                            </div>
                        @else
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->full_name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{ route('account.orders') }}">Orders</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('site.partials.nav')
</header> -->

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
					Chechi Arinze </a>
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
					<li class="button-log">
						<a class="" href="#">
							<span class="fa fa-user" aria-hidden="true"></span>
						</a>
					</li>
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
						<form action="{{ 'login' }}" method="post">
							@csrf
							<div class="form-group">
								<label class="mb-2">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<label class="mb-2">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
							</div>
							<div class="form-check mb-2">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Check me out</label>
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
					<a class="nav-link" href="about.php">New In</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">Holiday Edit</a>
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
											<a href="{{ url('/shop') }}">Dresses</a>
										</li>
										<li class="">
											<a href="{{ url('/shop') }}">Sets</a>
										</li>
										<li class="">
											<a href="{{ url('/shop') }}">Tops</a>
										</li>
										<li class="">
											<a href="{{ url('/shop') }}">Bottoms(Skirts & Trousers)</a>
										</li>
										<li class="">
											<a href="{{ url('/shop') }}">Jumpsuits</a>
										</li>
										<li class="">
											<a href="{{ url('/shop') }}">Kaftans</a>
										</li>
										<li class="">
											<a href="{{ url('/shop') }}">Outer Wear</a>
										</li>
									</ul>
								</div>
								
							</div>
							<hr>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">Our Story</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.php">Contact</a>
				</li>
			</ul>

		</div>
	</nav>
</header>