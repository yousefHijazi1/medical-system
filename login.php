<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


    <title>Login</title>
</head>
<body>

    <header class="topnav">
      <a class="Logo" href="index.php" title="Go to Home Page ">Medical System</a>

    <nav class="navigation">
      <a href="login.php" target="_blank">Login</a>
      <a href="registration.php" target="_blank">Register</a>
        
    </nav>
    
    </header>

    <div class="container justify-content-center">

      <h1 class="login-title">Login</h1>
      
      <form method="POST" action="login_action.php"  class="Login-Form">
        
        <div class="form-outline mb-4">
          <input type="email" name=email class="form-control" placeholder="name@example.com"  required />
          <label class="form-label" for="form2Example1">Email address</label>
        </div>
      
        <div class="form-outline mb-4">
          <input type="password" name=password id="form2Example2" placeholder="password" class="form-control" required />
          <label class="form-label" for="form2Example2">Password</label>
        </div>
        <!-- Submit button -->
          <input class="btn btn-primary" type="submit" value="Login">
          <br>
          <p class="reg">Dont have an account </p>
          <a href="registration.php" > Register</a>
        
      </form>
      </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js" integrity="sha512-uE2UhqPZkcKyOjeXjPCmYsW9Sudy5Vbv0XwAVnKBamQeasAVAmH6HR9j5Qpy6Itk1cxk+ypFRPeAZwNnEwNuzQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php

  if(isset ($_SESSION['error'])){
    echo("<script>"); 
    echo("$.notify('".$_SESSION['error']."','error');"); 
    echo("</script>");
    unset($_SESSION['error']);
  
  }
?>

</html>
