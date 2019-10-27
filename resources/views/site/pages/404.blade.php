@extends('site.app')
@section('title', 'About')
@section('content')
    <!-- top Products -->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="error_page">
				<h4>404</h4>
				<p>This page doesn't exist</p>
				<form action="{{ url('/search') }}" method="post">
					@csrf
					<input class="serch" type="search" name="serch" placeholder="Search here" required="">
					<button class="btn1">
						<i class="fa fa-search" aria-hidden="true"></i>
					</button>
					<div class="clearfix"> </div>
				</form>
				<!-- <ul class="footer-social text-center mt-lg-4 mt-3">

					<li class="mx-2">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>
					</li>
					<li class="mx-2">
						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>
					</li>
					<li class="mx-2">
						<a href="#">
							<span class="fab fa-google-plus-g"></span>
						</a>
					</li>
					<li class="mx-2">
						<a href="#">
							<span class="fab fa-linkedin-in"></span>
						</a>
					</li>
					<li class="mx-2">
						<a href="#">
							<span class="fas fa-rss"></span>
						</a>
					</li>
					<li class="mx-2">
						<a href="#">
							<span class="fab fa-vk"></span>
						</a>
					</li>
				</ul> -->
				<a class="b-home" href="{{ url('/') }}">Back to Home</a>
			</div>

		</div>
	</section>

@stop