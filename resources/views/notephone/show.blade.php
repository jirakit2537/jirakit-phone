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
	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $user->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Roles:</strong>
                @if(!empty($user->roles))
					@foreach($user->roles as $v)
						<label class="label label-success">{{ $v->display_name }}</label>
					@endforeach
				@endif
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>เบอร์โทรศัพท์:</strong>
                {{ $user->profile->telephone or 'ไม่มี'}}
            </div>
        </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>จังหวัด:</strong>

                   {{ $user->profile->provinces_id }}
                  {{--{{ $tes or 'ไม่พบข้อมูล' }}--}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>อำเภอ:</strong>
                   {{ $user->profile->amphures_id }}
                  {{--{{ $tes or 'ไม่พบข้อมูล' }}--}}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ตำบล:</strong>
                   {{ $user->profile->districts_id }}
                  {{--{{ $d or 'ไม่พบข้อมูล' }}--}}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>รหัสไปรษณีย์:</strong>
                   {{ $user->profile->zipcode_id }}
                  {{--{{ $z or 'ไม่พบข้อมูล' }}--}}
                    </div>
                </div>

	</div>

                </div>
            </div>
            </div>
        </div>    </div>

@endsection
