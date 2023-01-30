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
    <title>Creative - Premium Admin Template</title>
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

table {
  caption-side: bottom;
  border-collapse: collapse;
}



th {
  text-align: inherit;
  text-align: -webkit-match-parent;
}

thead,
tbody,
tfoot,
tr,
td,
th {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}

label {
  display: inline-block;
}

button {
  border-radius: 0;
}

button:focus:not(:focus-visible) {
  outline: 0;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
select {
  text-transform: none;
}

[role=button] {
  cursor: pointer;
}

select {
  word-wrap: normal;
}
select:disabled {
  opacity: 1;
}

[list]::-webkit-calendar-picker-indicator {
  display: none;
}

button,
[type=button],
[type=reset],
[type=submit] {
  -webkit-appearance: button;
}
button:not(:disabled),
[type=button]:not(:disabled),
[type=reset]:not(:disabled),
[type=submit]:not(:disabled) {
  cursor: pointer;
}

::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

textarea {
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  float: left;
  width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: calc(1.275rem + 0.3vw);
  line-height: inherit;
}
@media (min-width: 1200px) {
  legend {
    font-size: 1.5rem;
  }
}
legend + * {
  clear: left;
}

::-webkit-datetime-edit-fields-wrapper,
::-webkit-datetime-edit-text,
::-webkit-datetime-edit-minute,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-year-field {
  padding: 0;
}

::-webkit-inner-spin-button {
  height: auto;
}

[type=search] {
  outline-offset: -2px;
  -webkit-appearance: textfield;
}

.table, .dataTable-table {
  --bs-table-bg: transparent;
  --bs-table-accent-bg: transparent;
  --bs-table-striped-color: #212529;
  --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
  --bs-table-active-color: #212529;
  --bs-table-active-bg: rgba(0, 0, 0, 0.1);
  --bs-table-hover-color: #212529;
  --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
  vertical-align: top;
  border-color: #dee2e6;
}
.table > :not(caption) > * > *, .dataTable-table > :not(caption) > * > * {
  padding: 0.5rem 0.5rem;
  background-color: var(--bs-table-bg);
  border-bottom-width: 1px;
  box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}
.table > tbody, .dataTable-table > tbody {
  vertical-align: inherit;
}
.table > thead, .dataTable-table > thead {
  vertical-align: bottom;
}
.table > :not(:first-child), .dataTable-table > :not(:first-child) {
  border-top: 2px solid currentColor;
}

.caption-top {
  caption-side: top;
}

.table-sm > :not(caption) > * > * {
  padding: 0.25rem 0.25rem;
}

.table-bordered > :not(caption) > *, .dataTable-table > :not(caption) > * {
  border-width: 1px 0;
}
.table-bordered > :not(caption) > * > *, .dataTable-table > :not(caption) > * > * {
  border-width: 0 1px;
}

.table-borderless > :not(caption) > * > * {
  border-bottom-width: 0;
}
.table-borderless > :not(:first-child) {
  border-top-width: 0;
}

.table-striped > tbody > tr:nth-of-type(odd) > * {
  --bs-table-accent-bg: var(--bs-table-striped-bg);
  color: var(--bs-table-striped-color);
}

.table-active {
  --bs-table-accent-bg: var(--bs-table-active-bg);
  color: var(--bs-table-active-color);
}

.table-hover > tbody > tr:hover > *, .dataTable-table > tbody > tr:hover > * {
  --bs-table-accent-bg: var(--bs-table-hover-bg);
  color: var(--bs-table-hover-color);
}

.table-primary {
  --bs-table-bg: #cfe2ff;
  --bs-table-striped-bg: #c5d7f2;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #bacbe6;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #bfd1ec;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #bacbe6;
}

.table-secondary {
  --bs-table-bg: #e2e3e5;
  --bs-table-striped-bg: #d7d8da;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #cbccce;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #d1d2d4;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #cbccce;
}

.table-success {
  --bs-table-bg: #d1e7dd;
  --bs-table-striped-bg: #c7dbd2;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #bcd0c7;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #c1d6cc;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #bcd0c7;
}

.table-info {
  --bs-table-bg: #cff4fc;
  --bs-table-striped-bg: #c5e8ef;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #badce3;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #bfe2e9;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #badce3;
}

.table-warning {
  --bs-table-bg: #fff3cd;
  --bs-table-striped-bg: #f2e7c3;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #e6dbb9;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #ece1be;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #e6dbb9;
}

.table-danger {
  --bs-table-bg: #f8d7da;
  --bs-table-striped-bg: #eccccf;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #dfc2c4;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #e5c7ca;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #dfc2c4;
}

.table-light {
  --bs-table-bg: #f8f9fa;
  --bs-table-striped-bg: #ecedee;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #dfe0e1;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #e5e6e7;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #dfe0e1;
}

.table-dark {
  --bs-table-bg: #212529;
  --bs-table-striped-bg: #2c3034;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: #373b3e;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #323539;
  --bs-table-hover-color: #fff;
  color: #fff;
  border-color: #373b3e;
}

.table-responsive, .dataTable-wrapper .dataTable-container {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 767.98px) {
  .table-responsive-md {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .dataTable-search{
    width:100%;
  }
  .btn-group{
    width:110%;
  }
}
@media (max-width: 991.98px) {
  .table-responsive-lg {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 1199.98px) {
  .table-responsive-xl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 1399.98px) {
  .table-responsive-xxl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}





.dataTable-wrapper .dataTable-container {
  font-size: 0.875rem;
}

.dataTable-wrapper.no-header .dataTable-container {
  border-top: none;
}

.dataTable-wrapper.no-footer .dataTable-container {
  border-bottom: none;
}

.dataTable-top {
  padding: 0 0 1rem;
}

.dataTable-bottom {
  padding: 0;
}

.dataTable-top > nav:first-child,
.dataTable-top > div:first-child,
.dataTable-bottom > nav:first-child,
.dataTable-bottom > div:first-child {
  float: left;
}

.dataTable-top > nav:last-child,
.dataTable-top > div:last-child,
.dataTable-bottom > nav:last-child,
.dataTable-bottom > div:last-child {
  float: right;
}

.dataTable-selector {
  width: auto;
  display: inline-block;
  padding-left: 1.125rem;
  padding-right: 2.125rem;
  margin-right: 0.25rem;
}

.dataTable-info {
  margin: 7px 0;
}

/* PAGER */
.pagination, .dataTable-pagination ul {
  display: flex;
  padding-left: 0;
  list-style: none;
}

.page-link, .dataTable-pagination a {
  position: relative;
  display: block;
  color: #0d6efd;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid #dee2e6;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .page-link, .dataTable-pagination a {
    transition: none;
  }
}
.page-link:hover, .dataTable-pagination a:hover {
  z-index: 2;
  color: #0a58ca;
  background-color: #e9ecef;
  border-color: #dee2e6;
}
.page-link:focus, .dataTable-pagination a:focus {
  z-index: 3;
  color: #0a58ca;
  background-color: #e9ecef;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.page-item:not(:first-child) .page-link, .page-item:not(:first-child) .dataTable-pagination a, .dataTable-pagination .page-item:not(:first-child) a, .dataTable-pagination li:not(:first-child) .page-link, .dataTable-pagination li:not(:first-child) a {
  margin-left: -1px;
}
.page-item.active .page-link, .page-item.active .dataTable-pagination a, .dataTable-pagination .page-item.active a, .dataTable-pagination li.active .page-link, .dataTable-pagination li.active a {
  z-index: 3;
  color: #fff;
  background-color: #0d6efd;
  border-color: #0d6efd;
}
.page-item.disabled .page-link, .page-item.disabled .dataTable-pagination a, .dataTable-pagination .page-item.disabled a, .dataTable-pagination li.disabled .page-link, .dataTable-pagination li.disabled a {
  color: #6c757d;
  pointer-events: none;
  background-color: #fff;
  border-color: #dee2e6;
}

.page-link, .dataTable-pagination a {
  padding: 0.375rem 0.75rem;
}

.page-item:first-child .page-link, .page-item:first-child .dataTable-pagination a, .dataTable-pagination .page-item:first-child a, .dataTable-pagination li:first-child .page-link, .dataTable-pagination li:first-child a {
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}
.page-item:last-child .page-link, .page-item:last-child .dataTable-pagination a, .dataTable-pagination .page-item:last-child a, .dataTable-pagination li:last-child .page-link, .dataTable-pagination li:last-child a {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

.pagination-lg .page-link, .pagination-lg .dataTable-pagination a, .dataTable-pagination .pagination-lg a {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
}
.pagination-lg .page-item:first-child .page-link, .pagination-lg .page-item:first-child .dataTable-pagination a, .dataTable-pagination .pagination-lg .page-item:first-child a, .pagination-lg .dataTable-pagination li:first-child .page-link, .pagination-lg .dataTable-pagination li:first-child a, .dataTable-pagination .pagination-lg li:first-child .page-link, .dataTable-pagination .pagination-lg li:first-child a {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}
.pagination-lg .page-item:last-child .page-link, .pagination-lg .page-item:last-child .dataTable-pagination a, .dataTable-pagination .pagination-lg .page-item:last-child a, .pagination-lg .dataTable-pagination li:last-child .page-link, .pagination-lg .dataTable-pagination li:last-child a, .dataTable-pagination .pagination-lg li:last-child .page-link, .dataTable-pagination .pagination-lg li:last-child a {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}

.pagination-sm .page-link, .pagination-sm .dataTable-pagination a, .dataTable-pagination .pagination-sm a {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
}
.pagination-sm .page-item:first-child .page-link, .pagination-sm .page-item:first-child .dataTable-pagination a, .dataTable-pagination .pagination-sm .page-item:first-child a, .pagination-sm .dataTable-pagination li:first-child .page-link, .pagination-sm .dataTable-pagination li:first-child a, .dataTable-pagination .pagination-sm li:first-child .page-link, .dataTable-pagination .pagination-sm li:first-child a {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
}
.pagination-sm .page-item:last-child .page-link, .pagination-sm .page-item:last-child .dataTable-pagination a, .dataTable-pagination .pagination-sm .page-item:last-child a, .pagination-sm .dataTable-pagination li:last-child .page-link, .pagination-sm .dataTable-pagination li:last-child a, .dataTable-pagination .pagination-sm li:last-child .page-link, .dataTable-pagination .pagination-sm li:last-child a {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
}


/* TABLE */
.dataTable-table {
  border-collapse: collapse;
}

.dataTable-table > tbody > tr > td,
.dataTable-table > tbody > tr > th,
.dataTable-table > tfoot > tr > td,
.dataTable-table > tfoot > tr > th,
.dataTable-table > thead > tr > td,
.dataTable-table > thead > tr > th {
  vertical-align: top;
  padding: 0.5rem 0.5rem;
}

.dataTable-table > thead > tr > th {
  vertical-align: bottom;
  text-align: left;
  border-bottom: none;
}

.dataTable-table > tfoot > tr > th {
  vertical-align: bottom;
  text-align: left;
}

.dataTable-table th {
  vertical-align: bottom;
  text-align: left;
}

.dataTable-table th a {
  text-decoration: none;
  color: inherit;
}

.dataTable-sorter {
  display: inline-block;
  height: 100%;
  position: relative;
  width: 100%;
  padding-right: 1rem;
}

.dataTable-sorter::before,
.dataTable-sorter::after {
  content: "";
  height: 0;
  width: 0;
  position: absolute;
  right: 4px;
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  opacity: 0.2;
}

.dataTable-sorter::before {
  bottom: 4px;
}

.dataTable-sorter::after {
  top: 0px;
}

.asc .dataTable-sorter::after,
.desc .dataTable-sorter::before {
  opacity: 0.6;
}

.dataTables-empty {
  text-align: center;
}

.dataTable-top::after,
.dataTable-bottom::after {
  clear: both;
  content: " ";
  display: table;
}

.btn-datatable {
  height: 20px !important;
  width: 20px !important;
  font-size: 0.75rem;
  border-radius: 0.25rem !important;
}
.inputfile{
  display:none;
}
.right{
  width :50%;
  min-height:100px;
  background-color:#EEEEEE;
  margin-left:1px;
  
}
.left{
  width :49%;
  min-height:100px;
  background-color:#EEEEEE;
  float:right;
}
.top{
  width :100%;
  min-height:100px;
  background-color:#EEEEEE;
 margin-bottom:3px;
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
                  <div class="card-body p-0">
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
             
              
              <li><a class="sidebar-header" href="#"><i data-feather="briefcase"></i><span>Coming Soon</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="comingsoon.html" target="_blank"><i class="fa fa-circle"></i>Coming Simple</a></li>
                  <li><a href="comingsoon-bg-video.html" target="_blank"><i class="fa fa-circle"></i>Coming with Bg video</a></li>
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
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/datatables-simple-demo.js')}}"></script>
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
            alert(id_ns)
            $.ajax({
                url:'http://localhost:8081/oracle/public/user_id',
                method:"GET",
                data:{id_ns:id_ns},
                dataType:'json',
                success:function(res){
                  let dev = '';
                 // console.log(res.data[0].last_mid_name)
                 dev = '<div class="top">'+
                                        '<img src="https://tiemchupanh.com/wp-content/uploads/2022/06/7gwy2noztxri00pn4761651507542924.jpg" alt="" style="margin-left:40%;display:block" width="20%" height="20%">'+
                                        '<input type="file" name="file" id="file" class="inputfile" />'+
                                        '<button style="margin-left:40%;margin-top:10px;width:20%" type="">'+'<label style="text-aline:center" for="file">Chỉnh Sửa'+'</label>'+'</button>'
                                      +'</div>'+
                                      '<div class="left">'+
                                          '<label>ID nhân sự:'+'</label>'+'<input class="form-control" type="text" name="" value="'+res.data[0].staff_code+'" disabled>'+'<br />'
                                          +'<label>Họ Tên:'+'</label>'+'<br />'+'<input type="text" class="form-control" name="" value="'+res.data[0].first_name+'" id="">'+'<br />'
                                          +'<label>Giới tính:'+'</label>'+'<input type="text" class="form-control" name="" value="Nam" id="">'+'<br />'+
                                          '<label>Loại chứng chỉ:'+'</label><input type="text" class="form-control" name="" value="CMND" id="">'+'<br />'+
                                          '<label>Ngày Sinh:'+'</label>'+'<input type="text" name="" class="form-control" value="'+res.data[0].first_name+'" id="">'+'<br />'+
                                          '<label>sinh trắc học:'+'</label>'+'<input type="text" name="" class="form-control" value="phong" id="">'+'<br />'
                                      +'</div>'+
                                      '<div class="right">'+
                                         ' <label>Phòng ban*:'+'</label>'+'<br />'+'<input class="form-control" type="text" name="" value="phong" id="">'+'<br />'+
                                          '<label>Họ:'+'</label>'+'<br />'+'<input type="text" class="form-control" name="" value="phong" id="">'+'<br />'+
                                          '<label>Số điện thoại:'+	'</label>'+'<input type="text" class="form-control" name="" value="phong" id="">'+'<br />'+
                                          '<label>Số chứng chỉ:'+	'</label>'+'<input type="text" class="form-control" name="" value="phong" id="">'+'<br />'+
                                          '<label>Email:'+'</label>'+'<br />'+'<input type="text" class="form-control" name="" value="phong" id="">'+'<br />'+
                                         ' <label>Số Thẻ:'+'</label>'+'<br />'+'<input type="text" class="form-control" name="" value="phong" id="">'+'<br />'+
                                      '</div>'
                 $(".modals-body").html(dev);
                }
            });
        });
          
      
        
       
     
  });

    </script>
  </body>
</html>
<div class="welcome-popup modal fade" id="loadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <div class="modal-body">
        <div class="modal-header"></div>
        <div class="contain p-50">
          <div class="text-center">
            <h3>Welcome to creative admin</h3>
            <p>start your project with developer friendly admin </p>
            <button class="btn btn-primary btn-lg txt-white" type="button" data-dismiss="modal" aria-label="Close">Get Started</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>