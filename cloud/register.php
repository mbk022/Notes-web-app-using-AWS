<?php
session_start();
include 'connect.php';
$uid=$_POST['uid'];
$email=$_POST['email'];
$pass=password_hash($_POST['password'], PASSWORD_DEFAULT);
$sql="insert into users(uid,email,password) values('$uid','$email','$pass')";
$result=mysqli_query($con,$sql);
$sql1="create table $uid (title VARCHAR(300) PRIMARY KEY,note VARCHAR(50000))";
    $result1=mysqli_query($con,$sql1);
    if($result1){
        header("location:index.html");
    }else{
        echo "Error".$con->error;
    }
	header("location:index.html");
?>