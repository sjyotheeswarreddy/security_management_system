<?php 
include_once('configo.php');
if(isset($_GET['deleteid'])){
  $id = $_GET['deleteid'];
  $sql = "delete from complaints where id=$id";
  $result = mysqli_query($con,$sql);
  if($result){
       include_once('compliantslist.php');
    }else{
        die(mysqli_error($con));
    }

}