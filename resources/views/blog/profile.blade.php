@extends('blog.partials.main')
@section('content')
	<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
	   @foreach($users as $tampil)
			<div class="panel panel-default">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="text-center br">Profile Me</h2>
					</div>
				</div>
				<div class="panel-body">
                    <div class="card card-user">
                        <div class="image">
                            <img class="bg" src="{{ asset('/img/bg_profile/')}}/{{ $tampil->bgprofile }}" alt="..."/>
                        </div>
                        <div class="content">
                            <div class="author" class="text-center">
                                <img class="foto" src="{{ asset('/img/avatar/')}}/{{ $tampil->avatar }}"/>
                            </div>
                            <h4 class="title text-center">{{ $tampil->name }}<br />
                                <small>{{ $tampil->username}}</small>
                            </h4>
                            <p class="description text-center"> "{{ $tampil->description }}"</p>
                        </div>
                        <hr>
                        <div class="text-center">
                            <a href="{{('https://www.facebook.com')}}/{{$tampil->facebook}}"><button href="" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button></a>
                            <a href="{{('https://www.instagram.com')}}/{{$tampil->instagram}}"><button href="#" class="btn btn-simple"><i class="fa fa-instagram"></i></button></a>                
                        </div>
                     </div>
			     </div>
		  </div>
        @endforeach
	   </div>
    </div>
	</div>
@endsection