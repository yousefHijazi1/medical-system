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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <title>Expired Rosheta</title>

   
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
                <h2> Expired Roshetas</h2>
            </center>

<table  class="table" style="width: 100%;" >
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Birthdate</th>
            <th>Phone</th>
            <th>Code</th>
            <th>Prescription</th>
            <th>Date</th>
            <th>Done by</th>
            <th>Open</th>
            <th>Delete</th>
        </tr>
    </thead>

<tbody>
<?php


$result=mysqli_query($con,"SELECT patient.id as rosheta_id, patient.code ,patient.done_by ,patient.date , patient.prescription ,users.name as user_name, users.date_of_birth as user_birth_date, users.number as user_number
 FROM patient INNER JOIN users ON patient.user_id=users.id WHERE `is_expired` = 1 ") or die(mysqli_error($con));

    if($result->num_rows >0){
        
        while($row=mysqli_fetch_assoc($result)){
                echo"<tr>
                        <td>".$row['rosheta_id']."</td>
                        <td>".$row['user_name']."</td>
                        <td>".$row['user_birth_date']."</td>
                        <td>".$row['user_number']."</td>
                        <td>".$row['code']."</td>
                        <td>".$row['prescription']."</td>
                        <td>".$row['date']."</td>
                        <td>".$row['done_by']."</td>
                        <td><a href=rosheta_authentication.php?pID=".$row['rosheta_id'].">click</a></td>
                        <td><a href=delete-expired.php?rID=".$row['rosheta_id'].">delete</a></td>
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