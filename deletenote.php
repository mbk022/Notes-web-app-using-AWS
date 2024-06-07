<?php
session_start();
$user=$_SESSION['uid'];
include 'connect.php';
$title=$_SESSION['title'];
    $sql1="delete from $user where title='$title'";
    $result1=mysqli_query($con,$sql1);
    if($result1){
        header("Location:homepage.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }



?>