<?php
    $id=Session::get('id');
    $st_info=DB::table('add_user_table')->where('id',$id)
                                    ->first();
 ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:31:57 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>user_login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('node_modules/rickshaw/rickshaw.min.css')}}" />
  <link rel="stylesheet" href="{{asset('bower_components/chartist/dist/chartist.min.css')}}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('images/favicon.html')}}" />
  <link rel="stylesheet" href="{{asset('css/lightbox.css')}}">
</head>
<body class="sidebar-dark">
  <!-- partial:partials/_settings-panel.html -->
  <div class="settings-panel">
    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="layouts-tab" data-toggle="tab" href="#layouts-section" role="tab" aria-controls="layouts-section" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section"><i class="mdi mdi-account"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="close-button" href="#"><i class="mdi mdi-window-close"></i></a>
      </li>
    </ul>

  </div>
  <!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{URL::to('/st_login/successlogin')}}"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav ml-lg-auto">

          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-outline"></i>
              <span class="count bg-danger"></span>
            </a>
            <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown">
              <a class="dropdown-item" href="{{URL::to('/st_profile')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">

                </div>
                <div class="sender">
                  <p class="Sende-name">View Profile</p>
                </div>
              </a>
              <a class="dropdown-item" href="{{URL::to('/st_setting')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">

                </div>
                <div class="sender">
                  <p class="Sende-name">Settings</p>

                </div>
              </a>
              <a class="dropdown-item" href="{{URL::to('/st_logout')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">

                </div>
                <div class="sender">
                  <p class="Sende-name">Logout</p>

                </div>
              </a>

            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
           <div class="profile">
              <img src="{{URL::to($st_info->photo)}}" alt="">
            </div>
            <div class="details">
              <p class="user-name">{{strtoupper($st_info->name)}}</p>
            </div>
          </div>
          <ul class="nav">
            <!--main pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Main</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/st_all_lab')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">All Lab Equipments</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="sidebar_layouts">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title">Laboratory</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="sidebar_layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/st_software')}}">Software Lab</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/st_hardware')}}">Hardware Lab</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/st_network')}}">Network Lab</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/st_profile')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/st_setting')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Settings</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/st_logout')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">logout</span>
              </a>
            </li>

          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
          @yield('content');
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->


  <!-- plugins:js -->
  <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('node_modules/flot/jquery.flot.js')}}"></script>
  <script src="{{asset('node_modules/flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('node_modules/flot/jquery.flot.categories.js')}}"></script>
  <script src="{{asset('node_modules/flot/jquery.flot.pie.js')}}"></script>
  <script src="{{asset('node_modules/rickshaw/vendor/d3.v3.js')}}"></script>
  <script src="{{asset('node_modules/rickshaw/rickshaw.min.js')}}"></script>
  <script src="{{asset('bower_components/chartist/dist/chartist.min.js')}}"></script>
  <script src="{{asset('node_modules/chartist-plugin-legend/chartist-plugin-legend.js')}}"></script>
  <script src="{{asset('node_modules/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

  <script src="{{asset('node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('js/data-table.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/misc.js')}}"></script>
  <script src="{{asset('js/settings.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('js/dashboard_1.js')}}"></script>
  <script src="{{asset('js/lightbox.js')}}"> </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

</style>
<script type="text/javascript">
   $(document).ready(function(){
     $('ul#galary li').on('mouseenter',function(){
       var title=$(this).children().data('title');
       var desc=$(this).children().data('desc');

       if(desc==null){
         desc='Click to Enlarge';
       }
       if(title==null){
         title='';
       }

       $(this).append('<div class="overlay"></div>');

       var overlay=$(this).children('.overlay');

       overlay.html('<h3>'+title+'</h3><p>'+desc+'</p>');
       overlay.fadeIn(800);
     });
     $('ul#galary li').on('mouseleave',function(){
       $(this).append('<div class="overlay"></div>');

       var overlay=$(this).children('.overlay');

       overlay.fadeOut(500);
     });
   });




</script>

<script>
$(document).on("click","#delete",function(e){
  e.preventDefault();
  var link=$(this).attr("href");
  bootbox.confirm("Are you want to delete!",function(confirmed){
    if(confirmed){
      window.location.href=link;
    };
  });
});
</script>

</body>

</html>
