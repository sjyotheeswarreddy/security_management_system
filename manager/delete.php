<?php 
include_once('config.php');
if(isset($_GET['deleteid'])){
  $id = $_GET['deleteid'];
  $sql = "delete from visitor where id=$id";
  $result = mysqli_query($con,$sql);
  if($result){
        include_once('visit_list.php');
    }else{
        die(mysqli_error($con));
    }

}
?>