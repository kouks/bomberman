<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Bomebeman - @yield('title')</title>

	@section('styles')
		<link rel="stylesheet" href="/css/all.css">
	@show

</head>
<body>

	<div class="container">
		@yield('main')
	</div>

	<div class="footer">
		@include('partials.footer')
	</div>
	
	@section('scripts')
		<script rel="text/javascript" src="/js/jquery.js"></script>
		<script rel="text/javascript" src="/js/main.js"></script>
	@show

</body>
</html>
