<?php
session_start();
include "connection.php";

$email= $_POST['email'];
$pass= $_POST['password'];


$sql="SELECT * FROM users WHERE email ='$email' AND password ='$pass' ";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
$user = [];

if($result->num_rows == 0){

    $_SESSION['error'] = "Invalid user name or password";
    header('location:login.php');

}

while($row = $result->fetch_assoc()) { //the logged in user will be saved in the $user var
    $user = $row;    
}


if($user['role'] == null || empty($user['role'])){ //gaurd clause check if there is no role attached to the user

    $_SESSION['error']="Incorrect Email or Password";
    header("location:login.php");
}

$role = $user['role'];
$_SESSION['user_email']=$email;
$_SESSION['user_name']=$user['name'] ?? '';
$_SESSION['user_id']=$user['id'];
$_SESSION['user_role']=$user['role'] ;
$_SESSION['user_gender']=$user['gender'] ?? '';
$_SESSION['authenticated']= true;



if($role == 'patient'){
    header("location:patient.php");
}
if($role == 'pharmacist'){
    header("location:pharmacist.php");
}
if($role == 'doctor'){
    header("location:doctor.php");
}
if($role == 'admin'){
    header("location:admin-dashboard.php");
}



?>