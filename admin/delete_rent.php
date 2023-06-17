<?php 
include_once('config.php');
if(isset($_GET['deleteid'])){
  $id = $_GET['deleteid'];
  $sql = "delete from rent where id=$id";
  $result = mysqli_query($con,$sql);
//  if($result){
//      echo "deleted successfully";
//  }else{
//      die(mysqli_error($con));
//  }
include_once('view_rent.php');
}