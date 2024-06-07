<?php
session_start();
include 'connect.php';

?>
<html>
<head>
    <script type="text/javascript">
        function validate(){
            title=document.getElementById("title").value;
            note=document.getElementById("note").value;
            if(test1(title)){
                if(test2(note)){
                    return true;
                }
            }
            return false;
        }   
        function test1(title){
            if(title==""){
                alert("Enter a title");
                return false
            }
            else{
                return true;
            }
        } 
        function test2(note){
            if(note==""){
                alert("Enter a note");
                return false
            }
            else{
                return true;
            }
        } 
    </script>
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
    <a href="">New Note</a>   
    <a href="homepage.php">Home</a>
    </div>
    </div>
        <form name="newnote" method="post" action="newnote1.php">
            <table bgcolor='grey' width='5%' align='center' border='0' cellpadding='10'">
                <tr>
                    <td><input type="text" id="title" name="title" placeholder="Title"></td>
</tr>
<td><textarea id="note" name="note" placeholder="Note"></textarea></td>
</tr>
<tr>
    <td align="center"><button type="submit" value="Save" onclick="return validate()"> Save Note</td>
</tr>
<table>
</form>

