<?php 
include_once('config.php');
if(isset($_GET['deleteid'])){
  $id = $_GET['deleteid'];
  $sql = "delete from users where id=$id";
  $result = mysqli_query($con,$sql);
  if($result){
                    echo '<script type="text/javascript">';
                    echo 'alert("Deleted Successfully");';
                    echo "window.location.href='view_new_user.php';";
                      echo '</script>';
   }
//if($result){
//include_once('view_new_user.php');}
}