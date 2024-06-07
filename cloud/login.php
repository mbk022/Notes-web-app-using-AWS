<?php
session_start();
include 'connect.php';
$uid=$_POST['userid'];
$pass=$_POST['password'];
$sql="select * from users where uid='$uid'";
$result=mysqli_query($con,$sql);
if($result){
    $row=mysqli_fetch_array($result);
    $dbpass=$row['password'];
    $userid=$row['uid'];
    $isPasswordCorrect=password_verify($pass, $dbpass);
    if($isPasswordCorrect){
        $_SESSION['uid']=$userid;
        header("Location:homepage.php");
    }else{
        echo "Incorrect Password";
        
    }
}else{
    echo mysqli_error($con);
}

?>