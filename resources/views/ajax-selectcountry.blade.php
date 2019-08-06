<option value="0">--- เลือกสนามสอบ ---</option>
@if(!empty($country))
  @foreach($country as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
@endif
