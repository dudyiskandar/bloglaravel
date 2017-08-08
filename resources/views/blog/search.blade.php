@extends('blog.partials.main')
@section('page-title')
	Search Judul
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
	@foreach($article_search as $tampil)
			<div class="panel panel-default">
				<div class="row">
					<div class="col-sm-8">
						<h2 class="text-center br"><a href="{{('/read/article')}}/{{$tampil->judul}}/{{$tampil->id}}">{{$tampil->judul}}</a></h2>
					</div>
					<div class="col-sm-4">
						<center><a href="{{url('/profile/')}}/{{$tampil->name}}"><img src="{{asset('img/avatar/')}}/{{$tampil->avatar}}" class="profile">
						<p><i class="fa fa-user"></i> {{$tampil->name}}</p></a>
						<b><i class="fa fa-calendar"></i>{{$tampil->tanggal}}</b><br></center>
					</div>
				</div>
			</div>
	@endforeach
		</div>
	</div>
@endsection