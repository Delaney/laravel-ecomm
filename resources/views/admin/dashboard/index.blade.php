@extends('admin.app')
@section('title') Dashboard @endsection
@section('content')
	<div class="app-title">
		<div>
			<h1><i class="fa fa-dashboard"></i> Dashboard</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-lg-4">
			<a href="{{ route('admin.products.index') }}" style="text-decoration: none;">
				<div class="widget-small primary coloured-icon">
					<i class="icon fa fa-shopping-bag fa-3x"></i>
					<div class="info">
						<h4>Products</h4>
						<p><b>{{ $products }}</b></p>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-6 col-lg-4">
			<a href="{{ route('admin.products.index') }}" style="text-decoration: none;">
				<div class="widget-small info coloured-icon">
					<i class="icon fa fa-hourglass-half fa-3x"></i>
					<div class="info">
						<h4>Pending Orders</h4>
						<p><b>{{ $pending }}</b></p>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-6 col-lg-4">
			<a href="{{ route('admin.products.index') }}" style="text-decoration: none;">
				<div class="widget-small info coloured-icon">
					<i class="icon fa fa-thumbs-o-up fa-3x"></i>
					<div class="info">
						<h4>Paid Orders</h4>
						<p><b>{{ $processed }}</b></p>
					</div>
				</div>
			</a>
		</div>
	</div>
@endsection