<?php
error_reporting(0);
include_once('config.php');
if (isset($_POST['submit'])) {
    $complaint_Type = $_POST['complaint_Type'];
    $description= $_POST['description'];
    $company=$_POST['company'];
    $image = $_POST['image'];
    
    $q1 = "INSERT INTO complaints(complaint_Type,description,company,image) VALUES ('$complaint_Type','$description','$company','$image')";
     $q2=mysqli_query($con,$q1);
    if($q2){
        echo '<script type="text/javascript">';
           echo 'alert("Data inserted Successfully");';
           echo "window.location.href='view_complaints.php';";
           echo '</script>';
    }else{
        echo '<script type="text/javascript">';
           echo 'alert("Failed to insert");';
           echo "window.location.href='Addcomplaints.php';";
           echo '</script>';
    }
}

// if (isset($_POST['submit'])){ 
//     $complaint_Type=mysqli_escape_string($_POST['complaint_Type']);
//     $description=mysqli_escape_string($_POST['description']);
//      $image=mysqli_escape_string($_POST['image']);

//     if (!$_POST['complaint_Type'] | !$_POST['description']| !$_POST['image']) {
//         echo ("<SCRIPT LANGUAGE='JavaScript'>
//             window.alert('please fill the all fields')
//             window.location.href='addcomplaints.php'
//         </SCRIPT>");
//         exit();
//         }
//         else{
//         echo ("<SCRIPT LANGUAGE='JavaScript'>
//                           window.alert('complaint ADDED SUCCESSFULLY!!')
//                           window.location.href='view_complaints.php'
//                       </SCRIPT>");
//         }
//         }
include_once('menu.php');
?>
<?php
require_once("config.php");
$result = mysqli_query($con, "SELECT DISTINCT company FROM users;");
// $s=mysqli_num_rows($result);
// $row = mysqli_fetch_assoc($result);
if($result->num_rows> 0){
    $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
  }

include_once('menu.php');
// $result2 = mysqli_query($con, "SELECT * FROM users where role='security'");
//    $s=mysqli_num_rows($result);
?>

<html>
    <head>
        <style>
           .cs_modal .modal-body .ONE{
                line-height:0px !important;
           }
           /* .cs_modal .modal-body .two{
                /* line-height:0px !important; */
                /* height:10px;
           } */ 
           input[type=file]::file-selector-button {
  /* border: 2px solid #6c5ce7; */
  line-height:-0px !important;
  padding: -0px;
  text-align: center;
  margin-bottom:8px;
  border-radius: .3em;
  /* background-color: #a29bfe; */
  transition: 0s;
  height: 20px;
}
        </style>
    </head>

<section class="main_content dashboard_part large_header_bg">
 <?php include_once('navbar.php')?>
 <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">

            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                        <div class="page_title_left d-flex align-items-center">
                            <h3 class="f_s_25 f_w_700 dark_text mr_30">Complaints</h3>
                            <ol class="breadcrumb page_bradcam mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Complaints</a></li>
                                <li class="breadcrumb-item active">Add Complaints </li>
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
  
            <!-- <div class="row">
                    <div class="col-12"> -->
            <div class="col-lg-12">
                <div class="white_box mb_30">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">

                            <div class="modal-content cs_modal">
                                <div class="modal-header theme_bg_1 justify-content-center">
                                    <h5 class="modal-title text_white">Add Complaints</h5>
                                </div>
                               <div class="modal-body">
                                    <form action="" method="post">
                                        <div class="white_card card_height_100 mb_30">

                                            <div class="white_card_body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="common_input mb_15">
                                                           <select class="nice_Select2 nice_Select_line wide" name=" " placeholder="complaint_Type" style="display: none;">
                                                            <option value="">complaint_Type</option>
                                                            <option value="maintainance">maintainance</option>
                                                            <option value="security">security</option>
                                                            <option value="canteen">canteen</option>
                                                               <option value="office">office</option>
                                                            <option value="staff">staff</option>
                                                        </select> 
                                                        </div>
                                                    </div>
                                                         &nbsp
                                                    <div class="col-lg-12">
                                                        <div class="common_input mb_15">
                                                            <input type="text" name="description" placeholder="description">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="common_input mb_15">
                                                        <select class="nice_Select2 nice_Select_line wide mb-4" name="company" placeholder="Select Role" style="display: none;">
                                                            <option value="">Select company name</option>
                                                            <?php 
                                                              foreach ($options as $option) {
                                                                 ?>
                                                             <option><?php echo $option['company']; ?> </option>
                                                              <?php 
                                                               }
                                                                 ?>
                                                        
                                                            <!-- <option value="Conflux systems">Conflux systems</option>
                                                            <option value="Lomaa IT">Lomaa IT</option>
                                                             <option value="Integer Telecom">Integer Telecom</option>
                                                         <option value="iGen American soft">iGen American soft</option>
                                                             <option value="Magunti IT solutions">Magunti IT solutions</option> -->
                                                        </select>
                                                    </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="common_input mb_15" style= "height:80px;">
                                                            <input type="file" class="two" name="image" id="image">

                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-12">
                                                        <div class="create_report_btn mt_30">
                                                            <center>
                                                                <input type="submit" class="btn_1 radius_btn d-block text-center mb-5 ONE" style="background-color: #884ffb;border: 1px solid #884ffb;
                                                                    color: #fff; text text-align: center;"  name="submit" value="Add complaint"onclick="val()">
                                                            </center>
                                                            <!-- <a href="index-2.html" class="btn_1 radius_btn d-block text-center" name="submit">Add complaint</a> -->
                                                        </div>
                                                    </div>

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
            <?php include_once('footer.php'); ?>
</section>


<div id="back-top" style="display: none;">
    <a title="Go to Top" href="#">
        <i class="ti-angle-up"></i>
    </a>
</div>

<?php include_once('scripts.php');?>
</body>

<!-- Mirrored from demo.dashboardpack.com/user-management-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Apr 2022 11:27:02 GMT -->

</html>