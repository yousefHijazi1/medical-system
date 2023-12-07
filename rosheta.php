<?php
include "connection.php";
include "check_authentication.php";

if ($_SESSION['user_role'] != 'pharmacist' && $_SESSION['user_role']!='admin') {
    header("location:login.php");
}


$id = $_POST['p_id'];
$code = $_POST['code'];


$result = mysqli_query($con, "SELECT * FROM patient WHERE id=".$id);
$rosheta = $result->fetch_assoc() ?? [];

if (count($rosheta) == 0) {
    header('location:pharmacist.php');
}


if ($rosheta['code'] != $code) {
    header('location:rosheta_authentication.php?pID=' . $id);
}

$des = $rosheta['prescription']  ?? '';

$phar=$_SESSION['user_name'];
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
    <title>Document</title>
</head>

<body>

    <br><br><br><br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <h5 class="card-title">Rosheta</h5>
                        <p class="card-text"><?php echo $des ?></p>
                        <form action="rosheta-action.php" method="post">
                            <input value="<?php echo $code ?>" type="hidden" name="code">
                            <input value="<?php echo $id ?>" type="hidden" name="id">
                            <input value="<?php echo $phar?>" type="hidden" name="phName">

                            <button type="submit" class="btn btn-success">Submit</a>
                        </form>
                    </div>
                </div>

            </div>


        </div>
    </div>

</body>

</html>