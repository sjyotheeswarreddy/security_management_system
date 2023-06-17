<?php
error_reporting(0);
include_once('config.php');
if (isset($_POST['submit'])) {
    $SelectCompanys = $_POST['SelectCompanys'];
    $RentAmount = $_POST['RentAmount'];
    $Rentaldate = $_POST['Rentaldate'];

    $q1 = mysqli_query($con, "INSERT INTO rent(SelectCompanys,RentAmount,Rentaldate) 
    VALUES ('$SelectCompanys','$RentAmount','$Rentaldate')");
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
                            <h3 class="f_s_25 f_w_700 dark_text mr_30">Add Rental Details</h3>
                            <ol class="breadcrumb page_bradcam mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"Rentals</a></li>
                                <li class="breadcrumb-item active">Add Rentals</li>
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
            <script>
                  function val(){
                      alert("Rent Added Successfully");
                  }
                </script>
            <div class="col-lg-13">
                <div class="white_box mb_30">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">

                            <div class="modal-content cs_modal">
                                <div class="modal-header theme_bg_1 justify-content-center">
                                    <h5 class="modal-title text_white">Add Rentals</h5>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post">
                                        <div class="white_card card_height_100 mb_50">
                                            <div class="white_card_body">
                                                <div class="row">
                                                 
                                                        <select class="nice_Select2 nice_Select_line wide" name="SelectCompanys" placeholder="SelectCompanys" style="display: none;"> 
                                                            <option><h4>SelectCompanys</h4></option>
                                                            <option value="Sagar Software Solutions pvt ltd">Sagar Software Solutions pvt ltd</option>
                                                            <option value="Conflux systems">Conflux systems</option>
                                                            <option value="Lomaa IT">Lomaa IT</option>
                                                            <option value="Integer Telecom">Integer Telecom</option>
                                                            <option value="iGen American soft">iGen American soft</option>
                                                            <option value="Magunti IT solutions">Magunti IT solutions</option>
                                                        </select>
                                                             </div>
                                                              <br/>
                                                               </div>
                                            
                                            
                                                    <div class="col-lg-12">
                                                        <div class="common_input mb_15">
                                                            <input value="number" type="number" name="RentAmount" placeholder="RentAmount" required="">
                                                    </div>
                                                </div>
                                                
                                                           <div class="col-lg-12">
                                                             <div class="common_input ">
                                                               <form action="/action_page.php">
                                                                 <label for="Rentaldate"></label>
                                                                    <input type="month" id="year" name="Rentaldate" required= ""> 
                                                                
                                                                   
                                                    <div class="col-13">
                                                        <div class="create_report_btn mt_30">
                                                        <center>
                                                            <input type="submit" style="background-color: #884ffb;border: 1px solid #884ffb;
                                                                    color: #fff;" class="btn_1 radius_btn d-block text-center" onclick= "val()" id="alrt"name="submit" value="Add">
                                                           
                                                                       
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