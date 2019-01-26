<?php

$con=mysqli_connect("localhost","root","")or
    die("Could not connect: " . mysql_error());
	session_start();
//Select Database
mysqli_select_db($con,"form_db")or
 die("Could not select db: " . mysql_error());
	
	
if(isset($_POST['admin_login']) && !empty($_POST['admin_login']) && isset($_POST['admin_pwd']) && !empty($_POST['admin_pwd']) )
{
	
  $username=$_POST['admin_login'];
  $password=$_POST['admin_pwd'];
	
  
    
    if($username=="yashraj143" && $password=="yash1432")
    {
		
		header("Location:Administrative.html")or
		die("Could not select db: " . mysql_error());
    }
    else
	{
		echo '<script type="text/javascript">alert("Invalid Username or Password!!!")</script>';
		
	}
		
		
     
	  
} 

	header("Location:ADMIN_LOGIN_1.php")or
		die("Could not select db: " . mysql_error());
	
	
	

  
  
	  
	
	  
  
?>
