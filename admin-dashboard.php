<?php

include "check_authentication.php";
include "connection.php";

if($_SESSION['user_role'] != 'admin'){

    header("location:login.php");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style2.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <title>Admin Dahsboard</title>

  <header class="topnav">
    <a class="Logo" href="index.php" title="Go to Home Page ">Medical System</a>
    <nav class="navigation">
      <a href="logout.php">Logout</a>
    </nav>

  </header>
</head>

<body>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Patients</h5>
              <p class="card-text">Here You can know how much number of patients and their info. Also you can add or delete their users</p>
              <a href="users_patient.php" class="btn btn-primary"> Click Here</a>
            </div>
          </div>
        </div>

      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Doctors</h5>
            <p class="card-text">Here You can know how much number of doctors and their info. Also you can add or delete their users.</p>
            <a href="users_doctor.php" class="btn btn-primary">Click Here</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pharmacist</h5>
            <p class="card-text">Here You can know how much number of pharmacist and their info. Also you can add or delete their users.</p>
            <a href="users_pharmacist.php" class="btn btn-primary">Click Here</a>
          </div>
        </div>
      </div>

    </div>

    <br>


    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Registration Request</h5>
            <p class="card-text">Here You can see all requests to approve or deny them.</p>
            <a href="users_request.php" class="btn btn-secondary">Click Here</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Reports</h5>
            <p class="card-text">Here you can see all reports from the users to help them</p>
            <a href="users_reports.php" class="btn btn-warning">Click Here</a>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add User</h5>
            <p class="card-text">Here  you can add doctor, pharmacist, and pateint users</p>
            <a href="users_add.php" class="btn btn-success"> Click Here</a>
          </div>
        </div>
      </div>



    </div>
    <br>

    <div class="row">
      

      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Active Rosheta</h5>
            <p class="card-text">Here You can know the number of active rosheta and delete them</p>
            <a href="users_rosheta.php" class="btn btn-info">Click Here</a>
          </div>
        </div>
      </div>
      
      
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Expired Rosheta</h5>
            <p class="card-text">Here You can know the number of active rosheta and delete them </p>
            <a href="users_expired.php" class="btn btn-danger">Click Here</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>

</html>