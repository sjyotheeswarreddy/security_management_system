<?php
error_reporting(E_ERROR | E_PARSE);
require_once("config.php");
$result = mysqli_query($con, "SELECT * FROM canteen");
include_once('menu.php');
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
                                                                   ?>
                                                                   <span><?php echo $row ?></span>
                                                               </a>

                                                               <div class="Menu_NOtification_Wrap">
                                                                   <div class="notification_Header">
                                                                       <h4>Notifications</h4>
                                                                   </div>
                                                                   <?php
                                                                   error_reporting(E_ERROR | E_PARSE);
                                                                   require_once("config.php");
                                                                   $result1 = mysqli_query($con, "SELECT * FROM notifications2 where status=0");
                                                                   if (isset($_GET[''])) {
                                                                       echo $_GET['msg'];
                                                                   }
                                                                   ?>
                                                                   <div class="Notification_body">
                                                                       <?php
                                                                       if (mysqli_num_rows($result1) > 0) {
                                                                           while ($row = mysqli_fetch_array($result1)) {
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
                                                                           <a href="view_notification.php" class="btn_1">See More</a>
                                                                       </div>
                                                                   </div>
                                                               </div>

                                                           </li>

                                                       </div>
                                                       <div class="profile_info">
                                                          <i class='fas fa-user-tie' style='font-size:30px'></i>
                                                           <div class="profile_info_iner">
                                                               <div class="profile_author_name">
                                                                   <h5>Security</h5>
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
                            <h3 class="f_s_25 f_w_700 dark_text mr_30">Orders History</h3>
                            <ol class="breadcrumb page_bradcam mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Orders History</li>
                            </ol>
                        </div>
                        <!-- <div class="page_title_right">
                                <div class="page_date_button d-flex align-items-center">
                                    <img src="img/icon/calender_icon.svg" alt="">
                                    August 1, 2020 - August 31, 2020
                                </div>
                            </div> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30 pt-4">
                        <div class="white_card_body">
                            <div class="QA_section">
                                <div class="white_box_tittle list_header">
                                    <h4>Order List </h4>
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
                                            <a href="#" data-toggle="modal" data-target="#addcategory" class="btn_1 ml-3">search</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="QA_table mb_30">
                                    <?php
                                    if (mysqli_num_rows($result) > 0) {
                                    ?>
                                        <table class="table lms_table_active ">
                                            <thead>
                                                <tr>
                                                    <th scope="col">id</th>
                                                    <th scope="col">itemame</th>
                                                    <th scope="col">price</th>
                                                    <th scope="col">image</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 0;
                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <!-- <th scope="row"> <a href="#" class="question_content"> 1 </a></th> -->

                                                        <td><?php echo $row["id"]; ?></td>
                                                        <td><?php echo $row["itemname"]; ?></td>
                                                        <td><?php echo $row["price"]; ?></td>
                                                        <td><?php echo $row["image"]; ?></td>
                                                        <td><?php echo $row["role"]; ?></td>
                                                        <td><?php
                                                                                                       ;
                                                                                            ?>
                                                        <td>
                                                           
                                                                
                                                          
                                                        </td>
                                                    </tr>
                                                <?php
                                                    $i++;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    <?php
                                    } else {
                                        echo "No result found";
                                    }
                                    ?>
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