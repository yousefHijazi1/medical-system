<?php

include "connection.php";

$email=$_POST['txt-email'];
$number=$_POST['txt-number'];
$report=$_POST['txt-report'];

$query="INSERT INTO `report`(`email`, `phone`, `report`) VALUES ('$email','$number','$report')";

mysqli_query($con,$query);

header("location:index.php");

?>