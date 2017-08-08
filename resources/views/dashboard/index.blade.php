 @extends('dashboard.partials.main')
@section('side-title')
  Dashboard
@endsection
 @section('body')
    nav-md
 @endsection
 @section('content')
 <div class="right_col" role="main">
 <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-list"></i> Total Article HTML</span>
              <div class="count blue">1</div>
              <span class="count_bottom"><i class="green">1% </i> </span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-list"></i> Total Article CSS</span>
              <div class="count red">1</div>
              <span class="count_bottom"><i class="green">3% </i> Terakhir Diupdate</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-list"></i> Total Article PHP</span>
              <div class="count green">1</div>
              <span class="count_bottom"><i class="green">34% </i> Terakhir Diupdate</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-list"></i> Total Article MYSQL</span>
              <div class="count">1</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> Terakhir Diupdate</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-list"></i> Framework PHP</span>
              <div class="count">1</div>
              <span class="count_bottom"><i class="green">34% </i> Terakhir Diupdate</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-list"></i> Framework CSS</span>
              <div class="count">1</div>
              <span class="count_bottom"><i class="green">34% </i> Terakhir Diupdate</span>
            </div>
          </div>
 </div>
@endsection

