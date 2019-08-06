<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>เมนูทั่วไป</h3>
    <ul class="nav side-menu">
      <li><a href="{{ url('home') }}"><i class="fa fa-home"></i> หน้าแรก </a></li>
      {{-- <li><a><i class="fa fa-group"></i> ทําเนียบ <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="#">ประวัติ</a></li>
          <li><a href="#">เพิ่ม</a></li>
        </ul>
      </li> --}}

@role('Admin')
      <li><a><i class="fa fa-user"></i> ข้อมูลสมาชิก <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('users.index') }}">รายชื่อ</a></li>
          <li><a href="{{ route('users.create') }}">เพิ่มสมาชิก</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-user"></i> บทบาทสมาชิก <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('roles.index') }}">รายชื่อ</a></li>
          <li><a href="{{ route('roles.create') }}">เพิ่มบทบาท</a></li>
        </ul>
      </li>
@endrole
@role(['nation', 'Admin'])
      <li><a><i class="fa fa-user"></i> ต่างประเทศ <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('stitexam.index') }}">สถิติสอบรวมทั้งหมด</a></li>
          <li><a href="{{ route('explace.index') }}">สนามสอบ</a></li>
          <li><a href="{{ route('country.index') }}">ประเทศ</a></li>
          <li><a href="{{ route('level.index') }}">ระดับชั้นการศึกษา</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-user"></i> รายชื่อสำนักเรียน <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('offsnw.index') }}">รายชื่อสำนักเรียน</a></li>
          {{--<li><a href="{{ route('offsnw.create') }}">เพิ่มข้อมูล รออัพเดท</a></li>--}}

        </ul>
      </li>
      @endrole
      @role('Admin')
      <li><a><i class="fa fa-user"></i> ครู <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('template_pages.form') }}">General Form</a></li>
          <li><a href="{{ route('template_pages.form_advanced') }}">Advanced Components</a></li>
          <li><a href="{{ route('template_pages.form_validation') }}">Form Validation</a></li>
          <li><a href="{{ route('template_pages.form_wizards') }}">Form Wizard</a></li>
          <li><a href="{{ route('template_pages.form_upload') }}">Form Upload</a></li>
          <li><a href="{{ route('template_pages.form_buttons') }}">Form Buttons</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-desktop"></i> ตำแหน่ง <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('template_pages.general_elements') }}">General Elements</a></li>
          <li><a href="{{ route('template_pages.media_gallery') }}">Media Gallery</a></li>
          <li><a href="{{ route('template_pages.typography') }}">Typography</a></li>
          <li><a href="{{ route('template_pages.icons') }}">Icons</a></li>
          <li><a href="{{ route('template_pages.glyphicons') }}">Glyphicons</a></li>
          <li><a href="{{ route('template_pages.widgets') }}">Widgets</a></li>
          <li><a href="{{ route('template_pages.invoice') }}">Invoice</a></li>
          <li><a href="{{ route('template_pages.inbox') }}">Inbox</a></li>
          <li><a href="{{ route('template_pages.calendar') }}">Calendar</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-table"></i> ประวัติวัด <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="#">ประวัติวัด</a></li>
          <li><a href="#">เพิ่ม</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-bar-chart-o"></i> banner <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('template_pages.chartjs') }}">Chart JS</a></li>
          <li><a href="{{ route('template_pages.chartjs2') }}">Chart JS2</a></li>
          <li><a href="{{ route('template_pages.morisjs') }}">Moris JS</a></li>
          <li><a href="{{ route('template_pages.echarts') }}">ECharts</a></li>
          <li><a href="{{ route('template_pages.other_charts') }}">Other Charts</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-clone"></i> user <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('template_pages.fixed_sidebar') }}">Fixed Sidebar</a></li>
          <li><a href="{{ route('template_pages.fixed_footer') }}">Fixed Footer</a></li>
        </ul>
      </li>
      @endrole
    </ul>
  </div>


</div>
<!-- /sidebar menu -->
