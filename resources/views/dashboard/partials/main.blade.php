<!DOCTYPE html>
<html>
<head>
	@include('dashboard.partials._header')
</head>
 <body class="@yield('body')">
  <div class="container body">
    <div class="main_container">
       @include('dashboard.partials._sidebar')
       @include('dashboard.partials._navbar')
       @yield('content')
       @include('dashboard.partials._footer')
     </div>
 </div>
    <script src="{{ asset('assets/build/js/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/build/js/bootstrap.min.js')}}"></script>
     <script src="{{ asset('assets/build/js/custom.min.js')}}"></script>
</body>
</html>
