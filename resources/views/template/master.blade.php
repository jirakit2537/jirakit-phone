<!DOCTYPE html>
<html lang="th">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <link rel="shortcut icon" href="{{{ URL::to('img/favicon.ico') }}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>


  <link href="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.5.0/jquery.nestable.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ URL::to('shantu/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ URL::to('shantu/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ URL::to('shantu/css/nprogress.css') }}" rel="stylesheet">

    <!-- FullCalendar -->
    <link href="{{ URL::to('shantu/css/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('shantu/css/fullcalendar.print.css') }}" rel="stylesheet" media="print">
    <!-- iCheck -->
    <link href="{{ URL::to('shantu/css/green.css') }}" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="{{ URL::to('shantu/css/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet"/>

    <!-- USE IN FORM -->
    <!-- bootstrap-wysiwyg -->
    <link href="{{ URL::to('shantu/css/prettify.min.css') }}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{ URL::to('shantu/css/select2.min.css') }}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{ URL::to('shantu/css/switchery.min.css') }}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{ URL::to('shantu/css/starrr.css') }}" rel="stylesheet">

    <!-- Ion.RangeSlider -->
    <link href="{{ URL::to('shantu/css/normalize.css') }}" rel="stylesheet">
    <link href="{{ URL::to('shantu/css/ion.rangeSlider.css') }}" rel="stylesheet">
    <link href="{{ URL::to('shantu/css/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="{{ URL::to('shantu/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">

    <link href="{{ URL::to('shantu/css/cropper.min.css') }}" rel="stylesheet">

    <!-- Dropzone.js -->
    <link href="{{ URL::to('shantu/css/dropzone.min.css') }}" rel="stylesheet">
    <!-- USE IN FORM -->

    <!-- bootstrap-progressbar -->
    <link href="{{ URL::to('shantu/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- PNotify -->
    <link href="{{ URL::to('shantu/css/pnotify.css') }}" rel="stylesheet">
    <link href="{{ URL::to('shantu/css/pnotify.buttons.css') }}" rel="stylesheet">
    <link href="{{ URL::to('shantu/css/pnotify.nonblock.css') }}" rel="stylesheet">

    <!-- JQVMap -->
    <link href="{{ URL::to('shantu/css/jqvmap.min.css') }}" rel="stylesheet"/>

    <!-- Animate.css
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css') }}" rel="stylesheet">
    -->

    <!-- Datatables -->
    <link href="{{ URL::to('shantu/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('shantu/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('shantu/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('shantu/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('shantu/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('jquery.Thailand.js/dependencies/JQL.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('jquery.Thailand.js/dependencies/typeahead.bundle.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::to('jquery.Thailand.js/dist/jquery.Thailand.min.css') }}">
    <script type="text/javascript" src="{{ URL::to('jquery.Thailand.js/dist/jquery.Thailand.min.js') }}"></script>

    <!-- Custom Theme Style -->
    <link href="{{ URL::to('shantu/css/custom.min.css') }}" rel="stylesheet">
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>--}}
    		   <script src="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.5.0/jquery.nestable.min.js"></script>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ URL::to('') }}" class="site_title"><i class="fa fa-database"></i> <span>{{ config('app.name') }}</span></a>
            </div>

            <div class="clearfix"></div>

            @include('template.profile_menu')

            <br />

            @include('template.sidebar')

            @include('template.menu_footer')
          </div>
        </div>

        @include('template.navigation')

        @yield('content')

        @include('template.footer')

      </div><!--/.main_container-->
    </div><!--/.container /.body-->

    <!-- jQuery -->
    <script src="{{ URL::to('shantu/js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ URL::to('shantu/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ URL::to('shantu/js/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ URL::to('shantu/js/nprogress.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ URL::to('shantu/js/custom.min.js') }}"></script>

    @yield('content_script')
  </body>
</html>
