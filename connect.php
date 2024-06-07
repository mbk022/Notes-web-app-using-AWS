<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="cloud"; 
$con = mysqli_connect("$host", "$username", "$password", $db_name);
if(!$con){
	die("cannot connect");
}
?>