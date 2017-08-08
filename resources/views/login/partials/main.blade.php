<!DOCTYPE html>
<html>
<head>
	@include('dashboard.partials._header')
</head>
 <body class="@yield('body')">
       @yield('content')


    <script src="{{ asset('assets/build/js/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/build/js/bootstrap.min.js')}}"></script>
     <script src="{{ asset('assets/build/js/custom.min.js')}}"></script>
</body>
</html>

