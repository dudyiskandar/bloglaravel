 @extends('dashboard.partials.main')
@section('side-title')
  Edit Article
@endsection
 @section('body')
    nav-md
 @endsection
 @section('content')
 <div class="right_col" role="main">
 <div class="col-md-8 col-md-offset-2">
                        <div class="panel update">
                            <div class="panel-heading">
                                <h4 class="title">Edit Article</h4>
                            </div>
                            <div class="panel-body">
                                <form action="{{route('updateArticle')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                            @foreach($article as $tampil)
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Judul</label>
                                                <input type="text" class="form-control col-xs-12" value="{{$tampil->judul}}" name="judul">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select class="form-control col-xs-12" name="kategori" value="{{$tampil->kategori}}">
                                                  <option value="web">Article Web</option>
                                                  <option value="lain">Article Lain</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select value="{{$tampil->status}}" class="form-control col-xs-12" name="status">
                                                <option value="1">Aktif</option>
                                                <option value="0">False</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="avatarUpload">Upload Foto</label>
                                            <input type="file" id="foto" value="{{$tampil->foto}}" name="foto">
                                         </div>
                                      </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="avatarUpload">Upload screenshoot</label>
                                            <input type="file" id="screenshoot1" name="screenshoot1" value="{{$tampil->screenshoot1}}">
                                         </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="avatarUpload">Upload screenshoot</label>
                                            <input type="file" id="screenshoot2" name="screenshoot2" value="{{$tampil->screenshoot2}}">
                                         </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="avatarUpload">Upload screenshoot</label>
                                            <input type="file" id="screenshoot3" name="screenshoot3" value="{{$tampil->screenshoot3}}">
                                         </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="avatarUpload">Upload screenshoot</label>
                                            <input type="file" id="screenshoot4" name="screenshoot4" value="{{$tampil->screenshoot4}}">
                                         </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="avatarUpload">Upload screenshoot</label>
                                            <input type="file" id="screenshoot5" name="screenshoot5" value="{{$tampil->screenshoot5}}">
                                         </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Isi</label>
                                                <textarea rows="12" class="form-control col-xs-12" value="Here can be your description" name="isi">{{$tampil->isi}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" value="{{$tampil->id}}" name="id">
                                    <input type="hidden" value="{{Auth::user()->id}}" name="author">
                                    <button type="submit" class="btn btn-info btn-lg pull-right">Submit <span class="glyphicon glyphicon-send"></span></button>
                                    <div class="clearfix"></div>
                                @endforeach
                                </form>
                            </div>
                        </div>
                    </div>
 </div>
@endsection

