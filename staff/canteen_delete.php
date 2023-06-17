<?php
include_once('config.php');
if(isset($_GET['deleteid'])){
  $id = $_GET['deleteid'];
  $sql = "delete from canteen where id=$id";
  $result = mysqli_query($con,$sql);
  if($result){
        include_once('canteen_view.php');
    }else{
        die(mysqli_error($con));
    }

}
?>