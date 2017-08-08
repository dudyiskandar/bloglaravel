@extends('blog.partials.main')
@section('page-title')
	Contact
@endsection
@section('content')
	<div class="container">
		<h2 class="text-center">Contact Me</h2>
		<div class="col-md-8 col-md-offset-2">
			<iframe style="width: 100%;height: 336px;" src=""></iframe>
		</div>
		<div class="col-md-2">
			<p><i class="fa fa-map-marker"></i> Jl.Raya Cisasah rt/rw 06/05 Purwasari, Dramaga, Bogor, Jawa Barat, Indonesia</p>
			<p><i class="fa fa-flag"></i> ID</p>
			<p><i class="fa fa-phone"></i> Phone:085774216703</p>
			<p><i class="fa fa-envelope"></i> Email:<br>dudiiskadandar325@gmail.com</p>
		</div>
		<div class="col-md-10 col-md-offset-1">
			<h3 class="text-center">{{Session::get("message")}}</h3>
			<form action="{{url('/kirim-pesan/')}}" class="form-horizontal" method="POST">
			{{csrf_field()}}
			<div class="col-md-6">
				<input type="text" name="nama" class="form-control" placeholder="Nama"><br>
				<input type="email" name="email" class="form-control" placeholder="Email"><br>
				<input type="number" name="phone_number" class="form-control" placeholder="Phone Number"><br>
			</div>
			<div class="col-md-6">
				<textarea name="pesan" placeholder="Message" class="form-control" rows="6"></textarea>
			</div>
			<div class="col-md-12 text-center">
			<button class="btn btn-info" onclick="myFunction()" >Send Message</button>
			</div>
			</form>
		</div>
	</div>
	<style type="text/css">
		.col-md-10.col-md-offset-1{
			 background: #008ab3;
		    margin-top: 20px;
		    padding-top: 21px;
		    box-shadow: 4px -8px 8px 0 rgba(0, 0, 0, 0.2), -7px 7px 20px 0 rgba(0, 0, 0, 0.19);
		}
	</style>
@endsection