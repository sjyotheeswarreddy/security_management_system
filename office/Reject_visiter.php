<?php
  include_once('config.php');
  if (isset($_GET['id'])){
      $u_id=$_GET['id'];

      
      $sql="UPDATE `visitor` SET 
           `status`=1 WHERE id='$u_id'";
      mysqli_query($con,$sql);
  }
  header('location:visit_list.php');
?>