<?php
include  'connect.php';
if(isset($_POST['Submit'])){
  $studentname=$_POST['stdname'];
  $seatnumber=$_POST['seatnumber'];
  // jo cheeezain single inverted may likha hay usko wese hi likho

  $sql="insert into `student`(studentname,seatnumber) values('$studentname','$seatnumber')";
  // to execute the query
  $result=mysqli_query($con,$sql);
  if($result) {
      // echo "Data Inserted Successfully";
      //data insert krne k baad index.php may redirect hojai
      header('Location:index.php');
  }else{
      die(mysqli_error($con));
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD USER</title>
</head>

<body>
  <div class="container main">
  
    <form method="post">
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Student Name</label>
  <input type="text" class="form-control" id="formGroupExampleInput" name="stdname" autocomplete="off">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Seat Number</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" name="seatnumber" autocomplete="off">
</div>
<button type="submit" class="btn btn-primary" name="Submit">Submit</button>
</form>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>