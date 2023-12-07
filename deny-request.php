<?php

include"connection.php";
$Num=$_GET['req-Num'];

$query="DELETE FROM `request` WHERE number='$Num'";

$result=mysqli_query($con,$query) or die(mysqli_error($con));
header("location:users_request.php");

?>