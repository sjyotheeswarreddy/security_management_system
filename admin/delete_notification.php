<?php 
include_once('config.php');
if(isset($_GET['deleteid'])){
  $id = $_GET['deleteid'];
  $sql = "delete from notifications2 where id=$id";
  $result = mysqli_query($con,$sql);

include_once('view_notifications.php');
}