<?php 
include_once('config.php');
if(isset($_GET['deleteid'])){
  $id = $_GET['deleteid'];
  $sql = "delete from complaints where id=$id";
  $result = mysqli_query($con,$sql);
  if($result){
       include_once('view_complaints.php');
    }else{
        die(mysqli_error($con));
    }

}