<?php
session_start();
include 'connect.php';
$title=$_POST['title'];
$note=$_POST['note'];
$table=$_SESSION['uid'];
$sql="insert into $table(title,note) values('$title','$note')";
$result=mysqli_query($con,$sql);
if($result){
    header("Location:homepage.php");
}
else
echo "Error". mysqli_error($con);
?>
