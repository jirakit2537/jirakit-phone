@extends('template.master')

@section('content')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Widget Designs</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12">
          <div class="">
            <div class="x_content">
              <div class="row">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="tile-stats">
                    <div class="icon"><i class="glyphicon glyphicon-user"></i>
                    </div>
                    <div class="count">179</div>

                    <h3>ผู้ใช้ทั้งหมด</h3>
                    <p>User.</p>
                  </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="tile-stats">
                    <div class="icon"><i class="glyphicon glyphicon-th-list"></i>
                    </div>
                    <div class="count">179</div>

                    <h3>บทบาทผู้ใช้</h3>
                    <p>User Role.</p>
                  </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                    </div>
                    <div class="count">179</div>

                    <h3>New Sign ups</h3>
                    <p>Lorem ipsum psdea itgum rixt.</p>
                  </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-check-square-o"></i>
                    </div>
                    <div class="count">179</div>

                    <h3>New Sign ups</h3>
                    <p>Lorem ipsum psdea itgum rixt.</p>
                  </div>
                </div>
              </div>

              <div class="row top_tiles" style="margin: 10px 0;">
                <div class="col-md-3 tile">
                  <span>Total Sessions</span>
                  <h2>231,809</h2>
                  <span class="sparkline_one" style="height: 160px;">
                                <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                            </span>
                </div>
                <div class="col-md-3 tile">
                  <span>Total Revenue</span>
                  <h2>$ 1,231,809</h2>
                  <span class="sparkline_one" style="height: 160px;">
                                <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                            </span>
                </div>
                <div class="col-md-3 tile">
                  <span>Total Sessions</span>
                  <h2>231,809</h2>
                  <span class="sparkline_two" style="height: 160px;">
                                <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                            </span>
                </div>
                <div class="col-md-3 tile">
                  <span>Total Sessions</span>
                  <h2>231,809</h2>
                  <span class="sparkline_one" style="height: 160px;">
                                <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                            </span>
                </div>
              </div>


</div></div></div>
      </div>
    </div>
  </div>
  <!-- /page content -->
@endsection

@section('content_script')
  <!-- iCheck -->
  <script src="{{ URL::to('js/icheck.min.js') }}"></script>
  <!-- Datatables -->


  <script src="{{ URL::to('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ URL::to('js/dataTables.bootstrap.min.js') }}"></script>
  <script src="{{ URL::to('js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ URL::to('js/buttons.bootstrap.min.js') }}"></script>
  <script src="{{ URL::to('js/buttons.flash.min.js') }}"></script>
  <script src="{{ URL::to('js/buttons.html5.min.js') }}"></script>
  <script src="{{ URL::to('js/buttons.print.min.js') }}"></script>
  <script src="{{ URL::to('js/dataTables.fixedHeader.min.js') }}"></script>
  <script src="{{ URL::to('js/dataTables.keyTable.min.js') }}"></script>
  <script src="{{ URL::to('js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ URL::to('js/responsive.bootstrap.js') }}"></script>
  <script src="{{ URL::to('js/datatables.scroller.min.js') }}"></script>
  <script src="{{ URL::to('js/jszip.min.js') }}"></script>
  <script src="{{ URL::to('js/pdfmake.min.js') }}"></script>
  <script src="{{ URL::to('js/vfs_fonts.js') }}"></script>


@endsection
