<?php
include_once('config.php');
 $q1 = mysqli_query($con, "INSERT INTO visitor(name,company,email,mobile,purpose) VALUES ('$name','$company','$email','$mobile','$purpose')");


if($q1){
     include_once('visit_list.php');
     
}

?>