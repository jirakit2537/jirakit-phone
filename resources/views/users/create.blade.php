@extends('template.master')

@section('content')

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>จัดการข้อมูลสมาชิก <small>Users</small></h2>
												<div class="clearfix">      <div class="pull-right">
																 <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
														 </div></div>
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

	{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
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
                <strong>Password:</strong>
                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Confirm Password:</strong>
                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
            </div>
        </div>
				<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
										<strong>เบอร์โทรศัพท์:</strong>
										{!! Form::text('telephone', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
								</div>
						</div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Role: เจ้าคณะจังหวัด สามารถสร้างลูกข่ายได้ </strong>
                <!-- {!! Form::select('roles', $roles, array('class' => 'form-control')) !!} -->
                {!! Form::select('roles',$roles, old('roles'), ['class'=>'form-control', 'placeholder'=>'เลือกประเภท สมาชิก']) !!}
                {!! Form::hidden('parent_id',Auth::user()->id) !!}
            </div>
        </div>

				<div class="panel panel-default">
			       <div class="panel-heading">Select State and get bellow Related City</div>
			       <div class="panel-body">

					   <div class="form-group">
						   <label for="title">เลือกตำบล:</label>


						   {!! Form::text('id_districts', null, array('placeholder' => 'ใส่ชื่อตำบล','class' => 'form-control' , 'id' => 'district')) !!}
						   </select>
					   </div>
			             <div class="form-group">

			                 <label for="title">เลือกอำเภอ:</label>

							 {!! Form::text('id_state', null, array('placeholder' => 'ใส่ชื่ออำเภอ','class' => 'form-control' , 'id' => 'amphoe')) !!}
			                 </select>
			             </div>
					   <div class="form-group">
						   <label for="title">เลือกจังหวัด:</label>


						   {!! Form::text('id_country', null, array('placeholder' => 'ใส่ชื่อจังหวัด','class' => 'form-control' , 'id' => 'province')) !!}
					   </div>
					   <div class="form-group">
						   <label for="title">รหัสไปรษณีย์:</label>


						   {!! Form::text('id_zipcode', null, array('placeholder' => 'ใส่รหัสไปรษณีย์','class' => 'form-control' , 'id' => 'zipcode')) !!}
					   </div>


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
	{{--<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>--}}
	<script type="text/javascript">


        $.Thailand({
            database: '{{ URL::to('jquery.Thailand.js/database/db.json') }}', // path หรือ url ไปยัง database
            $district: $('#district'), // input ของตำบล
            $amphoe: $('#amphoe'), // input ของอำเภอ
            $province: $('#province'), // input ของจังหวัด
           $zipcode: $('#zipcode'), // input ของรหัสไปรษณีย์
        });
  $("select[name='id_country']").change(function(){
      var id_country = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "<?php echo route('select-ajax') ?>",
          method: 'POST',
          data: {id_country:id_country, _token:token},
          success: function(data) {
            $("select[name='id_state'").html('');
            $("select[name='id_state'").html(data.options);
          }
      });
  });


	$("select[name='id_state']").change(function(){
			var id_state = $(this).val();
			var token = $("input[name='_token']").val();
			$.ajax({
					url: "<?php echo route('select-districts') ?>",
					method: 'POST',
					data: {id_state:id_state, _token:token},
					success: function(data) {
						$("select[name='id_districts'").html('');
						$("select[name='id_districts'").html(data.options);
					}
			});
	});
</script>
@endsection
