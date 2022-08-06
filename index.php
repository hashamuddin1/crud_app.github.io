<?php
include  'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD APPLICATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container main">
<button type="button" class="btn"><a href="user.php" class="btn1">ADD USER</a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Student Name</th>
      <th scope="col">Seat Number</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</h>
    </tr>
  </thead>
  <tbody>
    <?php

    $sql='select * from `student`';
    $result=mysqli_query($con,$sql);
    if ($result) {
      while($row=mysqli_fetch_assoc($result)){
        $stdname=$row['studentname'];
        $seatno=$row['seatnumber'];
        echo '<tr>
        <td scope="col">'.$stdname.'</td>
        <td scope="col">'.$seatno.'</td>
        <td scope="col"><button type="button" class="btn"><a href="edit.php?updateid='.$seatno.'" class="btn1">EDIT</a></button>
        </td>
        <td scope="col"><button type="button" class="btn"><a href="delete.php?deleteid='.$seatno.'" class="btn1">DELETE</a></button>
        </td>
      </tr>';
      }
        
    }

    ?>
    
  </tbody>
</table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    
</body>
</html>