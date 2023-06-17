<?php
session_start();

error_reporting(0);

$id1=$_SESSION['id'];

$company1=$_SESSION['company'];
include_once('config.php');


$result = mysqli_query($con, "SELECT * FROM users WHERE id='$id1'");

while($res=mysqli_fetch_array($result)){

$id2=$res['id'];

$company=$res['company'];
$name=$res['name'];
$mobileno=$res['mobileno'];
$email=$res['email'];
$role=$res['role'];
}

/*$result1 = mysqli_query($con, "SELECT * FROM users");
while($res=mysqli_fetch_array($result1)){
$id=$res['id'];*/


include_once('menu.php');

?>

<style>
                        .card {
                          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                          max-width: 500px;

                          margin: auto;
                          text-align: center;
                        }
                        .img{
                        max-height: 300px;
                        }

                        .title {
                          color: cyan;
                          font-size: 18px;
                        }

                        button {
                          border: none;
                          outline: 0;
                          display: inline-block;
                          padding: 8px;
                          color: white;
                          background-color: grey;
                          text-align: center;
                          cursor: pointer;
                          width: 100%;
                          font-size: 18px;
                        }

                        a {
                          text-decoration: none;
                          font-size: 22px;
                          color: black;
                        }

                        button:hover, a:hover {
                          opacity: 0.7;
                        }
                        </style>
                        <head>
                                                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                        </head>

<section class="main_content dashboard_part large_header_bg">

 <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">

            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                        <div class="page_title_left d-flex align-items-center">


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
                   <div class="card" style="text-xlign:center">

                             <h2 style="color:#0066ff;"><?php echo $company; ?></h2></br>

                             <h2><B><?php echo $name; ?></B></h2>
                              <h3><B>Mobileno:<?php echo $mobileno; ?></B></h3>
                              <h3><B>Role:<?php echo $role; ?></B></h3>
                              <h3 style="color:blue;">Email:<?php echo $email; ?></h3>


                             <div style="margin: 24px 0;">
                             <a href="#"><i class="fa fa-dribbble"></i></a>
                             <a href="#"><i class="fa fa-twitter"></i></a>
                             <a href="#"><i class="fa fa-linkedin"></i></a>
                             <a href="#"><i class="fa fa-facebook"></i></a>
                             </div>

                             <p><a href="updateprofile.php?updateid=<?php echo $id2; ?>"><button>Edit</button></a></p>
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
<script>
    function val(){
        alert("Add Successfully")
    }
    </script>
<?php include_once('scripts.php');?>
</body>

<!-- Mirrored from demo.dashboardpack.com/user-management-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Apr 2022 11:27:02 GMT -->

</html>