<?php 
include_once('config.php');
if(isset($_GET['deleteid'])){
  $id = $_GET['deleteid'];
  $sql = "delete from canteen where id=$id";
  $result = mysqli_query($con,$sql);
  if($result){
       include_once('user_view.php');
  }Else{
        die(mysqli_error($con));
    }

}