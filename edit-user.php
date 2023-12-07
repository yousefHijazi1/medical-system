<?php
include "connection.php";
include "check_authentication.php";

if ($_SESSION['user_role'] != 'admin') {
    header("location:login.php");
}


$id = $_GET['userID'];



$query="SELECT * FROM users WHERE id='$id'";
$result=mysqli_query($con,$query) or  die(mysqli_error($con));
$user=[];

if($result->num_rows >0){
    while($row=$result->fetch_assoc()){
        $user=$row;
    }
}
$name=$user['name'];
$pass=$user['password'];
$email=$user['email'];
$gender=$user['gender'];
$phone=$user['number'];
$role=$user['role'];
$birth=$user['date_of_birth'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Edit User</title>
</head>

<body>


<section class="vh-100 gradient-custom">
    <div class="container py-4 h-100">
        <div class="row justify-content-center align-items-center h-100 ">
            <div class="col-12 col-lg-15 col-xl-20 ">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Edit User</h3>



            <form action="edit-action.php" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-6 mb-4 d-flex align-items-center">

                    <div class="form-outline">
                        <input type="number" name="txtID" value="<?php echo $id; ?>" id="id" class="form-control form-control-lg" readonly />
                        <label class="form-label" for="Name">ID</label>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-md-6 mb-4">

                    <div class="form-outline">
                        <input type="text" name="txtName" value="<?php echo $name; ?>" id="Name" class="form-control form-control-lg" />
                        <label class="form-label" for="Name">Name</label>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                </div>
            </div>


            <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                    <div class="form-outline datepicker w-100">
                        <input type="date" name="txtBirth" value="<?php echo ($birth) ?>" class="form-control form-control-lg" id="birthdayDate" required />
                        <label for="birthdayDate" class="form-label">Birthday</label>
                    </div>

                </div>
                <div class="col-md-6 mb-4">

                    <h6 class="mb-2 pb-1">Gender: </h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="female" name="txtGender" id="femaleGender" value="option1" />
                        <label class="form-check-label" for="femaleGender">Female</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="male" name="txtGender" id="maleGender" value="option2" checked />
                        <label class="form-check-label" for="maleGender">Male</label>
                    </div>


                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                    <div class="form-outline">
                        <input type="email" name="txtEmail" value="<?php echo $email; ?>" id="emailAddress" class="form-control form-control-lg" required />
                        <label class="form-label" for="emailAddress">Email</label>
                    </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                    <div class="form-outline">
                        <input type="number" name="txtNumber" value="<?php echo $phone ; ?>" id="phoneNumber" class="form-control form-control-lg" required />
                        <label class="form-label" for="phoneNumber">Phone Number</label>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-outline">
                        <input type="text" name="txtPass" value="<?php echo $pass ;?>" id="pass" class="form-control form-control-lg" required />
                        <label class="form-label" for="pass">Password</label>
                    </div>

                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-12">

                    <select class="select form-control-lg" name="txtRole" required>
                        <option value="1" disabled>Choose option</option>
                        <option <?php if($role == 'doctor') echo"selected"; ?> value="doctor">Doctor</option>
                        <option <?php if($role == 'pharmacist') echo"selected"; ?> value="pharmacist">Pharmacist</option>
                        <option <?php if($role == 'patient') echo"selected"; ?> value="patient">Patient</option>
                    </select>
                    <label class="form-label select-label">Choose Role</label>

                </div>
            </div>

            <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
            </div>

        </form>
                
    
                </div>
            </div>
        </div>
    </div>
</div>
</section>

</body>

</html>