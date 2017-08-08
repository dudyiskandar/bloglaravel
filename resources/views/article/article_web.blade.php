 @extends('dashboard.partials.main')
@section('side-title')
  Table Article Kursus Web
@endsection
 @section('body')
    nav-md
 @endsection
 @section('content')
  <div class="right_col" role="main">
<button class="btn btn-success add" data-toggle="modal" data-target="#ModalTambah"><span class="glyphicon glyphicon-pencil pencil"></span></button>
 <h2>Article</h2>
  <p>Daftar article :</p>            
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No</th>
        <th>foto</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Kategori</th>
        <th>status</th>
        <th>Author</th>
        <th colspan="2" class="text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php $no=1;?>
    @foreach($article as $tampil)
  @if($tampil->kategori=='web')
      <tr>
        <td class="text-center">{{$no++}}</td>
        <td><img src="{{asset('img/article/')}}/{{$tampil->foto}}" width="50px;"></td>
        <td>{{$tampil->judul}}</td>
        <td><p class="br" style="width:500px;">{{$tampil->isi}}</p></td>
        <td>{{$tampil->kategori}}</td>
        @if($tampil->status==1)
        <td class="text-success">Aktif</td>
        @else
        <td class="text-danger">False</td>
        @endif
        <td>{{$tampil->name}}</td>
        <td><a href="{{url('/dashboard/edit-article/')}}/{{$tampil->id}}"><button class="btn btn-info">Edit</button></td>
        <td><a href="#" data-toggle="modal" data-target="#modalDel"><button class="btn btn-danger">Hapus</button></a></td>
      </tr>
       @endif
    @endforeach
    </tbody>
  </table>
   <!-- Modal -->
                    <div class="modal fade" id="modalDel" role="dialog">
                        <div class="modal-dialog modal-sm">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Konfirmasi Delete</h4>
                            </div>
                            <div class="modal-body">
                            <p>Masukan CONFIRM :</p>
                            <form class="form-horizontal" action="{{url('/dashboard/delete-article/')}}/{{$tampil->id}}" method="POST">
                            {{csrf_field()}}
                              <input type="text" name="confirm" class="form-control" required="">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Ok</button>
                            </form>
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>
                            </div>
                          </div>
                        </div>
                      </div>
               <!-- Modal Tambah-->
        <div class="modal fade" id="ModalTambah" role="dialog">
          <div class="modal-dialog modal-lg">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Article</h4>
              </div>
              <div class="modal-body">
                 <form action="{{route('addArticle')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ Auth::user()->id }}" name="author">
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Judul</label>
                                                <input type="text" class="form-control col-xs-12" placeholder="judul" name="judul">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-xs-6">
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select class="form-control col-xs-12" name="kategori">
                                                  <option value="lain">Article Lain</option>
                                                  <option value="web">Article Web</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control col-xs-12" name="status">
                                                <option value="1">Aktif</option>
                                                <option value="0">False</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-4 col-xs-6">
                                        <div class="form-group">
                                            <label for="avatarUpload">Upload Foto</label>
                                            <input type="file" id="foto" name="foto">
                                         </div>
                                      </div>
                                      <div class="col-md-4 col-xs-6">
                                        <div class="form-group">
                                            <label for="avatarUpload">Upload screenshoot</label>
                                            <input type="file" id="screenshoot1" name="screenshoot1">
                                         </div>
                                      </div>
                                      <div class="col-md-4 col-xs-6">
                                        <div class="form-group">
                                            <label for="avatarUpload">Upload screenshoot</label>
                                            <input type="file" id="screenshoot2" name="screenshoot2">
                                         </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-4 col-xs-6">
                                        <div class="form-group">
                                            <label for="avatarUpload">Upload screenshoot</label>
                                            <input type="file" id="screenshoot3" name="screenshoot3">
                                         </div>
                                      </div>
                                      <div class="col-md-4 col-xs-6">
                                        <div class="form-group">
                                            <label for="avatarUpload">Upload screenshoot</label>
                                            <input type="file" id="screenshoot4" name="screenshoot4">
                                         </div>
                                      </div>
                                      <div class="col-md-4 col-xs-6">
                                        <div class="form-group">
                                            <label for="avatarUpload">Upload screenshoot</label>
                                            <input type="file" id="screenshoot5" name="screenshoot5">
                                         </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Isi</label>
                                                <textarea rows="5" class="form-control col-xs-12" placeholder="Here can be your description" name="isi"></textarea>
                                            </div>
                                        </div>
                                    </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-info">Submit <span class="glyphicon glyphicon-send"></span></button>
                                    <div class="clearfix"></div>
                                </form>
              </div>
            </div>
            
          </div>
        </div>
 </div>
@endsection

