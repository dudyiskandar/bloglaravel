 @extends('dashboard.partials.main')
@section('side-title')
  Profile
@endsection
 @section('body')
    nav-md
 @endsection
 @section('content')
<div class="right_col" role="main">
    <div class="container-fluid">
    		 <div class="row">
                   <div class="col-md-4" style="float:right;">
                            <div class="card card-user">
                                <div class="image">
                                    <img class="bg" src="{{ asset('/img/bg_profile/')}}/{{ Auth::user()->bgprofile }}" alt="..."/>
                                </div>
                                <div class="content">
                                    <div class="author" class="text-center">
                                        <img class="foto" src="{{ asset('/img/avatar/')}}/{{ Auth::user()->avatar }}"/>
                                    </div>
                                           <h4 class="title text-center">{{ Auth::user()->name }}<br />
                                             <small>{{ Auth::user()->username}}</small>
                                          </h4>
                                    <p class="description text-center"> "{{ Auth::user()->description }}"</p>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <a href="{{('https://www.facebook.com')}}/{{Auth::user()->facebook}}"><button href="" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button></a>
                                    <a href="{{('https://www.twitter.com')}}/{{Auth::user()->twitter}}"><button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button></a>
                                    

                                </div>
                            </div>
                    </div>
                    <div class="col-md-8" style="float:left">
                        <div class="panel update">
                            <div class="panel-heading">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="panel-body">
                                <form action="{{url('/dashboard/updateProfile/')}}/{{Auth::user()->id}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control col-xs-12" placeholder="Username" value="{{ Auth::user()->username }}" name="username">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control col-xs-12" placeholder="Name" value="{{ Auth::user()->name }}" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email </label>
                                                <input type="email" class="form-control col-xs-12" placeholder="Email" value="{{ Auth::user()->email }}" name="email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Facebook</label>
                                                <input type="text" class="form-control col-xs-12" placeholder="@" value="{{ Auth::user()->facebook }}" name="facebook">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Instagram</label>
                                                <input type="text" class="form-control col-xs-12" placeholder="@" value="{{ Auth::user()->instagram }}" name="instagram">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea rows="5" class="form-control col-xs-12" placeholder="Here can be your description" name="description">{{ Auth::user()->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="avatarUpload">Upload Avatar</label>
                                            <input type="file" id="avatarUpload" name="avatar">
                                            <p class="help-block">Change avatar profile.</p>
                                         </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="bgUpload">Upload Bg Profile</label>
                                            <input type="file" id="bgUpload" name="bgprofile">
                                            <p class="help-block">Change bacground profile.</p>
                                         </div>
                                      </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div> 
    </div>
</div>
@endsection