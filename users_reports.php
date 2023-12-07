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
    <title>Reports</title>

   
</head>


<body>



<br><br><br>
<br><br><br>

<div class="container">
    <div class="row">
        <div class="col-12">
            <center>
                <h2>Reports</h2>
            </center>

<table  class="table" style="width: 100%;" >
    <thead class="thead-light">
        <tr>
            <th>Email</th>
            <th>Phone</th>
            <th>Report text</th>
            <th>Delete</th>
            <th>Send Email</th>
        </tr>
    </thead>

<tbody>
<?php


$result=mysqli_query($con,"SELECT * FROM report ") or die(mysqli_error($con));

    if($result->num_rows >0){
        
        while($row=mysqli_fetch_assoc($result)){
            echo"<tr>
                    <td>".$row['email']."</td>
                    <td>".$row['phone']."</td>
                    <td>".$row['report']."</td>
                    <td><a href=delete-report.php?Num=".$row['phone'].">delete</a></td>
                    <td><a href=reply.php?email=".$row['email'].">reply</a></td>
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