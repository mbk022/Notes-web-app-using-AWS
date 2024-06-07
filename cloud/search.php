<?php
session_start();
$user=$_SESSION['uid'];
include 'connect.php';
?>
<html>
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
    <body>
    <div class="topnav">
    <h1> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;  NOTES </h1>
    <a href="index.html">Logout</a>
    <a href="">Search Notes</a>
    <a href="newnote.php">New Note</a>
    <a href="homepage.php">Home</a>   
    </div>
    </div>
    <form id="searchform" action="search.php" method="post">
&emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
    <input type="text" name="title" id="title" placeholder="enter note title">
    &emsp; &emsp;
    <input type="submit" name="search" id="search" value="search">
    </form>
    </body>
    </html>
<?php
if(isset($_POST['search'])){
    $title=$_POST['title'];
    $sql1="select * from $user where title='$title'";
    $result1=mysqli_query($con,$sql1);
    if($result1){
        echo "<table bgcolor='grey' width='5%' align='center' border='0' cellpadding='10'>";
        echo "<form method='post' action='viewnote.php'>";
        while($row=mysqli_fetch_array($result1)){
        echo "<tr><td> <input type=submit name='view' id='view' value='$row[title]'</td></tr>";
    }
    }else
    echo "Empty ";
    
    echo "</table>";
}
