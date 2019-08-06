<ul>
@foreach($childs as $child)
	<li>
	    {{ $child->name }}@foreach($child->roles as $v)
       <label class="label label-success">{{ $v->display_name }}</label>
       <br />
       เบอร์โทรศัพท์ :
       <br />
       สังกัดวัด :
     @endforeach
	@if(count($child->childs))
            @include('manageChild',['childs' => $child->childs])
        @endif
	</li>
@endforeach
</ul>
