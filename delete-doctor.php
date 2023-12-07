<?php
include"connection.php";

$id=$_GET['userID'];

$query="DELETE FROM `users` WHERE id=$id ";

mysqli_query($con,$query) or die(mysqli_error($con));
header("location:users_doctor.php");

?>