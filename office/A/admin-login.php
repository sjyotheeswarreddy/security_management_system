<?php 
require_once('config.php');
if(isset($_POST['mail'])){
    
    $uname=$_POST['mail'];
    $password=$_POST['pass'];
    
    $sql="select * from users where email='".$uname."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
        $userRole = '';


    while($row = $result->fetch_assoc()) {
			$userRole = $row["role"];
		$status = $row["status"];
    $password = $row["password"];}
        
        if(strtolower($userRole) == 'office'  && strtolower($status) == '1')
        {
             echo ("<SCRIPT LANGUAGE='JavaScript'>
                  
                  window.location.href='office/index.php'
                  window.alert('Login Succesfully!!.')
              </SCRIPT>");
              
          
        }
       
       
        else if(strtolower($userRole) == 'staff'  && strtolower($status) == '1')
        {
             echo ("<SCRIPT LANGUAGE='JavaScript'>
                  
                  window.location.href='staff/index-2.html'
                  window.alert('Login Succesfully!!.')
              </SCRIPT>");
          
        }
         else if(strtolower($userRole) == 'canteen'  && strtolower($status) == '1'){
			echo ("<SCRIPT LANGUAGE='JavaScript'>
                  
                  window.location.href='canteen/index-2.html'
                  window.alert('Login Succesfully!!.')
              </SCRIPT>");
            
		}

         else if(strtolower($userRole) == 'manager'  && strtolower($status) == '1')
        {
           echo ("<SCRIPT LANGUAGE='JavaScript'>
                  
                  window.location.href='manager/index-2.html'
                  window.alert('Login Succesfully!!.')
              </SCRIPT>");
            
        }
        else if(strtolower($userRole) == 'security'  && strtolower($status) == '1'){
			echo ("<SCRIPT LANGUAGE='JavaScript'>
                  
                  window.location.href='security/index-2.html'
                  window.alert('Login Succesfully!!.')
              </SCRIPT>");
           
		}
        else if(strtolower($userRole) == 'employee'  && strtolower($status) == '1'){
			echo ("<SCRIPT LANGUAGE='JavaScript'>
                  
                  window.location.href='employee/index-2.html'
                  window.alert('Login Succesfully!!.')
              </SCRIPT>");
            
		}
       else if(strtolower($userRole) == 'admin'  && strtolower($status) == '1'){
			echo ("<SCRIPT LANGUAGE='JavaScript'>
                  
                  window.location.href='admin/index.php'
                  window.alert('Login Succesfully!!.')
              </SCRIPT>");
           
		}
       else if(strtolower($status) == '0' ){
           echo ("<SCRIPT LANGUAGE='JavaScript'>
                  window.alert('user is in de-active.')
                  window.location.href='admin-login.php'
              </SCRIPT>");
          
          
       }
        
            
            exit();
        }
        
    
}
?>


<?php 
error_reporting(0);
      $con = mysqli_connect("localhost", "root", "") or die("Failed to connect to MySQL.");
      mysqli_select_db($con, "apeita") or die("Database does not exist.");
      //require ('sql_connect.php');
      if (isset($_POST['submit'])){
          $email=mysqli_escape_string($_POST['mail']);
          $password=mysqli_escape_string($_POST['pass']);
          if (!$_POST['mail'] | !$_POST['pass']) {
              echo ("<SCRIPT LANGUAGE='JavaScript'>
                  window.alert('please fill all the forms required')
                  window.location.href='admin-login.php'
              </SCRIPT>");
              exit();
          }
          $sql= mysqli_query("SELECT *
                              FROM `users`
                              WHERE email = $mail
                              AND password = $pass ");
          while($row = $result->fetch_assoc()) {
			$userRole = $row["role"];
	$status = $row["status"];
    $password = $row["password"];}
          if(mysqli_num_rows($sql) > 0) {
              echo ("<SCRIPT LANGUAGE='JavaScript'>
                  
                  window.location.href='office/index-2.html'
                  window.alert('Login Succesfully!!.')
              </SCRIPT>");
              
              
          }
          
          
          
          else if(strtolower($status) == '0'){
              echo ("<SCRIPT LANGUAGE='JavaScript'>
                  window.alert('user is in de-active.')
                  window.location.href='admin-login.php'
              </SCRIPT>");
          }
          else {
              echo ("<SCRIPT LANGUAGE='JavaScript'>
                  window.alert('Wrong email or password. Please re-enter.')
                  window.location.href='admin-login.php'
              </SCRIPT>");
              exit();
          }
      }else{
      }
       

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet"
		href="A.fonts%2c%2c_icomoon%2c%2c_style.css%2bfonts%2c%2c_flaticon%2c%2c_font%2c%2c_flaticon.css%2bcss%2c%2c_tiny-slider.css%2bcss%2c%2c_aos.css%2bcss%2c%2c_style.css%2cMcc.4n512Inwoc.css.pagespeed.cf.yP9zdky6Ak.css" />
	<title>APIETS - Tirupati</title>
	<script
		nonce="7cf5fdd6-3169-4807-98c0-d9e41b6bbc90">(function (w, d) { !function (a, e, t, r) { a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zarazData.tracks = [], a.zaraz = { deferred: [] }, a.zaraz.track = (e, t) => { for (key in a.zarazData.tracks.push(e), t) a.zarazData["z_" + key] = t[key] }, a.zaraz.preSet = [], a.zaraz.set = (e, t, r) => { a.zarazData["z" + e] = t, a.zaraz._preSet.push([e, t, r]) }, a.addEventListener("DOMContentLoaded", (() => { var t = e.getElementsByTagName(r)[0], z = e.createElement(r), n = e.getElementsByTagName("title")[0]; n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), z.defer = !0, z.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t) })) }(w, d, 0, "script"); })(window, document);</script>
</head>

<body>
	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>
	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap"> 
				 <div class="site-navigation">
					<a href="index.html" class="logo m-0 float-start">APIETA Tirupati</a>
					<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="#">Contact Us</a></li>
						
							<a href="#">Login</a>
							
						
					</ul>
					<a href="#"
						class="burger me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
						data-toggle="collapse" data-target="#main-navbar">
						<span></span>
					</a>
				</div> 
			</div>
		</div>
	</nav>


	<div class="section section-4 border-top">
		<div class="container">
			<div class="row text-left mb-5">
				<div class="col-lg-6">
					<p class="text-black-50"></p>
				</div>
			</div>
			<div class="row justify-content-between mb-5">
				<div class="col-lg-4"><br><br><br><br><br><br>
					<center>
						<h3 class="heading">Login</h3>
					</center><br>
					<form class="row" action="" method="post">
						<div class="mb-3 col-lg-12">
							<input type="email" class="form-control" name="mail" placeholder="Email">
						</div>
						<div class="mb-3 col-lg-12">
							<input type="text" class="form-control" name="pass" placeholder="Password">
						</div>
						<div class="mb-3 col-lg-12">
							<center><a href="#">
									<input type="submit" name="submit" class="btn btn-primary" onclick="val()" value="Submit"></a></center>
						</div>
					</form>
				</div>
				<div class="col-lg-6 mb-5 mb-lg-0">
					<div class="img-about dots">
						<img src="images/hero_2.jpg" alt="Image" class="img-fluid">
					</div>
				</div>

			</div>
		</div>
	</div>
	</div>
	<div class="site-footer">
		<div class="container">
			<div class="row justify-content-center mb-5 footer-cta">
				<div class="col-lg-7 mx-auto text-center">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3>Contact</h3>
						<form class="row">
							<div class="mb-3 col-lg-6">
								<input type="text" class="form-control" placeholder="Name">
							</div>
							<div class="mb-3 col-lg-6">
								<input type="text" class="form-control" placeholder="Email Address">
							</div>
							<div class="mb-3 col-lg-6">
								<input type="text" class="form-control" placeholder="Subject">
							</div>
							<div class="mb-3 col-lg-6">
								<input type="text" class="form-control" placeholder="Phone">
							</div>
							<div class="mb-3 col-lg-12">
								<textarea name="" id="" cols="30" rows="5" class="form-control"
									placeholder="Write your message here..."></textarea>
							</div>
							<div class="mb-3 col-lg-12">
								<input type="text" class="btn btn-primary" value="Send Message">
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="widget">
						<h3>Location</h3>
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.2278873922937!2d79.53241061519492!3d13.643897103459956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4d48f5b7797f57%3A0xa70e947fe75186a6!2sIIDT!5e0!3m2!1sen!2sin!4v1649515316820!5m2!1sen!2sin"
							width="400" height="320" style="border:0;" allowfullscreen="" loading="lazy"
							referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="widget">
						<h3>Contact</h3>
						<address>Tirupati Airport Rd, Near Celkon Company, Renigunta, Andhra Pradesh 517520</address>
						<ul class="list-unstyled links">
							<li><a href="tel://11234567890">+1(123)-456-7890</a></li>
							<li><a href="tel://11234567890">+1(123)-456-7890</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-12 text-center">
					<p class="mb-0">All rights reserved by APEITA | Developed by <a
							href="https://sagarsoftwaresolution.com.com/" target="_blank" rel="nofollow noopener">Sagar
							Software Solutions Pvt Ltd</a></p>
				</div>
			</div>
		</div>
	</div>

	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>
	<script src="js/aos.js%2bnavbar.js%2bcounter.js%2bcustom.js.pagespeed.jc.71zJnt3rs0.js"></script>
	<script>eval(mod_pagespeed_G7G3GqP5Ne);</script>
	<script>eval(mod_pagespeed_GV7tYr4Kqb);</script>
	<script>eval(mod_pagespeed_h1rI$WP$Np);</script>
	<script>eval(mod_pagespeed_sQHpjDBzQZ);</script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
	<script defer
		src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
		integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
		data-cf-beacon='{"rayId":"6f9372c73dbd6ec5","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
		crossorigin="anonymous"></script>
    <script>
    function val()
        {
           if(mysqli_num_rows($result)==1){
        $userRole = '';


    while($row = $result->fetch_assoc()) {
			$userRole = $row["role"];
		$status = $row["status"];
    $password = $row["password"];} }
        
        
     {
            alert (" login success");
        }
           
    </script>
    
</body>

<!-- Mirrored from preview.colorlib.com/theme/props/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Apr 2022 13:04:43 GMT -->

</html>