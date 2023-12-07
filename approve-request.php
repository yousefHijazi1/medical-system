<?php

include"connection.php";

$Num=$_GET['req-Num'];
$query="SELECT * FROM `request` WHERE number='$Num'";

$result=mysqli_query($con,$query) or die(mysqli_error($con));
$user = [];

while($row = $result->fetch_assoc()) { 
    $user = $row; }


$name=$user['name'];
$password=$user['password'];
$gender=$user['gender'];
$email=$user['email'];
$number=$user['number'];
$role=$user['role'];
$birth=$user['date_of_birth'];


$query2="INSERT INTO `users`( `name`, `password`, `gender`, `email`, `number`, `role`, `date_of_birth`)
 VALUES ('$name','$password','$gender','$email','$number','$role','$birth')";

$result2= mysqli_query($con,$query2) or die(mysqli_error($con));


$query3="DELETE FROM `request` WHERE number='$Num' ";
$result3=mysqli_query($con,$query3);


header("location:users_request.php");



?>