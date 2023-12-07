<?php

include "connection.php";


$name=$_POST['txtName'];
$password=$_POST['txtPass'];
$birth=$_POST['txtBirth'];
$gender=$_POST['txtGender'];
$email=$_POST['txtEmail'];
$number=$_POST['txtNumber'];
$cofirm=$_POST['txtConf'];
$role=$_POST['txtRole'];


$image=$_FILES['imageFile']['name'];
$file_temp=$_FILES['imageFile']['tmp_name'];


$query="INSERT INTO `request`( `name`, `password`, `gender`, `email`, `number`, `role`, `date_of_birth`, `image`)
VALUES ('$name','$password','$gender','$email','$number','$role','$birth','$image')";

mysqli_query($con,$query);

move_uploaded_file($file_temp,"images/".$image);

header("location:registration.php");

?>