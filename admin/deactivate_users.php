<?php
  include_once('config.php');
  if (isset($_GET['id'])){
      $u_id=$_GET['id'];

      
      $sql="UPDATE `users` SET 
           `status`=0 WHERE id='$u_id'";
      mysqli_query($con,$sql);
  }
  header('location: view_new_user.php');
?>