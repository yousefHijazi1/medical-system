<?php
include "connection.php";
include "check_authentication.php";

if($_SESSION['user_role']!='admin'){
    header("location:login.php");
}

$to=$_GET['email'];

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
    <title>Reply</title>
</head>

<body>
    <br><br><br><br><br><br>
    <div class="container">
        <form action="reply-action.php" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" name="txtEmail" class="form-control" value="<?php echo $to; ?>" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Reply message</label>
                <textarea class="form-control" name="txtReply" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>