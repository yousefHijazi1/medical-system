<?php
include "connection.php";
include "check_authentication.php";

if($_SESSION['user_role']!='admin'){
    header("location:login.php");
}

$id=$_GET['rID'];

$query="UPDATE `patient` SET `is_expired`='1' WHERE id='$id'";
mysqli_query($con,$query) or die(mysqli_error($con));

header("location:users_rosheta.php");
?>
