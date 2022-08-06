<?php
include  'connect.php';
$editid=$_GET['updateid'];
if(isset($_POST['Submit'])){
  $studentname=$_POST['stdname'];
  // jo cheeezain single inverted may likha hay usko wese hi likho

  $sql="update `student` set seatnumber=$editid,studentname='$studentname' where seatnumber=$editid";
  // to execute the query
  $result=mysqli_query($con,$sql);
  if($result) {
    //   echo "updated Successfully";
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
<button type="submit" class="btn btn-primary" name="Submit">Update</button>
</form>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>