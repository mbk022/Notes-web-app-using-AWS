<?php
session_start();
include 'connect.php';
$uid=$_SESSION['uid'];
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
    <a href="index.html">Logout</a>
    <a href="search.php">Search Notes</a>
    <a href="newnote.php">New Note</a>   
    </div>
    </div>
    </body>
    </html>
<?php    

$table=$uid;
    $sql1="select * from $table";
    $result1=mysqli_query($con,$sql1);
    if($result1){
        echo "<table bgcolor='grey' width='5%' align='center' border='0' cellpadding='10'>";
        echo "<form method='post' action='viewnote.php'>";
        while($row=mysqli_fetch_array($result1)){
        echo "<tr><td> <input type=submit name='view' id='view' value='$row[title]'></td></tr>";
    }
    }else
    echo "No Results";
    
    echo "</table>";
?>

<?php


?>