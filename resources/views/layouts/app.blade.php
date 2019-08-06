<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <title>
        @section('title')
            | Gongtham
        @show
    </title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--global css starts-->
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/custom.css') }}">

    <!-- Datatables -->
    <!-- <link href="{{ URL::to('shantu/css/dataTables.bootstrap.min.css') }}" rel="stylesheet"> -->
    <link href="{{ URL::to('shantu/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('shantu/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('shantu/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('shantu/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom Theme Style -->
  <!-- Custom Theme Style -->
   
    <link href="{{ URL::to('shantu/css/custom.min.css') }}" rel="stylesheet">
  <link href="{{ URL::to('shantu/css/app.css') }}" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('jquery.Thailand.js/dependencies/JQL.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('jquery.Thailand.js/dependencies/typeahead.bundle.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::to('jquery.Thailand.js/dist/jquery.Thailand.min.css') }}">
    <script type="text/javascript" src="{{ URL::to('jquery.Thailand.js/dist/jquery.Thailand.min.js') }}"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



<style>
    body{
        font-family: 'K2D', sans-serif;
    }
</style>
    <!--end of global css-->
    <!--page level css-->
@yield('header_styles')
<!--end of page level css-->
</head>

<body>
<!-- Header Start -->
<header>
    <!-- Icon Section Start -->
    <div class="icon-section">
        <div class="container">
            <ul class="list-inline">
                <li>
                    <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                    </a>
                </li>
                <li>
                    <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                    </a>
                </li>
                <li>
                    <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                    </a>
                </li>
                <li>
                    <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                    </a>
                </li>
                <li>
                    <a href="#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                    </a>
                </li>
                <li class="pull-right">
                    <ul class="list-inline icon-position">
                        <li>
                            <a href="mailto:"><i class="livicon" data-name="mail" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                            <label class="hidden-xs"><a href="mailto:" class="text-white">สำนักงานแม่กองธรรม</a></label>
                        </li>
                        <li>
                            <a href="tel:"><i class="livicon" data-name="phone" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                            <label class="hidden-xs"><a href="tel:" class="text-white">-----</a></label>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- //Icon Section End -->
    <!-- Nav bar Start -->
    <nav class="navbar navbar-default container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    <span><a href="#">_<i class="livicon" data-name="responsive-menu" data-size="25" data-loop="true" data-c="#757b87" data-hc="#ccc"></i>
                    </a></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">สำนักงานแม่กองธรรมฯ
            <!--
                <img src="{--{ asset('assets/images/logo.png') }}" alt="logo" class="logo_position">-->
            </a>
        </div>
        <div class="collapse navbar-collapse" id="collapse">
            <ul class="nav navbar-nav navbar-right">
                <li {!! (Request::is('/') ? 'class="active"' : '') !!}><a href="{{ url('/') }}"> หน้าแรก</a>
                </li>
                <li {!! (Request::is('statistics') ? 'class="active"' : '') !!}><a href="{{ url('statistics') }}"> สถิติสนามสอบ</a>
                </li>
              
                {{--based on anyone login or not display menu items--}}
                @if(auth::guest())
                    <li><a href="{{ URL::to('login') }}">เข้าสู่ระบบ</a>
                    </li>
                    <!-- <li><a href="{{ URL::to('register') }}">Register</a> -->
                    </li>
                @else
                <li {!! (Request::is('home') ? 'class="active"' : '') !!}><a href="{{ URL::to('home') }}">แผงควบคุม</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                      <i class="fa fa-sign-out pull-right"></i>   Logout
                    </a>
    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                    
                @endif
            </ul>
        </div>
    </nav>
    <!-- Nav bar End -->
</header>
<!-- //Header End -->
<hr>
<!-- slider / breadcrumbs section -->

<div class="container-fluid">
<!-- Content -->
@yield('content')
</div>

<!-- //Footer Section End -->
<div class="copyright">
    <div class="container">
        <p class="text-center">ใช้เวลาในการสร้างหน้านี้ {{ number_format(microtime(true) - LARAVEL_START,2) }} วินาที</p>
    </div>
</div>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>
<!--global js starts-->
@yield('content_script')
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!--livicons-->
<script src="{{ asset('assets/js/raphael-min.js') }}"></script>
<script src="{{ asset('assets/js/livicons-1.4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/frontend/josh_frontend.js') }}"></script>
<!--global js end-->
<!-- begin page level js -->

<!-- end page level js -->
</body>

</html>
