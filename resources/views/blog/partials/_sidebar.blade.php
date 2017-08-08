<div class="col-md-4">
	<center>
		<img src="{{url('/img/logo.png')}}" width="40%">
	<h1 class="side">@if(Route::has('kursus-web'))
		@yield('page-title')
	@else
 		@yield('page-title')	
	@endif
	</h1>
	<small class="side-h">Belajar Pemrograman Hanya di TechPrograming</small><br><br>
	<form action="{{url('/search')}}" method="GET">
		<div class="d">
		<div class="s">
			<input type="text" name="cari_judul" class="mate" id="cari-judul" placeholder="Search" required autofocus>
		</div>
		</div>
	</form>
	</center>
	<h3 class="side">About</h3>
	<p>@yield('about')</p><a href="{{url('/profile/')}}/{{$tampil->name}}"><span class="read">Selengkapnya</span></a><br><br><br><hr>
	<h6 class="text-center">Follow Me</h6>
	<a href="https://www.instagram.com/" class="fa fa-instagram a"></a>
	<a href="https://www.facebook.com/" class="fa fa-facebook a"></a>
	<a href="{{route('home')}}" class="fa fa-rss a"></a>
	<a href="https://www.google-plus.com/" class="fa fa-google-plus a"></a>
</div><br><br><br><br>
