@extends('layouts.app')

@section('content')

	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>ข้อมูล ภาค-จังหวัด-อำเภอ-ตำบล</h2>
	        </div>
	        <div class="pull-right">
	            <!-- <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a> -->
	        </div>
	    </div>
	</div>




	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
  <div class="col-lg-12 margin-tb">


จำนวนภาค: {{ $g }} จำนวนจังหวัด: {{ $p }} จำนวนอำเภอ: {{ $a }}  จำนวนตำบล: {{ $d }}
	<table class="table table-bordered">
		<tr>
			<th>ภาค</th>
			<th>จังหวัด</th>
			<th>อำเภอ</th>
			<th>ตำบล</th>
      	<th>ไปรษณีย์</th>
			<!-- <th width="280px">Action</th> -->
		</tr>
	@foreach ($geo as $user)
	<tr>
    <td>
    {{  $user->geography->GEO_NAME }}
		</td>
		<td>{{ $user->provinces->PROVINCE_NAME }}</td>


    <td>
    {{  $user->amphures->AMPHUR_NAME }}
		</td>
    <td>
    {{  $user->DISTRICT_NAME }}
		</td>
    <td>
@foreach ($user->zipcodes as $value)
          {{ $value->zipcode }}
   @endforeach
    </td>
	</tr>
	@endforeach
	</table>

  	{!! $geo->render() !!}
	</div>




@endsection
