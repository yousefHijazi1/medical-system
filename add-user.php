<?php
include"connection.php";

$name=$_POST['txtName'];
$password=$_POST['txtPass'];
$birth=$_POST['txtBirth'];
$gender=$_POST['txtGender'];
$email=$_POST['txtEmail'];
$number=$_POST['txtNumber'];
$role=$_POST['txtRole'];


$query="INSERT INTO `users`(`name`, `password`, `gender`, `email`, `number`, `role`, `date_of_birth`) 
VALUES ('$name','$password','$gender','$email','$number','$role','$birth')";

mysqli_query($con,$query) or die(mysqli_error($con));

header("location:admin-dashboard.php");
?>