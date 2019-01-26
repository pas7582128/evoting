
<html>
<head>
<link rel="stylesheet" href="Main.css">
<style>
span#s1{
	
	width:200px;
	font-size:25px;
}
input[type="text"] {
    font-size:25px;
}
select{
    font-size:25px;
}




</style>
</head>

<div class="rel_top">

<div class="absolute_top" style="background-color:#ff944d;  top:0px;">

<h1 style="color:black; text-align:center; margin:10px;">EVOTING</h1>
</div>

<div class ="absolute_sec_top">
<a href="Administrative.html"><button class="btn Home">HOME</button></a>
<!--<button class="btn Vote">VOTE</button>
<button class="btn Result">View Result</button>
<button class="btn Extra1">Extra</button>-->
<a href="Main.html"><button class="btn Extra1">LOGOUT</button></a>
</div>
<div class ="absolute_mid" style="height:350px;">
<h1 style="color:#663300; text-align:center; margin:10px;">Welcome to the Online Voting System</h1>
<hr width="85%">


<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";



$conn->close();	
	
?>

<form method="post" action="del.php">

<span id="s1">SELECT CATEGORY: </span><select name="cate" ><option value="1">Category 1</option><option value="2">Category 2</option><option value="3">Category 3</option><option value="4">Category 4</option></select><br><br>
<span style="padding-left:200.3px;"><input type="Submit" name = "Submit" value="Submit"></span>

<span><a href="Administrative.html"><button type="button">Exit</button></a></span>

</form>









</div>


</html>



































