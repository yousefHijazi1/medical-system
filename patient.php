<?php

include "check_authentication.php";
include "connection.php";

if($_SESSION['user_role'] != 'patient'){

    header("location:login.php");

}
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <title>Patient</title>

   
</head>


<body>

    <header class="topnav">
        <a class="Logo" href="index.php" title="Go to Home Page ">Medical System</a>
    <nav class="navigation">
        <a href="logout.php">Logout</a>
    </nav>
    </header>

<br><br><br>
<br><br><br>

<div class="container">
    <div class="row">
        <div class="col-12">
            <center>
                <h2>My Info</h2>
            </center>

<table  class="table" style="width: 100%;" >
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>prescription</th>
            <th>Code</th>
            <th>Date</th>
        </tr>
    </thead>

<tbody>
<?php

$id=$_SESSION['user_id'];

$result=mysqli_query($con,"SELECT * FROM patient WHERE user_id='$id'") or die(mysqli_error($con));

    if($result->num_rows >0){
        while($row=mysqli_fetch_assoc($result)){
                echo"<tr>
                        <td>".$row['user_id']."</td>
                        <td>".$row['prescription']."</td>
                        <td>".$row['code']."</td>
                        <td>".$row['date']."</td>
                    </tr>";
        }
    
    }
?>
                </tbody>    
            </div>
        </div>
    </div>
</table>
</body>
<script>
      $(document).ready( function () {
        $('.table').DataTable( {
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
      });
    </script>
</html>