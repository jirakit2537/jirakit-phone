<option value="0">--- เลือกอำเภอ ---</option>
@if(!empty($states))
  @foreach($states as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
@endif
