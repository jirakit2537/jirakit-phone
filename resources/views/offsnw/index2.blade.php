@extends('layouts.app')

@section('content')

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>จัดการบทบาท <small>Roles</small></h2>
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
                        <div class="clearfix">   <div class="pull-right">
                 	        	@permission('role-create')
                 	       <a class="btn btn-primary" href=""> เพิ่มข้อมูลสำนักเรียน</a>
                 	            @endpermission
                 	        </div></div>
                    </div>
                    <div class="x_content">

                      @if ($message = Session::get('msg'))
                    		<div class="alert alert-danger">
                    			<h3>{{ $message }}</h3>
                    		</div>
                    	@elseif($message = Session::get('success'))
                        <div class="alert alert-success">
                            <h3>{{ $message }}</h3>
                        </div>
                        @endif


<h5>
				<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
		<tr>
			<th>ไอดี</th>
            <th>นิกาย</th>
			<th>ชื่อ</th>
			<th>ภาค/จังหวัด/สนาม</th>

			<th>วัด</th>
      <th>เบอร์โทรศัพท์</th>
            <th>อัพเดทล่าสุด</th>

			<th width="280px">จัดการ</th>
		</tr>
  </thead>

	</table>
  </h5>
                    </div></div></div></div></div>

    <!-- modals -->
    <div class="modal fade" id="linkEditorModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="linkEditorModalLabel">แก้ไขข้อมูล</h4>
                </div>
                <div class="modal-body">
                    <form id="modalFormData" name="modalFormData" class="form-horizontal" novalidate="">
                        <input type="hidden" id="link_id" name="id" value="0">
                        <div class="form-group">
                            <label for="inputLink" class="col-sm-2 control-label">ไอดี</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="link_s" name="ddd"
                                       placeholder="Enter URL" value="" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">นิกาย</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nikay" name="nikay"
                                       placeholder="นิกาย" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputLink" class="col-sm-2 control-label">ภาค</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="zone" name="zone"
                                       placeholder="ภาค" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">ตำแหน่ง</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="posit" name="posit"
                                       placeholder="ตำแหน่ง" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputLink" class="col-sm-2 control-label">พื้นที่</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="zone_supv" name="zone_supv"
                                       placeholder="พื้นที่" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">ชื่อ-ฉายา</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_chaya" name="name_chaya"
                                       placeholder="ชื่อ-ฉายา" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputLink" class="col-sm-2 control-label">ชื่อจริง วุฒิการศึกษา</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_qlfct" name="name_qlfct"
                                       placeholder="ชื่อจริง วุฒิการศึกษา" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">วัด</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_add" name="name_add"
                                       placeholder="วัด" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputLink" class="col-sm-2 control-label">ตำบล/แขวง</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_tamb" name="name_tamb"
                                       placeholder="ตำบล/แขวง" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">อำเภอ/เขต</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_amp" name="name_amp"
                                       placeholder="อำเภอ/เขต" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputLink" class="col-sm-2 control-label">จังหวัด</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_jwad" name="name_jwad"
                                       placeholder="จังหวัด" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">ปณ.</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_zip" name="name_zip"
                                       placeholder="ปณ." value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputLink" class="col-sm-2 control-label">เบอร์โทรศัพท์</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_tel" name="name_tel"
                                       placeholder="เบอร์โทรศัพท์" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">แฟกซ์</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_fax" name="name_fax"
                                       placeholder="แฟกซ์" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">ไลน์ไอดี</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_lne" name="name_lne"
                                       placeholder="ไลน์ไอดี" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">อีเมล์</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_mail" name="name_mail"
                                       placeholder="อีเมล์" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">เว็บไซต์</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_www" name="name_www"
                                       placeholder="กรอกเว็บไซต์" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">หมายเหตุ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_nte" name="name_nte"
                                       placeholder="หมายเหตุ" value="">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btn-save" value="add">อัพเดทข้อมูล
                    </button>


                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Edit code ends -->
    <script>
        $.Thailand({
            database: '{{ URL::to('jquery.Thailand.js/database/db.json') }}', // path หรือ url ไปยัง database
            $district: $('#name_tamb'), // input ของตำบล
            $amphoe: $('#name_amp'), // input ของอำเภอ
            $province: $('#name_jwad'), // input ของจังหวัด
            $zipcode: $('#name_zip'), // input ของรหัสไปรษณีย์
        });
    </script>

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
// ajax update
////----- Open the modal to UPDATE a link -----////





$(document).ready(function () {

    //datatables
    // Setup - add a text input to each footer cell
    $('#datatable-buttons tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );

    var handleDataTableButtons = function() {
        if ($("#datatable-buttons").length) {
            var table =  $("#datatable-buttons").DataTable({

                serverSide: true,
                processing: true,
                ajax: '{{route('offsnw.data')}}',
                columns: [
                    {data: 'id'},
                    {data: 'nikay'},
                    {data: 'name_chaya'},
                    {data: 'zone_supv'},
                    {data: 'name_add'},
                    {data: 'name_tel'},
                    {data: 'updated_at'},
                    {data: 'action', orderable: false, searchable: false}
                ],

                "pageLength": 50,
                "bStateSave": true,
                initComplete: function () {
                    this.api().columns().every(function () {
                        var column = this;
                        var input = document.createElement("input");
                        $(input).appendTo($(column.footer()).empty())
                            .on('change', function () {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column.search(val ? val : '', true, false).draw();
                            });
                    });
                }

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


    TableManageButtons.init();

    ////----- Open the modal to CREATE a link -----////
    $('#btn-add').click(function () {
        $('#btn-save').val("add");
        $('#modalFormData').trigger("reset");
        $('#linkEditorModal').modal('show');
    });
$('body').on('click', '.open-modal', function () {
    var id = $(this).val();
    $.get('offsnw/' + id  +'/edit',  function (data) {
        $('#link_s').val(data.id);
        $('#link_id').val(data.id);
        $('#nikay').val(data.nikay);
        $('#zone').val(data.zone);
        $('#zone_jwad').val(data.zone_jwad);
        $('#posit').val(data.posit);
        $('#zone_supv').val(data.zone_supv);
        $('#name_chaya').val(data.name_chaya);
        $('#name_qlfct').val(data.name_qlfct);
        $('#name_add').val(data.name_add);
        $('#name_tamb').val(data.name_tamb);
        $('#name_amp').val(data.name_amp);
        $('#name_jwad').val(data.name_jwad);
        $('#name_zip').val(data.name_zip);
        $('#name_tel').val(data.name_tel);
        $('#name_fax').val(data.name_fax);
        $('#name_lne').val(data.name_lne);
        $('#name_mail').val(data.name_mail);
        $('#name_www').val(data.name_www);
        $('#name_nte').val(data.name_nte);

        $('#btn-save').val("update");
        $('#linkEditorModal').modal('show');
    })
})

});


// Clicking the save button on the open modal for both CREATE and UPDATE
$("#btn-save").click(function (e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')



        }


    });
    e.preventDefault();
    var formData = {
        id: $('#link_id').val(),
        nikay: $('#nikay').val(),
        zone: $('#zone').val(),
        zone_jwad: $('#zone_jwad').val(),
        posit: $('#posit').val(),
        zone_supv: $('#zone_supv').val(),
        name_chaya: $('#name_chaya').val(),
        name_qlfct: $('#name_qlfct').val(),
        name_add: $('#name_add').val(),
        name_tamb: $('#name_tamb').val(),
        name_amp: $('#name_amp').val(),
        name_jwad: $('#name_jwad').val(),
        name_zip: $('#name_zip').val(),
        name_tel: $('#name_tel').val(),
        name_fax: $('#name_fax').val(),
        name_lne: $('#name_lne').val(),
        name_mail: $('#name_mail').val(),
        name_www: $('#name_www').val(),
        name_nte: $('#name_nte').val()




    };
    var state = $('#btn-save').val();
    var type = "POST";
    var link_id = $('#link_id').val();
    var ajaxurl = 'offsnw';
    if (state == "update") {
        type = "PATCH";
        ajaxurl = 'offsnw/' + link_id;
    }
    $.ajax({
        type: type,
        url: ajaxurl,
        data: formData,
        dataType: 'json',
        success: function (data) {

//            var link = '<tr id="link' + data.id + '"><td>' + data.id + '</td><td>' + data.url + '</td><td>' + data.description + '</td>';
//            link += '<td><button class="btn btn-info open-modal" value="' + data.id + '">Edit</button> ';
//            link += '<button class="btn btn-danger delete-link" value="' + data.id + '">Delete</button></td></tr>';
//            if (state == "add") {
//                $('#links-list').append(link);
//            } else {
//                $("#link" + link_id).replaceWith(link);
//            }
          $('#modalFormData').trigger("reset");
          $('#linkEditorModal').modal('hide')
            $('#datatable-buttons').DataTable().ajax.reload();
        },
        error: function (data) {
//            console.log('Error:', data);
            alert('ล้มเหลว ');
        }
    });
});

////----- DELETE a link and remove from the page -----////
$('.delete-link').click(function () {
    var link_id = $(this).val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "DELETE",
        url: 'offsnw/' + link_id,
        success: function (data) {
            console.log(data);
            $("#link" + link_id).remove();
        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
});




    </script>
    <!-- /Datatables -->
@endsection
