<!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('img/avatar/')}}/{{Auth::user()->avatar}}" alt="">{{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{route('profile')}}"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href=#"" data-toggle="modal" data-target="#myModal"><i class="fa fa-power-off"></i> Logout</a></li>
                  </ul>
                     <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-sm">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Konfirmasi Logout</h4>
                            </div>
                            <div class="modal-body">
                            <p>Apa Anda Yakin??</p>
                            </div>
                            <div class="modal-footer">
                              <a href="{{ route('logout') }}"            
                                 onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                <button class="btn btn-success">Ok</button>
                              </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 {{ csrf_field() }}
                                </form>
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>
                            </div>
                          </div>
                        </div>
                      </div>
                <li role="presentation" class="dropdown">
                  <a href="{{route('showPesan')}}" class="dropdown-toggle info-number">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">1</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->