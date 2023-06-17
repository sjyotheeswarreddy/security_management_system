<?php
error_reporting(0);
include_once 'config.php';
$id1=$_GET['updateid'];
if(count($_POST)>0) {
$q1=mysqli_query($con,"UPDATE complaints set  complaint_Type='" . $_POST['complaint_Type'] . "', description='" . $_POST['description'] . "', image='" . $_POST['image'] . "' WHERE id='" . $_GET['updateid'] . "'");
$q2=mysqli_query($con,$q1);
         if(!$q2){
                    echo '<script type="text/javascript">';
                    echo 'alert("Data Updated Successfully");';
                     echo "window.location.href='view_complaints.php';";
                      echo '</script>';
   }
   else{
             echo '<script type="text/javascript">';
             echo 'alert("Filed To Insert");';
             echo "window.location.href='update_complaint.php';";
              echo '</script>';
      }
}
    $result1 = mysqli_query($con,"SELECT * FROM complaints WHERE id='$id1'");
 while($row= mysqli_fetch_assoc($result1)){
$description=$row['description'];
$image=$row['image'];
$complaint_Type=$row['complaint_Type'];
 }
include_once('menu.php');
?>
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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">complaints</a></li>
                                <li class="breadcrumb-item active">Edit Complaint</li>
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
 <div class="col-lg-12">
                <div class="white_box mb_30">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">

                            <div class="modal-content cs_modal">
                                <div class="modal-header theme_bg_1 justify-content-center">
                                    <h5 class="modal-title text_white">Update Complaints</h5>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post">
                                        <div class="white_card card_height_100 mb_30">

                                            <div class="white_card_body">
                                                <div class="row">



                                                    <div class="col-lg-12">
                                                        <select class="nice_Select2 nice_Select_line wide" name="complaint_Type" value="<?php echo $complaint_Type; ?>" style="display: none;">
                                                            <option value="">complaint_Type</option>
                                                            <option value="maintainance"
                                                                    <?php
                                                                    if($complaint_Type== 'maintainance')
                                                                    {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>maintainance</option>
                                                            <option value="security" <?php
                                                                    if($complaint_Type== 'Security')
                                                                    {
                                                                        echo "selected";
                                                                    }
                                                                    ?>> security</option>
                                                            <option value="Canteen"<?php
                                                                    if($complaint_Type== 'Canteen')
                                                                    {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Canteen</option>

                                                                    <option value="staff"<?php
                                                                    if($complaint_Type== 'staff')
                                                                    {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>staff</option>

                                                        </select>
                                                    </div>
                                                    &nbsp
                                                     <div class="col-lg-12">
                                                        <div class="common_input mb_15">
                                                            <input type="text" name="description" value="<?php echo $description; ?>">
                                                        </div>
                                                    </div>

                                                     <div class="col-lg-12">
                                                        <div class="common_input mb_15">
                                                            <input type="file" name="image" value="<?php echo $image; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="create_report_btn mt_30">
                                                            <center>
                                                                <input type="submit" style="background-color: #884ffb;border: 1px solid #884ffb;
                                                                    color: #fff;" class="btn_1 radius_btn d-block text-center" name="submit" value="Update"onclick="val()">
                                                            </center>
                                                            <!-- <a href="index-2.html" class="btn_1 radius_btn d-block text-center" name="submit">Add User</a> -->
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