<?php
include('connection.php');

$id=$_POST['txtID'];
$prescription=$_POST['txtReport'];
$code=uniqid();

date_default_timezone_set('Asia/Beirut');

// Then call the date functions
$date = date('Y-m-d H:i:s');

$query="INSERT INTO `patient`(`user_id`,`prescription`,`code`,`date`)
 VALUES ('$id','$prescription','$code','$date')" ;

mysqli_query($con,$query);

header("location:doctor.php");
?>