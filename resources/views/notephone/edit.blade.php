@extends('template.master')

@section('content')

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>จัดการข้อมูลสมาชิก <small>Users</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id], 'id' => 'form_id']) !!}
	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>phone:</strong>
                {!! Form::tel('profile[telephone]', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Role:</strong>

                  {!! Form::select('roles',$roles, old('roles'), ['class'=>'form-control', 'placeholder'=>'Select Category']) !!}
            </div>
        </div>


				<div class="panel panel-default">
						 <div class="panel-heading"> ถ้าเป็นเจ้าคณะปกครอง อำเภอ ไม่ต้องเลือกตำบล</div>
						 <div class="panel-body">
							 <div class="form-group">
								 <label for="title">เลือกตำบล:</label>


								 {!! Form::text('profile[districts_id]', null, array('placeholder' => 'ใส่ชื่อตำบล','class' => 'form-control' , 'id' => 'district')) !!}
								 </select>
							 </div>
							 <div class="form-group">

								 <label for="title">เลือกอำเภอ:</label>

								 {!! Form::text('profile[amphures_id]', null, array('placeholder' => 'ใส่ชื่ออำเภอ','class' => 'form-control' , 'id' => 'amphoe')) !!}
								 </select>
							 </div>
							 <div class="form-group">
								 <label for="title">เลือกจังหวัด:</label>


								 {!! Form::text('profile[provinces_id]', null, array('placeholder' => 'ใส่ชื่อจังหวัด','class' => 'form-control' , 'id' => 'province')) !!}
							 </div>
							 <div class="form-group">
								 <label for="title">รหัสไปรษณีย์:</label>


								 {!! Form::text('profile[zipcode_id]', null, array('placeholder' => 'ใส่รหัสไปรษณีย์','class' => 'form-control' , 'id' => 'zipcode')) !!}
							 </div>
									 {{--<div class="form-group">--}}
											 {{--<label for="title">แก้ไขข้อมูล: ถ้าต้องการแก้ไขเขตปกครอง กรุณาเลือกจังหวัด ก่อน!</label>--}}



													 {{--{!! Form::select('profile[provinces_id]',[''=>'--- เลือกจังหวัด ---']+$p->toArray(),null,array('class'=>'form-control','id' => 'p1')) !!}--}}
									 {{--</div>--}}
									 {{--<div class="form-group">--}}
											 {{--<label for="title">เลือกอำเภอ:</label>--}}
											 {{--{!! Form::select('profile[amphures_id]',[' '=>'--- เลือกอำเภอ ---']+$a->toArray(),null,array('class'=>'form-control', 'disabled','id' => 'input_disabled_id1')) !!}--}}

											 {{--</select>--}}
									 {{--</div>--}}

									 {{--<div class="form-group">--}}
											 {{--<label for="title">เลือกตำบล:</label>--}}
											 {{--{!! Form::select('profile[districts_id]',[' '=>'--- เลือกตำบล ---']+$d->toArray(),null,array('class'=>'form-control', 'disabled','id' => 'input_disabled_id2')) !!}--}}
											 {{--</select>--}}
									 {{--</div>--}}
						 </div>
					 </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Submit</button>
        </div>

	</div>
</div>
</div>
</div>
</div>
</div>
	{!! Form::close() !!}
  <script>

      $.Thailand({
          database: '{{ URL::to('jquery.Thailand.js/database/db.json') }}', // path หรือ url ไปยัง database
          $district: $('#district'), // input ของตำบล
          $amphoe: $('#amphoe'), // input ของอำเภอ
          $province: $('#province'), // input ของจังหวัด
          $zipcode: $('#zipcode'), // input ของรหัสไปรษณีย์
      });
$('#form_id').submit(function() {
      $("#input_disabled_id1").prop('disabled', false);
        $("#input_disabled_id2").prop('disabled', false);
    //Rest of code
    })
</script>
	<script type="text/javascript">
	$("#p1").change(function(){
			var id_country = $(this).val();
			var token = $("input[name='_token']").val();
			$.ajax({
					url: "<?php echo route('select-ajax') ?>",
					method: 'POST',
					data: {id_country:id_country, _token:token},
					success: function(data) {
						$("select[name='profile[amphures_id]'").html('');
						$("select[name='profile[amphures_id]'").html(data.options).removeAttr("disabled");
					}
			});
	});


	$("select[name='profile[amphures_id]']").change(function(){
			var id_state = $(this).val();
			var token = $("input[name='_token']").val();
			$.ajax({
					url: "<?php echo route('select-districts') ?>",
					method: 'POST',
					data: {id_state:id_state, _token:token},
					success: function(data) {
						$("select[name='profile[districts_id]'").html('');
						$("select[name='profile[districts_id]'").html(data.options).removeAttr("disabled");
					}
			});
	});
	</script>

@endsection
