<?php
include "connection.php";
include "check_authentication.php";

$code=$_POST['code'] ?? '';
$id=$_POST['id'] ?? 0;
$ph_name=$_POST['phName'];

if($_SESSION['user_role']!='pharmacist' && $_SESSION['user_role']!='admin'){
    header("location:login.php");
}

$result = mysqli_query($con, "SELECT * FROM patient WHERE id= '$id' ");
$rosheta = $result->fetch_assoc() ?? [];


if($code != $rosheta['code']){
    header('location:rosheta.php');
}

$result = mysqli_query($con, "UPDATE `patient` SET `is_expired`= 1 , done_by='$ph_name' WHERE `id` =" . $id .";");

header('location:pharmacist.php');

?>