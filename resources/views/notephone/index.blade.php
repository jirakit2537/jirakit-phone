@extends('template.master')



@section('content')
	<!-- page content -->

	<div class="right_col" role="main">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>จัดการข้อมูลสมาชิก <small>Users</small></h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Settings 1</a>
									</li>
									<li><a href="#">Settings 2</a>
									</li>
								</ul>
							</li>
							<li><a class="close-link"><i class="fa fa-close"></i></a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<p class="text-muted font-13 m-b-30">
							{{-- <ul id="tree1">
								@foreach($categories as $key => $category)
									<li>
										{{ $category->name }}@foreach($category->roles as $v)
											<label class="label label-success">{{ $v->display_name }}</label>
										@endforeach

										@if(count($category->childs))
											@include('manageChild',['childs' => $category->childs])
										@endif
									</li>
								@endforeach
							</ul> --}}
							{{-- {!! $users !!} --}}

						</p>
						<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Name</th>
									<th>Email</th>
									<th>Roles</th>
									<th width="280px">Action</th>
								</tr>
							</thead>
							<tbody>

								@foreach ($data as $key => $user)
<tr>
										<td>{{ ++$i }}</td>
										<td>{{ $user->name }}</td>
										<td>{{ $user->email }}</td>
										<td>
											@if(!empty($user->roles))
												@foreach($user->roles as $v)
													<label class="label label-success">{{ $v->display_name }}</label>
												@endforeach
											@endif
										</td>
										<td>
											<a href="{{ route('users.show',$user->id) }}"><i class="fa fa-chevron-up"></i></a>
											<a href="{{ route('users.edit',$user->id) }}"><i class="fa fa-wrench"></i></a>

											<a id="deleteBtn" href="" ><i class="fa fa-close"></i></a>


										</td>
								@endforeach


									</tr>
							</tbody>
						</table>

					</div>
				</div>
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

    <!-- Datatables -->
    <script>


      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
@endsection
