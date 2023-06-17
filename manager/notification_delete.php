<?php 
include_once('configo.php');
if(isset($_GET['deleteid'])){
  $id = $_GET['deleteid'];
  $sql = "delete from notifications2 where id=$id";
  $result = mysqli_query($con,$sql);
  if($result){
        echo "item deleted successfully";
    }else{
        die(mysqli_error($con));
    }

}