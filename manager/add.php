 <?php
error_reporting(0);
include_once('config.php');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
   
    $purpose = $_POST['purpose'];

    $q1 = mysqli_query($con, "INSERT INTO visitor(name,company,email,mobile,purpose) VALUES ('$name','$company','$email','$mobile','$purpose')");     
$q2=mysqli_query($con,$q1);
         if(!$q2){
                    echo '<script type="text/javascript">';
                    echo 'alert("Visitor Added Successfully");';
                     echo "window.location.href='visit_list.php';";
                      echo '</script>';
   }
   else{
             echo '<script type="text/javascript">';
             echo 'alert("Filed To Insert");';
             echo "window.location.href='add.php';";
              echo '</script>';
      }
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
                            <h3 class="f_s_25 f_w_700 dark_text mr_30">VISITORS</h3>
                            <ol class="breadcrumb page_bradcam mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"visitors</a></li>
                                <li class="breadcrumb-item active">Add Visitors</li>
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
            <div class="col-lg-13">
                <div class="white_box mb_30">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">

                            <div class="modal-content cs_modal">
                                <div class="modal-header theme_bg_1 justify-content-center">
                                    <h5 class="modal-title text_white">Add Visitors</h5>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post">
                                   
                                        <div class="white_card card_height_100 mb_30">

                                            <div class="white_card_body">
                                                <div class="row">
                                                        <div class="col-lg-10">
                                                        <div class="common_input mb_10">
                                                            <input type="text" name="name" placeholder="Username">
                                                        </div>
                                                    </div>
                                                   
                                                    
                                                    <div class="col-lg-10">
                                                        <div class="common_input mb_15">
                                                            <input type="text" name="mobile" placeholder="Mobile No" pattern="[6-9]{1}[0-9]{9}">
                                                        </div>
                                            </div>
                                                    <div class="col-lg-10">
                                                        <div class="common_input mb_15">
                                                            <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email Address">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-10">
                                                        <div class="common_input mb_15">
                                                            <input type="text" name="purpose" placeholder="Purpose of visit">
                                                        </div>
                                                    </div>
                                                
                                                
                                                <div class="col-lg-10">
                                                        <div class="common_input mb_15">
                                                        <select class="nice_Select2 nice_Select_line wide" name="company" placeholder="Select Role" style="display: none;">
                                                            <option value="">Select company name</option>
                                                            <option value="Sagar Software Solutions pvt ltd">Sagar Software Solutions pvt ltd</option>
                                                            <option value="Conflux systems">Conflux systems</option>
                                                            <option value="Lomaa IT">Lomaa IT</option>
                                                            <option value="Integer Telecom">Integer Telecom</option>
                                                            <option value="iGen American soft">iGen American soft</option>
                                                            <option value="Magunti IT solutions">Magunti IT solutions</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                            
                                                </div>
                                                </div>
                                        
                                        
                                        
                                        
                                        
                                                    
                                                    <div class="col-10">
                                                        <div class="create_report_btn mt_30">
                                                        <center>
                                                                <input type="submit" style="background-color: #884ffb;border: 1px solid #884ffb;
                                                                    color: #fff;" class="btn_1 radius_btn d-block text-center" name="submit"  onclick="val()" value="Submit">
                                                            </center>
                                                            <!-- <a href="index-2.html" class="btn_1 radius_btn d-block text-center" name="submit">Add Visitor</a> -->
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
    <?php>
    header('location:visit_list.php');  

   ?>
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