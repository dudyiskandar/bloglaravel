@extends('blog.partials.main')
@section('page-title')
	Tech Pemrograman
@endsection
	@foreach($article as $tampil)
		@section('about')
				{{$tampil->description}}
		@endsection
	@endforeach
@section('content')
	<div class="container">
	@include('blog.partials._sidebar')
		<div class="col-md-8">
	@foreach($article as $tampil)
			<div class="panel panel-default">
				<div class="row">
					<div class="col-sm-8">
						<h2 class="text-center br"><a href="{{('/read/article')}}/{{$tampil->judul}}/{{$tampil->id}}">{{$tampil->judul}}</a></h2>
					</div>
					<div class="col-sm-4">
						<center><a href="{{url('/profile/')}}/{{$tampil->name}}"><img src="{{asset('img/avatar/')}}/{{$tampil->avatar}}" class="profile">
						<p><i class="fa fa-user"></i> {{$tampil->name}}</p></a>
						<b><i class="fa fa-calendar"></i> {{$tampil->tanggal}}</b><br></center>
					</div>
				</div>

				<div class="panel-body">
					<div class="foto_judul">
					<a class="text-center" href="{{('/read/article')}}/{{$tampil->judul}}/{{$tampil->id}}"><img class="article " src="{{asset('img/article/')}}/{{$tampil->foto}}"/></a></div>
					<p class="wrap">{{$tampil->isi}}</p>
					<a href="{{('/read/article')}}/{{$tampil->judul}}/{{$tampil->id}}"><span class="read col-md-4 col-xs-12 text-center">Baca Selengkapnya</span></a>
				</div>

				<div class="row foot">
					<ul class="foot">
						<li><a href="{{('/read/article')}}/{{$tampil->judul}}/{{$tampil->id}}#comment"><span class="glyphicon glyphicon-comment"></span> Comment(0)</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-heart"></span> Like(100)</a></li>
						<li class="kategori"><i class="fa fa-folder"></i> {{$tampil->kategori}}</li>
					</ul>
  				</div>
			</div>
	@endforeach
		<center>
			<ul class="actions pagination">
				{{$article_paginate->links()}}
			</ul>
		</center>
		</div>
		</div>
@endsection