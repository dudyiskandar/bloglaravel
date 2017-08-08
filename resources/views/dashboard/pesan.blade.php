 @extends('dashboard.partials.main')
@section('side-title')
  Pesan
@endsection
 @section('body')
    nav-md
 @endsection
 @section('content')
	<div class="right_col" role="main">
		<div class="container">
			<table class="table table-hover table-striped">
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Phone Number</th>
					<th>Pesan</th>
					<th>Reply</th>
				</tr>
				<?php $no=1;?>
				@foreach($pesan as $tampil)
				<tr>
					<td>{{$no++}}</td>
					<td>{{$tampil->nama}}</td>
					<td>{{$tampil->email}}</td>
					<td>{{$tampil->phone_number}}</td>
					<td>{{$tampil->pesan}}</td>
					<td><button class="btn btn-primary">Reply</button></td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
@endsection