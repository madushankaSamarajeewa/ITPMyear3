<?php
include 'connect.php';

if(isset($_GET['deleteid'])){

    $id=$_GET['deleteid'];

    $sql = "delete from `employee` where EmpId = $id";
    $result = mysqli_query($con,$sql);

    if($result){
        header('location:display.php');
        //echo "Deleted Successfull";
    }
    else{
        die(mysqli_error($con));
    }

}
?>