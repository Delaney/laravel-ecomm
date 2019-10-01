<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Chechi Arinze | @yield('title')</title>
    @include('site.partials.styles')
	@stack('styles')
</head>
<body>
	<div class="banner-top container-fluid" id="home">
	@include('site.partials.header')
	</div>
	@yield('content')
	@include('site.partials.footer')
	@include('site.partials.scripts')
	@stack('scripts')
</body>
</html>