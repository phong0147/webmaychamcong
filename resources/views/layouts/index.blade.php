<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Creative admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>HARD</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/feather-icon.css')}}">
    <!-- Plugins css start-->
     <!-- Plugins css start-->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/tree.css')}}">
    <!-- Plugins css Ends-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vector-map.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('assets/css/light-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    

  </head>
  <style>
    
    .hover{
      display:none;
    }
    ul.tree li {
    list-style-type: none;
    position: relative;
    margin-left:10px;
}
 
    

  ul .sub{
    margin-left:25px;
    margin-bottom:5px;
  }
  ul .lii{
    margin-top:5px;
  } 
  

  @charset "UTF-8";
/*!
* Start Bootstrap - SB Admin v7.0.4 (https://startbootstrap.com/template/sb-admin)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
*/
/*!
 * Bootstrap v5.1.3 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */


.btn-datatable {
  height: 20px !important;
  width: 20px !important;
  font-size: 0.75rem;
  border-radius: 0.25rem !important;
}
.inputfile{
  display:none;
}

.modals-body{
  width:100%;
  min-height:100px;
}
.modals-body label{
  font-weight:bold;
  
}
.clear{
  clear: both;
}

.search-wrapper {
    position: absolute;
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    top:115%;
    left:110%;
}
.search-wrapper.active {}

.search-wrapper .input-holder {
    overflow: hidden;
    height: 70px;
    background: rgba(255,255,255,0);
    border-radius:6px;
    position: relative;
    width:70px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.search-wrapper.active .input-holder {
    border-radius: 50px;
    width:450px;
    background: #ffffff;
    -webkit-transition: all .5s cubic-bezier(0.000, 0.105, 0.035, 1.570);
    -moz-transition: all .5s cubic-bezier(0.000, 0.105, 0.035, 1.570);
    transition: all .5s cubic-bezier(0.000, 0.105, 0.035, 1.570);
   
}

.search-wrapper .input-holder .search-input {
    width:100%;
    height: 50px;
    padding:0px 70px 0 20px;
    opacity: 0;
    position: absolute;
    top:0px;
    left:0px;
    background: transparent;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    border:none;
    outline:none;
    font-family:"Open Sans", Arial, Verdana;
    font-size: 16px;
    font-weight: 400;
    line-height: 20px;
    color:#FFF;
    -webkit-transform: translate(0, 60px);
    -moz-transform: translate(0, 60px);
    transform: translate(0, 60px);
    -webkit-transition: all .3s cubic-bezier(0.000, 0.105, 0.035, 1.570);
    -moz-transition: all .3s cubic-bezier(0.000, 0.105, 0.035, 1.570);
    transition: all .3s cubic-bezier(0.000, 0.105, 0.035, 1.570);

    -webkit-transition-delay: 0.3s;
    -moz-transition-delay: 0.3s;
    transition-delay: 0.3s;
}
.search-wrapper.active .input-holder .search-input {
    opacity: 1;
    -webkit-transform: translate(0, 10px);
    -moz-transform: translate(0, 10px);
    transform: translate(0, 10px);
}

.search-wrapper .input-holder .search-icon {
    width:80px;
    height:30px;
    border:none;
    border-radius:6px;
    background: #FFF;
    padding:0px;
    outline:none;
    position: relative;
    z-index: 2;
    float:right;
    cursor: pointer;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.search-wrapper.active .input-holder .search-icon {
    width: 50px;
    height:50px;
    margin: 10px;
    border-radius: 30px;
}
.search-wrapper .input-holder .search-icon span {
    width:22px;
    height:22px;
    display: inline-block;
    vertical-align: middle;
    position:relative;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    transform: rotate(45deg);
    -webkit-transition: all .4s cubic-bezier(0.650, -0.600, 0.240, 1.650);
    -moz-transition: all .4s cubic-bezier(0.650, -0.600, 0.240, 1.650);
    transition: all .4s cubic-bezier(0.650, -0.600, 0.240, 1.650);

}
.search-wrapper.active .input-holder .search-icon span {
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    transform: rotate(-45deg);
}
.search-wrapper .input-holder .search-icon span::before, .search-wrapper .input-holder .search-icon span::after {
    position: absolute;
    content:'';
}
.search-wrapper .input-holder .search-icon span::before {
    width: 4px;
    height: 11px;
    left: 9px;
    top: 18px;
    border-radius: 2px;
    background: aqua;
    color:black;

}
.search-wrapper .input-holder .search-icon span::after {
    width: 14px;
    height: 14px;
    left: 0px;
    top: 0px;
    border-radius: 16px;
    border: 4px solid aqua;
    color:black;
}

.search-wrapper .close {
    position: absolute;
    z-index: 1;
    top:0px;
    right:0px;
    width:25px;
    height:25px;
    cursor: pointer;
    -webkit-transform: rotate(-180deg);
    -moz-transform: rotate(-180deg);
    transform: rotate(-180deg);
    -webkit-transition: all .3s cubic-bezier(0.285, -0.450, 0.935, 0.110);
    -moz-transition: all .3s cubic-bezier(0.285, -0.450, 0.935, 0.110);
    transition: all .3s cubic-bezier(0.285, -0.450, 0.935, 0.110);
    -webkit-transition-delay: 0.2s;
    -moz-transition-delay: 0.2s;
    transition-delay: 0.2s;
    
}
.search-wrapper.active .close {
    right:-50px;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    transform: rotate(45deg);
    -webkit-transition: all .6s cubic-bezier(0.000, 0.105, 0.035, 1.570);
    -moz-transition: all .6s cubic-bezier(0.000, 0.105, 0.035, 1.570);
    transition: all .6s cubic-bezier(0.000, 0.105, 0.035, 1.570);
    -webkit-transition-delay: 0.5s;
    -moz-transition-delay: 0.5s;
    transition-delay: 0.5s;
}
.search-wrapper .close::before, .search-wrapper .close::after {
    position:absolute;
    content:'';
    background: #FFF;
    border-radius: 2px;
}
.search-wrapper .close::before {
    width: 5px;
    height: 25px;
    left: 10px;
    top: 0px;
}
.search-wrapper .close::after {
    width: 25px;
    height: 5px;
    left: 0px;
    top: 10px;
}
.search-wrapper .result-container {
    width: 100%;
    position: absolute;
    top:80px;
    left:0px;
    text-align: center;
    font-family: "Open Sans", Arial, Verdana;
    font-size: 14px;
    display:none;
    color:#B7B7B7;
}


@media screen and (max-width: 560px) {
    .search-wrapper.active .input-holder {width:200px;margin-left:-200px}
}

  </style>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="loader loader-7">
        <div class="line line1"></div>
        <div class="line line2"></div>
        <div class="line line3"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row" style="margin-left:-5px;margin-top:0px;">
          <div class="main-header-left d-lg-none">
            <div class="logo-wrapper"><a href="index.html"><img src="assets/images/creative-logo1.png" alt=""></a></div>
          </div>
          <div class="mobile-sidebar d-block">
            <div class="media-body text-right switch-sm">
              <label class="switch">
                <input id="sidebar-toggle" type="checkbox" checked="checked"><span class="switch-state"></span>
              </label>
            </div>
          </div>
          <div class="vertical-mobile-sidebar"><i class="fa fa-bars sidebar-bar"></i></div>
          <div class="nav-right col left-menu-header">
            <ul class="nav-menus-left">
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li>
                <div class="dropdown">
                  <img id="ns" src="{{asset('assets/images/person.png')}}" width="50px" height="30px" alt="">
                    <div class="dropdown-menu"><a class="dropdown-item"  href="#">Admin</a><a class="dropdown-item" href="#">Shopify</a><a class="dropdown-item" href="#">Ecommerce</a><a class="dropdown-item" href="#">Prestashop</a></div>
                </div>
              </li>
              <li>
                <div class="dropdown">
                <img id="cc" src="{{asset('assets/images/cc.png')}}" width="50px" height="30px" alt="">
                  <div class="dropdown-menu p-0">
                    <ul class="status-dropdown">
                      <li>
                        <a href=""><h6 class="mb-0">Ongoing Projects</h6></a>
                      </li>
                      <li>
                        <a href=""><p class="mb-0">HTML5 Validation Report</p></a>
                        
                      </li>
                      <li>
                       <a href=""> <p class="mb-0">Bootstrap Admin Templates</p></a>
                        
                      </li>
                      <li>
                      <a href=""> <p class="mb-0">Goggle Crome Extension</p></a>
                        
                      </li>
                      <li>
                      <a href=""><p class="mb-0">Clients Projects</p></a>
                        
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li>
                <div class="dropdown">
                <img id="tl" src="{{asset('assets/images/tl.png')}}" width="50px" height="30px" alt="">
                </div>
              </li>
            </ul>
            <div class="d-xl-none mobile-toggle-left pull-right"><i data-feather="more-horizontal"></i></div>
          </div>
         
        </div>
      </div>

      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="page-sidebar iconcolor-sidebar">
          <div class="main-header-left d-none d-lg-block">
            <div class="logo-wrapper"><a href="index.html"><img src="../assets/images/creative-logo.png" alt=""></a></div>
          </div>
        </div>
        <!-- Page Sidebar Ends-->
        <!-- Right sidebar Start-->
        
        <!-- Right sidebar Ends-->
        <div class="page-body" style="margin-top: 90px;z-index: 8;">
         
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-8 xl-100 box-col-12">
                <div class="card sales-overview">
                  <div style="z-index: 9;" class="card-body p-0">
                    @yield('users')
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- Container-fluid Ends-->
          
        </div>
                    
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2019 © Creative All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="page-sidebar iconcolor-sidebar">
          <div class="main-header-left d-none d-lg-block">
            <div class="logo-wrapper"><a href="index.html"><img src="assets/images/creative-logo.png" alt=""></a></div>
          </div>
          <div class="sidebar custom-scrollbar">
            <ul class="sidebar-menu">
                @foreach($parents_menu as $prents)
              <li <?php if($prents->menu_id =='hrs') echo "id='hrs'";
                  if($prents->menu_id =='hrt') echo "id='hrt'";
                  if($prents->menu_id =='hrp') echo "id='hrp'";
                  ?>><a class="sidebar-header" href="#"><i data-feather="home"></i><span>{{$prents->label}}</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                <?php if($prents->menu_id == 'hrs') { ?> 
                 @foreach($employs_menu as $item) 
                  <li><a href="#"><i class="fa fa-circle"></i>{{$item->label}}<i <?php if($item->menu_id == 'hr_setup') echo "class='fa fa-angle-down pull-right'"  ?> ></i></a>
                        @foreach($setting_qlnv as $key)
                            <?php if($item->menu_id == 'hr_setup') { ?>
                                <ul class="sidebar-submenu">
                                <li><a href="tab-bootstrap.html"><i class="fa fa-circle"></i>{{$key->label}}</a></li>
                                </ul>
                            <?php }?>
                        @endforeach
                </li>
                 @endforeach
                 <?php }?>
                 <?php if($prents->menu_id == 'hrt') { ?> 
                 @foreach($word_menu as $item) 

                  <li><a href="#"><i class="fa fa-circle"></i>{{$item->label}}<i <?php if($item->menu_id == 'qlcc_setup') echo "class='fa fa-angle-down pull-right'"  ?> ></i></a>
                        @foreach($setting_qlcc as $key)
                            <?php if($item->menu_id == 'qlcc_setup') { ?>
                                <ul class="sidebar-submenu">
                                <li><a href="tab-bootstrap.html"><i class="fa fa-circle"></i>{{$key->label}}</a></li>
                                </ul>
                            <?php }?>
                            @endforeach
                         
                </li>
                 @endforeach
                 <?php }?>
                 <?php if($prents->menu_id == 'hrp') { ?> 
                 @foreach($salary_menu as $item) 
                  <li><a href="#"><i class="fa fa-circle"></i>{{$item->label}}<i <?php if($item->menu_id == 'qltl_setup') echo "class='fa fa-angle-down pull-right'"  ?> ></i></a>
                        @foreach($setting_qltl as $key)
                            <?php if($item->menu_id == 'qltl_setup') { ?>
                                <ul class="sidebar-submenu">
                                <li><a href="tab-bootstrap.html"><i class="fa fa-circle"></i>{{$key->label}}</a></li>
                                </ul>
                            <?php }?>
                        @endforeach
                    </li>
                 @endforeach
                 <?php }?>
                </ul>
              </li>
              @endforeach
             
              
              <li><a class="sidebar-header" href="#"><i data-feather="briefcase"></i><span>Tài Khoản</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="comingsoon.html" target="_blank"><i class="fa fa-circle"></i>Đổi Mật Khẩu</a></li>
                  <li><a href="{{route('logout')}}" target="_blank"><i class="fa fa-circle"></i>Đăng Xuất</a></li>
                  <li><a href="comingsoon-bg-img.html" target="_blank"><i class="fa fa-circle"></i>Coming with Bg Image</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="maintenance.html" target="_blank"><i data-feather="settings"></i><span> Maintenance</span></a></li>
            </ul>
          </div>
        </div>
    </div>
  </div>    
        <!-- Page Sidebar Ends-->
        <!-- Right sidebar Start-->
        
        <!-- Right sidebar Ends-->
            <!-- latest jquery-->
    <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('assets/js/config.js')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('assets/js/chart/chartjs/chart.min.js')}}"></script>
    <script src="{{asset('assets/js/chart/chartist/chartist.js')}}"></script>
    <script src="{{asset('assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
    <script src="{{asset('assets/js/chart/knob/knob.min.js')}}"></script>
    <script src="{{asset('assets/js/chart/knob/knob-chart.js')}}"></script>
    <script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
    <script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
    <script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
    <script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
    <script src="{{asset('assets/js/notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('assets/js/vector-map/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js')}}"></script>
    <script src="{{asset('assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js')}}"></script>
    <script src="{{asset('assets/js/vector-map/map/jquery-jvectormap-au-mill.js')}}"></script>
    <script src="{{asset('assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js')}}"></script>
    <script src="{{asset('assets/js/vector-map/map/jquery-jvectormap-in-mill.js')}}"></script>
    <script src="{{asset('assets/js/vector-map/map/jquery-jvectormap-asia-mill.js')}}"></script>
    <script src="{{asset('assets/js/dashboard/default.js')}}"></script>
    <script src="{{asset('assets/js/notify/index.js')}}"></script>
    <script src="{{asset('assets/js/chat-menu.js')}}"></script>
    <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
    <script src="{{asset('assets/js/animation/wow/wow.min.js')}}"></script>
    


    <script src="{{asset('assets/js/tree/jstree.min.js')}}"></script>
    <script src="{{asset('assets/js/tree/tree.js')}}"></script>
    <script src="{{asset('assets/js/chat-menu.js')}}"></script>
    <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/theme-customizer/customizer.js')}}"></script>
    <!-- login js-->
    <!-- Plugin used-->
    <script>
  $(document).ready(function(){
      $('#ns').click(function(){
           $('#hrt').removeClass('active').addClass('hover');
           $('#hrp').removeClass('active').addClass('hover');
           $('#hrs').addClass('active').removeClass('hover');
       });
       $('#cc').click(function(){
           $('#hrs').removeClass('active').addClass('hover');
           $('#hrp').removeClass('active').addClass('hover');
           $('#hrt').addClass('active').removeClass('hover');
       });
       $('#tl').click(function(){
           $('#hrs').removeClass('active').addClass('hover');
           $('#hrt').removeClass('active').addClass('hover');
           $('#hrp').addClass('active').removeClass('hover');
       });
       $(".Collapsable").click(function() {
 
          $(this).parent().children().toggle();
          $(this).toggle();

      });

      $(".info").click(function(){
            var id_ns = $(this).val();
            $.ajax({
                url:'http://localhost:8081/oracle/public/user_id',
                method:"GET",
                data:{id_ns:id_ns},
                dataType:'json',
                success:function(res){
                  let left = '';
                  let right = '';
                 console.log(res)
              
                left =  
               
                  
                            '<div class="left-l">'+
                                  '<br />'+
                                 ' <div>Mã NV:'+'</div>'+
                                  '<div>Mã Chấm:'+'</div>'+
                                  '<div>Họ Và Tên:'+'</div>'+
                                  '<div>Giới Tính:'+'</div>'+
                                  '<div>Bộ Phận:'+'</div>'+
                                  '<div>Quê Quán:'+'</div>'+
                                  '<div>Chức Vụ:'+'</div>'+
                                  '<div>Thường Trú:'+'</div>'+
                                  '<div>Địa Chỉ:'+'</div>'+
                                  '<div>Số ĐT:'+'</div>'+
                                  '<div>Số CMND:'+'</div>'+
                                  '<div>Thuế Cá Nhân:'+'</div>'+
                                  '<div>Hôn Nhân:'+'</div>'+
                                  '<div>Dân Tộc:'+'</div>'+
                                  '<div>Ngân Hàng:'+'</div>'+ 
                                  
                              '</div>'+
                              '<div class="left-r">'+
                                '<br />'+
                                '<div>'+'<input type="text" name="" value="'+res.data[0].staff_code+'" id="">'+
                                      '<span>Hiệu Lực:'+'<input  type="checkbox" name="" id="">'+'</span>'+
                                '</div>'+
                                '<div>'+
                                      '<input type="text" value="'+res.data[0].staff_code+'" name="" id="">'+
                                '</div>'+
                                '<div>'+'<input type="text" value="'+res.data[0].full_name+'" name="" id="">'+
                                      '<span>Đăng Ký Suất Ăn:'+'</span>'+'<input type="checkbox" name="" id="">'+
                                  '</div>'+
                                '<div>'+
                                      '<select>'+
                                          '<option value="">Nam'+'</option>'+
                                          '<option value="">Nữ'+'</option>'+
                                      '</select>'+
                                      '<span style="margin-left: 20%;">Ngày Sinh:'+'</span>'+'<input type="date" name="" id="">'+
                                    
                                  '</div>'+
                                  '<div>'+
                                    '<input type="text" name="" id="">'+
                                  '</div>'+
                                '<div>'+
                                  '<input value="'+res.data[0].contact_address+'" type="text" name="" id="">'+
                                      '<span >Chi Nhánh:'+'<input style="width: 17%;" type="text" name="" id="">'+'</span>'+
                                  '</div>'+
                                '<div>'+'<input type="text" value="Nhân Viên"  name="" id="">'+
                                      '<span>Nhóm:'+'</span>'+'<input style="width: 5.5%;" type="text" name="" id="">'+'<br />'+

                                  '</div>'+
                                '<div>'+'<input style="width: 87%;" value="'+res.data[0].contact_address+'" type="text" name="" id="">'+'</div>'+
                                '<div>'+'<input style="width: 87%;" value="'+res.data[0].contact_address+'" type="text" name="" id="">'+'</div>'+
                                '<div>'+
                                    '<input style="width: 28%;" value="'+res.data[0].cell_phone+'" type="text" name="" id="">'+
                                    '<span>Email:'+'</span>'+'<input type="text" name="" id="">'+
                                '</div>'+
                                '<div>'+
                                    '<input value="'+res.data[0].career_level+'" style="width: 28%;" type="text" name="" id="">'+
                                    '<span>Ngày Cấp:'+'</span>'+'<input value="'+res.data[0].attend_date+'" style="width: 40%;" type="date" name="" id="">'+
                                '</div>'+
                                '<div>'+
                                    '<input style="width: 28%;" type="text" name="" id="">'+
                                    '<span>Ngày Cấp:'+'</span>'+'<input style="width: 40%;" type="date" name="" id="">'+
                                '</div>'
                                '<div>'+
                                    '<input style="width: 28%;" type="text" name="" id="">'+
                                    '<span>Số Con:'+'</span>'+'<select name="" id="">'+
                                      '<option value="">1'+'</option>'+
                                   ' </select>'+
                                    '<span>Người Phụ Thuộc:'+'</span>'+'<select name="" id="">'+
                                      '<option value="">1'+'</option>'+
                                    '</select>'+
                                '</div>'+


           
                                '</div>'
                        
                       
                            right =    '<div class="right-l">'+
                                    '<br />'+
                                        '<div>Ngày Vào Làm:'+'</div>'+
                                        '<div>Sổ BHXH:'+'</div>'+
                                        '<div>Ngày Lập BHXH:'+'</div>'+
                                        '<div>Trình Độ Học Vấn:'+'</div>'+
                                        '<div>Chuyên Môn:'+'</div>'+
                                        '<div>Ngày Thôi Việc:'+'</div>'+
                                        '<div>Lưu Động Dự Án:'+'</div>'+
                                        '<div>Không Tính Công:'+'</div>'+
                                        '<div>Bù Đi Trễ Về Trễ:'+'</div>'+ 
                                '</div>'+
                                '<div class="right-r">'+
                                   ' <div style="display: flex;" class="flex">'+
                                        '<div class="vip">'+
                                            '<br />'+
                                            '<div>'+'<input value="'+res.data[0].created_date+'" type="date" name="" id="">'+'</div>'+
                                            '<div>'+'<input value="'+res.data[0].group_id+'" type="text" name="" id="">'+'</div>'+
                                            '<div>'+'<input value="'+res.data[0].id_card_issued_date+'" type="text" name="" id="">'+'</div>' + 
                                            '<div>'+'<input value="'+res.data[0].created_date+'" type="text" name="" id="">'+'</div>' +     
                                        '</div>'+
                                        '<div class="picture">'+
                                           ' <img width="150px" height="150px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVvvRRAYy4cthdn6wpIEYrVNOJkYfJaxJsGnBCL4b2_i8hBjfmK_vbdzahYUb_s1nd63E&usqp=CAU" alt="">'+
                                            '<button style="margin-left:25%; width:100px">Chỉnh Sửa'+'</button>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div>'+'<input type="text" name="" id="">'+'</div>'+
                                    '<div>'+'<input type="date" name="" id="">'+'</div>'+
                                    '<div>'+'<input type="checkbox" name="" id="">'+
                                        '<span>Tính Công Đủ Tháng:'+'</span>'+'<input type="checkbox" name="" id="">'+
                                        '<span>Có Làm Tính Đủ Giờ:'+'</span>'+'<input type="checkbox" name="" id="">'+
                                    '</div>'+  
                                    '<div>'+'<input type="checkbox" name="" id="">'+
                                        '<span>Công Nhật:'+'</span>'+'<input type="checkbox" name="" id="">'+
                                        '<span>Số RFID Thẻ:'+'</span>'+'<input style="width:20%" type="text" name="" id="">'+
                                    '</div>'+ 
                                   ' <div>'+'<input type="checkbox" name="" id="">'+
                                        '<span>Không Tăng Ca:'+'</span>'+'<input type="checkbox" name="" id="">'+
                                       ' <span>Ca:'+'</span>'+'<input type="text" name="" id="">'+
                                    '</div>'+
                               ' </div> '
                           
                                       
                 $(".lef").html(left);
                 $(".rig").html(right);
                }
            });
        });
          
      
        
       
     
  });
  function searchToggle(obj, evt){
    var container = $(obj).closest('.search-wrapper');

    if(!container.hasClass('active')){
            container.addClass('active');
            evt.preventDefault();
    }
    else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
            container.removeClass('active');
            // clear input
            container.find('.search-input').val('');
            // clear and hide result container when we press close
            container.find('.result-container').fadeOut(100, function(){$(this).empty();});
    }
}

function submitFn(obj, evt){
    value = $(obj).find('.search-input').val().trim();

    _html = "Searching for: ";
    if(!value.length){
        _html = "Ehem, I can't search nothing";
    }
    else{
        _html += "<b>" + value + "</b>";
    }

    $(obj).find('.result-container').html('<span>' + _html + '</span>');
    $(obj).find('.result-container').fadeIn(100);

    evt.preventDefault();
}

    </script>
  </body>
</html>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div style="width: 150%;margin-left: -150px;" class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Thêm mới</h4>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                      <div class="main">
                          <div class="left">
                              <div class="left-l">
                                  <br />
                                  <div>Mã NV:</div>
                                  <div>Mã Chấm:</div>
                                  <div>Họ Và Tên:</div>
                                  <div>Giới Tính:</div>
                                  <div>Bộ Phận:</div>
                                  <div>Quê Quán:</div>
                                  <div>Chức Vụ:</div>
                                  <div>Thường Trú:</div>
                                  <div>Địa Chỉ:</div>
                                  <div>Số ĐT:</div>
                                  <div>Số CMND:</div>
                                  <div>Thuế Cá Nhân:</div>
                                  <div>Hôn Nhân:</div>
                                  <div>Dân Tộc:</div>
                                  <div>Ngân Hàng:</div> 
                                  
                              </div>
                              <div class="left-r">
                                <br />
                                <div><input type="text" name="" id="">
                                      <span>Hiệu Lực:<input  type="checkbox" name="" id=""></span>
                                    
                                </div>
                                <div>
                                      <input type="text" name="" id="">
                                </div>
                                <div><input type="text" name="" id="">
                                      <span>Đăng Ký Suất Ăn:</span><input type="checkbox" name="" id="">
                                  </div>
                                <div>
                                      <select>
                                          <option value="">Nam</option>
                                          <option value="">Nữ</option>
                                      </select>
                                      <span style="margin-left: 20%;">Ngày Sinh:</span><input type="date" name="" id="">
                                    
                                  </div>
                                  <div>
                                    <input type="text" name="" id=""></span>
                                  </div>
                                <div>
                                  <input type="text" name="" id="">
                                      <span >Chi Nhánh:<input style="width: 17%;" type="text" name="" id=""></span>
                                  </div>
                                <div><input type="text" name="" id="">
                                      <span>Nhóm:</span><input style="width: 5.5%;" type="text" name="" id=""><br />

                                  </div>
                                <div><input style="width: 87%;" type="text" name="" id=""></div>
                                <div><input style="width: 87%;" type="text" name="" id=""></div>
                                <div>
                                    <input style="width: 28%;" type="text" name="" id="">
                                    <span>Email:</span><input type="text" name="" id="">
                                </div>
                                <div>
                                    <input style="width: 28%;" type="text" name="" id="">
                                    <span>Ngày Cấp:</span><input style="width: 40%;" type="date" name="" id="">
                                </div>
                                <div>
                                    <input style="width: 28%;" type="text" name="" id="">
                                    <span>Ngày Cấp:</span><input style="width: 40%;" type="date" name="" id="">
                                </div>
                                <div>
                                    <input style="width: 28%;" type="text" name="" id="">
                                    <span>Số Con:</span><select name="" id="">
                                      <option value="">1</option>
                                    </select>
                                    <span>Người Phụ Thuộc:</span><select name="" id="">
                                      <option value="">1</option>
                                    </select>
                                </div>


           
                                </div>
                            </div>
                            <div class="right">
                                <div class="right-l">
                                    <br />
                                    
                                        <div>Ngày Vào Làm:</div>
                                        <div>Sổ BHXH:</div>
                                        <div>Ngày Lập BHXH:</div>
                                        <div>Trình Độ Học Vấn:</div>
                                        <div>Chuyên Môn:</div>
                                    <div>Ngày Thôi Việc:</div>
                                    <div>Lưu Động Dự Án:</div>
                                    <div>Không Tính Công:</div>
                                    <div>Bù Đi Trễ Về Trễ:</div>
                                    
                                    
                                </div>
                                <div class="right-r">
                                    <div style="display: flex;" class="flex">
                                        <div class="vip">
                                            <br />
                                            <div><input type="date" name="" id=""></div>
                                            <div><input type="text" name="" id=""></div>
                                            <div><input type="text" name="" id=""></div>  
                                            <div><input type="text" name="" id=""></div>      
                                        </div>
                                        <div class="picture">
                                            <img width="150px" height="150px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVvvRRAYy4cthdn6wpIEYrVNOJkYfJaxJsGnBCL4b2_i8hBjfmK_vbdzahYUb_s1nd63E&usqp=CAU" alt="">
                                            <button style="margin-left:25%; width:100px">Chỉnh Sửa</button>
                                        </div>
                                    </div>
                                    <div><input type="text" name="" id=""></div>
                                    <div><input type="date" name="" id=""></div>
                                    <div><input type="checkbox" name="" id="">
                                        <span>Tính Công Đủ Tháng:</span><input type="checkbox" name="" id="">
                                        <span>Có Làm Tính Đủ Giờ:</span><input type="checkbox" name="" id="">
                                    </div>  
                                    <div><input type="checkbox" name="" id="">
                                        <span>Công Nhật:</span><input type="checkbox" name="" id="">
                                        <span>Số RFID Thẻ:</span><input style="width:20%" type="text" name="" id="">
                                    </div> 
                                    <div><input type="checkbox" name="" id="">
                                        <span>Không Tăng Ca:</span><input type="checkbox" name="" id="">
                                        <span>Ca:</span><input type="text" name="" id="">
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="clear"></div>
                        </div>
                      </div>
                      <div style="margin:auto" class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng</button>
                            <button class="btn btn-primary" type="button">Xác Nhận</button>
                          </div>
                    </div>
                  </div>
</div>
<!-- poup update nv -->
                    <div class="modal fade" id="exampleModalfat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div style="width: 200%;margin-left: -150px;" class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Thông Tin Nhân Sự</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div id="contain" class="modal-body">
                              <div class="main">
                                  <div class="left lef">

                                  </div>
                                  <div class="right rig">

                                  </div>
                              </div>
                          
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng</button>
                            <button class="btn btn-primary" type="button">OK</button>
                          </div>
                        </div>
                      </div>
                    </div>
                 