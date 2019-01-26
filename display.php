<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "admin_db";
// Create connection




//--------------------------------------------------
//Select Database

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);
$result1=mysqli_query($conn,"SELECT * FROM admin WHERE username='yashraj1432' AND result = '0'");
$i1 = mysqli_num_rows($result1);
if($i1)
    {
		
		
		echo '<script type="text/javascript">
           alert(" Result Yet Not Declared");
          window.location.href = "USER_LOGIN_1.html";
             </script>';
		
		
	}
	else
	{
		header("Location:result.php");		
	}


?>