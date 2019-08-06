<!-- menu profile quick info -->
<div class="profile clearfix">
  <div class="profile_pic">
    <img src="{{ URL::to('img/img.jpg') }}" alt="{{ Auth::user()->name }}" class="img-circle profile_img">
  </div>
  <div class="profile_info">
    <span>สวัสดีครับ,</span>
    <h2>{{ Auth::user()->name }}</h2>
  </div>
  <div class="clearfix"></div>
</div>
<!-- /menu profile quick info -->
