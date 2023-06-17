<?php
include_once('config.php');
$sql = ' delete from visitor where id='.$_GET['id'];
$res = mysqli_query($con,$sql);

if($res){
     include_once('visit_list.php');
     
}

?>
