<?php
include "connection.php";
include "check_authentication.php";

if ($_SESSION['user_role'] != 'pharmacist' && $_SESSION['user_role'] != 'admin') {
    header("location:login.php");
}

$id = $_GET['pID'];
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
    <title>Rosheta</title>
</head>

<body>
    <br><br><br><br><br><br>
    <div class="container">
        <form action="rosheta.php" method="POST">
            <input name="p_id" type="hidden" value="<?php echo ($id) ?>">
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="code" type="password" class="form-control" id="exampleInputPassword1" placeholder="code">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>