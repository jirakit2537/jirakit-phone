@extends('admin.app')

@section('content')


  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <div class="main">


      <div class="container">
        <div align="center">
          <h2 style="font-size:50px;index-z: -1;color:white;margin-bottom:35px;">เข้าสู่ระบบ</h2>
        </div>
  <center>
  <div class="middle">
        <div id="login">

          {{-- <form action="javascript:void(0);" method="get"> --}}

            <fieldset class="clearfix">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                  {{ csrf_field() }}
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <p ><span class="fa fa-user"></span><input type="text" id="email" name="email" value="{{ old('email') }}"  Placeholder="Username" required>
                @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif</p> <!-- JS because of IE support; better: placeholder="Username" -->
                                      </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <p><span class="fa fa-lock"></span><input id="password" type="password"  name="password" Placeholder="Password" required>
                @if ($errors->has('password'))
                                                  <span class="help-block">
                                                      <strong>{{ $errors->first('password') }}</strong>
                                                  </span>
                                              @endif
              </p> <!-- JS because of IE support; better: placeholder="Password" -->
                      </div>

               <div>
                                  <span style="width:48%; text-align:left;  display: inline-block;">  <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                        ลืมรหัสผ่าน ?
                                    </a></span>
                                  <span style="width:50%; text-align:right;  display: inline-block;"><button type="submit" class="btn btn-danger"> เข้าสู่ระบบ</button></span>

                              </div>

            </fieldset>
  <div class="clearfix"></div>
          </form>

          <div class="clearfix"></div>

        </div> <!-- end login -->
        <div class="logo">Gongtham<br />


            <div class="clearfix"></div>
        </div>

        </div>
  </center>
      </div>

  </div>




@endsection
