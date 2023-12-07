<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Home</title>

    <style>
        body{
            background-image: url('images/bg-index2.jpeg');
            background-size: cover;
        }
        
    </style>
</head>
<body>
    
    <header class="topnav">
        <a class="Logo" href="index.php" title="Go to Home Page ">Medical System</a>
        
        <nav class="navigation">
        
        <a href="login.php" target="_blank">Login</a>
        
        <a href="registration.php" target="_blank">Register</a>
        
        
        </nav>
        </header>


        <div class="re-form" id="rep">   
            <form action="report-action.php" method="POST">
                <h2>Contact us</h2> <hr>
                <div class="form-group">
                    <label for="id-email">Email address</label>
                    <input type="email" name="txt-email" class="form-control" id="id-email" placeholder="name@example.com" required>
                </div> 
                <div class="form-group">
                    <label for="id-phone">Phone number</label>
                    <input type="number" name="txt-number" class="form-control" id="id-phone" placeholder="70/*******" required>
                </div>
        
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Put Your Problem Here</label>
                    <textarea class="form-control" name="txt-report" id="exampleFormControlTextarea1" rows="3" required></textarea>
                </div>

                <div class="buttons">
                    <button type="submit" class="btn btn-outline-primary">Send</button>
                    <button type="reset" class="btn btn-outline-primary">Reset</button>
                </div>

                
                <div class="social-media" id="social">
                    <a href="https://www.instagram.com/yousef_hijazee?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.facebook.com/yousef.hiajzi.10/" target="_blank"><i class="fa-brands fa-facebook-square" id="facebook"></i></a>
                    <a href="mailto:31930337@students.liu.edu.lb" target="_blank"><i class="fa-brands fa-google"></i></a>
                </div>        
        </form>
        </div>
</body>
</html>

