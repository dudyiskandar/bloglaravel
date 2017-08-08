<!DOCTYPE HTML>
<html>
	<head>
	@include('blog.partials._header')
	</head>
	<style type="text/css">
		p.wrap{
			width:100%;
			word-wrap: break-word;
		}
	</style>
	<body style="background:#f4f4f4;">
		@include('blog.partials._navbar')					
		@yield('content')

		<!-- Scripts -->
		<script src="{{asset('assets/build/js/jquery.min.js')}}"></script>
		<script src="{{asset('assets/build/js/bootstrap.min.js')}}"></script>
		@include('blog.partials._footer')
	</body>
</html>