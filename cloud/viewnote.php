<?php
session_start();
$uid=$_SESSION['uid'];
include 'connect.php';
$title=$_POST['view'];
$_SESSION['title']=$title;
?>
<html>
<head>
<style>
		body{
			margin:0;
			font-family: Arial,Helvetica,sans-serif;
			background-color:black;
			color:white;
		}

		.topnav{
			overflow:hidden;
			text-align:right;
		}

		.topnav h1{
			float:left;
			color:#f2f2f2;
			text-align:center;
			padding:8px 16px;
			text-decoration:none;
		}

		.topnav a{
			float:right;
			color:#f2f2f2;
			text-align:center;
			padding:35px 25px;
			text-decoration:none;
			font-size:20px;
		}

		.topnav a:hover{
			background-color:#04AA6D;
			color:black;
		}

		.topnav a.active{
			background-color:#04AA6D;
			color:white;
		}


		.active,.dot:hover{
			background-color:#717171;
		}

		q{font-style:italic;}

		.author{color:cornflowblue;}

		h1{
			text-align: center;
		}


	</style>
</head>
    <body>
<div>
    <div class="topnav">
    <h1> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;  NOTES </h1>
    <a href="login.html">Logout</a>
    <a href="search.php">Search Notes</a>
    <a href="newnote.php">New Note</a>   
    <a href="homepage.php">Home</a>
    </div>
    </div>
    
<?php    
$sql="select * from $uid where title='$title'";
$result=mysqli_query($con,$sql);
if($result){
    echo "<table bgcolor='grey' width='5%' align='center' border='0' cellpadding='10'><form name='viewnote' method='post' action=updatenote.php>";
    while($row=mysqli_fetch_array($result)){
        echo "<tr><td><input type='text' id='title' name='title' value='$row[title]' placeholder='Title'></td></tr>";
        echo "<tr><td><textarea id='note' name='note'  placeholder='Note'>$row[note]</textarea></td></tr>";      
    }
    echo "<tr><td><input type='submit' name='update' value='update'></td></tr></form>";
    echo "<form name='delete' method='post' action='deletenote.php'><tr><td><input type='submit' name='delete' value='delete' ></td></tr></form>";
    echo "</table>";
}

?>
        