<?php
include_once('config.php');
$sql = ' delete from visitor where id='.$_GET['deleteid'];
$res = mysqli_query($con,$sql);

if($res){
     include_once('view_visitor.php');
     
}

?>
