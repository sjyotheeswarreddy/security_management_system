!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/user-management-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Apr 2022 11:25:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>Management Admin</title>
<link rel="icon" href="img/mini_logo.png" type="image/png">

<link rel="stylesheet" href="css/bootstrap.min.css" />

<link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

<link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

<link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

<link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

<link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
<link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

<link rel="stylesheet" href="vendors/datepicker/date-picker.css" />
<link rel="stylesheet" href="vendors/vectormap-home/vectormap-2.0.2.css" />

<link rel="stylesheet" href="vendors/scroll/scrollable.css" />

<link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
<link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

<link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

<link rel="stylesheet" href="vendors/morris/morris.css">

<link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

<link rel="stylesheet" href="css/metisMenu.css">

<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>
<body class="crm_body_bg">


<nav class="sidebar dark_sidebar">
<div class="logo d-flex justify-content-between">
<a class="large_logo" href="index-2.html"><img src="img/logo_white.png" alt=""></a>
<a class="small_logo" href="index-2.html"><img src="img/mini_logo.png" alt=""></a>
<div class="sidebar_close_icon d-lg-none">
<i class="ti-close"></i>
</div>
</div>
<ul id="sidebar_menu">
<li class="">
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="img/menu-icon/dashboard.svg" alt="">
</div>
<div class="nav_title">
<span>Add Users</span>
</div>
</a>
<ul>
<li><a href="add_new_user.html">Offices</a></li>
<li><a href="add_new_user.html">Employees</a></li>
<li><a href="add_new_user.html">Managers</a></li>
<li><a href="add_new_user.html">Security</a></li>
<li><a href="add_new_user.html">Canteen</a></li>
</ul>
</li>
<li class="">
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="img/menu-icon/2.svg" alt="">
</div>
<div class="nav_title">
<span>User Management </span>
</div>
</a>
<ul>
<li><a href="user_list.html">Offices</a></li>
<li><a href="user_list.html">Employees</a></li>
<li><a href="user_list.html">Managers</a></li>
<li><a href="user_list.html">Security</a></li>
<li><a href="user_list.html">Canteen</a></li>
</ul>
</li>
<li class="">
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="img/menu-icon/3.svg" alt="">
</div>
<div class="nav_title">
<span>Notifications</span>
</div>
</a>
<ul>
<li><a href="role_permissions.html">All</a></li>
<li><a href="role_permissions.html">Offices</a></li>
<li><a href="role_permissions.html">Employees</a></li>
<li><a href="role_permissions.html">Managers</a></li>
<li><a href="role_permissions.html">Security</a></li>
<li><a href="role_permissions.html">Canteen</a></li>

</ul>
</li>
<li class="">
<a class="has-arrow" href="Board.html" aria-expanded="false">
<div class="nav_icon_small">
<img src="img/menu-icon/4.svg" alt="">
</div>
<div class="nav_title">
<span>Complaints</span>
</div>
</a>
</li>
<li class="">
<a class="has-arrow" href="visitors_list.html" aria-expanded="false">
<div class="nav_icon_small">
<img src="img/menu-icon/11.svg" alt="">
</div>
<div class="nav_title">
<span>Visitors List</span>
</div>
</a>

</li>

<li class="">
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="img/menu-icon/3.svg" alt="">
</div>
<div class="nav_title">
<span>Canteen</span>
</div>
</a>
<ul>
<li><a href="Cart.html">Menu</a></li>
<li><a href="Checkout.html">Orders</a></li>

</ul>
</li>


</ul>
</nav>

<section class="main_content dashboard_part large_header_bg">

<div class="container-fluid g-0">
<div class="row">
<div class="col-lg-12 p-0 ">
<div class="header_iner d-flex justify-content-between align-items-center">
<div class="sidebar_icon d-lg-none">
<i class="ti-menu"></i>
 </div>
<div class="line_icon open_miniSide d-none d-lg-block">
<img src="img/line_img.png" alt="">
</div>
<div class="serach_field-area d-flex align-items-center">
<div class="search_inner">
<form action="#">
<div class="search_field">
<input type="text" placeholder="Search">
</div>
<button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
</form>
</div>
</div>
<div class="header_right d-flex justify-content-between align-items-center">
<div class="header_notification_warp d-flex align-items-center">
<li>
<a class="bell_notification_clicker" href="#"> <img src="img/icon/bell.svg" alt="">
<span>2</span>
</a>

<div class="Menu_NOtification_Wrap">
<div class="notification_Header">
<h4>Notifications</h4>
</div>
<div class="Notification_body">



<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/4.png" alt=""></a>
</div>
<div class="notify_content">
<a href="#"><h5>Awesome packages</h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>


</div>
<div class="nofity_footer">
<div class="submit_button text-center pt_20">
<a href="#" class="btn_1">See More</a>
</div>
</div>
</div>

</li>

</div>
<div class="profile_info">
<img src="img/client_img.png" alt="#">
<div class="profile_info_iner">
<div class="profile_author_name">
<h5>Admin</h5>
</div>
<div class="profile_info_details">
<a href="#">My Profile </a>
<a href="#">Log Out </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>




<div class="main_content_iner overly_inner ">
<div class="container-fluid p-0 ">

<div class="row">
<div class="col-12">
<div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
<div class="page_title_left d-flex align-items-center">
<h3 class="f_s_25 f_w_700 dark_text mr_30">Dashboard</h3>
<ol class="breadcrumb page_bradcam mb-0">
<li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
<li class="breadcrumb-item active">Analytic</li>
</ol>
</div>
<div class="page_title_right">
<div class="page_date_button d-flex align-items-center">
<img src="img/icon/calender_icon.svg" alt="">
August 1, 2020 - August 31, 2020
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="white_card card_height_100 mb_30 pt-4">
<div class="white_card_body">
<div class="QA_section">
<div class="white_box_tittle list_header">
<h4>Role & Permissions</h4>
<div class="box_right d-flex lms_block">
<div class="serach_field_2">
<div class="search_inner">
<form Active="#">
<div class="search_field">
<input type="text" placeholder="Search content here...">
</div>
<button type="submit"> <i class="ti-search"></i> </button>
</form>
</div>
</div>
<div class="add_button ms-2">
<a href="#" data-toggle="modal" data-target="#addcategory" class="btn_1">search</a>
</div>
</div>
</div>
<div class="QA_table mb_30">

<table class="table lms_table_active ">
<thead>
<tr>
<th scope="col">id</th>
<th scope="col">Admin Role</th>
<th scope="col">Status</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row"> <a href="#" class="question_content"> 1 </a></th>
<td>Subject</td>
<td>
<div class="checkbox_wrap d-flex align-items-center">
<label class="form-label lms_checkbox_1" for="course_1">
<input type="checkbox" id="course_1">
<div class="slider-check round"></div>
</label>
</div>
</td>
<td>
<div class="action_btns d-flex">
<a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
<a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
</div>
</td>
</tr>
 <tr>
<th scope="row"> <a href="#" class="question_content"> 2 </a></th>
<td>Message</td>
<td>
<div class="checkbox_wrap d-flex align-items-center">
<label class="form-label lms_checkbox_1" for="course_2">
<input type="checkbox" id="course_2">
<div class="slider-check round"></div>
</label>
</div>
</td>
<td>
<div class="action_btns d-flex">
<a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
<a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
</div>
</td>
</tr>
<tr>
<th scope="row"> <a href="#" class="question_content"> 3 </a></th>
<td>Image</td>
<td>
<div class="checkbox_wrap d-flex align-items-center">
<label class="form-label lms_checkbox_1" for="course_3">
<input type="checkbox" id="course_3">
<div class="slider-check round"></div>
</label>
</div>
</td>
<td>
<div class="action_btns d-flex">
<a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
<a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="footer_part">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="footer_iner text-center">
<p>Designed by<a href="http://sagarsoftwaresolution.com"> Sagar Software Solutions Pvt Ltd</a></p>
</div>
</div>
</div>
</div>
</div>
</section>





<div id="back-top" style="display: none;">
<a title="Go to Top" href="#">
<i class="ti-angle-up"></i>
</a>
</div>

<script src="js/jquery-3.4.1.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/metisMenu.js"></script>

<script src="vendors/count_up/jquery.waypoints.min.js"></script>

<script src="vendors/chartlist/Chart.min.js"></script>

<script src="vendors/count_up/jquery.counterup.min.js"></script>

<script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

<script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

<script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
<script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
<script src="vendors/datatable/js/buttons.flash.min.js"></script>
<script src="vendors/datatable/js/jszip.min.js"></script>
<script src="vendors/datatable/js/pdfmake.min.js"></script>
<script src="vendors/datatable/js/vfs_fonts.js"></script>
<script src="vendors/datatable/js/buttons.html5.min.js"></script>
<script src="vendors/datatable/js/buttons.print.min.js"></script>

<script src="vendors/datepicker/datepicker.js"></script>
<script src="vendors/datepicker/datepicker.en.js"></script>
<script src="vendors/datepicker/datepicker.custom.js"></script>
<script src="js/chart.min.js"></script>
<script src="vendors/chartjs/roundedBar.min.js"></script>

<script src="vendors/progressbar/jquery.barfiller.js"></script>

<script src="vendors/tagsinput/tagsinput.js"></script>

<script src="vendors/text_editor/summernote-bs4.js"></script>
<script src="vendors/am_chart/amcharts.js"></script>

<script src="vendors/scroll/perfect-scrollbar.min.js"></script>
<script src="vendors/scroll/scrollable-custom.js"></script>

<script src="vendors/vectormap-home/vectormap-2.0.2.min.js"></script>
<script src="vendors/vectormap-home/vectormap-world-mill-en.js"></script>

<script src="vendors/apex_chart/apex-chart2.js"></script>
<script src="vendors/apex_chart/apex_dashboard.js"></script>

<script src="vendors/chart_am/core.js"></script>
<script src="vendors/chart_am/charts.js"></script>
<script src="vendors/chart_am/animated.js"></script>
<script src="vendors/chart_am/kelly.js"></script>
<script src="vendors/chart_am/chart-custom.js"></script>

<script src="js/dashboard_init.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/user-management-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Apr 2022 11:27:02 GMT -->
</html>
