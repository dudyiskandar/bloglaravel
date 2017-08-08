@extends('blog.partials.main')
@section('content')
	<div class="container-fluid">
		<div class="col-md-12 col-sm-12 text-center"><h2>Materi Programing CSS<br><small>(Cascanding Stylesheet)</small></h2></div>
	@foreach($article as $tampil)
		<div class="col-md-6 col-sm-6">
			<div class="panel panel-default">
				<div class="row">
					<div class="col-sm-8">
						<h2 class="text-center br"><a href="{{('/read/article')}}/{{$tampil->judul}}/{{$tampil->id}}">{{$tampil->judul}}</a></h2>
					</div>
					<div class="col-sm-4">
						<center><a href="#"><img src="{{asset('img/avatar/profile.png')}}" class="profile">
						<p>Dudi Iskandar</p></a>
						<b>{{$tampil->tanggal}}</b><br></center>
					</div>
				</div>

				<div class="panel-body">
				<div class="foto_judul">
					<a href="{{('/read/article')}}/{{$tampil->judul}}/{{$tampil->id}}"><img class="article" src="{{asset('img/article/')}}/{{$tampil->foto}}"/></a></div>
					<p class="wrap">{{$tampil->isi}}</p>
					<a href="{{('/read/article')}}/{{$tampil->judul}}/{{$tampil->id}}"><span class="read">Baca Selengkapnya</span></a>
				</div>

				<div class="row foot">
					<ul class="foot">
						<li><a href="#"><span class="glyphicon glyphicon-comment"></span> Comment(10)</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-heart"></span> Like(100)</a></li>
						<li class="kategori">{{$tampil->kategori}}</li>
					</ul>
  				</div>
			</div>	
		</div>
	@endforeach
	</div>
@endsection