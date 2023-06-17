<?php include_once('menu.php');
include_once('config.php');
session_start();
$id=$_SESSION['id'];
$query=mysqli_query($con,"SELECT * FROM users where id='$id'");
$row=mysqli_fetch_array($query);
?>
<section class="main_content dashboard_part large_header_bg">
 <?php include_once('navbar.php')?>
 <div class="col-lg-12">
                <div class="white_box mb_30">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">

                            <div class="modal-content cs_modal">
                                <div class="modal-header theme_bg_1 justify-content-center">
                                    <h5 class="modal-title text_white">Add User</h5>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post">
                                        <div class="white_card card_height_100 mb_30">

                                            <div class="white_card_body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="common_input mb_15">
                                                            <input type="text" name="fname" placeholder="Username"  value="<?php echo $row['name']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="common_input mb_15">
                                                            <input type="text" name="fmobile" placeholder="Mobile No" pattern="[6-9]{1}[0-9]{9}" value="<?php echo $row['mobileno']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="common_input mb_15">
                                                            <input type="text" name="femail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email Address" value="<?php echo $row['email']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <select class="nice_Select2 nice_Select_line wide" name="frole" placeholder="Select Role" style="display: none;" value="<?php echo $row['role']; ?>">
                                                            <option value="">Select Role</option>
                                                            <option value="admin">Admin</option>
                                                            <option value="office">Office</option>
                                                            <option value="employee">Employee</option>
                                                            <option value="manager">Manager</option>
                                                            <option value="security">Security</option>
                                                            <option value="canteen">Canteen</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="create_report_btn mt_30">
                                                            <center>
                                                                <input type="submit" style="background-color: #884ffb;border: 1px solid #884ffb;
                                                                    color: #fff;" class="btn_1 radius_btn d-block text-center" name="submit" value="Add User">
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