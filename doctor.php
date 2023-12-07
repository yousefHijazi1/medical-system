<?php
include_once('check_authentication.php');

if ($_SESSION['user_role'] != 'doctor')
  header("location:login.php");

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

  <title>Doctor</title>

  <header class="topnav">
    <a class="Logo" href="index.php" title="Go to Home Page ">Medical System</a>
    <nav class="navigation">
      <a href="logout.php">Logout</a>
    </nav>
  </header>

  <style>
    body {
      background: url('images/bg-doctor.jpg');
      background-size: cover;
      background-attachment: fixed;
    }
  </style>


<body>

  <section class=" gradient-custom" style="margin-top: 20px; margin-right: 500px">
    <div class="container  h-100">
      <div class="row justify-content-left align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-10">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-25">Patient Info</h3>

              <form action="doctor-action.php" method="POST">

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <div class="form-outline">
                      <input type="number" name="txtID" id="id" class="form-control form-control-lg" />
                      <label class="form-label" for="Name">ID</label>
                    </div>

                  </div>
                </div>


                <div class="row">
                  <div class="col-12">
                    <div class="form-outline">
                      <br>
                      <h5>Prescription</h5>
                      <textarea name="txtReport" class="pre-report"></textarea>
                    </div>

                    <div>
                      <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                    </div>
                  </div>
                </div>

            </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>


  <!--
    <section class="pt-info">
        <form action="doctor-action.php" method="POST"  >
    
            <div class="pt">
                <label>Full Name:</label>
                <input name="txtName" type="text" placeholder="example " required>
                <hr>
            </div>
            
            
            <div class="col-md-6 mb-4">
  
                    <h6 class="mb-2 pb-1">Gender: </h6>
  
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" value="female" name="txtGender" id="femaleGender"
                        value="option1"  />
                      <label class="form-check-label" for="femaleGender">Female</label>
                    </div>
  
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" value="male" name="txtGender" id="maleGender"
                        value="option2"  checked/>
                      <label class="form-check-label" for="maleGender">Male</label>
                      
                    </div>
                    
  

            </div>
            
            
            <div class="pt">
                <hr>
                <label>Phone number: </label>
                <input name="txtNumber" type="number" placeholder="70/******" required>
                <br>
                <hr>
            </div>
            
            <div class="pt">
                <label >Date of birth: </label>
                <input name="txtBirthdate" type="date" required>
                <br>
                <hr>
            </div>

            
            
            <div>
                <label class="pt">Prescription:  </label>
                <textarea name="txtReport"  class="pre-report"></textarea>
                <hr>
            </div>
            
            <div class="buttons">
                <input type="submit" value="Submit" class="btn">
                <input type="reset" value="Reset" class="btn">
            </div>

        </form>
    </section>      -->


</body>
</head>

</html>