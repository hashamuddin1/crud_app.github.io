<?php 
include 'connect.php';
if(isset($_GET['deleteid'])){
    $delid=$_GET['deleteid'];
    $sql="delete from `student` where seatnumber=$delid";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "delete successfully";
        header("location:index.php");
    }else{
        die(mysqli_error($con));
    }
}
?>