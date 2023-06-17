<?php
include_once('menu.php');
require_once("config.php");
/////echo '<script>alert("Login Successfull ")</script>';
?>
<?php
session_start();
$company1=$_SESSION['company'];

$result = mysqli_query($con, "SELECT * FROM users WHERE company='$company1'");

$res=mysqli_fetch_assoc($result);

$company=$res['company'];

?>
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
                    <?php
                    require 'config.php';
                    $sql = mysqli_query($con, "SELECT * FROM visitor WHERE status= 2 and company='$company'");
                    $count = mysqli_num_rows($sql);
                    ?>
                    <a class="large_logo" href="index.php"><img src="img/logo_white1.png" alt=""></a>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                            <li>
                                <a class="bell_notification_clicker" href="#"> <img src="img/icon/bell.svg" alt="">
                                <?php
                                    require 'config.php';
                                    $query = "SELECT id FROM notifications2 where status=0";
                                    $query_run = mysqli_query($con, $query);
                                    $row = mysqli_num_rows($query_run);
                                    // echo '<h4> ' . $row . '</h4>'
                                    $count +=$row
                                    ?>
                                <span>

                                        <?php
                                        echo $count;
                                        ?>
                                    </span>
                                </a>

                                <div class="Menu_NOtification_Wrap">
                                    <div class="notification_Header">
                                        <h4>Notifications</h4>
                                    </div>
                                    <?php
                                    error_reporting(E_ERROR | E_PARSE);
                                    require_once("config.php");
                                    $result = mysqli_query($con, "SELECT * FROM visitor where status=2 and company='$company'");
                                    if (isset($_GET[''])) {
                                        echo $_GET['msg'];
                                    }
                                    include_once('./index.php');
                                    ?>
                                    <div class="Notification_body">
                                        <?php
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                                <div class="single_notify d-flex align-items-center">
                                                    <div class="notify_thumb">
                                                        <a href="view_notification2.php"><img src="img/customers/1.png" alt=""></a>
                                                    </div>
                                                    <div class="notify_content" limit 2>
                                                        <a href="view_notification2.php">
                                                            <h5><?php echo $row["company"]; ?></h5>

                                                            <p><?php echo $row["purpose"]; ?></p>
                                                        </a>
                                                      
                                                                                                <a href=Accept_visiter.php?id=". $row['id']." class='status_btn'>Accept</a>
                                                                                         
                                                                                                <a href=Reject_visiter.php?id=".$row['id']." class='status_btn' style='background-color: #f44336;'>Reject</a>
                                                    </div>
                                                </div>

                                        <?php
                                            }
                                        }

                                        ?>
                                        <?php
                                    error_reporting(E_ERROR | E_PARSE);
                                    require_once("config.php");
                                    $result = mysqli_query($con, "SELECT * FROM notifications2 where status=0");
                                    if (isset($_GET[''])) {
                                        echo $_GET['msg'];
                                    }
                                    include_once('./index.php');
                                    ?>
                                    <div class="Notification_body">
                                        <?php
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                                <div class="single_notify d-flex align-items-center">
                                                    <div class="notify_thumb">
                                                        <a href="view_notification.php"><img src="img/customers/1.png" alt=""></a>
                                                    </div>
                                                    <div class="notify_content">
                                                        <a href="view_notification.php">
                                                            <h5><?php echo $row["MessageofNotifications"]; ?></h5>
                                                        </a>
                                                        <p><?php echo $row["subjectofNotification"]; ?></p>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>


                                
                                    </div>
                                    <div class="nofity_footer">
                                        <div class="submit_button text-center pt_20">
                                            <a href="visit_list.php" class="btn_1">See More</a>
                                        </div>
                                    </div>
                                </div>

                            </li>

                        </div>
                        <div class="profile_info">
                           <i class='fas fa-user-tie' style='font-size:30px'></i>
                            <div class="profile_info_iner">
                                <div class="profile_author_name">

                                    <h5><?php echo $company; ?></h5>
                                </div>
                                <div class="profile_info_details">
                                    <a href="profile.php">My Profile </a>
                                    <a href="..//admin-login.php">Log Out </a>
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
                            <h3 class="f_s_25 f_w_700 dark_text mr_30">Office dashboard</h3>
                            <ol class="breadcrumb page_bradcam mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Office</li>
                            </ol>
                        </div>
                        <div class="page_title_right">
                            <div class="page_date_button d-flex align-items-center">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">

                <div class="col-xl-6 ">
                    <div class="white_card card_height_100 mb_30 user_crm_wrapper">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single_crm">
                                    <div class="crm_head d-flex align-items-center justify-content-between">
                                        <div class="thumb">
                                            <img src="img/crm/businessman.svg" alt="">
                                        </div>
                                        <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                    </div>
                                    <div class="crm_body">
                                        <p>Users Registered</p>
                                        <?php
                                        require 'config.php';
                                        $query = "SELECT id FROM users ORDER BY id";
                                        $query_run = mysqli_query($con, $query);
                                        $row = mysqli_num_rows($query_run);
                                        echo '<h4> ' . $row . '</h4>';
                                        ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single_crm ">
                                    <div class="crm_head crm_bg_1 d-flex align-items-center justify-content-between">
                                        <div class="thumb">
                                            <img src="img/crm/customer.svg" alt="">
                                        </div>
                                        <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                    </div>
                                    <div class="crm_body">
                                        <p>Complaints</p>
                                        <?php
                                        require 'config.php';
                                        $query = "SELECT id FROM complaints where complaint_Type='office' || complaint_Type='staff'";
                                        $query_run = mysqli_query($con, $query);
                                        $row = mysqli_num_rows($query_run);
                                        echo '<h4> ' . $row . '</h4>';
                                        ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single_crm">
                                    <div class="crm_head crm_bg_2 d-flex align-items-center justify-content-between">
                                        <div class="thumb">
                                            <img src="img/crm/infographic.svg" alt="">
                                        </div>
                                        <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                    </div>
                                    <div class="crm_body">
                                        <p>Complaints Solved</p>
                                        <?php
                                        require 'config.php';
                                        $query = "SELECT id FROM complaints where status=1 and complaint_Type='office' || complaint_Type='staff'";
                                        $query_run = mysqli_query($con, $query);
                                        $row = mysqli_num_rows($query_run);
                                        echo '<h4> ' . $row . '</h4>';
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single_crm">
                                    <div class="crm_head crm_bg_2 d-flex align-items-center justify-content-between">
                                        <div class="thumb">
                                            <img src="img/crm/infographic.svg" alt="">
                                        </div>
                                        <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                    </div>
                                    <div class="crm_body">
                                        <p>Visitors</p>
                                        <?php
                                        require 'config.php';
                                        $query = "SELECT id FROM visitor where company='$company1'";
                                        $query_run = mysqli_query($con, $query);
                                        $row = mysqli_num_rows($query_run);
                                        echo '<h4> ' . $row . '</h4>';
                                        ?>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="single_crm">
                                    <div class="crm_head crm_bg_2 d-flex align-items-center justify-content-between">
                                        <div class="thumb">
                                            <img src="img/crm/infographic.svg" alt="">
                                        </div>
                                        <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                    </div>
                                    <div class="crm_body">
                                        <p>Total Rent</p>
                                        <?php
                                        require 'config.php';
                                        $query = "SELECT * FROM rent";
                                        $query_run = mysqli_query($con, $query);
                                        $total_rent = 0;
                                        if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_array($query_run)) {
                                                $total_rent += $row["RentAmount"];
                                            }
                                        }
                                        echo '<h4> ' . $total_rent . '</h4>';
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single_crm">
                                    <div class="crm_head crm_bg_2 d-flex align-items-center justify-content-between">
                                        <div class="thumb">
                                            <img src="img/crm/infographic.svg" alt="">
                                        </div>
                                        <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                    </div>
                                    <div class="crm_body">
                                        <p>Rent Pending</p>
                                        <?php
                                        require 'config.php';
                                        $query = "SELECT * FROM rent where status=0";
                                        $query_run = mysqli_query($con, $query);
                                        $total_rent = 0;
                                        if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_array($query_run)) {
                                                $total_rent += $row["RentAmount"];
                                            }
                                        }
                                        echo '<h4> ' . $total_rent . '</h4>';
                                        ?>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="main-title">
                                        <h3 class="m-0">Complaints Lists</h3>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row justify-content-end">
                                        <div class="col-lg-8 d-flex justify-content-end">
                                            <div class="serach_field-area theme_bg d-flex align-items-center">
                                                <div class="search_inner">
                                                    <form action="#">
                                                        <div class="search_field">
                                                            <input type="text" placeholder="Search">
                                                        </div>
                                                        <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-lg-4 mt_20">
                                    <select class="nice_Select2 wide">
                                        <option value="1">Show by All</option>
                                        <option value="1">Show by A</option>
                                        <option value="1">Show by B</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <?php
                        error_reporting(E_ERROR | E_PARSE);
                        require_once("config.php");
                        $result = mysqli_query($con, "SELECT * FROM complaints WHERE complaint_Type='office' || complaint_Type='staff' ");
                        include_once('menu.php');
                        $result1 = mysqli_query($con, "SELECT * FROM users WHERE company='$company1'");
                        
                        $res1=mysqli_fetch_assoc($result1);
                        
                        $company=$res1['company'];
                        
                        
                    
                        include_once('./index.php');
                        ?>

                        <div class="white_card_body ">
                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                            ?>
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                            <marquee width="50%" behavior="scroll" direction="left" style="font-size: 12px; font-family: Arial;height:17px;" scrollamount="1">

                                                <span class="f_s_14 f_w_400 text_color_11"><?php echo $row["description"]; ?></span>
                                            </marquee>
                                        </div>
                                        <div class="user_info">

                                            <?php echo $row["complaint_Type"]; ?>
                                        </div>
                                        <div class="action_btns d-flex">
                                            <?php
                                            if ($row['status'] == "1")
                                                echo
                                                "<a href=unread_view_complaints.php?id=" . $row['id'] . " class='status_btn'>solved</a>";
                                            else
                                                echo
                                                "<a href=read_view_complaints.php?id=" . $row['id'] . " class='status_btn' style='background-color: #f44336;'>unsolve</a>";
                                            ?>
                                        </div>
                                    </div>
                            <?php

                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="main-title">
                                        <h3 class="m-0">Notifications</h3>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row justify-content-end">
                                        <div class="col-lg-8 d-flex justify-content-end">
                                            <div class="serach_field-area theme_bg d-flex align-items-center">
                                                <div class="search_inner">
                                                    <form action="#">
                                                        <div class="search_field">
                                                            <input type="text" placeholder="Search">
                                                        </div>
                                                        <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-lg-4 mt_20">
                                    <select class="nice_Select2 wide">
                                        <option value="1">Show by All</option>
                                        <option value="1">Show by A</option>
                                        <option value="1">Show by B</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <?php
                        error_reporting(E_ERROR | E_PARSE);
                        require_once("config.php");
                        $result = mysqli_query($con, "SELECT * FROM notifications2 limit 5");
                        if (isset($_GET[''])) {
                            echo $_GET['msg'];
                        }
                        include_once('./index.php');
                        ?>
                        <div class="white_card_body ">
                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                            ?>
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                            <marquee width="50%" behavior="scroll" direction="left" style="font-size: 12px; font-family: Arial;height:17px;" scrollamount="1">
                                                <span class="f_s_14 f_w_400 text_color_11" limit 5><?php echo $row["MessageofNotifications"]; ?></span>
                                            </marquee>
                                        </div>
                                        <div class="user_info">
                                        <?php echo $row["subjectofNotification"]; ?>
                                        </div>
                                        <div class="action_btns d-flex">
                                            <?php
                                            if ($row['status'] == "1")
                                                echo
                                                "<a href=#?id=" . $row['id'] . " class='status_btn'>read</a>";
                                            else
                                                echo
                                                "<a href=#?id=" . $row['id'] . " class='status_btn' style='background-color: #f44336;'>unread</a>";
                                            ?>
                                        </div>
                                    </div>
                            <?php

                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Visitor Entry</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                            <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="thumb mb_30">
                                <img src="img/table.svg" alt="" class="img-fluid">
                            </div>
                            <div class="common_form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="common_input mb_15">
                                                <input type="text" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="common_input mb_15">
                                                <input type="text" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="common_input mb_15">
                                                <input type="text" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="common_input mb_15">
                                                <input type="text" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <select class="nice_Select2 nice_Select_line wide">
                                                <option value="1">Company Name</option>
                                                <option value="1">Sagar Software Solutions</option>
                                                <option value="1">Conflux Systems</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="common_input mb_15">
                                                <input type="text" placeholder="Purpose">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="create_report_btn mt_30">
                                                <a href="#" class="btn_1 radius_btn d-block text-center">Send Request</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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