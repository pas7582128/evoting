<!DOCTYPE html>
<html>
<head>


<style>
span#s1{
	
	width:200px;
	font-size:25px;
}
input[type="text"] {
    font-size:25px;
}
input[type="password"] {
    font-size:25px;
}
input[type="submit"] {
    font-size:15px;
}

div#d2{
	padding-top:50px;
	padding-bottom:50px;
	text-align:center;
}
a#a1{
	font-size:30px;
}
</style>
<link rel="stylesheet" href="Main.css">
</head>

<div class="rel_top">

<div class="absolute_top" style="background-color:#ff944d;  top:0px;">

<h1 style="color:black; text-align:center; margin:10px;">EVOTING </h1>
</div>

<div class ="absolute_sec_top">
<a href="Main.html"><button class="btn Home">HOME</button></a>
<!--<button class="btn Vote">VOTE</button> 
<button class="btn Result">View Result</button>
<button class="btn Extra1">Extra</button>
<button class="btn Extra2">Extra</button>-->
</div>
<div class ="absolute_mid" style="height:400px;">
<h1 style="color:#663300; text-align:center; margin:10px;">Admin Login</h1>
<hr width="85%">

<div class="Middlediv" style="height:200px;">
<div id="d2">
           <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
			<span id="s1">Login Id :</span><input type="text" name="admin_login"><br><br>
			<span id="s1">Password:</span><input type="password" name="admin_pwd"><br><br>
			<span style="padding-left:50.3px;"><input type="submit"></span><br>
			</form>
			</div>
			
</div>
</div>

<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "admin_db";



$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);

if(isset($_POST['admin_login']) && !empty($_POST['admin_pwd'])){
	

  $username=$_POST['admin_login'];
  $password=$_POST['admin_pwd'];
   $result1=mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' AND password = '$password' ");
	$i1 = mysqli_num_rows($result1);
    if($i1)
    {
		header("Location:Administrative.html")or
		die("Could not select db: " . mysql_error());
		
    }  
	else{
		echo '<script type="text/javascript">alert("Invalid Username or Password!!!")</script>';
	}
	
}
else{
	
		//echo '<script type="text/javascript">alert("Enter Username or Password!!!")</script>';
}





?>

</html>