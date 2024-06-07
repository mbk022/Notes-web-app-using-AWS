<?php
session_start();
$user=$_SESSION['uid'];
include 'connect.php';

$oldtitle=$_SESSION['title'];
$title=$_POST['title'];
$note=$_POST['note'];
    $sql1="update $user set title='$title', note='$note' where title='$oldtitle'";
    $result1=mysqli_query($con,$sql1);
    if($result1){
        header("Location:homepage.php");
    } else{
        echo "ERROR: Could not able to execute $sql1. " . mysqli_error($con);
    }



?>