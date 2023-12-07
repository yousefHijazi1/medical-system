<?php
include"connection.php";

$num=$_GET['Num'];

$query="DELETE  FROM `report` WHERE phone=$num ";

$result=mysqli_query($con,$query) or die(mysqli_error($con));
header("location:users_reports.php")
?>