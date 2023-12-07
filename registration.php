<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    

    <title>registration</title>

    <style>
      body{
        background-color: rgb(186, 186, 223);
      }
    </style>

    <header class="topnav">
      <a class="Logo" href="index.php" title="Go to Home Page ">Medical System</a>

    <nav class="navigation">
      <a href="login.php" target="_blank">Login</a>
      <a href="registration.php" target="_blank">Register</a>
      
    </nav>
    
    </header>
</head>
<body>

  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-10 col-xl-14">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
              
              <form action="registration-action.php" method="POST" enctype="multipart/form-data">
  
                <div class="row">
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="text" id="firstName" name="txtName" class="form-control form-control-lg" required />
                      <label class="form-label" for="firstName">Name</label>
                    </div>
                    
                    
  
                  </div>
                  <div class="col-md-6 mb-4">

                  

                </div>
                  
                </div>
  
                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
  
                    <div class="form-outline datepicker w-100">
                      <input type="date" name="txtBirth" class="form-control form-control-lg" id="birthdayDate" required/>
                      <label for="birthdayDate" class="form-label">Birthday</label>
                    </div>
  
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
                </div>
  
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="email" name="txtEmail" id="emailAddress" class="form-control form-control-lg"  />
                      <label class="form-label" for="emailAddress">Email</label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="number" name="txtNumber" id="phoneNumber" class="form-control form-control-lg" />
                      <label class="form-label" for="phoneNumber">Phone Number</label>
                    </div>
  
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-12">
                    <div class="form-outline">
                      <input type="password" name="txtPass" id="pass" class="form-control form-control-lg" />
                      <label class="form-label" for="pass">Password</label>
                    </div>
                    
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-12">
                    <div class="form-outline">
                      <input type="password" name="txtConf" id="Confirm-pass" class="form-control form-control-lg" />
                      <label class="form-label" for="Confirm-pass">Confirm Password</label>
                    </div>
                    
                  </div>
                </div>
                
                <br>
                <div class="mb-3 ">
                  <label for="formFileMultiple" class="form-label">Insert your files here</label>
                  <input class="form-control" name="imageFile" type="file" id="formFileMultiple" multiple required/>
                </div>
                


                <div class="row">
                  <div class="col-12">
  
                    <select class="select form-control-lg" name="txtRole">
                      <option value="1" disabled>Choose option</option>
                      <option value="doctor">Doctor</option>
                      <option value="pharmacist">Pharmacist</option>
                      <option value="patient">Pateint</option>
                    </select>
                    <label class="form-label select-label">Choose Role</label>
  
                  </div>
                </div>
                
  
                <div class="mt-4 pt-2">
                  <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                  <input class="btn btn-primary btn-lg" type="reset" value="Reset" />
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