<?php
include "connection.php";
include "check_authentication.php";

if($_SESSION['role']!='admin'){
    header("location:login.php");

}

$name=$_POST['txtName'];
$birth=$_POST['txtBirth'];
$id=$_POST['txtID'];
$email=$_POST['txtEmail'];
$gender=$_POST['txtGender'];
$phone=$_POST['txtNumber'];
$pass=$_POST['txtPass'];
$role=$_POST['txtRole'];


mysqli_query($con,"UPDATE `users` SET name='$name',gender='$gender',email='$email' ,date_of_birth='$birth',password='$pass' ,number='$phone',role='$role' WHERE id='$id'") or die(mysqli_error($con));
header("location:admin-dashboard.php");

?>