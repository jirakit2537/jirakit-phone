@extends('template.master')

@section('content')

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>บันทึกข้อมูลโทรศัพท์ สำนักงานแม่กองธรรมสนามหลวง <small>Note</small></h2>
												<div class="clearfix">      <div class="pull-right">
																 <a class="btn btn-primary" href="{{ route('notephone.index') }}"> Back</a>
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
        <div class="panel panel-primary">
            <div class="panel-heading">บันทึกข้อมูลโทรศัพท์ สำนักงานแม่กองธรรมสนามหลวง</div>
            <div class="panel-body">
	{!! Form::open(array('route' => 'notephone.store','method'=>'POST')) !!}
	<div class="row">

		<div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>ชื่อผู้โทร:</strong>
                {!! Form::text('namenote', null, array('placeholder' => 'ชื่อผู้โทร','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>หมายเลขติดต่อกลับ:</strong>
                {!! Form::text('phoneback', null, array('placeholder' => 'หมายเลขติดต่อกลับ','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ติดต่อจาก(โรงเรียน/วัด/สนาม) :</strong>
                {!! Form::text('form',null,  array('placeholder' => 'ติดต่อจาก(โรงเรียน/วัด/สนาม)','class' => 'form-control')) !!}
            </div>
        </div>





        <div class="col-xs-6 col-sm-6 col-md-6">
					   <div class="form-group">
						   <label for="title">เลือกตำบล:</label>


						   {!! Form::text('id_districts', null, array('placeholder' => 'ใส่ชื่อตำบล','class' => 'form-control' , 'id' => 'district')) !!}
						   </select>
					   </div>
        </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
			             <div class="form-group">

			                 <label for="title">เลือกอำเภอ:</label>

							 {!! Form::text('id_state', null, array('placeholder' => 'ใส่ชื่ออำเภอ','class' => 'form-control' , 'id' => 'amphoe')) !!}
			                 </select>
			             </div>
            </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
					   <div class="form-group">

						   <label for="title">เลือกจังหวัด:</label>


						   {!! Form::text('id_country', null, array('placeholder' => 'ใส่ชื่อจังหวัด','class' => 'form-control' , 'id' => 'province')) !!}
					   </div>
                </div>
                    {{--<div class="col-xs-6 col-sm-6 col-md-6">--}}
            {{--<div class="form-group">--}}
                {{--<label for="title">รหัสไปรษณีย์:</label>--}}


                {{--{!! Form::text('id_zipcode', null, array('placeholder' => 'ใส่รหัสไปรษณีย์','class' => 'form-control' , 'id' => 'zipcode')) !!}--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <label for="title">ชื่อเรื่อง:</label>


                {!! Form::text('story', null, array('placeholder' => 'ชื่อเรื่อง','class' => 'form-control' , 'id' => 'zipcode')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="title">รายละเอียด:</label>


                {!! Form::textarea('note', null, array('placeholder' => 'รายละเอียด','class' => 'form-control' , 'id' => 'zipcode')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="title">หมายเหตุ:</label>


                {!! Form::textarea('notepad', null, array('placeholder' => 'หมายเหตุ','class' => 'form-control' , 'id' => 'zipcode', 'rows' => '3')) !!}
            </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
        </div>
			       </div>
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
         //  $zipcode: $('#zipcode'), // input ของรหัสไปรษณีย์
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
