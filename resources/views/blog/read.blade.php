@extends('blog.partials.main')
@section('page-title')
	Kursus Web
@endsection
@section('content')
		<div class="container">
		<div class="row">
		<div class="col-md-8">
	@foreach($article as $tampil)
			<div class="panel panel-default">
				<div class="row">
					<div class="col-sm-8 col-md-offset-2">
						<h2 class="text-center br"><a href="{{('/read/article')}}/{{$tampil->judul}}/{{$tampil->id}}">{{$tampil->judul}}</a></h2>
					</div>
				</div>

				<div class="panel-body">
				<div class="foto_judul">
					<a href="{{('/img/article/')}}/{{$tampil->foto}}"><img class="article" src="{{asset('img/article/')}}/{{$tampil->foto}}"/></a></div>
					<pre class="br">{{$tampil->isi}}</pre>Screenshoot:<br>
						<img src="{{url('/img/article/')}}/{{$tampil->screenshoot1}}" width="99%" style="margin-top: 20px;">
						<img src="{{url('/img/article/')}}/{{$tampil->screenshoot2}}" width="99%" style="margin-top: 20px;">
						<img src="{{url('/img/article/')}}/{{$tampil->screenshoot3}}" width="99%" style="margin-top: 20px;">
						<img src="{{url('/img/article/')}}/{{$tampil->screenshoot4}}" width="99%" style="margin-top: 20px;">
						<img src="{{url('/img/article/')}}/{{$tampil->screenshoot5}}" width="99%" style="margin-top: 20px;">
					<br>
					Terimakasih Telah mampir :). jika kurang dimengerti bisa komentar di form di bawah.
				</div>

				<div class="row foot">
					<ul class="foot">
						<li><a href="#"><span class="glyphicon glyphicon-comment"></span> Comment(10)</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-heart"></span> Like(100)</a></li>
						<li class="kategori">{{$tampil->kategori}}</li>
					</ul>
  				</div>
			</div>
				<div class="panel panel-default" id="comment">
					<div class="panel-body">
						<h4><i class="fa fa-comment"></i> Comment</h4>
						<form action="{{url('/kirim-comment')}}" method="post">
						{{csrf_field()}}
						<input type="hidden" name="id_article" value="{{$tampil->id}}">
	@endforeach
							<input type="text" placeholder="Nama" name="nama" class="form-control"><br>
							<input type="email" placeholder="Email@example.com" name="email" class="form-control"><br>
							<textarea rows="3" placeholder="Comment" name="comment" class="form-control"></textarea><br>
							<button class="btn btn-info pull-right"><span class="glyphicon glyphicon-send"></span> Submit</button>
						</form>
						<h4>(0) Comment</h4>
						@foreach($comment as $comment)
						@if($comment->id_article =="$tampil->id")
							<div class="media">
							    <div class="media-left">
							      <img src="{{url('img/user.png')}}" class="media-object img-circle" style="width:60px">
							    </div>
							    <div class="media-body">
							      <h4 class="media-heading">{{$comment->nama}} <small><i>Posted on {{$comment->tanggal}}</i><br>{{$comment->email}}</small></h4>
							      <p>{{$comment->comment}}</p>
							    </div>
							</div>
							<hr>
							@endif
						  @endforeach
						    </div>
						  </div>
						</div>
		<h3 class="text-center">Artikel Terkait</h3>
		<div class="col-md-4">
		@foreach($article_paginate as $tampil)
		<div class="col-md-12 col-xs-6 detil">
			<a href="{{('/read/article')}}/{{$tampil->judul}}/{{$tampil->id}} ">
			<div class="panel panel-info">
				<div clas="panel-heading"><h5 class="text-center br">{{$tampil->judul}}</h5><hr></div>
				<div class="panel-body">
					<center><img class="article" src="{{url('/img/article/')}}/{{$tampil->foto}}" width="80%"><hr></center>
				</div>
			</div></a>
		</div>
		@endforeach
		</div>
			</div>
		</div>
	</div>
@endsection